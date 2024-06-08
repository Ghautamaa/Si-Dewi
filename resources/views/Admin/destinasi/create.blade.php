@extends('Admin.layouts.main')

@section('main')
    <h2 class="ms-4 mb-3  font-bold tracking-tight text-gray-500 ">Destinasi / Tambah </h2>
    <p class="ms-4 text-3xl font-semibold tracking-tight text-gray-900 dark:text-white"> Tambah Destinasi Wisata </p>
    <form class="mx-auto" action="/admin/destinasi" method="POST" enctype="multipart/form-data">
        @csrf
        <div
            class="mx-4 mt-8 mb-5    block  p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <p class="text-xl font-bold tracking-tight text-gray-900 dark:text-white ">Info Destinasi </p>
            <hr class="h-px my-4  bg-gray-200 border-0 dark:bg-gray-700">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-8">
                <div class="mb-5">
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                    </label>
                    <input type="text" name="nama" id="nama"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        required />
                </div>
                <div class="mb-5">
                    <label for="id_kategoridestinasi"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori
                    </label>
                    <select id="id_kategoridestinasi" name="id_kategoridestinasi"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option hidden>Select Role</option>
                        @foreach ($kategoridesawisata as $row)
                            <option value="{{ $row['id'] }}">{{ $row['nama'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-5">
                <label for="deskripsi"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                <textarea id="text" name="deskripsi" rows="8"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Write your thoughts here..."></textarea>
            </div>
        </div>
        {{--  --}}
        <div
            class="mx-4 mt-8 mb-5    block  p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <p class="text-xl font-bold tracking-tight text-gray-900 dark:text-white ">Gambar </p>
            <hr class="h-px my-4  bg-gray-200 border-0 dark:bg-gray-700">
            <div class="mb-5">
                {{-- <label for="gambar" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Gambar</label> --}}
                <img class="image-preview img-fluid mb-2">
                <input onchange="previewImage()" name="gambar" id="gambar"
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    aria-describedby="user_avatar_help" id="user_avatar" type="file">
            </div>
        </div>
        <div class="ms-4">

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            <button type="reset"
                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Reset</button>
        </div>
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
