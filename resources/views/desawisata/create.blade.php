@extends('partials.main')

@section('container')

<form class="max-w-md mx-auto bg-slate-900 p-5 rounded-lg" action="/desawisata" method="POST" enctype="multipart/form-data"> 
    @csrf
    <div class="mb-5">
        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Desawisata</label>
        <input type="text" name="nama" id="nama" value="{{old('nama')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        @error('nama')    
        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> Username already taken!</p>
        @enderror
    </div>
    <div class="mb-5">
        <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Desawisata</label>
        <input type="text" name="alamat" id="alamat" value="{{old('alamat')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        @error('alamat')    
        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> Username already taken!</p>
        @enderror
    </div>
    <div class="mb-5">
        <label for="gambar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">gambar Desawisata</label>
        <img class="img-preview img-fluid mb-3 col-sm-5">
        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" name="gambar" id="gambar" type="file" onchange="previewImage()">
        @error('gambar')    
        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> Username already taken!</p>
        @enderror
    </div>
    <div class="mb-5">
        <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">deskripsi Desawisata</label>
        <textarea name="deskripsi" id="deskripsi" rows="3" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">@if ('deskripsi')
        {{old('deskripsi')}}@endif</textarea>
            
        @error('deskripsi')    
        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> Username already taken!</p>
        @enderror
    </div>
    <div class="mb-5">
        <label for="maps" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">maps Desawisata</label>
        <input type="text" name="maps" id="maps" value="{{old('maps')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
        @error('maps')    
        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> Username already taken!</p>
        @enderror
    </div>
    <div class="mb-5">
        <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select your Kategori</label>
        <select name="kategori" id="kategori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option hidden>Kategori</option>
            @if (old('ketegori'))
                <option value="{{old('kategori')}}" selected>{{old('kategori')}}</option>   
            @endif
            <option value="Rintisan">Rintisan</option>
            <option value="Berkembang">Berkembang</option>
            <option value="Maju">Maju</option>
            <option value="Mandiri">Mandiri</option>
        </select>
    </div>
    <div class="mb-5">
        <label for="kabupaten" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select your kabupaten</label>
        <select name="kabupaten" id="kabupaten" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option hidden>kabupaten</option>
            @if (old('kabupaten'))
                <option value="{{old('kabupaten')}}" selected>{{old('kabupaten')}}</option>   
            @endif
            <option value="Badung">Badung</option>
            <option value="Bangli">Bangli</option>
            <option value="Buleleng">Buleleng</option>
            <option value="Denpasar">Denpasar</option>
            <option value="Gianyar">Gianyar</option>
            <option value="Jembrana">Jembrana</option>
            <option value="Karangasem">Karangasem</option>
            <option value="Klungkung">Klungkung</option>
            <option value="Tabanan">Tabanan</option>
        </select>
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
  </form>

  <script>
      function previewImage(){
          const image = document.querySelector('#gambar');
          const imgPreview = document.querySelector('.img-preview');
  
          imgPreview.style.display = 'block';
  
          const oFReader = new FileReader();
          oFReader.readAsDataURL(image.files[0]);
  
          oFReader.onload =function(oFREvent){
              imgPreview.src = oFREvent.target.result;
          }
      }
  </script>
@endsection

