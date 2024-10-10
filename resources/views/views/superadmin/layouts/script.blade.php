<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    /*! DataTables Tailwind CSS integration
     */
    (function(factory) {
        if (typeof define === 'function' && define.amd) {
            // AMD
            define(['jquery', 'datatables.net'], function($) {
                return factory($, window, document);
            });
        } else if (typeof exports === 'object') {
            // CommonJS
            var jq = require('jquery');
            var cjsRequires = function(root, $) {
                if (!$.fn.dataTable) {
                    require('datatables.net')(root, $);
                }
            };

            if (typeof window === 'undefined') {
                module.exports = function(root, $) {
                    if (!root) {
                        // CommonJS environments without a window global must pass a
                        // root. This will give an error otherwise
                        root = window;
                    }

                    if (!$) {
                        $ = jq(root);
                    }

                    cjsRequires(root, $);
                    return factory($, root, root.document);
                };
            } else {
                cjsRequires(window, jq);
                module.exports = factory(jq, window, window.document);
            }
        } else {
            // Browser
            factory(jQuery, window, document);
        }
    }(function($, window, document) {
        'use strict';
        var DataTable = $.fn.dataTable;



        /*
         * This is a tech preview of Tailwind CSS integration with DataTables.
         */

        // Set the defaults for DataTables initialisation
        $.extend(true, DataTable.defaults, {
            renderer: 'tailwindcss'
        });


        // Default class modification
        $.extend(true, DataTable.ext.classes, {
            container: "dt-container dt-tailwindcss",
            search: {
                input: " border bg-gray-100 placeholder-gray-500 ml-2 px-3 py-2 rounded-lg border-gray-200 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 dark:bg-gray-800 dark:border-gray-600 dark:focus:border-blue-500 dark:placeholder-gray-400"
            },
            length: {
                select: "border px-3 py-2 rounded-lg border-gray-200 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 dark:bg-gray-800 dark:border-gray-600 dark:focus:border-blue-500"
            },
            processing: {
                container: "dt-processing"
            },
            paging: {
                active: 'font-semibold bg-gray-100 dark:bg-gray-700/75',
                notActive: 'bg-white dark:bg-gray-800',
                button: 'relative inline-flex justify-center items-center space-x-2 border px-4 py-2 -mr-px leading-6 hover:z-10 focus:z-10 active:z-10 border-gray-200 active:border-gray-200 active:shadow-none dark:border-gray-700 dark:active:border-gray-700',
                first: 'rounded-l-lg',
                last: 'rounded-r-lg',
                enabled: 'text-gray-800 hover:text-gray-900 hover:border-gray-300 hover:shadow-sm focus:ring focus:ring-gray-300 focus:ring-opacity-25 dark:text-gray-300 dark:hover:border-gray-600 dark:hover:text-gray-200 dark:focus:ring-gray-600 dark:focus:ring-opacity-40',
                notEnabled: 'text-gray-300 dark:text-gray-600'
            },
            table: 'dataTable min-w-full text-sm align-middle whitespace-nowrap',
            thead: {
                row: '  dark:border-gray-700/50',
                cell: 'border px-3 py-4 text-gray-900 bg-gray-100/75 font-semibold text-left dark:text-gray-50 dark:bg-gray-700/25 text-center'
            },
            tbody: {
                row: '',
                cell: 'border text-center'
            },
            tfoot: {
                row: 'even:bg-gray-50 dark:even:bg-gray-900/50',
                cell: 'p-3 text-left'
            },
        });

        DataTable.ext.renderer.pagingButton.tailwindcss = function(settings, buttonType, content, active,
            disabled) {
            var classes = settings.oClasses.paging;
            var btnClasses = [classes.button];

            btnClasses.push(active ? classes.active : classes.notActive);
            btnClasses.push(disabled ? classes.notEnabled : classes.enabled);

            var a = $('<a>', {
                    'href': disabled ? null : '#',
                    'class': btnClasses.join(' ')
                })
                .html(content);

            return {
                display: a,
                clicker: a
            };
        };

        DataTable.ext.renderer.pagingContainer.tailwindcss = function(settings, buttonEls) {
            var classes = settings.oClasses.paging;

            buttonEls[0].addClass(classes.first);
            buttonEls[buttonEls.length - 1].addClass(classes.last);

            return $('<ul/>').addClass('pagination').append(buttonEls);
        };

        DataTable.ext.renderer.layout.tailwindcss = function(settings, container, items) {
            var row = $('<div/>', {
                    "class": items.full ?
                        'grid grid-cols-1 gap-4 mb-4' : 'grid grid-cols-2 gap-4 mb-4'
                })
                .appendTo(container);

            $.each(items, function(key, val) {
                var klass;

                // Apply start / end (left / right when ltr) margins
                if (val.table) {
                    klass = 'col-span-2';
                } else if (key === 'start') {
                    klass = 'justify-self-start';
                } else if (key === 'end') {
                    klass = 'col-start-2 justify-self-end';
                } else {
                    klass = 'col-span-2 justify-self-center';
                }

                $('<div/>', {
                        id: val.id || null,
                        "class": klass + ' ' + (val.className || '')
                    })
                    .append(val.contents)
                    .appendTo(row);
            });
        };
        return DataTable;
    }));
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    let table = new DataTable('#myTable');
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var toast = document.getElementById('toast-success');
        if (toast) {
            // Animasi muncul
            setTimeout(function() {
                toast.classList.remove('opacity-0', 'translate-y-4');
            }, 100); // Sedikit delay untuk memastikan animasi terlihat

            // Animasi hilang setelah 5 detik
            setTimeout(function() {
                toast.classList.add('opacity-0', 'translate-y-4');
                setTimeout(function() {
                    toast.remove();
                }, 500); // Durasi yang sesuai dengan `transition-all duration-500`
            }, 5000);
        }
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const swalWithTailwindButtons = Swal.mixin({
            customClass: {
                confirmButton: 'bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 mx-2 rounded',
                cancelButton: 'bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 mx-2 rounded'
            },
            buttonsStyling: false
        });

        var deleteButtons = document.querySelectorAll('.delete-button');

        deleteButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var form = this.closest('.delete-form');
                swalWithTailwindButtons.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, cancel!",
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        swalWithTailwindButtons.fire({
                            title: "Deleted!",
                            text: "Your file has been deleted.",
                            icon: "success"
                        }).then(() => {
                            form.submit();
                        });
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        swalWithTailwindButtons.fire({
                            title: "Cancelled",
                            text: "Your imaginary file is safe :)",
                            icon: "error"
                        });
                    }
                });
            });
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const swalWithTailwindButtons = Swal.mixin({
            customClass: {
                confirmButton: 'bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 mx-2 rounded',
                cancelButton: 'bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 mx-2 rounded'
            },
            buttonsStyling: false
        });

        var deleteButtons = document.querySelectorAll('.delete-button');

        deleteButtons.forEach(function(button) {
            button.addEventListener('click', function() {
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
            });
        });
    });
</script>
