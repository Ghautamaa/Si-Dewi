@extends('Admin.layouts.main')

@section('main')
    @if (session()->has('message'))
        <div id="toast-success"
            class="fixed flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 transition-all duration-500 ease-in-out transform translate-y-4 bg-white rounded-lg shadow opacity-0 dark:text-gray-400 dark:bg-gray-800 bottom-14 right-14"
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
    {{-- @dd($destinasi) --}}
    <div class="mx-4">
        <h2 class="mb-3 font-bold tracking-tight text-gray-500">Destinasi Wisata / Ulasan</h2>
        <div class="flex justify-between">
            <p class="text-3xl font-semibold tracking-tight text-gray-900 dark:text-white">Ulasan Destinasi
                {{ $destinasi['nama'] }}</p>
        </div>
        <div class="relative overflow-x-auto mt-5 bg-white border-gray-200 rounded-lg shadow p-3">
            <table id="myTable" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs  text-gray-700 uppercase  dark:bg-gray-700 dark:text-gray-400">
                    <tr class="border">
                        <th scope="col" class=" w-20">
                            No
                        </th>
                        <th scope="col" class="w-1/5">
                            akun
                        </th>
                        <th scope="col" class="w-1/5">
                            rating
                        </th>
                        <th scope="col" class="w-2/5">
                            review
                        </th>
                        {{-- <th scope="col" class="">
                            createdAt
                        </th>
                        <th scope="col" class="">
                            updatedAt
                        </th> --}}
                        <th scope="col" class="w-1/5 ">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($review as $row)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}
                            </th>
                            <td class="px-6 py-4 text-center">
                                <div class=" flex items-center justify-center gap-5">
                                    <img class="h-10 w-10 rounded-full"
                                        src="{{ env('APP_API_URL') }}/resource/akun/{{ $row['akun']['foto'] }}"
                                        alt=" {{ $row['akun']['nama'] }}">
                                    {{ $row['akun']['nama'] }}
                                </div>
                            </td>
                            <td class="">
                                <div class="flex w-full justify-center">
                                    @php
                                        $rating = $row['rating'];
                                        $fullStars = $rating;
                                        $emptyStars = 5 - $fullStars;
                                    @endphp
                                    {{-- Bintang Penuh --}}
                                    @for ($i = 0; $i < $fullStars; $i++)
                                        <svg class="w-5 h-5 text-yellow-400 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                        </svg>
                                    @endfor
                                    {{-- Bintang Kosong --}}
                                    @for ($i = 0; $i < $emptyStars; $i++)
                                        <svg class="w-5 h-5 text-gray-400 dark:text-gray-600" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                        </svg>
                                    @endfor
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                {{ $row['review'] }}
                            </td>
                            {{-- <td class="px-6 py-4">
                                {{ $row['createdAt'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $row['updatedAt'] }}
                            </td> --}}
                            <td class="flex justify-center px-6 py-4">
                                {{-- <a href="/superadmin/desa/create" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">S</a> --}}
                                <form action="/admin/review/{{ $row['id'] }}" method="post" class="delete-form">
                                    @csrf
                                    <input type="hidden" name="id_destinasiwisata"
                                        value="{{ $row['id_destinasiwisata'] }}">
                                    @method('PATCH')
                                    <button type="submit" name="setujui" value="1"
                                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-900"><svg
                                            class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                                        </svg>
                                    </button>
                                    <button type="button" name="setujui" value="0"
                                        class="delete-button focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><svg
                                            class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="3" d="M6 18 17.94 6M18 18 6.06 6" />
                                        </svg>
                                        <input type="hidden" name="id_destinasiwisata"
                                            value="{{ $row['id_destinasiwisata'] }}">
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

<!-- Include external scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    /*! DataTables Tailwind CSS integration */
    (function(factory) {
        if (typeof define === 'function' && define.amd) {
            define(['jquery', 'datatables.net'], function($) {
                return factory($, window, document);
            });
        } else if (typeof exports === 'object') {
            var jq = require('jquery');
            var cjsRequires = function(root, $) {
                if (!$.fn.dataTable) {
                    require('datatables.net')(root, $);
                }
            };

            if (typeof window === 'undefined') {
                module.exports = function(root, $) {
                    root = root || window;
                    $ = $ || jq(root);
                    cjsRequires(root, $);
                    return factory($, root, root.document);
                };
            } else {
                cjsRequires(window, jq);
                module.exports = factory(jq, window, window.document);
            }
        } else {
            factory(jQuery, window, document);
        }
    }(function($, window, document) {
        'use strict';
        var DataTable = $.fn.dataTable;

        // Extend DataTables defaults for Tailwind CSS
        $.extend(true, DataTable.defaults, { renderer: 'tailwindcss' });
        $.extend(true, DataTable.ext.classes, {
            container: "dt-container dt-tailwindcss",
            search: { input: "border bg-gray-100 ..." },
            length: { select: "border px-3 py-2 ..." },
          
            table: 'dataTable min-w-full text-sm align-middle whitespace-nowrap',
            thead: { row: 'dark:border-gray-700/50', cell: 'border px-3 py-4 text-center' },
            tbody: { cell: 'border text-center' },
        });

        // Renderer for Tailwind CSS paging button
        DataTable.ext.renderer.pagingButton.tailwindcss = function(settings, buttonType, content, active, disabled) {
            var classes = settings.oClasses.paging;
            var btnClasses = [classes.button];
            btnClasses.push(active ? classes.active : classes.notActive);
            btnClasses.push(disabled ? classes.notEnabled : classes.enabled);

            var a = $('<a>', { href: disabled ? null : '#', class: btnClasses.join(' ') }).html(content);
            return { display: a, clicker: a };
        };

        return DataTable;
    }));

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