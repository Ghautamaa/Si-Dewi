@extends('superadmin.layouts.main')

@section('main')
<h1>Form peket desa</h1>
<form class="mx-auto" action="/superadmin/kategoridestinasi" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-5">
      <label for="nama" class="mb-2 text-sm font-medium @error('nama')
      block  text-red-700 dark:text-red-500
      @else  text-gray-900 dark:text-white @enderror">nama</label>
      <input type="text" name="nama" id="nama" class="@error('nama')
      bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 
      @else bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light @enderror"  />
      @error('nama')
      <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{$message}}</p>
        
      @enderror
    </div>
    
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    <button type="reset" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Reset</button>
  </form>
  
  <script>
    // PreviewImage
    function previewImage() {
        const image = document.querySelector('#gambar');
        const imagePreview = document.querySelector('.image-preview');

        imagePreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function (oFREvent) {
            imagePreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection