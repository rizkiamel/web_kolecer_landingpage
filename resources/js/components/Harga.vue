<template id="harga">

    <div class="lg:mt-7 px-6 py-12 max-w-md mx-auto sm:max-w-xl lg:flex lg:flex-col">
        <div>
            <h1 class="text-center font-jost text-4xl sm:text-5xl font-extrabold">Paket pilihan yang diperlukan</h1>
        </div>
    </div>
    <div class="px-6 py-5 max-w-md mx-auto sm:max-w-xl lg:max-w-5xl lg:flex bg-white shadow rounded-xl">
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
</template>

<script>
    export default{
        name:'Harga',
        components:{
            
        },
        data(){
            return{
                isBuka : false,
                isOpen : false,
                isOpened : false
            }
        },
    }
</script>

