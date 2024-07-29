<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDesaRequest;
use App\Http\Requests\UpdateDesaRequest;
use App\Models\Desa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DesawisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $desawisata = Desa::getAll();
        return view('superadmin.desawisata.index', [
            'desawisata' => $desawisata
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('superadmin.desawisata.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDesaRequest $request)
    {
    $data = $request->validated();
    $desa = Desa::createData($data);

    // Check the response and redirect accordingly
    if ($desa) {
        return redirect('/superadmin/desa')->with('success', 'Desa created successfully.');
    } else {
        return redirect('/superadmin/desa')->with('error', 'Failed to create Desa.');
    }
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if (request()->session()->get('id_desa') != $id) {
            abort(403);
        }

        $desawisata = Desa::getById($id);
        $informasi = Http::withToken(request()->session()->get('accessToken'))
            ->get(env('APP_API_URL').'/informasi/desa/'.$id)->json();

        return view('Admin.desa.show', [
            'desa' => $desawisata,
            'informasi' => $informasi,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (request()->session()->get('id_desa') != $id) {
            abort(403);
        }

        $desawisata = Desa::getById($id);

        return view('superadmin.desawisata.edit', [
            'desawisata' => $desawisata,
            'title' => 'desawisata'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDesaRequest $request, string $id)
    {
        if (request()->session()->get('id_desa') != $id) {
            abort(403);
        }

        $validatedData = $request->validated();

        if (!$request->hasFile('gambar')) {
            $validatedData['gambar'] = $request->input('gambarOld');
        } else {
            $gambar = $request->file('gambar');
            $gambarPath = $gambar->store('public/gambars');
            $validatedData['gambar'] = basename($gambarPath);
        }

        $validatedData['updatedAt'] = now();

        $response = Desa::updateData($id, $validatedData);

        if ($response) {
            return redirect('/admin/profil-desa/'.$id)->with('message', 'Successfully updated.');
        } elseif ($response === false) {
            return redirect('/admin/profil-desa/'.$id)->with('message', 'Failed to update.');
        } else {
            return redirect('/admin/profil-desa/'.$id)->with('message', 'Error 500: System error.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $success = Desa::deleteData($id);

        if ($success) {
            return redirect('/superadmin/desa')->with('message', 'Successfully deleted.');
        } elseif ($success === false) {
            return redirect('/superadmin/desa')->with('message', 'Failed to delete.');
        } else {
            return redirect('/superadmin/desa')->with('message', 'Error 500: System error.');
        }
    }
}
