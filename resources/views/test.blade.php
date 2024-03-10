<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/d0fb25e48c.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <title>Document</title>


    <style>
        html,body{height:100%;-webkit-font-smoothing:antialiased;scrollbar-width:none;-ms-overflow-style:none}body::-webkit-scrollbar{display:none}::-moz-selection{color:white;background:#10b981}::selection{color:white;background:#10b981}
        </style>
        </head>
        <body class="bg-gray-50">
          <nav id="header" class="bg-white fixed w-full z-10 top-0">
            <div id="progress" class="h-1 z-20 top-0" style="
                    background: linear-gradient(
                      to right,
                      #10b981 var(--scroll),
                      transparent 0
                    );
                  ">
            </div>
            <div id="nav-content" class="w-full text-gray-700 bg-gray-50 md:bg-transparent">
              <div x-data="{ open: false }"
                class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                <div class="p-4 flex flex-row items-center justify-between">
                  <a href="#"
                    class="text-2xl md:text-3xl font-bold tracking-normal text-gray-900 rounded-lg focus:outline-none focus:shadow-outline">Gonewz<span
                      style="color: #FF7F50;">.</span></a>
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

          <!-- component -->
<div class="md:flex items-start justify-center py-12 2xl:px-20 md:px-6 px-4 mt-20">
    <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
  
    <div class="xl:w-2/6 lg:w-2/5 w-80 md:block hidden">
      <img class="w-full" alt="image of a girl posing" src="https://i.ibb.co/QMdWfzX/component-image-one.png" />
    </div>
    <div class="md:hidden">
      <img class="w-full" alt="image of a girl posing" src="https://i.ibb.co/QMdWfzX/component-image-one.png" />
      <div class="flex items-center justify-between mt-3 space-x-4 md:space-x-0">
        <img alt="image-tag-one" class="md:w-48 md:h-48 w-full" src="https://i.ibb.co/cYDrVGh/Rectangle-245.png" />
        <img alt="image-tag-one" class="md:w-48 md:h-48 w-full" src="https://i.ibb.co/f17NXrW/Rectangle-244.png" />
        <img alt="image-tag-one" class="md:w-48 md:h-48 w-full" src="https://i.ibb.co/cYDrVGh/Rectangle-245.png" />
        <img alt="image-tag-one" class="md:w-48 md:h-48 w-full" src="https://i.ibb.co/f17NXrW/Rectangle-244.png" />
      </div>
    </div>
    <div class="xl:w-2/5 md:w-1/2 lg:ml-8 md:ml-6 md:mt-0 mt-6">
      <div class="border-b border-gray-200 pb-6">
    <p class="text-sm leading-none text-gray-600 dark:text-gray-300 ">{</p>
        <h1 class="lg:text-2xl text-xl font-semibold lg:leading-6 leading-7 text-gray-800 dark:text-white mt-2">{{$event->title}}</h1>
      </div>
      <div class="py-4 border-b border-gray-200 flex items-center justify-between">
        <p class="text-base leading-4 text-gray-800 dark:text-gray-300">Colours</p>
        <div class="flex items-center justify-center">
          <p class="text-sm leading-none text-gray-600 dark:text-gray-300">Smoke Blue with red accents</p>
          <div class="w-6 h-6 bg-gradient-to-b from-gray-900 to-indigo-500 ml-3 mr-4 cursor-pointer"></div>
          <svg class="cursor-pointer text-gray-300 dark:text-white" width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1L5 5L1 9" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </div>
      <div class="py-4 border-b border-gray-200 flex items-center justify-between">
        <p class="text-base leading-4 text-gray-800 dark:text-gray-300">Size</p>
        <div class="flex items-center justify-center">
          <p class="text-sm leading-none text-gray-600 dark:text-gray-300 mr-3">38.2</p>
          <svg class="text-gray-300 dark:text-white cursor-pointer" width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1L5 5L1 9" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </div>
      <button class="dark:bg-white dark:text-gray-900 dark:hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-base flex items-center justify-center leading-none text-white bg-gray-800 w-full py-4 hover:bg-gray-700 focus:outline-none">
        <svg class="mr-3 text-white dark:text-gray-900" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M7.02301 7.18999C7.48929 6.72386 7.80685 6.12992 7.93555 5.48329C8.06425 4.83666 7.9983 4.16638 7.74604 3.55724C7.49377 2.94809 7.06653 2.42744 6.51835 2.06112C5.97016 1.6948 5.32566 1.49928 4.66634 1.49928C4.00703 1.49928 3.36252 1.6948 2.81434 2.06112C2.26615 2.42744 1.83891 2.94809 1.58665 3.55724C1.33439 4.16638 1.26843 4.83666 1.39713 5.48329C1.52583 6.12992 1.8434 6.72386 2.30968 7.18999L4.66634 9.54749L7.02301 7.18999Z" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M4.66699 4.83333V4.84166" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M13.69 13.8567C14.1563 13.3905 14.4738 12.7966 14.6025 12.15C14.7312 11.5033 14.6653 10.8331 14.413 10.2239C14.1608 9.61476 13.7335 9.09411 13.1853 8.72779C12.6372 8.36148 11.9926 8.16595 11.3333 8.16595C10.674 8.16595 10.0295 8.36148 9.48133 8.72779C8.93314 9.09411 8.5059 9.61476 8.25364 10.2239C8.00138 10.8331 7.93543 11.5033 8.06412 12.15C8.19282 12.7966 8.51039 13.3905 8.97667 13.8567L11.3333 16.2142L13.69 13.8567Z" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M11.333 11.5V11.5083" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        Check availability in store
      </button>
      <div>
        <p class="xl:pr-48 text-base lg:leading-tight leading-normal text-gray-600 dark:text-gray-300 mt-7">It is a long established fact that a reader will be distracted by thereadable content of a page when looking at its layout. The point of usingLorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
        <p class="text-base leading-4 mt-7 text-gray-600 dark:text-gray-300">Product Code: 8BN321AF2IF0NYA</p>
        <p class="text-base leading-4 mt-4 text-gray-600 dark:text-gray-300">Length: 13.2 inches</p>
        <p class="text-base leading-4 mt-4 text-gray-600 dark:text-gray-300">Height: 10 inches</p>
        <p class="text-base leading-4 mt-4 text-gray-600 dark:text-gray-300">Depth: 5.1 inches</p>
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
  </script>
</body>
</html>