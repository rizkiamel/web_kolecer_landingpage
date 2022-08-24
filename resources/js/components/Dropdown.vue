<template>
    <div class="relative">
        <a href="#" @click="isBuka = !isBuka" class="relative z-10 mt-1 block px-2 py-1 text-slate-700 hover:text-white focus:bg-pink-600 focus:text-white font-semibold hover:bg-pink-600 rounded sm:mt-0 sm:ml-2  font-jost">
           <div class="flex items-center">
                <span class="mr-1">Layanan Jasa</span>
                    <svg class="h-3 w-3" viewBox="0 0 13 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path v-if="!isBuka" class="fill-current" id="Polygon 1" d="M6.5 5L0.870836 0.5L12.1292 0.499999L6.5 5Z" fill="black"/>
                        <path v-if="isBuka" d="M6.5 5L0.870836 0.5L12.1292 0.499999L6.5 5Z" fill="white"/>
                    </svg>    
            </div>
        </a>
        <a href="#" v-if="isBuka" @click="isBuka = false" class="fixed inset-0 h-full w-full bg-black opacity-20 cursor-default"></a>
        <div v-if="isBuka" class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-lg shadow-xl">
            <a class="block px-4 py-2 stroke-pink-600 hover:stroke-white text-gray-800 hover:bg-pink-500 hover:text-white" href="">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-3" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 6H9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17.5 6.75L17.5 11.75C17.5 13.75 16.75 14.25 13.75 14.25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M1.5 6.75L1.5 11.75C1.5 13.75 2.25 14.25 5.25 14.25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10.75 9.12402L10.75 6.62598C10.75 5.10742 11.425 4.5 13.1125 4.5L15.1375 4.5C16.825 4.5 17.5 5.10742 17.5 6.62598L17.5 9.12402C17.5 10.6426 16.825 11.25 15.1375 11.25L13.1125 11.25C11.425 11.25 10.75 10.6426 10.75 9.12402Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M1.5 9.12402L1.5 6.62598C1.5 5.10742 2.175 4.5 3.8625 4.5L5.8875 4.5C7.575 4.5 8.25 5.10742 8.25 6.62598L8.25 9.12402C8.25 10.6426 7.575 11.25 5.8875 11.25L3.8625 11.25C2.175 11.25 1.5 10.6426 1.5 9.12402Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="font-jost font-semibold">Extended Reality</span>   
                </div>
            </a>
            <a class="block px-4 py-2 stroke-pink-600 hover:stroke-white text-gray-800 hover:bg-pink-500 hover:text-white font-jost font-semibold" href="#">
                <div class="flex items-center">
                    <svg class="w-4 h-5 mr-3" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 5V13C13 16.2 12.25 17 9.25 17H4.75C1.75 17 1 16.2 1 13V5C1 1.8 1.75 1 4.75 1H9.25C12.25 1 13 1.8 13 5Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8.5 3.7998H5.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6.9999 14.6802C7.64193 14.6802 8.1624 14.125 8.1624 13.4402C8.1624 12.7554 7.64193 12.2002 6.9999 12.2002C6.35787 12.2002 5.8374 12.7554 5.8374 13.4402C5.8374 14.125 6.35787 14.6802 6.9999 14.6802Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                   <span class="font-jost font-semibold">Mobile Apps</span>
                </div>
            </a>
            <a class="block px-4 py-2 stroke-pink-600 hover:stroke-white text-gray-800 hover:bg-pink-500 hover:text-white font-jost font-semibold" href="#">
                <div class="flex items-center">
                    <svg class="h-4 w-4 mr-3" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.00016 14.6668C11.6821 14.6668 14.6668 11.6821 14.6668 8.00016C14.6668 4.31826 11.6821 1.3335 8.00016 1.3335C4.31826 1.3335 1.3335 4.31826 1.3335 8.00016C1.3335 11.6821 4.31826 14.6668 8.00016 14.6668Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M5.33324 2H5.9999C4.6999 5.89333 4.6999 10.1067 5.9999 14H5.33324" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10 2C11.3 5.89333 11.3 10.1067 10 14" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2 10.6667V10C5.89333 11.3 10.1067 11.3 14 10V10.6667" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2 5.9999C5.89333 4.6999 10.1067 4.6999 14 5.9999" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                   <span class="font-jost font-semibold">Website</span>
                </div>
            </a>
        </div>
    </div>
</template>

<script>
    export default{
        name:'Dropdown',
        data(){
            return{
                isBuka: false,
            }
        },
    }
</script>

