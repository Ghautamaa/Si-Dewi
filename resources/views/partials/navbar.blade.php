<nav class="fixed z-10 top-0 bg-transparent backdrop-blur-md shadow-md x2l:px-44 md:px-20 sm:px-20 w-screen">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="{{ asset('storage/img/logo.png') }}" class="h-8" alt="Flowbite Logo" />
        <span class="self-center text-2xl grechen-fuemen-regular font-semibold whitespace-nowrap dark:text-white">Si Dewi</span>
    </a>
    <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm
     text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400
      dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-solid-bg" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="w-full  md:block md:w-auto bg-blend-difference mix-blend-difference text-slate-950 " id="navbar-solid-bg">
        <ul class="flex flex-col font-medium mt-4 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0
         md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700 ">
        <li class="lg:mx-7 ">
            <a href="{{url('/')}}" class="block text- py-2 px-3 md:p-0 text-white  bg-blue-700 rounded md:bg-transparent md:dark:bg-transparent hover:bg-gray-100 md:hover:bg-transparent md:border-0
            md:hover:text-blue-700  md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-gray-900
            md:dark:hover:bg-transparent mix-blend-lighten" aria-current="page">Home</a>
        </li>
        <li class="lg:px-7">
            <a href="{{url('/artikel')}}" class="block py-2 px-3 md:p-0 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0
             md:hover:text-blue-700  md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-gray-900
             md:dark:hover:bg-transparent">Artikel</a>
         </li>
        <li class="lg:pl-7">
            <a href="{{url('/event')}}" class="block py-2 px-3 md:p-0 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0
             md:hover:text-blue-700 text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-gray-900
              md:dark:hover:bg-transparent">Event</a>
        </li>
        </ul>
    </div>
    </div>
</nav>
