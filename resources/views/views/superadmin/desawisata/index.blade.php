@extends('superadmin.layouts.main')

@section('main')
    @if (session()->has('message'))
        <div id="toast-success"
            class="fixed z-50 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 transition-all duration-500 ease-in-out transform translate-y-4 bg-white rounded-lg shadow opacity-0 dark:text-gray-400 dark:bg-gray-800 bottom-14 right-14"
            role="alert">
            <div
                class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                </svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="text-sm font-normal ms-3">{{ session('message') }}</div>
            <button type="button"
                class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                data-dismiss-target="#toast-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endif


    <div class="mx-4">
        <h2 class="mb-3 font-bold tracking-tight text-gray-500 ">Desa / Table </h2>
        <div class="flex justify-between">
            <p class="text-3xl font-semibold tracking-tight text-gray-900  dark:text-white"> Table Desa Wisata
            </p>
            <a href="/superadmin/desa/create"
                class="text-white bg-primary-200 hover:bg-primary-100 focus:ring-4 focus:ring-teal-200 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-200 darl:hover:bg-primary-100  dark:focus:ring-teal-200 focus:outline-none ">Tambah
                +</a>
        </div>

        <div class="relative p-3 mt-5 overflow-x-auto bg-white border-gray-200 rounded-lg shadow">
            <table id="myTable" class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase dark:bg-gray-700 dark:text-gray-400">
                    <tr class="">
                        <th scope="col" class="w-20 ">
                            No
                        </th>
                        <th scope="col" class="w-2/12 ">
                            Nama
                        </th>
                        <!-- <th scope="col" class="w-3/12 ">
                            gambar
                        </th> -->
                        <th scope="col" class="w-3/12 ">
                            alamat
                        </th>
                        <th scope="col" class="w-3/12 ">
                            kategori
                        </th>
                        <th scope="col" class="w-1/12 ">
                            kabupaten
                        </th>
                        {{-- <th scope="col" class="">
                            createdAt
                        </th>
                        <th scope="col" class="">
                            updatedAt
                        </th> --}}
                        <th scope="col" class="w-1/12 ">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($desawisata as $row)
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}
                            </th>
                            <td class="px-2 text-lg font-bold text-black ">
                                <p class="break-words "> {{ $row['nama'] }}</p>
                            </td>
                            <!-- <td class="flex justify-center p-4 ">
                                <img class="h-60" src="{{ env('APP_API_URL') }}/resource/desawisata/{{ $row['gambar'] }}"
                                    alt="{{ $row['gambar'] }}">
                            </td> -->
                            <td class="px-2 ">

                                <p class="break-words">{{ $row['alamat'] }}</p>
                            </td>
                            <td class="">
                                @php
                                    $bgColor = 'bg-white';
                                    if ($row['kategori'] == 'Maju') {
                                        $bgColor =
                                            'bg-green-100 text-green-800  font-medium rounded dark:bg-green-900 dark:text-green-300';
                                    } elseif ($row['kategori'] == 'Rintisan') {
                                        $bgColor =
                                            'bg-yellow-100 text-yellow-800  font-medium  rounded dark:bg-yellow-900 dark:text-yellow-300';
                                    } elseif ($row['kategori'] == 'Mandiri') {
                                        $bgColor =
                                            'bg-blue-100 text-blue-800  font-medium  rounded dark:bg-blue-900 dark:text-blue-300';
                                    } else {
                                        $bgColor =
                                            'bg-gray-100 text-gray-800  font-medium  rounded dark:bg-gray-900 dark:text-gray-300';
                                    }
                                @endphp
                                <div class="flex justify-center">
                                    <div class="{{ $bgColor }} p-4 rounded-3xl w-40 ">
                                        {{ $row['kategori'] }}
                                    </div>
                                </div>
                            </td>
                            <td class="">
                                {{ $row['kabupaten'] }}
                            </td>
                            {{-- <td class="">
                                {{ $row['createdAt'] }}
                            </td>
                            <td class="">
                                {{ $row['updatedAt'] }}
                            </td> --}}
                            <td class="px-6 py-4 ">
                                <div class="flex justify-center">
                                    {{-- <a href="/superadmin/desa/create" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">S</a> --}}
                                    <a href="/superadmin/desa/{{ $row['id'] }}/edit"
                                        class=" focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900"><svg
                                            class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z"
                                                clip-rule="evenodd" />
                                            <path fill-rule="evenodd"
                                                d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z"
                                                clip-rule="evenodd" />
                                        </svg></a>

                                    <form action="/superadmin/desa/{{ $row['id'] }}" method="post" class="delete-form"
                                        >
                                        @csrf
                                        @method('DELETE')
                                        <button type="button"
                                            class="delete-button focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><svg
                                                class="w-6 h-6 text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                                    clip-rule="evenodd" />
                                            </svg></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
   
    // Initialize DataTable
    $(document).ready(function() {
        var table = new DataTable('#myTable');

        // Re-attach SweetAlert event listener on table draw (pagination, etc.)
        table.on('draw.dt', function() {
            attachDeleteEvent();
        });

        // Initial attachment of delete buttons
        attachDeleteEvent();
    });

    // Function to attach SweetAlert to delete buttons
    function attachDeleteEvent() {
        const swalWithTailwindButtons = Swal.mixin({
            customClass: {
                confirmButton: 'bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 mx-2 rounded',
                cancelButton: 'bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 mx-2 rounded'
            },
            buttonsStyling: false
        });

        var deleteButtons = document.querySelectorAll('.delete-button');

        deleteButtons.forEach(function(button) {
            button.removeEventListener('click', handleDeleteEvent); // Ensure no duplicate listeners
            button.addEventListener('click', handleDeleteEvent);
        });

        function handleDeleteEvent() {
            var form = this.closest('.delete-form');
            swalWithTailwindButtons.fire({
                title: "Yakin menghapus data?",
                text: "Data yang sudah dihapus tidak bisa dikembalikan!",
                icon: "warning",
                showCancelButton: true,
                cancelButtonText: "Tidak, batal!",
                confirmButtonText: "Ya, hapus!",
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    swalWithTailwindButtons.fire({
                        title: "Deleted!",
                        text: "Data telah dihapus.",
                        icon: "success"
                    }).then(() => {
                        form.submit();
                    });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swalWithTailwindButtons.fire({
                        title: "Cancelled",
                        text: "Data batal dihapus",
                        icon: "error"
                    });
                }
            });
        }
    }

    // Toast notification animation
    document.addEventListener('DOMContentLoaded', function() {
        var toast = document.getElementById('toast-success');
        if (toast) {
            setTimeout(function() {
                toast.classList.remove('opacity-0', 'translate-y-4');
            }, 100);

            setTimeout(function() {
                toast.classList.add('opacity-0', 'translate-y-4');
                setTimeout(function() {
                    toast.remove();
                }, 500);
            }, 5000);
        }
    });
</script>
@endsection


