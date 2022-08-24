<template>
  <Header/>
  <Beranda/>
  <XR/>
  <Web/>
  <Kategori/>
  <Mobile/>
  <FiturMobile/>
  <Komentar/>
  <Harga/>
  <Hargamobile/>
  <Footer/>
</template>

<script>
import XR from './components/XR.vue';
import Header from './components/Header.vue';
import Beranda from './components/Beranda.vue';
import Web from './components/Web.vue';
import Kategori from './components/Kategori.vue';
import Mobile from './components/Mobile.vue';
import FiturMobile from './components/FiturMobile.vue';
import Komentar from './components/Komentar.vue';
import Harga from './components/Harga.vue';
import Hargamobile from './components/Hargamobile.vue';
import Footer from './components/Footer.vue';

    export default{
      name:'App',
      components:{
        Header,
        Beranda,
        XR,
        Web,
        Kategori,
        Mobile,
        FiturMobile,
        Komentar,
        Harga,
        Hargamobile,
        Footer,
      },
        data(){
            return{
                
            }
        },
    };
</script>
<style>

</style>
