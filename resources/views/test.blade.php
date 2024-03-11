<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/d0fb25e48c.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-/9aY7NsCmF7Mg9g5yFJ9X9ZvoNpTl/zhVeJLrVgKsA7Fd2bFi1FfSwp4yBS90MO9+eQuGGPsT0k4+qtS8OioRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>


    <style>
        html,body{height:100%;-webkit-font-smoothing:antialiased;scrollbar-width:none;-ms-overflow-style:none}body::-webkit-scrollbar{display:none}::-moz-selection{color:white;background:#b336a9}::selection{color:white;background:#ba1f98}
        </style>
        </head>
        <body class="bg-gray-50">
          <nav id="header" class="bg-white fixed w-full z-10 top-0">
            <div id="progress" class="h-1 z-20 top-0" style="
                    background: linear-gradient(
                      to right,
                      #992c9e var(--scroll),
                      transparent 0
                    );
                  ">
            </div>
            <div id="nav-content" class="w-full text-gray-700 bg-gray-50 md:bg-transparent">
              <div x-data="{ open: false }"
                class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                <div class="p-4 flex flex-row items-center justify-between">
                  <a href="/evento" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="../img/evento2.png" class="h-10 " alt="Logo" />
                    <span
                        class="font-mono text-3xl font-semibold whitespace-nowrap text-purple-500 dark:text-white ">Evento</span>
                </a>
                  <button class="md:hidden rounded-lg focus:outline-none focus:shadow-none" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                      <path x-show="!open" fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                      <path x-show="open" fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </button>
                </div>
                <div :class="{'flex': open, 'hidden': !open}"
                  class="font-sans flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
                  <a class="px-4 py-2 mt-2 text-black md:mt-0 md:ml-4 hover:underline" href="#">Business</a>
                  <a class="px-4 py-2 mt-2 text-black md:mt-0 md:ml-4 hover:underline"
                    href="#">Technology</a>
                  <a class="px-4 py-2 mt-2 text-black md:mt-0 md:ml-4 hover:underline"
                    href="https://github.com/ahampriyanshu/gonewz">About</a>

                  <div class="relative text-gray-600 bg-white flex items-center rounded-full">
                    <button type="button" class="flex text-sm  md:me-0  " id="user-menu-button" aria-expanded="false"
                    data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">

                    <img class="mt-3 w-8 h-8 rounded-full" src="img/pexels-designecologist-2526105 copy.jpg"
                        alt="user photo">


                    <div class="p-2 md:block text-left">
                        <h2 class="text-sm font-semibold text-gray-800">{{ Auth::user()->name }}</h2>
                        <p class="text-xs text-gray-500">{{ Auth::user()->role }}</p>
                    </div>
                </button>



                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                        <span
                            class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email }}</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">profile</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">reservation</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 pt-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button id="bot">

                                        <span>Logout</span>
                                    </button>
                                </form>
                            </a>
                        </li>
                    </ul>
                </div>
                    <form action="/search" method="get">
                      <input name="q" id="search" type="text" placeholder="Search..." placeholder="Search"
                        class="bg-white h-10 px-4 md:px-6 lg:px-8 rounded-full text-sm placeholder-green-600 focus:outline-none">
                      <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                        <svg class="h-4 w-4 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                          viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                          width="512px" height="512px">
                          <path
                            d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                        </svg>
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </nav>


             {{-- <div  class="relative" data-carousel="static">

        <div class="relative h-[90%] overflow-hidden w-[85%] mx-auto my-10 ">

            <div class="hidden duration-700 ease-in-out " data-carousel-item>
                <img src="img/pexels-wendy-wei-3812950.jpg"
                    class="absolute block w-full mt-50 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
            </div>

            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                <img src="img/pexels-josh-sorenson-976866.jpg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>

            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="img/pexels-josh-sorenson-976866.jpg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>

            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="img/pexels-luis-quintero-2774556.jpg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>

            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="img/pexels-wendy-wei-3812950.jpg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-5 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div> --}}