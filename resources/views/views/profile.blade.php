@if (request()->session()->get('role') === 'SUPERADMIN')
    {{ $link = 'superadmin.layouts.main' }}
@elseif (request()->session()->get('role') === 'ADMIN')
    {{ $link = 'Admin.layouts.main' }}
@endif
@extends($link)

@section('main')
    @error('foto')
        {{ $message }}
    @enderror
    <div
        class="gap-6 p-6 mt-8 bg-white border border-gray-200 rounded-lg shadow lg:flex hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 ">
        <div class="content-center col-span-1">
            <div class="relative block">
                <a class="flex justify-center">
                    <img class="object-cover rounded-full" width="450"
                        src="{{ env('APP_API_URL') }}/resource/akun/{{ $profile['foto'] }}" alt="{{ $profile['nama'] }}">
                </a>
            </div>
        </div>
        <div class="content-center w-full col-span-4">
            <div class="">
                <p class="text-xl font-bold tracking-tight text-gray-900 dark:text-white ">Profile </p>
                <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">
                <div class="">
                    <div class="mb-5">
                        <label for="nama"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <p class="w-full p-2 pl-2 border border-gray-300 rounded-lg ">
                            {{ $profile['nama'] }}
                        </p>

                    </div>
                    <div class="mb-5">
                        <label for="no_telp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No
                            Telephone</label>
                        <p class="w-full p-2 pl-2 border border-gray-300 rounded-lg ">
                            {{ $profile['no_telp'] }}
                        </p>

                    </div>
                    <div class="mb-5">
                        <label for="no_telp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Email</label>
                        <p class="w-full p-2 pl-2 border border-gray-300 rounded-lg ">
                            {{ $profile['email'] }}
                        </p>

                    </div>
                </div>
                <button data-modal-target="edit-profile" data-modal-toggle="edit-profile"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit
                    Profile
                </button>
                <button data-modal-target="change-password" data-modal-toggle="change-password"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Change
                    Password
                </button>
            </div>
        </div>
    </div>


    <div id="edit-profile" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full ">
        <div class="relative w-full max-w-4xl max-h-full p-4 ">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Edit Profil
                    </h3>
                    <button type="button"
                        class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="edit-profile">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="px-10">
                    <form class="mx-2 " action="/profile/update/{{ $profile['id'] }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div
                            class="block p-10 mt-8 mb-5 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <p class="text-xl font-bold tracking-tight text-gray-900 dark:text-white ">Info Profile </p>
                            <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">
                            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 ">
                                <div class="mb-5">
                                    <label for="nama"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                                    <input type="text"value="{{ $profile['nama'] }}" name="nama" id="nama"
                                        class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required />
                                </div>
                                <div class="mb-5">
                                    <label for="no_telp"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No
                                        Telephone</label>
                                    <input type="text" value="{{ $profile['no_telp'] }}" name="no_telp" id="no_telp"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                        required />
                                </div>
                            </div>
                            <div class="mb-5">
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                <input type="email" value="{{ $profile['email'] }}" name="email" id="email"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    placeholder="name@flowbite.com" required />
                            </div>
                        </div>
                        <div
                            class="block p-6 mt-8 mb-5 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <p class="text-xl font-bold tracking-tight text-gray-900 dark:text-white ">Foto Profil</p>
                            <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">
                            <div class="mb-5">
                                <input type="hidden" name="fotoOld" value="{{ $profile['foto'] }}">

                                <img class="object-cover mb-2 rounded-full image-preview img-fluid" width="450"
                                    src="{{ env('APP_API_URL') }}/resource/akun/{{ $profile['foto'] }}"
                                    alt="{{ $profile['nama'] }}">

                                <input onchange="previewImage()" name="foto" id="foto"
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar" type="file">
                            </div>
                        </div>

                        <button type="submit"
                            class="text-white mb-5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                        <button type="rest"
                            class="text-white mb-5 bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    {{-- <p>edit profile</p>
    <form class="max-w-sm mx-auto" action="/profile/update/{{$profile['id']}}" method="POST">
        @csrf
        @method('PATCH')
        <input type="hidden" name="fotoOld" value="{{$profile['foto']}}">
        <div class="mb-5">
          <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your nama</label>
          <input type="text"value="{{$profile['nama']}}" name="nama" id="nama" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
        </div>
        <div class="mb-5">
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
          <input type="email"value="{{$profile['email']}}" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required />
        </div>
        <div
                class="block p-6 mt-8 mb-5 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <p class="text-xl font-bold tracking-tight text-gray-900 dark:text-white ">foto </p>
                <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">
                <div class="mb-5">

                    <img class="mb-2 image-preview img-fluid">
                    <input onchange="previewImage()" name="foto" id="foto"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" id="user_avatar" type="file">
                </div>
            </div>
          <div class="mb-5">
            <label for="no_telp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your no_telp</label>
            <input type="text" value="{{$profile['no_telp']}}" name="no_telp" id="no_telp" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
          </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">LOGIN</button>
      </form> --}}


    <div id="change-password" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full ">
        <div class="relative w-full max-w-4xl max-h-full p-4 ">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Change Password
                    </h3>
                    <button type="button"
                        class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="change-password">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="px-10">
                    <form class="mx-2 " action="/profile/password/{{ $profile['id'] }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="block mt-4 mb-3">
                            <div class="mb-5">
                                <label for="password_lama"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password
                                    Lama</label>
                                <input type="password" name="email" id="email"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    placeholder="Password Lama" required />
                            </div>
                            <div class="mb-5">
                                <label for="passwordbaru"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password
                                    Baru</label>
                                <input type="password" name="email" id="email"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    placeholder="Password Baru" required />
                            </div>
                        </div>

                        <button type="submit"
                            class="text-white mb-5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                        <button type="rest"
                            class="text-white mb-5 bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{--
    <p>edit password</p>
    <form class="max-w-sm mx-auto" action="/profile/password/{{$profile['id']}}" method="POST">
        @csrf
        @method('PATCH')

        <div class="mb-5">
          <label for="oldpassword" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your oldpassword</label>
          <input type="password" name="oldpassword" id="oldpassword" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
        </div>
        <div class="mb-5">
          <label for="newpassword" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your newpassword</label>
          <input type="password" name="newpassword" id="newpassword" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
        </div>
        <div class="mb-5">
            <label for="repeatpassword" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your repeatpassword</label>
            <input type="password" name="repeatpassword" id="repeatpassword" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
          </div>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">LOGIN</button>
      </form> --}}


    <script>
        // PreviewImage
        function previewImage() {
            const image = document.querySelector('#foto');
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
