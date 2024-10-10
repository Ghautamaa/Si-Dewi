<!-- Include external scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('js/main.js') }}"></script>
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
