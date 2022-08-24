
<template>
<div class="px-6 py-5 max-w-md mx-auto sm:max-w-xl lg:max-w-6xl lg:flex">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
        <div class="lg:p-4 lg:flex-1 lg:mt-20">
            <h6 class="uppercase font-semibold text-[#748FB5] text-center lg:text-left">Pilihlah kategori yang membantu</h6>
            <h1 class="mt-4 text-3xl font-bold font-jost sm:text-4xl text-center sm:text-center lg:text-left lg:text-5xl">Kamu bebas membuat web sesuai dengan kebutuhan</h1>
        </div>
            <div class=" mt-4 mx-auto flex flex-row">
                <div class=" flex flex-col justify-center">
                    <button class="m-4 w-24 h-24 bg-[#0C967C] rounded-xl hover:bg-[#076655]">
                        <img class="w-18 mx-auto" src="../assets/images/Icon/moneys.png" alt="">
                    </button>
                    <button class="m-4 w-24 h-24 bg-[#DB335F] rounded-xl hover:bg-[#962a47]">
                        <img class="w-18 mx-auto" src="../assets/images/Icon/profile-2user.png" alt="">
                    </button>
                </div>
                <div class="flex flex-col">
                    <button class="m-4 w-24 h-24 bg-blue-500 rounded-xl hover:bg-blue-700">
                        <img class="w-18 mx-auto" src="../assets/images/Icon/teacher.png" alt="">
                    </button>
                    <button class="m-4 w-24 h-24 bg-[#FF9E00] rounded-xl hover:bg-[#d38a15]">
                        <img class="w-18 mx-auto" src="../assets/images/Icon/user-square.png" alt="">
                    </button>
                    <button class="m-4 w-24 h-24 bg-[#FF7B22] rounded-xl hover:bg-[#d8681d]">
                        <img class="w-18 mx-auto" src="../assets/images/Icon/cycle.png" alt="">
                    </button>
                </div>
                <div class=" flex flex-col justify-center">
                    <button class="m-4 w-24 h-24 bg-[#8064F4] rounded-xl hover:bg-[#6542f3]">
                        <img class="w-18 mx-auto" src="../assets/images/Icon/briefcase.png" alt="">
                    </button>
                    <button class="m-4 w-24 h-24 bg-[#FF579E] rounded-xl hover:bg-[#e42574]">
                        <img class="w-18 mx-auto" src="../assets/images/Icon/bank.png" alt="">
                    </button>
                </div>
            </div>
    </div>
</div>
</template>

<script>
    export default{
        name:'Kategori',
        components:{

        },
        data(){
            return{
                
            }
        },
    }
</script>

