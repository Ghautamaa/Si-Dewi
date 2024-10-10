@extends('Admin.layouts.main')

@section('main')
    <div class="mx-4">
        <h2 class=" mb-3  font-bold tracking-tight text-gray-500 ">Produk / Tambah </h2>
        <p class=" text-3xl font-semibold tracking-tight text-gray-900 dark:text-white"> Tambah Produk </p>
        <form class="mx-auto" action="/admin/produk" method="POST" enctype="multipart/form-data">
            @csrf
            <div
                class="mt-8 mb-5    block  p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <p class="text-xl font-bold tracking-tight text-gray-900 dark:text-white ">Info Produk </p>
                <hr class="h-px my-4  bg-gray-200 border-0 dark:bg-gray-700">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-8">
                    <div class="mb-5">
                        <label for="nama"
                            class="@error('nama') mb-2 text-sm font-medium text-red-700 dark:text-red-500 @else block mb-2 text-sm font-medium text-gray-900 dark:text-white @enderror">Nama</label>
                        <input type="text" name="nama" id="nama"
                            class=" @error('nama')
                        bg-red-50  border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @else shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light  @enderror" />
                        @error('nama')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span>
                                {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="harga"
                            class="@error('harga') mb-2 text-sm font-medium text-red-700 dark:text-red-500 @else block mb-2 text-sm font-medium text-gray-900 dark:text-white @enderror">Harga</label>
                        <input type="text" name="harga" id="harga"
                            class="@error('harga')
                        bg-red-50  border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @else shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light @enderror" />
                        @error('harga')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span>
                                {{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mb-5">
                    <label for="deskripsi"
                        class="@error('deskripsi') mb-2 text-sm font-medium text-red-700 dark:text-red-500 @else block mb-2 text-sm font-medium text-gray-900 dark:text-white @enderror">Deskripsi</label>
                    <textarea id="text" name="deskripsi" rows="8"
                        class="@error('deskripsi')
                        bg-red-50  border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @else block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @enderror"
                        placeholder="Masukan deskripsi produk di sini..."></textarea>
                    @error('deskripsi')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span>
                            {{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div
                class="mt-8 mb-5    block  p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <p class=" btext-xl font-bold tracking-tight text-gray-900 dark:text-white ">
                    Gambar </p>
                <hr class="h-px my-4  bg-gray-200 border-0 dark:bg-gray-700">
                <div class="mb-5">
                    <img class="image-preview img-fluid mb-2">
                    <input onchange="previewImage()" name="gambar" id="gambar"
                        class="@error('gambar') block w-full text-sm border border-red-700 text-red-700 rounded-lg cursor-pointer bg-red-50  dark:text-red-500
@else
block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @enderror"
                        aria-describedby="user_avatar_help" id="user_avatar" type="file">
                    @error('gambar')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span>
                            {{ $message }}</p>
                    @enderror
                </div>
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            <button type="reset"
                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Reset</button>
        </form>

        <script>
            // PreviewImage
            function previewImage() {
                const image = document.querySelector('#gambar');
                const imagePreview = document.querySelector('.image-preview');

                imagePreview.style.display = 'block';

                const oFReader = new FileReader();
                oFReader.readAsDataURL(image.files[0]);

                oFReader.onload = function(oFREvent) {
                    imagePreview.src = oFREvent.target.result;
                }
            }
        </script>
    @endsection
