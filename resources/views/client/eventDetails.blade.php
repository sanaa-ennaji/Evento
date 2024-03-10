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
                    {{-- <form action="/search" method="get">
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
                    </form> --}}
                  </div>
                </div>
              </div>
            </div>
          </nav>

     
<div class="md:flex items-start justify-center py-12 2xl:px-20 md:px-6 px-4 mt-20">
    <div class="xl:w-2/6 lg:w-2/5 w-80 md:block hidden">
      <img class="w-full" alt="image of a girl posing"  src="{{asset('storage/img/' . $event->image)}}" />
    </div>
    <div class="md:hidden">
      <img class="w-full" alt="image of a girl posing"  src="{{asset('storage/img/' . $event->image)}}" />
    </div>

    <div class="xl:w-2/5 md:w-1/2 lg:ml-8 md:ml-6 md:mt-0 mt-6">
      <form action="/createReservation" method="POST">
        @csrf
        <input type="hidden" name="event_id" value="{{ $event->id }}">
      <div class="border-b border-gray-200 pb-6">
        <h1 class="lg:text-2xl text-xl font-semibold lg:leading-6 leading-7 text-gray-800 dark:text-white mt-2">{{$event->title}}</h1>
      </div>
      <div class="py-4 border-b border-gray-200 flex items-center justify-between">
        <input type="checkbox" name="type" id="normal_price" value=" {{$event->normal_price}}">
        <p class="text-base leading-4 text-gray-800 dark:text-gray-300"> Normal -  {{$event->normal_price}}$</p>
      </div>
      <div class="py-4 border-b border-gray-200 flex items-center justify-between">
        <input type="checkbox" name="type" id="vip_price" value= "{{$event->VIP_price}}">
        <p class="text-base leading-4 text-gray-800 dark:text-gray-300">VIP -  {{$event->VIP_price}}$ </p>
      </div>
      <button type="submit" class="bg-purple-600 dark:text-gray-900 hover:bg-purple-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-base flex items-center justify-center leading-none text-white bg-gray-800 w-full py-4 hover:bg-gray-700 focus:outline-none">
       Réservez maintenant !
      </button>
      <div>
      </form>
        <p class="xl:pr-48 text-base lg:leading-tight leading-normal text-gray-600 dark:text-gray-300 mt-7"> {{$event->description}}</p>
        <p class="text-base leading-4 mt-7 text-gray-600 dark:text-gray-300">date:  {{$event->date}}</p>
        <p class="text-base leading-4 mt-4 text-gray-600 dark:text-gray-300">time:  {{$event->event_time}}</p>
        <p class="text-base leading-4 mt-4 text-gray-600 dark:text-gray-300">lieu: {{$event->lieu}}</p>
        <p class="text-base leading-4 mt-4 text-gray-600 dark:text-gray-300">organisated by:  {{$event->creator->name}}</p>
        <p class="md:w-96 text-base leading-normal text-gray-600 dark:text-gray-300 mt-4">Composition: 100% calf leather, inside: 100% lamb leather</p>
      </div>
      <div>
        <div class="border-t border-b py-4 mt-7 border-gray-200">
          <div data-menu class="flex justify-between items-center cursor-pointer">
            <p class="text-base leading-4 text-gray-800 dark:text-gray-300">Shipping and returns</p>
            <button class="cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 rounded" role="button" aria-label="show or hide">
              <svg class="transform text-gray-300 dark:text-white" width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 1L5 5L1 1" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </button>
          </div>
          <div class="hidden pt-4 text-base leading-normal pr-12 mt-4 text-gray-600 dark:text-gray-300" id="sect">You will be responsible for paying for your own shipping costs for returning your item. Shipping costs are nonrefundable</div>
        </div>
      </div>
      <div>
        <div class="border-b py-4 border-gray-200">
          <div data-menu class="flex justify-between items-center cursor-pointer">
            <p class="text-base leading-4 text-gray-800 dark:text-gray-300">Contact us</p>
            <button class="cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 rounded" role="button" aria-label="show or hide">
              <svg class="transform text-gray-300 dark:text-white" width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 1L5 5L1 1" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </button>
          </div>
          <div class="hidden pt-4 text-base leading-normal pr-12 mt-4 text-gray-600 dark:text-gray-300" id="sect">If you have any questions on how to return your item to us, contact us.</div>
        </div>
      </div>
    </div>
  </div>

<script>
  @if(session('success'))
    
      document.addEventListener('DOMContentLoaded', function() {
          document.getElementById('successModal').classList.remove('hidden');
      });
  @endif
</script>


<div id="successModal" class="hidden fixed inset-0 z-10 overflow-y-auto">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    
      <div class="fixed inset-0 transition-opacity" aria-hidden="true">
          <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
      </div>

     
      <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
      <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
          <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
              <div class="sm:flex sm:items-start">
                  <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                    
                      <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>
                  </div>
                  <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                      <h3 class="text-lg leading-6 font-medium text-gray-900">
                          Reservation Successful
                      </h3>
                      <div class="mt-2">
                          <p class="text-sm text-gray-500">
                              {{ session('success') }}
                          </p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
              <button type="button" onclick="closeModal('successModal')" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-purple-600 text-base font-medium text-white hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm">
                 confirme
              </button>
          </div>
      </div>
  </div>
</div>




  <script>
      let elements = document.querySelectorAll("[data-menu]");
  for (let i = 0; i < elements.length; i++) {
    let main = elements[i];
    main.addEventListener("click", function () {
      let element = main.parentElement.parentElement;
      let andicators = main.querySelectorAll("svg");
      let child = element.querySelector("#sect");
      child.classList.toggle("hidden");
      andicators[0].classList.toggle("rotate-180");
    });
  }

  function closeModal(modalId) {
        const modal = document.getElementById(modalId);
        modal.classList.add('hidden');
    }

  </script>
</body>
</html>