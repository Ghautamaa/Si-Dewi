<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Desawisata extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {        
        $response = Http::get('http://localhost:3000/desawisata')->collect();
        dd($response);
        return view('desawisata.index',[
            'desawisata'=>$response,
            'title'=>'desawisata'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('desawisata.create',[
            'title'=>'desawisata'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama'=>'required|max:255',
            'alamat'=>'required|max:255',
            'gambar'=>'required|image|file',
            'deskripsi'=>'required',
            'maps'=>'required|max:255',
            'kategori'=>'required|max:255',
            'kabupaten'=>'required|max:255',
        ]);

        $validatedData['createdAt'] = now();
        $validatedData['updatedAt'] = now();

        $response = Http::attach(
            'gambar', file_get_contents($_FILES['gambar']['tmp_name']), $_FILES['gambar']['name']
        )->post('http://localhost:3000/desawisata/add',$validatedData);

        if($response->successful()){
            return redirect('/desawisata')->with('message','berhasil menambahkan');
        }elseif ($response->failed()) {
            return redirect('/desawisata/create')->with('message','gagal menambahkan');
        } else {
            return redirect('/desawisata')->with('message','erorr system 500');
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response = Http::get('http://localhost:3000/desawisata/'.$id)->collect();
        // dd($response);
        return view('desawisata.edit',[
            'desawisata'=>$response,
            'title'=>'desawisata'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nama'=>'required|max:255',
            'alamat'=>'required|max:255',
            'deskripsi'=>'required',
            'maps'=>'required|max:255',
            'kategori'=>'required|max:255',
            'kabupaten'=>'required|max:255',
        ]);
        if(!$request['gambar']){
            $validatedData['gambar'] = $request['gambarOld'];
        }

        $validatedData['createdAt'] = now();
        $validatedData['updatedAt'] = now();

       
        if($_FILES['gambar']['error'] === 4){
            $response = Http::patch('http://localhost:3000/desawisata/'.$id,$validatedData);
        }else{
            $response = Http::attach(
                'gambar', file_get_contents($_FILES['gambar']['tmp_name']), $_FILES['gambar']['name']
            )->patch('http://localhost:3000/desawisata/'.$id,$validatedData);
        }

        if($response->successful()){
            return redirect('/desawisata')->with('message','berhasil mengupdate');
        }elseif ($response->failed()) {
            return redirect('/desawisata/'.$id.'/')->with('message','gagal mengupdate');
        } else {
            return redirect('/desawisata')->with('message','erorr system 500');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $response = Http::delete('http://localhost:3000/desawisata/'.$id);
        if($response->successful()){
            return redirect('/desawisata')->with('message','berhasil menghapus');
        }elseif ($response->failed()) {
            return redirect('/desawisata')->with('message','gagal menghapus');
        } else {
            return redirect('/desawisata')->with('message','erorr system 500');
        }
    }
}
