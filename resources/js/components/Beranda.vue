<template>

    <div class="px-6 py-5 max-w-md mx-auto sm:max-w-xl lg:max-w-6xl lg:flex ">
        <div class="lg:p-4 lg:flex-1">
            <h1 class="text-3xl font-bold font-jost sm:text-4xl text-center sm:text-center lg:text-left lg:text-6xl">Go Online? <br class="lg:leading-normal hidden sm:hidden lg:inline"/> <span>Siapa Takut!</span></h1>
            <img class="mt-4 h-60 sm:h-full rounded-xl shadow-sm lg:hidden mx-auto sm:mx-0" src="../assets/images/flamingo.png" alt="">
            <p class="mt-3 text-slate-600 text-justify lg:text-xl">Menggapai dunia online saat ini bersama kolecermediakreatif yang dapat kamu andalkan! </p>
            <div class="mt-4 text-center lg:text-left">
                <a class="inline-block px-3 py-2 border-2 mr-5 border-black bg-transparent text-black text-sm 
                hover:border-pink-500 hover:text-pink-800 shadow-lg tracking-wider rounded-lg font-semibold
                sm:px-5 sm:py-3" 
                href="#">Sign In</a>
                <a class="inline-block px-3 py-2 border-2 border-pink-400 bg-pink-400 text-white text-sm 
                hover:bg-pink-600 shadow-lg tracking-wider rounded-lg font-semibold
                sm:px-5 sm:py-3" 
                href="#">Register</a>
            </div>
            <div class="mt-10 lg:mt-28">
                <p class="text-slate-600 text-center sm:text-left">Produk yang telah kami ciptakan :</p>
                <img class="mt-3 mx-auto sm:mx-0" src="../assets/images/boksaylogo.png" alt="">
            </div>
        </div>
        <div class="hidden lg:block w-1/2">
            <img class="object-cover object-center" src="../assets/images/flamingo.png" alt="">
        </div>
    </div>

</template>

<script>
    export default{
        name:'Beranda',
        components:{

        },
        data(){
            return{
                
            }
        },
    }
</script>

