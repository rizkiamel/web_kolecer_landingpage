<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jasa Pembuatan Website</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="bg-[#EEEFF2] dark:bg-gray-800">
   <!--Navbar component -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<div class="sticky top-0 w-full z-10"> 
<div class=" text-black bg-[#EEEFF2] dark:text-gray-200 dark:bg-[#272E35]">
  <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-20">
    <div class="p-2 flex flex-row items-center justify-between">
        <input type="checkbox" name="" id="toogle" class="hidden">
        <label for="toogle">
        <div class="w-9 h-5 flex items-center bg-gray-300 dark:bg-gray-700 rounded-full p-1 shadow-md cursor-pointer">
            <div class="toogle-dot w-4 h-4 rounded-full bg-white shadow-sm transform duration-300 ease-in-out">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 dark:hidden " fill="none" viewBox="0 0 24 24" stroke="#f39316" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 hidden dark:block" fill="none" viewBox="0 0 24 24" stroke="#353536" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </div>
            </div>
        </div>
        </label>
        <img src="/assets/images/Icon/iconkolecer.png" alt="">
      <a href="#" class="text-lg font-semibold tracking-widest text-black lowercase rounded-lg dark:text-gray-200 focus:outline-none focus:shadow-outline">kolecermediakreatif</a>
      <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
          <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
      </button>
    </div>
    <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
      <a class="px-4 py-2 mt-2 text-sm font-semibold text-white bg-[#a9b2c9] rounded-lg dark-mode:bg-pink-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:bg-[#969db1] focus:bg-pink-500  focus:outline-none focus:shadow-outline" href="/index">Beranda</a>
      <div @click.away="open = false" class="relative" x-data="{ open: false }">
        <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:bg-[#969db1] focus:bg-pink-500 hover:text-white focus:text-white focus:outline-none focus:shadow-outline">
          <span>Layanan Jasa</span>
          <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
          <div class="px-2 py-2 bg-[#EEEFF2] dark:bg-gray-500 rounded-md shadow dark-mode:bg-gray-800">
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-800 dark:focus:bg-gray-600 dark:focus:text-black dark:hover:text-white dark:text-black md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Extended Reality</a>
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-800 dark:focus:bg-gray-600 dark:focus:text-black dark:hover:text-white dark:text-black md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Mobile Apps</a>
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-800 dark:focus:bg-gray-600 dark:focus:text-black dark:hover:text-white dark:text-black md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Website</a>
          </div>
        </div>
      </div>    
      <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-pink-500 focus:outline-none focus:shadow-outline" href="login.html">Masuk</a>
      <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 bg-pink-500 hover:bg-pink-800 text-white focus:outline-none focus:shadow-outline" href="#">Daftar</a>
    </nav>
  </div>
</div>
</div>
<!--Akhir Navbar Component-->

<!--Web Content1 Component-->
 <div class="m-4 px-6 py-5 mx-auto sm:max-w-lg md:max-w-xl lg:max-w-5xl lg:flex justify-center flex-col">
    <div class="py-3 px-2 max-w-xl mx-auto">
        <h1 class="text-5xl text-center font-semibold dark:text-white">Buat Websitemu Sesuai dengan Keinginan</h1>
    </div>
    <div class="mt-5 py-4 px-2 max-w-3xl flex flex-col justify-center mx-auto">
        <p class="text-2xl text-justify font-normal text-[#6E757C] dark:text-[#929aa1]">Membutuhkan website untuk berbisnis, atau kamu memiliki perusahaan? Bahkan membutuhkan website untuk profesional? Kami siap membangun websitemu!</p>
        <img class="w-[100%] h-[100%] mt-8 mx-auto" src="../assets/Jasa1.png" alt="">
    </div>
</div>
<!--Akhir Web Content1 Component-->

<!--Harga Component-->
<div class="m-5">
    <div class="px-6 py-6 max-w-md mx-auto sm:max-w-xl lg:max-2-5xl lg:flex lg:flex-col lg:justify-center">
        <div class="py-2 px-2 max-w-xl">
            <h1 class="text-center font-jost text-4xl sm:text-6xl font-extrabold dark:text-white">Paket pilihan yang diperlukan</h1>
        </div>
    </div>
    <div class="px-6 py-5 mt-10 max-w-md mx-auto sm:max-w-xl lg:max-w-5xl lg:flex bg-white shadow rounded-xl">
    <div class="flex flex-wrap mx-auto">
      <div class="w-full md:w-1/2 lg:w-2/6 px-12 mb-4 mt-10 hover:border-2 hover:border-pink-500 hover:rounded-xl">
         <div class=" text-sm text-grey-dark flex items-center justify-center lg:mr-20">
             <div class="flex-col">
                <h1 class="font-semibold text-center text-3xl lg:text-left"><span class="text-amber-900">Bronze</span> Web</h1>
                <p class="text-5xl font-bold mt-6 text-center">500.000<span class="text-sm font-semibold">/bulan</span></p>
                <hr class="border-[#748FB5] border-1 border-opacity-40 lg:w-[90%] rounded mt-6 mx-auto lg:mx-0" />
                <p class="mt-3 text-black lg:w-11/12 text-center lg:text-left font-semibold">
                    Beautifully simple project planning
                </p>
                <div class="mt-7 text-center lg:text-left">
                    <a class="inline-block px-3 py-2 border-2 mr-5 border-pink-500 bg-pink-500 text-white lg:border-black bg-transparent lg:text-black lg:bg-transparent text-sm 
                    lg:hover:bg-pink-500 lg:hover:text-white lg:hover:border-pink-500 shadow-lg tracking-wider rounded-lg font-semibold
                    sm:px-5 sm:py-3 lg:px-10 lg:py-2" 
                    href="#">Go Online</a>
                </div>
                 <div class="flex flex-col mt-12 ">
            <div class="px-4 pb-2 sm:hidden">
                <div class="">
                    <a @click="isBuka = !isBuka" class=" mt-1 block px-2 py-1 text-slate-700  font-semibold  rounded sm:mt-0 sm:ml-2 font-jost" href="#harga">
                       <div class="flex items-center">
                         <span class="flex items-center mx-auto">Fitur Yang Didapat<svg v-if="!isBuka" class="h-3 w-3 ml-1" viewBox="0 0 13 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-current" id="Polygon 1" d="M6.5 5L0.870836 0.5L12.1292 0.499999L6.5 5Z" fill="black"/>
                        </svg> 
                        <svg v-if="isBuka" class="w-2 h-3 ml-1" viewBox="0 0 5 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="fill-current" id="Polygon 3" d="M4.5 6L-1.48386e-06 11.6292L-9.9174e-07 0.370835L4.5 6Z" fill="black"/>
                        </svg></span>
                       </div>
                    </a>
                </div>
                <div v-if="isBuka" class="px-4 py-2">
                    <ul class="w-full">
                       <li class="flex items-center"><svg class="w-[27px] h-[27px]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0003 29.3334C23.3337 29.3334 29.3337 23.3334 29.3337 16.0001C29.3337 8.66675 23.3337 2.66675 16.0003 2.66675C8.66699 2.66675 2.66699 8.66675 2.66699 16.0001C2.66699 23.3334 8.66699 29.3334 16.0003 29.3334Z" fill="#94AEC6"/>
                        <path d="M10 15.8456L14.3273 20.1726L23.5 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="px-2">Landing Page Responsive</span>
                        </li>
                        <li class="flex items-center mt-2"><svg class="w-[27px] h-[27px]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0003 29.3334C23.3337 29.3334 29.3337 23.3334 29.3337 16.0001C29.3337 8.66675 23.3337 2.66675 16.0003 2.66675C8.66699 2.66675 2.66699 8.66675 2.66699 16.0001C2.66699 23.3334 8.66699 29.3334 16.0003 29.3334Z" fill="#94AEC6"/>
                        <path d="M10 15.8456L14.3273 20.1726L23.5 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="px-2">Fitur Chat Whatsapp</span>
                        </li>
                        <li class="flex items-center mt-2"><svg class="w-[27px] h-[27px]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0003 29.3334C23.3337 29.3334 29.3337 23.3334 29.3337 16.0001C29.3337 8.66675 23.3337 2.66675 16.0003 2.66675C8.66699 2.66675 2.66699 8.66675 2.66699 16.0001C2.66699 23.3334 8.66699 29.3334 16.0003 29.3334Z" fill="#94AEC6"/>
                        <path d="M10 15.8456L14.3273 20.1726L23.5 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="px-2">Gratis Domain *.com</span>
                        </li>
                        <li class="flex items-center mt-2"><svg class="w-[27px] h-[27px]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0003 29.3334C23.3337 29.3334 29.3337 23.3334 29.3337 16.0001C29.3337 8.66675 23.3337 2.66675 16.0003 2.66675C8.66699 2.66675 2.66699 8.66675 2.66699 16.0001C2.66699 23.3334 8.66699 29.3334 16.0003 29.3334Z" fill="#94AEC6"/>
                        <path d="M10 15.8456L14.3273 20.1726L23.5 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="px-2">1 Email Domain *.com</span>
                        </li>
                        <li class="flex items-center mt-2"><svg class="w-[27px] h-[27px]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0003 29.3334C23.3337 29.3334 29.3337 23.3334 29.3337 16.0001C29.3337 8.66675 23.3337 2.66675 16.0003 2.66675C8.66699 2.66675 2.66699 8.66675 2.66699 16.0001C2.66699 23.3334 8.66699 29.3334 16.0003 29.3334Z" fill="#94AEC6"/>
                        <path d="M10 15.8456L14.3273 20.1726L23.5 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="px-2">Shared Hosting</span>
                        </li>
                   </ul>
                   </div>
                </div>
                   <h3 class="text-2xl font-semibold text-center lg:text-left hidden sm:block">Bronze Benefit</h3>
                   <ul class="w-full mt-6 hidden sm:block">
                       <li class="flex items-center"><svg class="w-[32px] h-[32px]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0003 29.3334C23.3337 29.3334 29.3337 23.3334 29.3337 16.0001C29.3337 8.66675 23.3337 2.66675 16.0003 2.66675C8.66699 2.66675 2.66699 8.66675 2.66699 16.0001C2.66699 23.3334 8.66699 29.3334 16.0003 29.3334Z" fill="#94AEC6"/>
                        <path d="M10 15.8456L14.3273 20.1726L23.5 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="px-2">Landing Page Responsive</span>
                        </li>
                        <li class="flex items-center"><svg class="w-[32px] h-[32px]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0003 29.3334C23.3337 29.3334 29.3337 23.3334 29.3337 16.0001C29.3337 8.66675 23.3337 2.66675 16.0003 2.66675C8.66699 2.66675 2.66699 8.66675 2.66699 16.0001C2.66699 23.3334 8.66699 29.3334 16.0003 29.3334Z" fill="#94AEC6"/>
                        <path d="M10 15.8456L14.3273 20.1726L23.5 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="px-2">Fitur Chat Whatsapp</span>
                        </li>
                        <li class="flex items-center"><svg class="w-[32px] h-[32px]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0003 29.3334C23.3337 29.3334 29.3337 23.3334 29.3337 16.0001C29.3337 8.66675 23.3337 2.66675 16.0003 2.66675C8.66699 2.66675 2.66699 8.66675 2.66699 16.0001C2.66699 23.3334 8.66699 29.3334 16.0003 29.3334Z" fill="#94AEC6"/>
                        <path d="M10 15.8456L14.3273 20.1726L23.5 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="px-2">Gratis Domain *.com</span>
                        </li>
                        <li class="flex items-center"><svg class="w-[32px] h-[32px]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0003 29.3334C23.3337 29.3334 29.3337 23.3334 29.3337 16.0001C29.3337 8.66675 23.3337 2.66675 16.0003 2.66675C8.66699 2.66675 2.66699 8.66675 2.66699 16.0001C2.66699 23.3334 8.66699 29.3334 16.0003 29.3334Z" fill="#94AEC6"/>
                        <path d="M10 15.8456L14.3273 20.1726L23.5 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="px-2">1 Email Domain *.com</span>
                        </li>
                        <li class="flex items-center"><svg class="w-[32px] h-[32px]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0003 29.3334C23.3337 29.3334 29.3337 23.3334 29.3337 16.0001C29.3337 8.66675 23.3337 2.66675 16.0003 2.66675C8.66699 2.66675 2.66699 8.66675 2.66699 16.0001C2.66699 23.3334 8.66699 29.3334 16.0003 29.3334Z" fill="#94AEC6"/>
                        <path d="M10 15.8456L14.3273 20.1726L23.5 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="px-2">Shared Hosting</span>
                        </li>
                   </ul>
               </div>
            </div>
        </div>
      </div>
      <div class="w-full md:w-1/2 lg:w-2/6 px-12 mb-4 mt-10 hover:border-2 hover:border-pink-500 hover:rounded-xl">
         <div class="text-sm text-grey-dark flex items-center justify-center">
            <div class="flex-col">
                <h1 class="font-semibold text-center text-3xl lg:text-left"><span class="text-stone-400">Silver</span> Web</h1>
                <p class="text-5xl font-bold mt-6 text-center lg:text-left">1.000.000<span class="text-sm font-semibold">/bulan</span></p>
                <hr class="border-[#748FB5] border-1 border-opacity-40 lg:w-[90%] rounded mt-6 mx-auto lg:mx-0" />
                <p class="mt-3 text-black lg:w-2/3 text-center lg:text-left font-semibold">
                    Beautifully simple project planning
                </p>
                <div class="mt-7 text-center lg:text-left">
                    <a class="inline-block px-3 py-2 border-2 mr-5 border-pink-500 bg-pink-500 text-white lg:border-black bg-transparent lg:text-black lg:bg-transparent text-sm 
                    lg:hover:bg-pink-500 lg:hover:text-white lg:hover:border-pink-500 shadow-lg tracking-wider rounded-lg font-semibold
                    sm:px-5 sm:py-3 lg:px-10 lg:py-2" 
                    href="#">Go Online</a>
                </div>
                 <div class="flex flex-col mt-12">
                    <div class="px-4 pb-2 sm:hidden">
                <div class="">
                    <a @click="isOpen = !isOpen" class=" mt-1 block px-2 py-1 text-slate-700  font-semibold  rounded sm:mt-0 sm:ml-2 font-jost" href="#harga">
                       <div class="flex items-center">
                         <span class="flex items-center mx-auto">Fitur Yang Didapat<svg v-if="!isOpen" class="h-3 w-3 ml-1" viewBox="0 0 13 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-current" id="Polygon 1" d="M6.5 5L0.870836 0.5L12.1292 0.499999L6.5 5Z" fill="black"/>
                        </svg> 
                        <svg v-if="isOpen" class="w-2 h-3 ml-1" viewBox="0 0 5 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="fill-current" id="Polygon 3" d="M4.5 6L-1.48386e-06 11.6292L-9.9174e-07 0.370835L4.5 6Z" fill="black"/>
                        </svg></span>
                       </div>
                    </a>
                </div>
                <div v-if="isOpen" class="px-4 py-2">
                    <ul class="w-full">
                       <li class="flex items-center"><svg class="w-[27px] h-[27px]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0003 29.3334C23.3337 29.3334 29.3337 23.3334 29.3337 16.0001C29.3337 8.66675 23.3337 2.66675 16.0003 2.66675C8.66699 2.66675 2.66699 8.66675 2.66699 16.0001C2.66699 23.3334 8.66699 29.3334 16.0003 29.3334Z" fill="#94AEC6"/>
                        <path d="M10 15.8456L14.3273 20.1726L23.5 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="px-2">Up to 5 Dynamic Page</span>
                    </li>
                       <li class="flex items-center mt-2"><svg class="w-[27px] h-[27px]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0003 29.3334C23.3337 29.3334 29.3337 23.3334 29.3337 16.0001C29.3337 8.66675 23.3337 2.66675 16.0003 2.66675C8.66699 2.66675 2.66699 8.66675 2.66699 16.0001C2.66699 23.3334 8.66699 29.3334 16.0003 29.3334Z" fill="#94AEC6"/>
                        <path d="M10 15.8456L14.3273 20.1726L23.5 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="px-2">All Page Responsive</span>
                    </li>
                       <li class="flex items-center mt-2"><svg class="w-[27px] h-[27px]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0003 29.3334C23.3337 29.3334 29.3337 23.3334 29.3337 16.0001C29.3337 8.66675 23.3337 2.66675 16.0003 2.66675C8.66699 2.66675 2.66699 8.66675 2.66699 16.0001C2.66699 23.3334 8.66699 29.3334 16.0003 29.3334Z" fill="#94AEC6"/>
                        <path d="M10 15.8456L14.3273 20.1726L23.5 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="px-2">Fitur Chat Whatsapp</span>
                    </li>
                       <li class="flex items-center mt-2"><svg class="w-[27px] h-[27px]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0003 29.3334C23.3337 29.3334 29.3337 23.3334 29.3337 16.0001C29.3337 8.66675 23.3337 2.66675 16.0003 2.66675C8.66699 2.66675 2.66699 8.66675 2.66699 16.0001C2.66699 23.3334 8.66699 29.3334 16.0003 29.3334Z" fill="#94AEC6"/>
                        <path d="M10 15.8456L14.3273 20.1726L23.5 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="px-2">Gratis Domain *.com / *.id</span>
                    </li>
                       <li class="flex items-center mt-2"><svg class="w-[27px] h-[27px]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0003 29.3334C23.3337 29.3334 29.3337 23.3334 29.3337 16.0001C29.3337 8.66675 23.3337 2.66675 16.0003 2.66675C8.66699 2.66675 2.66699 8.66675 2.66699 16.0001C2.66699 23.3334 8.66699 29.3334 16.0003 29.3334Z" fill="#94AEC6"/>
                        <path d="M10 15.8456L14.3273 20.1726L23.5 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg><span class="px-2">10 Email Domain *.com / *.id</span>
                    </li>
                    <li class="flex items-center mt-2"><svg class="w-[27px] h-[27px]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0003 29.3334C23.3337 29.3334 29.3337 23.3334 29.3337 16.0001C29.3337 8.66675 23.3337 2.66675 16.0003 2.66675C8.66699 2.66675 2.66699 8.66675 2.66699 16.0001C2.66699 23.3334 8.66699 29.3334 16.0003 29.3334Z" fill="#94AEC6"/>
                        <path d="M10 15.8456L14.3273 20.1726L23.5 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="px-2">Shared Hosting</span>
                    </li>
                   </ul>
                   </div>
                </div>
                   <h3 class="text-2xl font-semibold hidden sm:block">Silver Benefit</h3>
                   <ul class="w-full mt-6 hidden sm:block">
                       <li class="flex items-center"><svg class="w-[32px] h-[32px]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0003 29.3334C23.3337 29.3334 29.3337 23.3334 29.3337 16.0001C29.3337 8.66675 23.3337 2.66675 16.0003 2.66675C8.66699 2.66675 2.66699 8.66675 2.66699 16.0001C2.66699 23.3334 8.66699 29.3334 16.0003 29.3334Z" fill="#94AEC6"/>
                        <path d="M10 15.8456L14.3273 20.1726L23.5 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="px-2">Up to 5 Dynamic Page</span>
                    </li>
                       <li class="flex items-center"><svg class="w-[32px] h-[32px]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0003 29.3334C23.3337 29.3334 29.3337 23.3334 29.3337 16.0001C29.3337 8.66675 23.3337 2.66675 16.0003 2.66675C8.66699 2.66675 2.66699 8.66675 2.66699 16.0001C2.66699 23.3334 8.66699 29.3334 16.0003 29.3334Z" fill="#94AEC6"/>
                        <path d="M10 15.8456L14.3273 20.1726L23.5 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="px-2">All Page Responsive</span>
                    </li>
                       <li class="flex items-center"><svg class="w-[32px] h-[32px]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0003 29.3334C23.3337 29.3334 29.3337 23.3334 29.3337 16.0001C29.3337 8.66675 23.3337 2.66675 16.0003 2.66675C8.66699 2.66675 2.66699 8.66675 2.66699 16.0001C2.66699 23.3334 8.66699 29.3334 16.0003 29.3334Z" fill="#94AEC6"/>
                        <path d="M10 15.8456L14.3273 20.1726L23.5 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="px-2">Fitur Chat Whatsapp</span>
                    </li>
                       <li class="flex items-center"><svg class="w-[32px] h-[32px]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0003 29.3334C23.3337 29.3334 29.3337 23.3334 29.3337 16.0001C29.3337 8.66675 23.3337 2.66675 16.0003 2.66675C8.66699 2.66675 2.66699 8.66675 2.66699 16.0001C2.66699 23.3334 8.66699 29.3334 16.0003 29.3334Z" fill="#94AEC6"/>
                        <path d="M10 15.8456L14.3273 20.1726L23.5 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="px-2">Gratis Domain *.com / *.id</span>
                    </li>
                       <li class="flex items-center"><svg class="w-[32px] h-[32px]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0003 29.3334C23.3337 29.3334 29.3337 23.3334 29.3337 16.0001C29.3337 8.66675 23.3337 2.66675 16.0003 2.66675C8.66699 2.66675 2.66699 8.66675 2.66699 16.0001C2.66699 23.3334 8.66699 29.3334 16.0003 29.3334Z" fill="#94AEC6"/>
                        <path d="M10 15.8456L14.3273 20.1726L23.5 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg><span class="px-2">10 Email Domain *.com / *.id</span>
                    </li>
                    <li class="flex items-center"><svg class="w-[32px] h-[32px]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0003 29.3334C23.3337 29.3334 29.3337 23.3334 29.3337 16.0001C29.3337 8.66675 23.3337 2.66675 16.0003 2.66675C8.66699 2.66675 2.66699 8.66675 2.66699 16.0001C2.66699 23.3334 8.66699 29.3334 16.0003 29.3334Z" fill="#94AEC6"/>
                        <path d="M10 15.8456L14.3273 20.1726L23.5 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="px-2">Shared Hosting</span>
                    </li>
                   </ul>
                </div>
            </div>
         </div>
      </div>
      <div class="w-full md:w-1/2 lg:w-2/6 px-12 mb-4 mt-10 md:mx-auto hover:border-2 hover:border-pink-500 hover:rounded-xl">
         <div class="text-sm text-grey-dark flex items-center justify-center ">
            <div class="flex-col">
                <h1 class="font-semibold text-center text-3xl lg:text-left"><span class="text-amber-400">Gold</span> Web</h1>
                <p class="text-5xl font-bold mt-6 text-center lg:text-left">1.500.000<span class="text-sm font-semibold">/bulan</span></p>
                <hr class="border-[#748FB5] border-1 border-opacity-40 lg:w-[90%] rounded mt-6 mx-auto lg:mx-0" />
                <p class="mt-3 text-black lg:w-2/3 text-center lg:text-left font-semibold">
                    Beautifully simple project planning
                </p>
                <div class="mt-7 text-center lg:text-left">
                    <a class="inline-block px-3 py-2 border-2 mr-5 border-pink-500 bg-pink-500 text-white lg:border-black bg-transparent lg:text-black lg:bg-transparent text-sm 
                    lg:hover:bg-pink-500 lg:hover:text-white lg:hover:border-pink-500 shadow-lg tracking-wider rounded-lg font-semibold
                    sm:px-5 sm:py-3 lg:px-10 lg:py-2" 
                    href="#">Go Online</a>
                </div>
                <div class="flex flex-col mt-12">
                    <div class="px-4 pb-2 sm:hidden">
                <div class="">
                    <a @click="isOpened = !isOpened" class=" mt-1 block px-2 py-1 text-slate-700  font-semibold  rounded sm:mt-0 sm:ml-2 font-jost" href="#harga">
                       <div class="flex items-center">
                         <span class="flex items-center mx-auto">Fitur Yang Didapat<svg v-if="!isOpened" class="h-3 w-3 ml-1" viewBox="0 0 13 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-current" id="Polygon 1" d="M6.5 5L0.870836 0.5L12.1292 0.499999L6.5 5Z" fill="black"/>
                        </svg> 
                        <svg v-if="isOpened" class="w-2 h-3 ml-1" viewBox="0 0 5 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="fill-current" id="Polygon 3" d="M4.5 6L-1.48386e-06 11.6292L-9.9174e-07 0.370835L4.5 6Z" fill="black"/>
                        </svg></span>
                       </div>
                    </a>
                </div>
                <div v-if="isOpened" class="px-4 py-2">
                    <ul class="w-full">
                       <li class="flex items-center"><svg class="w-[27px] h-[27px]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0003 29.3334C23.3337 29.3334 29.3337 23.3334 29.3337 16.0001C29.3337 8.66675 23.3337 2.66675 16.0003 2.66675C8.66699 2.66675 2.66699 8.66675 2.66699 16.0001C2.66699 23.3334 8.66699 29.3334 16.0003 29.3334Z" fill="#94AEC6"/>
                        <path d="M10 15.8456L14.3273 20.1726L23.5 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="px-2">Up to 10 Dynamic Page</span>
                    </li>
                       <li class="flex items-center mt-2"><svg class="w-[27px] h-[27px]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0003 29.3334C23.3337 29.3334 29.3337 23.3334 29.3337 16.0001C29.3337 8.66675 23.3337 2.66675 16.0003 2.66675C8.66699 2.66675 2.66699 8.66675 2.66699 16.0001C2.66699 23.3334 8.66699 29.3334 16.0003 29.3334Z" fill="#94AEC6"/>
                        <path d="M10 15.8456L14.3273 20.1726L23.5 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="px-2">All Page Responsive</span>
                    </li>
                       <li class="flex items-center mt-2"><svg class="w-[27px] h-[27px]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0003 29.3334C23.3337 29.3334 29.3337 23.3334 29.3337 16.0001C29.3337 8.66675 23.3337 2.66675 16.0003 2.66675C8.66699 2.66675 2.66699 8.66675 2.66699 16.0001C2.66699 23.3334 8.66699 29.3334 16.0003 29.3334Z" fill="#94AEC6"/>
                        <path d="M10 15.8456L14.3273 20.1726L23.5 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="px-2">Fitur Chat Whatsapp</span>
                    </li>
                       <li class="flex items-center mt-2"><svg class="w-[27px] h-[27px]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0003 29.3334C23.3337 29.3334 29.3337 23.3334 29.3337 16.0001C29.3337 8.66675 23.3337 2.66675 16.0003 2.66675C8.66699 2.66675 2.66699 8.66675 2.66699 16.0001C2.66699 23.3334 8.66699 29.3334 16.0003 29.3334Z" fill="#94AEC6"/>
                        <path d="M10 15.8456L14.3273 20.1726L23.5 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="px-2">Gratis Domain *.com / *.id</span>
                    </li>
                       <li class="flex items-center mt-2"><svg class="w-[32px] h-[32px]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0003 29.3334C23.3337 29.3334 29.3337 23.3334 29.3337 16.0001C29.3337 8.66675 23.3337 2.66675 16.0003 2.66675C8.66699 2.66675 2.66699 8.66675 2.66699 16.0001C2.66699 23.3334 8.66699 29.3334 16.0003 29.3334Z" fill="#94AEC6"/>
                        <path d="M10 15.8456L14.3273 20.1726L23.5 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="px-2">Unlimited Email Domain *.com/*.id</span>
                    </li>
                    <li class="flex items-center mt-2"><svg class="w-[27px] h-[27px]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0003 29.3334C23.3337 29.3334 29.3337 23.3334 29.3337 16.0001C29.3337 8.66675 23.3337 2.66675 16.0003 2.66675C8.66699 2.66675 2.66699 8.66675 2.66699 16.0001C2.66699 23.3334 8.66699 29.3334 16.0003 29.3334Z" fill="#94AEC6"/>
                        <path d="M10 15.8456L14.3273 20.1726L23.5 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="px-2">Cloud Hosting</span>
                    </li>
                   </ul>
                   </div>
                </div>
                   <h3 class="text-2xl font-semibold hidden sm:block">Gold Benefit</h3>
                   <ul class="w-full mt-6 hidden sm:block">
                       <li class="flex items-center"><svg class="w-[32px] h-[32px]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0003 29.3334C23.3337 29.3334 29.3337 23.3334 29.3337 16.0001C29.3337 8.66675 23.3337 2.66675 16.0003 2.66675C8.66699 2.66675 2.66699 8.66675 2.66699 16.0001C2.66699 23.3334 8.66699 29.3334 16.0003 29.3334Z" fill="#94AEC6"/>
                        <path d="M10 15.8456L14.3273 20.1726L23.5 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="px-2">Up to 10 Dynamic Page</span>
                    </li>
                       <li class="flex items-center"><svg class="w-[32px] h-[32px]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0003 29.3334C23.3337 29.3334 29.3337 23.3334 29.3337 16.0001C29.3337 8.66675 23.3337 2.66675 16.0003 2.66675C8.66699 2.66675 2.66699 8.66675 2.66699 16.0001C2.66699 23.3334 8.66699 29.3334 16.0003 29.3334Z" fill="#94AEC6"/>
                        <path d="M10 15.8456L14.3273 20.1726L23.5 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="px-2">All Page Responsive</span>
                    </li>
                       <li class="flex items-center"><svg class="w-[32px] h-[32px]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0003 29.3334C23.3337 29.3334 29.3337 23.3334 29.3337 16.0001C29.3337 8.66675 23.3337 2.66675 16.0003 2.66675C8.66699 2.66675 2.66699 8.66675 2.66699 16.0001C2.66699 23.3334 8.66699 29.3334 16.0003 29.3334Z" fill="#94AEC6"/>
                        <path d="M10 15.8456L14.3273 20.1726L23.5 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="px-2">Fitur Chat Whatsapp</span>
                    </li>
                       <li class="flex items-center"><svg class="w-[32px] h-[32px]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0003 29.3334C23.3337 29.3334 29.3337 23.3334 29.3337 16.0001C29.3337 8.66675 23.3337 2.66675 16.0003 2.66675C8.66699 2.66675 2.66699 8.66675 2.66699 16.0001C2.66699 23.3334 8.66699 29.3334 16.0003 29.3334Z" fill="#94AEC6"/>
                        <path d="M10 15.8456L14.3273 20.1726L23.5 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="px-2">Gratis Domain *.com / *.id</span>
                    </li>
                       <li class="flex items-center"><svg class="w-[32px] h-[32px]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0003 29.3334C23.3337 29.3334 29.3337 23.3334 29.3337 16.0001C29.3337 8.66675 23.3337 2.66675 16.0003 2.66675C8.66699 2.66675 2.66699 8.66675 2.66699 16.0001C2.66699 23.3334 8.66699 29.3334 16.0003 29.3334Z" fill="#94AEC6"/>
                        <path d="M10 15.8456L14.3273 20.1726L23.5 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="px-2">Unlimited Email Domain *.com / *.id</span>
                    </li>
                    <li class="flex items-center"><svg class="w-[32px] h-[32px]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0003 29.3334C23.3337 29.3334 29.3337 23.3334 29.3337 16.0001C29.3337 8.66675 23.3337 2.66675 16.0003 2.66675C8.66699 2.66675 2.66699 8.66675 2.66699 16.0001C2.66699 23.3334 8.66699 29.3334 16.0003 29.3334Z" fill="#94AEC6"/>
                        <path d="M10 15.8456L14.3273 20.1726L23.5 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="px-2">Cloud Hosting</span>
                    </li>
                   </ul>
               </div>
            </div>
         </div>
      </div>
        </div>
    </div>
</div>
<!--Akhir Harga Component-->

<!--Ilustrasi Component-->
  <div class="m-4 mt-20 px-6 py-5 mx-auto sm:max-w-lg md:max-w-xl lg:max-w-5xl lg:flex bg-[#FFFFFF] rounded-xl shadow-xl">
    <div class="hidden lg:flex lg:flex-col lg:justify-center w-1/2">
        <img class="object-center mx-auto lg:-ml-14 h-[300px] w-[300px]" src="../assets/chart.png" alt="chart">
        <h1 class="text-4xl px-4 font-semibold ">Mengapa <br> Pilih Kolecer?</h1>
    </div>
    <div class="lg:p-4 lg:flex-1">
         <img class="mt-4 h-60 sm:h-full rounded-xl shadow-sm lg:hidden mx-auto" src="../assets/chart.png" alt="chart">
        <h1 class="text-4xl px-4 font-semibold text-center lg:hidden">Mengapa <br> Pilih Kolecer?</h1>
        <div class="flex flex-col mt-5 text-center lg:text-left">
            <div class="px-4 lg:px-7 py-3 lg:flex">
                <svg class="mx-auto lg:mx-0" width="150" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M42.1603 17.1601V30.84C42.1603 33.08 40.9603 35.1601 39.0203 36.3001L27.1403 43.1601C25.2003 44.2801 22.8003 44.2801 20.8403 43.1601L8.96031 36.3001C7.02031 35.1801 5.82031 33.1 5.82031 30.84V17.1601C5.82031 14.9201 7.02031 12.84 8.96031 11.7L20.8403 4.84C22.7803 3.72 25.1803 3.72 27.1403 4.84L39.0203 11.7C40.9603 12.84 42.1603 14.9001 42.1603 17.1601Z" stroke="#6E757C" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M23.9998 22C26.5735 22 28.6598 19.9136 28.6598 17.34C28.6598 14.7663 26.5735 12.6801 23.9998 12.6801C21.4262 12.6801 19.3398 14.7663 19.3398 17.34C19.3398 19.9136 21.4262 22 23.9998 22Z" stroke="#6E757C" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M32 33.3199C32 29.7199 28.42 26.8 24 26.8C19.58 26.8 16 29.7199 16 33.3199" stroke="#6E757C" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class="px-4">
                    <h1 class="font-bold text-lg">Developer Berpengalaman</h1> 
                    <p class="font-thin text-sm text-justify lg:text-left">Tersedianya developer dan sumber daya yang berpengalaman untuk melayani pembutaan aplikasi website, mobile apps serta XR sesuai kebutuhan Kamu</p>
                </div>
            </div>
            <hr class="my-2"/>
            <div class="px-4 lg:px-7 py-3 lg:flex">
                <svg class="mx-auto lg:mx-0" width="150" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.3438 28.6597C17.3438 31.2397 19.3238 33.3197 21.7838 33.3197H26.8037C28.9437 33.3197 30.6838 31.4997 30.6838 29.2597C30.6838 26.8197 29.6238 25.9597 28.0438 25.3997L19.9837 22.5997C18.4037 22.0397 17.3438 21.1797 17.3438 18.7397C17.3438 16.4997 19.0837 14.6797 21.2237 14.6797H26.2437C28.7037 14.6797 30.6838 16.7597 30.6838 19.3397" stroke="#6E757C" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M24 12V36" stroke="#6E757C" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M24 44C35.0457 44 44 35.0457 44 24C44 12.9543 35.0457 4 24 4C12.9543 4 4 12.9543 4 24C4 35.0457 12.9543 44 24 44Z" stroke="#6E757C" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class="px-4">
                    <h1 class="font-bold text-lg">Harga Relatif Ramah Dikantong</h1> 
                    <p class="font-thin text-sm text-justify lg:text-left">Harga pembutaan aplikasi website, mobile app serta XR yang bisa kamu dapatkan disini sangat lah terjangkau dan sesuaikan dengan keinginanmu!</p>
                </div>
            </div>
            <hr class="my-2"/>
            <div class="px-4 lg:px-7 py-3 lg:flex">
                <svg class="mx-auto lg:mx-0" width="150" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M36 37.72H34.48C32.88 37.72 31.36 38.34 30.24 39.46L26.8199 42.84C25.2599 44.38 22.72 44.38 21.16 42.84L17.74 39.46C16.62 38.34 15.08 37.72 13.5 37.72H12C8.68 37.72 6 35.06 6 31.78V9.95996C6 6.67996 8.68 4.02002 12 4.02002H36C39.32 4.02002 42 6.67996 42 9.95996V31.78C42 35.04 39.32 37.72 36 37.72Z" stroke="#6E757C" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M23.9999 20C26.5735 20 28.6599 17.9136 28.6599 15.34C28.6599 12.7663 26.5735 10.6801 23.9999 10.6801C21.4262 10.6801 19.3398 12.7663 19.3398 15.34C19.3398 17.9136 21.4262 20 23.9999 20Z" stroke="#6E757C" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M32 31.3199C32 27.7199 28.42 24.8 24 24.8C19.58 24.8 16 27.7199 16 31.3199" stroke="#6E757C" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class="px-4">
                    <h1 class="font-bold text-lg">Akun Resmi untuk distribusi aplikasi</h1>
                    <p class="font-thin text-sm text-justify lg:text-left">Adanya akun resmi dari google dan Apple sehingga memberikan ketenangan dalam proses pembuatan aplikasi kamu uang kamu butuhkan </p> 
                </div>    
            </div>
            <hr class="my-2"/>
            <div class="px-4 lg:px-7 py-3 lg:flex">
                <svg class="mx-auto lg:mx-0" width="150" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M36.0002 14.32C35.8802 14.3 35.7402 14.3 35.6202 14.32C32.8602 14.22 30.6602 11.96 30.6602 9.16C30.6602 6.3 32.9602 4 35.8202 4C38.6802 4 40.9801 6.32 40.9801 9.16C40.9601 11.96 38.7602 14.22 36.0002 14.32Z" stroke="#6E757C" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M33.9399 28.88C36.6799 29.34 39.6999 28.86 41.8199 27.44C44.6399 25.56 44.6399 22.48 41.8199 20.6C39.6799 19.18 36.6199 18.7 33.8799 19.18" stroke="#6E757C" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M11.94 14.32C12.06 14.3 12.2 14.3 12.32 14.32C15.08 14.22 17.28 11.96 17.28 9.16C17.28 6.3 14.98 4 12.12 4C9.25996 4 6.95996 6.32 6.95996 9.16C6.97996 11.96 9.17996 14.22 11.94 14.32Z" stroke="#6E757C" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M13.9999 28.88C11.2599 29.34 8.23988 28.86 6.11988 27.44C3.29988 25.56 3.29988 22.48 6.11988 20.6C8.25988 19.18 11.3199 18.7 14.0599 19.18" stroke="#6E757C" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M24.0002 29.26C23.8802 29.24 23.7402 29.24 23.6202 29.26C20.8602 29.16 18.6602 26.9 18.6602 24.1C18.6602 21.24 20.9602 18.94 23.8202 18.94C26.6802 18.94 28.9802 21.26 28.9802 24.1C28.9602 26.9 26.7602 29.18 24.0002 29.26Z" stroke="#6E757C" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M18.1804 35.56C15.3604 37.44 15.3604 40.52 18.1804 42.4C21.3804 44.54 26.6204 44.54 29.8204 42.4C32.6404 40.52 32.6404 37.44 29.8204 35.56C26.6404 33.44 21.3804 33.44 18.1804 35.56Z" stroke="#6E757C" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class="px-4">
                    <h1 class="font-bold text-lg">Siapa Saja Bisa Go Online!</h1>
                    <p class="font-thin text-sm text-justify lg:text-left">Baik pelaku usaha, perusahaan, lembaga pemerintah, dan sebagainya dapat membuat aplikasi dengan menyesuaikan kebutuhan kamu!</p> 
                </div>    
            </div>
        </div>
    </div>
    
</div>
<!--Akhir Ilustrasi Component-->

<!--Footer Component-->
   <footer class="mt-14 flex-col bg-[#272E35]">
    <div class="max-w-full mx-auto lg:flex sm:justify-between">
    <div class="px-7 lg:px-20 py-5 lg:w-1/2 flex-col">
        <div class="flex items-center justify-center lg:justify-start">
            <img class="" src="../assets/images/Icon/iconkolecer.png" alt="">
            <h1 class="text-white px-2 text-xl font-comfort font-extrabold">kolecermediakreatif</h1>
        </div>
            <p class="text-white text-justify">Kolecer Media Kreatif menyediakan sumber daya yang berpengalaman untuk 
                melayani pembuatan website, aplikasi mobile berbasis Android dan iOS 
                sesuai dengan kebutuhan para pelaku usaha, organisasi, lembaga pemerintah, 
                profesional dan personal.
            </p>
            <ul class="mt-5 lg:px-7 flex flex-col">
                <li class="flex items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.7499 2.44982C11.4399 1.85982 12.5699 1.85982 13.2699 2.44982L14.8499 3.80982C15.1499 4.06982 15.7099 4.27982 16.1099 4.27982H17.8099C18.8699 4.27982 19.7399 5.14982 19.7399 6.20982V7.90982C19.7399 8.29982 19.9499 8.86982 20.2099 9.16982L21.5699 10.7498C22.1599 11.4398 22.1599 12.5698 21.5699 13.2698L20.2099 14.8498C19.9499 15.1498 19.7399 15.7098 19.7399 16.1098V17.8098C19.7399 18.8698 18.8699 19.7398 17.8099 19.7398H16.1099C15.7199 19.7398 15.1499 19.9498 14.8499 20.2098L13.2699 21.5698C12.5799 22.1598 11.4499 22.1598 10.7499 21.5698L9.16988 20.2098C8.86988 19.9498 8.30988 19.7398 7.90988 19.7398H6.17988C5.11988 19.7398 4.24988 18.8698 4.24988 17.8098V16.0998C4.24988 15.7098 4.03988 15.1498 3.78988 14.8498L2.43988 13.2598C1.85988 12.5698 1.85988 11.4498 2.43988 10.7598L3.78988 9.16982C4.03988 8.86982 4.24988 8.30982 4.24988 7.91982V6.19982C4.24988 5.13982 5.11988 4.26982 6.17988 4.26982H7.90988C8.29988 4.26982 8.86988 4.05982 9.16988 3.79982L10.7499 2.44982Z" fill="#3598DA"/>
                <path d="M8.37988 12.0001L10.7899 14.4201L15.6199 9.58008" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg><span class="px-2 text-white">Team Development Berpengalaman</span></li>
                <li class="flex items-center mt-5"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.7499 2.44982C11.4399 1.85982 12.5699 1.85982 13.2699 2.44982L14.8499 3.80982C15.1499 4.06982 15.7099 4.27982 16.1099 4.27982H17.8099C18.8699 4.27982 19.7399 5.14982 19.7399 6.20982V7.90982C19.7399 8.29982 19.9499 8.86982 20.2099 9.16982L21.5699 10.7498C22.1599 11.4398 22.1599 12.5698 21.5699 13.2698L20.2099 14.8498C19.9499 15.1498 19.7399 15.7098 19.7399 16.1098V17.8098C19.7399 18.8698 18.8699 19.7398 17.8099 19.7398H16.1099C15.7199 19.7398 15.1499 19.9498 14.8499 20.2098L13.2699 21.5698C12.5799 22.1598 11.4499 22.1598 10.7499 21.5698L9.16988 20.2098C8.86988 19.9498 8.30988 19.7398 7.90988 19.7398H6.17988C5.11988 19.7398 4.24988 18.8698 4.24988 17.8098V16.0998C4.24988 15.7098 4.03988 15.1498 3.78988 14.8498L2.43988 13.2598C1.85988 12.5698 1.85988 11.4498 2.43988 10.7598L3.78988 9.16982C4.03988 8.86982 4.24988 8.30982 4.24988 7.91982V6.19982C4.24988 5.13982 5.11988 4.26982 6.17988 4.26982H7.90988C8.29988 4.26982 8.86988 4.05982 9.16988 3.79982L10.7499 2.44982Z" fill="#3598DA"/>
                <path d="M8.37988 12.0001L10.7899 14.4201L15.6199 9.58008" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg><span class="px-2 text-white">Berbadan Hukum</span></li>
                <li class="flex items-center mt-5"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.7499 2.44982C11.4399 1.85982 12.5699 1.85982 13.2699 2.44982L14.8499 3.80982C15.1499 4.06982 15.7099 4.27982 16.1099 4.27982H17.8099C18.8699 4.27982 19.7399 5.14982 19.7399 6.20982V7.90982C19.7399 8.29982 19.9499 8.86982 20.2099 9.16982L21.5699 10.7498C22.1599 11.4398 22.1599 12.5698 21.5699 13.2698L20.2099 14.8498C19.9499 15.1498 19.7399 15.7098 19.7399 16.1098V17.8098C19.7399 18.8698 18.8699 19.7398 17.8099 19.7398H16.1099C15.7199 19.7398 15.1499 19.9498 14.8499 20.2098L13.2699 21.5698C12.5799 22.1598 11.4499 22.1598 10.7499 21.5698L9.16988 20.2098C8.86988 19.9498 8.30988 19.7398 7.90988 19.7398H6.17988C5.11988 19.7398 4.24988 18.8698 4.24988 17.8098V16.0998C4.24988 15.7098 4.03988 15.1498 3.78988 14.8498L2.43988 13.2598C1.85988 12.5698 1.85988 11.4498 2.43988 10.7598L3.78988 9.16982C4.03988 8.86982 4.24988 8.30982 4.24988 7.91982V6.19982C4.24988 5.13982 5.11988 4.26982 6.17988 4.26982H7.90988C8.29988 4.26982 8.86988 4.05982 9.16988 3.79982L10.7499 2.44982Z" fill="#3598DA"/>
                <path d="M8.37988 12.0001L10.7899 14.4201L15.6199 9.58008" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg><span class="px-2 text-white">Memiliki Akun Google Developer</span></li>
                <li class="flex items-center mt-5"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.7499 2.44982C11.4399 1.85982 12.5699 1.85982 13.2699 2.44982L14.8499 3.80982C15.1499 4.06982 15.7099 4.27982 16.1099 4.27982H17.8099C18.8699 4.27982 19.7399 5.14982 19.7399 6.20982V7.90982C19.7399 8.29982 19.9499 8.86982 20.2099 9.16982L21.5699 10.7498C22.1599 11.4398 22.1599 12.5698 21.5699 13.2698L20.2099 14.8498C19.9499 15.1498 19.7399 15.7098 19.7399 16.1098V17.8098C19.7399 18.8698 18.8699 19.7398 17.8099 19.7398H16.1099C15.7199 19.7398 15.1499 19.9498 14.8499 20.2098L13.2699 21.5698C12.5799 22.1598 11.4499 22.1598 10.7499 21.5698L9.16988 20.2098C8.86988 19.9498 8.30988 19.7398 7.90988 19.7398H6.17988C5.11988 19.7398 4.24988 18.8698 4.24988 17.8098V16.0998C4.24988 15.7098 4.03988 15.1498 3.78988 14.8498L2.43988 13.2598C1.85988 12.5698 1.85988 11.4498 2.43988 10.7598L3.78988 9.16982C4.03988 8.86982 4.24988 8.30982 4.24988 7.91982V6.19982C4.24988 5.13982 5.11988 4.26982 6.17988 4.26982H7.90988C8.29988 4.26982 8.86988 4.05982 9.16988 3.79982L10.7499 2.44982Z" fill="#3598DA"/>
                <path d="M8.37988 12.0001L10.7899 14.4201L15.6199 9.58008" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg><span class="px-2 text-white">Memiliki Akun Apple Developer</span></li>
            </ul>
    </div>
    <div class="px-7 py-3 pb-4 lg:flex lg:flex-wrap content-center justify-end">
        <div class="lg:w-2/3">
            <div class="flex flex-col">
                <h5 class="flex text-[#B9C3CA] font-semibold"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>Kantor Pusat :</h5>
                <ul class="list-none px-9">
                    <li><span class="text-[#B9C3CA]">Pondok Indah Baturaden Kav 12A Kota Bandung, Jawa Barat, 40292</span></li>
                </ul>
            </div>
            <div class="flex flex-col mt-4">
                <h5 class="flex text-[#B9C3CA] font-semibold"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                </svg>Email :</h5>
                <ul class="list-none px-9">
                    <li><span class="text-[#B9C3CA]">info@kolecermediakreatif.com</span></li>
                </ul>
            </div>
            <div class="flex flex-col mt-4"> 
                <h5 class="flex text-[#B9C3CA] font-semibold"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>Telp. :</h5>
                <ul class="list-none px-9">
                    <li><span class="text-[#B9C3CA]">022 63726707</span></li>
                </ul>
            </div>
           
        </div>
      </div>
      </div>
        <hr class="border-[#EEEFF2] border-2 border-opacity-40 rounded mx-auto w-[90%] sm:w-[95%] lg:w-[90%]" />
        <div class="max-w-full mx-auto lg:flex sm:justify-between">
    <div class="px-7 lg:px-20 py-5 lg:w-1/2 flex">
            <div class="flex flex-col">
                <span class="text-white text-sm font-medium">&#169; Kolecermediakreatif, Inc. 2022. We love our users!</span>
                <span class="text-white text-sm font-medium">&#169; WUR Team</span>
            </div>
    </div>
    <div class="lg:px-11 py-3 pb-4 lg:flex lg:flex-wrap content-center justify-end">
        <div class="flex items-center justify-center px-7">
            <label class="text-[#B9C3CA] hidden sm:block">Ikuti kami :</label>
            <a class="m-2" href="https://www.facebook.com/kolecermediakreatif/"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14 9.3V12.2H16.6C16.8 12.2 16.9 12.4 16.9 12.6L16.5 14.5C16.5 14.6 16.3 14.7 16.2 14.7H14V22H11V14.8H9.3C9.1 14.8 9 14.7 9 14.5V12.6C9 12.4 9.1 12.3 9.3 12.3H11V9C11 7.3 12.3 6 14 6H16.7C16.9 6 17 6.1 17 6.3V8.7C17 8.9 16.9 9 16.7 9H14.3C14.1 9 14 9.1 14 9.3Z" fill="#B9C3CA"/>
            <path d="M15 22H9C4 22 2 20 2 15V9C2 4 4 2 9 2H15C20 2 22 4 22 9V15C22 20 20 22 15 22Z" stroke="#B9C3CA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg></a>
           <a class="m-2" href="https://www.instagram.com/kolecerkreatif/"> <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.8251 2H13.1739C14.8492 2.00379 15.2338 2.01855 16.1227 2.0591C17.1871 2.10765 17.9141 2.27672 18.5502 2.52396C19.2079 2.77949 19.7656 3.12144 20.3216 3.6774C20.8775 4.2334 21.2195 4.79111 21.475 5.44873C21.7222 6.08484 21.8913 6.81182 21.9399 7.87626C21.9869 8.90737 21.9992 9.25998 22 11.7357V12.2633C21.9992 14.739 21.9869 15.0916 21.9399 16.1227C21.8913 17.1871 21.7222 17.9141 21.475 18.5502C21.2195 19.2079 20.8775 19.7656 20.3216 20.3216C19.7656 20.8775 19.2079 21.2195 18.5502 21.475C17.9141 21.7222 17.1871 21.8913 16.1227 21.9399C15.0916 21.9869 14.739 21.9992 12.2633 22H11.7357C9.25998 21.9992 8.90737 21.9869 7.87626 21.9399C6.81182 21.8913 6.08484 21.7222 5.44873 21.475C4.79111 21.2195 4.2334 20.8775 3.6774 20.3216C3.12144 19.7656 2.77949 19.2079 2.52396 18.5502C2.27672 17.9141 2.10765 17.1871 2.0591 16.1227C2.01855 15.2338 2.00379 14.8492 2 13.1739V10.8251C2.00379 9.1498 2.01855 8.76515 2.0591 7.87626C2.10765 6.81182 2.27672 6.08484 2.52396 5.44873C2.77949 4.79111 3.12144 4.2334 3.6774 3.6774C4.2334 3.12144 4.79111 2.77949 5.44873 2.52396C6.08484 2.27672 6.81182 2.10765 7.87626 2.0591C8.76515 2.01855 9.1498 2.00379 10.8251 2H13.1739H10.8251ZM12.7327 3.80117H11.2656C9.25821 3.80326 8.90709 3.81585 7.95802 3.85915C6.98298 3.90361 6.45346 4.06653 6.10106 4.20349C5.63426 4.3849 5.30112 4.60161 4.95119 4.95158C4.60122 5.30151 4.38451 5.63465 4.2031 6.10145C4.06614 6.45385 3.90322 6.98337 3.85876 7.95841C3.81546 8.90748 3.80287 9.2586 3.80078 11.266V12.7331C3.80287 14.7404 3.81546 15.0915 3.85876 16.0406C3.90322 17.0156 4.06614 17.5451 4.2031 17.8975C4.38451 18.3643 4.60126 18.6975 4.95119 19.0474C5.30112 19.3974 5.63426 19.6141 6.10106 19.7955C6.45346 19.9325 6.98298 20.0954 7.95802 20.1398C9.01242 20.188 9.32865 20.1982 11.9991 20.1982C14.6696 20.1982 14.9858 20.188 16.0402 20.1398C17.0152 20.0954 17.5448 19.9325 17.8972 19.7955C18.364 19.6141 18.6971 19.3974 19.047 19.0474C19.397 18.6975 19.6137 18.3643 19.7951 17.8975C19.9321 17.5451 20.095 17.0156 20.1395 16.0406C20.1876 14.9861 20.1978 14.6698 20.1978 11.9995C20.1978 9.32924 20.1876 9.01293 20.1395 7.95841C20.095 6.98337 19.9321 6.45385 19.7951 6.10145C19.6137 5.63465 19.397 5.30151 19.047 4.95158C18.6971 4.60161 18.364 4.3849 17.8972 4.20349C17.5448 4.06653 17.0152 3.90361 16.0402 3.85915C15.0911 3.81585 14.74 3.80326 12.7327 3.80117ZM11.9995 6.9992C14.7611 6.9992 16.9998 9.23788 16.9998 11.9995C16.9998 14.7611 14.7611 16.9998 11.9995 16.9998C9.23788 16.9998 6.9992 14.7611 6.9992 11.9995C6.9992 9.23788 9.23788 6.9992 11.9995 6.9992ZM11.9997 8.75352C10.2071 8.75352 8.75391 10.2067 8.75391 11.9993C8.75391 13.7919 10.2071 15.2451 11.9997 15.2451C13.7923 15.2451 15.2455 13.7919 15.2455 11.9993C15.2455 10.2067 13.7923 8.75352 11.9997 8.75352ZM17.4164 5.33244C18.1068 5.33244 18.6665 5.89213 18.6665 6.58253C18.6665 7.27293 18.1068 7.83258 17.4164 7.83258C16.7261 7.83258 16.1664 7.27293 16.1664 6.58253C16.1664 5.89213 16.7261 5.33244 17.4164 5.33244Z" fill="#B9C3CA"/>
            </svg></a>
           <a class="m-2" href="https://www.linkedin.com/company/kolecer-media-kreatif"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.3292 2C21.252 2 22 2.74752 22 3.67079V20.3292C22 21.252 21.2525 22 20.3292 22H3.67079C2.74804 22 2 21.2525 2 20.3292V3.67079C2 2.74804 2.74752 2 3.67079 2H20.3292ZM15.5185 9.5C14.0991 9.5 13.1279 10.1274 12.6954 10.8563L12.6247 10.9858V9.625H9.91641V19.2083H12.8331V14.5663C12.8331 13.0104 13.406 12.0208 14.7831 12.0208C15.7328 12.0208 16.1313 12.8607 16.1642 14.358L16.1664 14.5663V19.2083H19.0831V13.9154C19.0831 11.0575 18.3993 9.5 15.5185 9.5ZM7.83307 9.5H4.91641V19.0833H7.83307V9.5ZM6.375 4.5C5.33958 4.5 4.5 5.33958 4.5 6.375C4.5 7.41042 5.33958 8.25 6.375 8.25C7.41042 8.25 8.25 7.41042 8.25 6.375C8.25 5.33958 7.41042 4.5 6.375 4.5Z" fill="#B9C3CA"/>
            </svg></a>
           <a class="m-2" href="https://api.whatsapp.com/send?phone=6285351315789&text=Saya%20berminat%20membuat%20website%20atau%20aplikasi%20mobile%20menggunakan%20jasa%20Kolecer%20Media%20Kreatif"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.9 20.6C8.4 21.5 10.2 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 13.8 2.5 15.5 3.3 17L2.44044 20.306C2.24572 21.0549 2.93892 21.7317 3.68299 21.5191L6.9 20.6Z" stroke="#B9C3CA" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M16.5 14.8485C16.5 15.0105 16.4639 15.177 16.3873 15.339C16.3107 15.501 16.2116 15.654 16.0809 15.798C15.86 16.041 15.6167 16.2165 15.3418 16.329C15.0714 16.4415 14.7784 16.5 14.4629 16.5C14.0033 16.5 13.512 16.392 12.9937 16.1715C12.4755 15.951 11.9572 15.654 11.4434 15.2805C10.9251 14.9025 10.4339 14.484 9.9652 14.0205C9.501 13.5525 9.08187 13.062 8.70781 12.549C8.33826 12.036 8.04081 11.523 7.82449 11.0145C7.60816 10.5015 7.5 10.011 7.5 9.543C7.5 9.237 7.55408 8.9445 7.66224 8.6745C7.77041 8.4 7.94166 8.148 8.18052 7.923C8.46895 7.6395 8.78443 7.5 9.11793 7.5C9.24412 7.5 9.37031 7.527 9.48297 7.581C9.60015 7.635 9.70381 7.716 9.78493 7.833L10.8305 9.3045C10.9116 9.417 10.9702 9.5205 11.0108 9.6195C11.0513 9.714 11.0739 9.8085 11.0739 9.894C11.0739 10.002 11.0423 10.11 10.9792 10.2135C10.9206 10.317 10.835 10.425 10.7268 10.533L10.3843 10.8885C10.3348 10.938 10.3122 10.9965 10.3122 11.0685C10.3122 11.1045 10.3167 11.136 10.3257 11.172C10.3393 11.208 10.3528 11.235 10.3618 11.262C10.4429 11.4105 10.5826 11.604 10.7809 11.838C10.9837 12.072 11.2 12.3105 11.4344 12.549C11.6778 12.7875 11.9121 13.008 12.151 13.2105C12.3853 13.4085 12.5791 13.5435 12.7323 13.6245C12.7549 13.6335 12.7819 13.647 12.8135 13.6605C12.8495 13.674 12.8856 13.6785 12.9261 13.6785C13.0028 13.6785 13.0613 13.6515 13.1109 13.602L13.4534 13.2645C13.5661 13.152 13.6743 13.0665 13.7779 13.0125C13.8816 12.9495 13.9852 12.918 14.0979 12.918C14.1835 12.918 14.2737 12.936 14.3728 12.9765C14.472 13.017 14.5756 13.0755 14.6883 13.152L16.18 14.2095C16.2972 14.2905 16.3783 14.385 16.4279 14.4975C16.473 14.61 16.5 14.7225 16.5 14.8485Z" fill="#B9C3CA"/>
            </svg></a>
        </div>
      </div>
      </div>
</footer>
<!--Akhir Footer Component-->
  <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>