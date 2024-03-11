<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/d0fb25e48c.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;1,100&display=swap"
rel="stylesheet" />
    <title>Document</title>
    <style>
        #controls-carousel {
            height: 100vh;
            background-color: rgb(206, 200, 208);

        }
    </style>
</head>

<body id="controls-carousel" >
    <nav class="bg-white border-gray-200 dark:bg-gray-900 py-2">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-4 ">
            <a href="/evento" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="../img/evento2.png" class="h-10 " alt="Logo" />
                <span
                    class="font-mono text-3xl font-semibold whitespace-nowrap text-purple-500 dark:text-white ">Evento</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
               
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
              

                <button data-collapse-toggle="navbar-cta" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-cta" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>

            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 md:p-0 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:dark:text-blue-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 d:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="mx-auto max-w-lg mt-40">
        <div class="bg-white rounded-lg overflow-hidden shadow-lg">
            <div class="px-6 py-4">
                <div class="flex justify-between items-center">
                  
                        <img src="../img/evento2.png" class="h-10 " alt="Logo" />
                        <span
                            class="font-mono text-3xl font-semibold whitespace-nowrap text-purple-500 dark:text-white ">Evento</span>
                   
                </div>
                <div class="mt-4">
                    <div class="font-bold text-gray-800 text-xl">{{$reservation->event->title}}</div>
                    <div class="flex justify-between items-center mt-2">
                        <div class="text-sm text-gray-600">{{$reservation->type}}</div>
                        <img class="h-10 w-10" src="https://www.svgrepo.com/show/362011/mastercard.svg" alt="Mastercard logo">
                    </div>
                </div>
            </div>
            <div class="bg-gray-100 px-6 py-4">
                <div class="font-medium text-gray-600">{{$reservation->event->date}}</div>
                <div class="text-lg font-bold text-gray-800 mt-2">***</div>
            </div>
        </div>
    </div>
 
      <script src="../js/cities.js"></script>
</body>

</html>
