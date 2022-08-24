<template>

    <div class="m-4 px-6 py-5 w-11/12 mx-auto sm:max-w-lg md:max-w-xl lg:max-w-6xl lg:flex lg:my-4 lg:mt-32 bg-[#F7F7F8] rounded-xl shadow-xl">
        <div class="lg:p-4 lg:flex-1 lg:mt-4">
            <h6 class="uppercase font-semibold text-[#748FB5] text-center lg:text-left">easly find what you're looking for</h6>
            <h1 class="mt-3 text-3xl font-bold font-jost sm:text-4xl text-center sm:text-center lg:text-left lg:text-6xl lg:leading-snug">Siap siaga untuk bergerak dengan Mobile App!</h1>
            <img class="mt-4 h-60 sm:h-full rounded-xl shadow-sm lg:hidden mx-auto" src="../assets/images/iphone.png" alt="">
            <p class="mt-3 text-slate-600 text-justify lg:text-xl">
                Pembuatan mobile app untuk perkembangan bisnis di dunia digital sekarang sudah lebih mudah
            </p>
            <div class="mt-4 text-center lg:text-left">
                <a class="inline-block px-3 py-2 border-2 mr-5 border-black bg-transparent text-black text-sm 
                hover:border-pink-500 hover:text-pink-800 shadow-lg tracking-wider rounded-xl font-semibold
                sm:px-5 sm:py-3" 
                href="#">Go Online</a>
            </div>
        </div>
        <div class="hidden lg:block w-1/2">
            <img class="object-center mx-auto lg:-mt-20" src="../assets/images/iphone.png" alt="">
        </div>
    </div>

</template>

<script>
    export default{
        name:'Mobile',
        components:{

        },
        data(){
            return{
                
            }
        },
    }
</script>

