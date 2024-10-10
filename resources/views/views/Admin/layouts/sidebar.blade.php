<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            {{-- <li>
                <a href="/admin/dashboard"
                    class="{{ request()->is('admin/dashboard*') ? 'text-white rounded-lg dark:text-white bg-gray-900 hover:bg-gray-600' : 'text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700' }} flex items-center p-2  group">
                    <svg class="w-5 h-5  {{ request()->is('superadmin/desa*') ? 'text-white  transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white' : 'text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white' }}"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path
                            d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path
                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li> --}}
            <li>
                <a href="/admin/profil-desa/{{ request()->session()->get('id_desa') }}"
                    class="{{ request()->is('admin/profil-desa*') ? 'text-white rounded-lg dark:text-white bg-primary-200 hover:bg-primary-100 drop-shadow-lg' : 'text-gray-900 rounded-lg  dark:text-white hover:bg-primary-200 hover:text-white dark:hover:bg-gray-700' }} flex items-center p-2  group">
                    <svg class="flex-shrink-0 w-5 h-5  {{ request()->is('admin/profil-desa*') ? 'text-white  transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white' : 'text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white' }}"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path
                            d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Profil Desa</span>

                </a>
            </li>
            <li>
                <a href="/admin/berita"
                    class="{{ request()->is('admin/berita*') ? 'text-white rounded-lg dark:text-white bg-primary-200 hover:bg-primary-100 drop-shadow-lg' : 'text-gray-900 rounded-lg  dark:text-white hover:bg-primary-200 hover:text-white dark:hover:bg-gray-700' }} flex items-center p-2  group">
                    <svg class="flex-shrink-0 w-5 h-5  {{ request()->is('admin/berita*') ? 'text-white  transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white' : 'text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white' }}"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Berita</span>

                </a>
            </li>
            {{-- <li>
                <a href="/admin/rating"
                    class="{{ request()->is('admin/rating*') ?'text-white rounded-lg dark:text-white bg-primary-200 hover:bg-primary-100 drop-shadow-lg' : 'text-gray-900 rounded-lg  dark:text-white hover:bg-primary-200 hover:text-white dark:hover:bg-gray-700' }} flex items-center p-2  group">
                    <svg class="flex-shrink-0 w-5 h-5  {{ request()->is('superadmin/desa*') ? 'text-white  transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white' : 'text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white' }}"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Kelola Rating</span>
                    <span
                        class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                </a>
            </li> --}}
        </ul>
        <ul class="pt-4 mt-4 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700">
            <li>
                <a href="/admin/destinasi"
                    class="{{ request()->is('admin/destinasi*') ? 'text-white rounded-lg dark:text-white bg-primary-200 hover:bg-primary-100 drop-shadow-lg' : 'text-gray-900 rounded-lg  dark:text-white hover:bg-primary-200 hover:text-white dark:hover:bg-gray-700' }} flex items-center p-2  group">
                    <svg class="w-6 h-6 {{ request()->is('admin/destinasi*') ? 'text-white  transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white' : 'text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white' }}"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M8 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1h2a2 2 0 0 1 2 2v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h2Zm6 1h-4v2H9a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2h-1V4Zm-3 8a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Zm2 5a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Destinasi Wisata</span>

                </a>
            </li>

            <li>
                <a href="/admin/akomodasi"
                    class="{{ request()->is('admin/akomodasi*') ? 'text-white rounded-lg dark:text-white bg-primary-200 hover:bg-primary-100 drop-shadow-lg' : 'text-gray-900 rounded-lg  dark:text-white hover:bg-primary-200 hover:text-white dark:hover:bg-gray-700' }} flex items-center p-2  group">
                    <svg class="w-6 h-6  {{ request()->is('admin/akomodasi*') ? 'text-white  transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white' : 'text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white' }}"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z"
                            clip-rule="evenodd" />
                    </svg>


                    <span class="flex-1 ms-3 whitespace-nowrap">Akomodasi</span>

                </a>
            </li>
            <li>
                <a href="/admin/produk"
                    class="{{ request()->is('admin/produk*') ? 'text-white rounded-lg dark:text-white bg-primary-200 hover:bg-primary-100 drop-shadow-lg' : 'text-gray-900 rounded-lg  dark:text-white hover:bg-primary-200 hover:text-white dark:hover:bg-gray-700' }} flex items-center p-2  group">
                    <svg class="w-6 h-6  {{ request()->is('admin/produk*') ? 'text-white  transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white' : 'text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white' }}"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M5.024 3.783A1 1 0 0 1 6 3h12a1 1 0 0 1 .976.783L20.802 12h-4.244a1.99 1.99 0 0 0-1.824 1.205 2.978 2.978 0 0 1-5.468 0A1.991 1.991 0 0 0 7.442 12H3.198l1.826-8.217ZM3 14v5a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5h-4.43a4.978 4.978 0 0 1-9.14 0H3Z"
                            clip-rule="evenodd" />
                    </svg>

                    <span class="flex-1 ms-3 whitespace-nowrap">Produk</span>

                </a>
            </li>

            <li>
                <a href="/admin/paket"
                    class="{{ request()->is('admin/paket*') ? 'text-white rounded-lg dark:text-white bg-primary-200 hover:bg-primary-100 drop-shadow-lg' : 'text-gray-900 rounded-lg  dark:text-white hover:bg-primary-200 hover:text-white dark:hover:bg-gray-700' }} flex items-center p-2  group">
                    <svg class="w-6 h-6 {{ request()->is('admin/paket*') ? 'text-white  transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white' : 'text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white' }}"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M2 6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6Zm4.996 2a1 1 0 0 0 0 2h.01a1 1 0 1 0 0-2h-.01ZM11 8a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2h-6Zm-4.004 3a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2h-.01ZM11 11a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2h-6Zm-4.004 3a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2h-.01ZM11 14a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2h-6Z"
                            clip-rule="evenodd" />
                    </svg>

                    <span class="flex-1 ms-3 whitespace-nowrap">Paket Wisata</span>

                </a>
            </li>
        </ul>
    </div>
</aside>
