<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAkunRequest;
use App\Http\Requests\UpdateAkunRequest;
use App\Http\Requests\PasswordUpdateRequest;
use App\Models\Akun;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Hash;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $akun = Akun::getAll();
        return view('superadmin.akun.index', [
            'akun' => $akun
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('superadmin.akun.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAkunRequest $request)
    {
        $validatedData = $request->validated();
        $response = Akun::createData($validatedData);
        dd($response);
        if ($response) {
            return redirect('/superadmin/akun')->with('message', 'Data berhasil ditambahkan');
        } else {
            return redirect('/superadmin/akun')->with('message', 'Gagal menambahkan data');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $akun = Akun::getById($id);
        return view('superadmin.akun.show', [
            'akun' => $akun
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $akun = Akun::getById($id);
        return view('superadmin.akun.edit', [
            'akun' => $akun
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAkunRequest $request, string $id)
    {
        $validatedData = $request->validated();

        $validatedData['updatedAt'] = now();
        $response = Akun::updateData($id, $validatedData);

        if ($response) {
            return redirect('/profile')->with('message', 'Data berhasil diperbarui');
        } else {
            return redirect('/profile')->with('message', 'Gagal memperbarui data');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $success = Akun::deleteData($id);

        if ($success) {
            return redirect('/superadmin/akun')->with('message', 'Data berhasil dihapus');
        } else {
            return redirect('/superadmin/akun')->with('message', 'Gagal menghapus data');
        }
    }

    public function profile()
    {
        $id = request()->session()->get('id');
        $profile = Akun::getById($id);
        return view('profile', [
            'profile' => $profile
        ]);
    }

    public function password(PasswordUpdateRequest $request, string $id)
    {
        $validatedData = $request->validated();

        $profile = Akun::getById($id);

        if (!password_verify($validatedData['oldpassword'], $profile['password'])) {
            return redirect()->back()->withErrors(['oldpassword' => 'Password lama tidak cocok']);
        }

        if ($validatedData['newpassword'] === $validatedData['repeatpassword']) {
            $validatedData['password'] = Hash::make($validatedData['newpassword']);
        } else {
            return redirect()->back()->withErrors(['newpassword' => 'Password baru dan konfirmasi tidak cocok']);
        }

        $validatedData['updatedAt'] = now();

        $response = Akun::updateData($id, $validatedData);

        if ($response) {
            return redirect('/profile')->with('message', 'Password berhasil diperbarui');
        } else {
            return redirect('/profile')->with('message', 'Gagal memperbarui password');
        }
    }
}
