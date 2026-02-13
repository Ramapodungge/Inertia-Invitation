<script lang="ts" setup>
import { ref } from 'vue';

// Reactive state untuk URL gambar
const imageUrl = ref('https://images.unsplash.com/photo-1519741497674-611481863552?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); // Ganti dengan foto default atau URL dinamis
</script>
<template>
    <section>

        <div class="lg:container lg:pt-10 lg:mx-auto lg:my-10 mx-8 my-5 animate-fade-in">
            <div class="bunga -z-2 absolute lg:top-10 lg:left-25"></div>
            <div class="bunga2 -z-2 absolute lg:top-10 lg:right-30 right-10 top-20"></div>
            <div class="bunga3 -z-2 absolute lg:top-40 lg:left-50 top-50"></div>
            <div class="flex flex-col lg:flex-row gap-5 pb-3">
                <div class="">
                    <h1 class="lg:text-3xl text-lg font-extrabold pb-2">About Our Love</h1>
                    <p class="text-[12px] lg:text-[15px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eos incidunt beatae quis neque magnam
                        aliquid quos vel doloribus repudiandae hic possimus voluptate dolores, earum sapiente eius
                        perferendis temporibus nihil.</p>
                    <h3 class="text-lg lg:text-2xl font-semibold">Rama Podungge</h3>
                    <p class="text-[12px] lg:text-[15px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, maxime!</p>
                    <h3 class="text-lg lg:text-2xl font-semibold">Siskawati Tolana</h3>
                    <p class="text-[12px] lg:text-[15px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, maxime!</p>
                </div>
                <div class="flex justify-center items-center">
                    <!-- Bingkai foto -->
                    <div
                        class="relative w-100 h-72 border-10 border-primary lg:rounded-full rounded-[40px] overflow-hidden">
                        <img :src="imageUrl" alt="Foto Cinta" class="w-full h-full object-cover" :key="imageUrl" />
                        <!-- Optional: Bisa ditambahkan overlay teks atau ikon -->
                      <div class="absolute lg:bottom-3 bottom-4  left-4 bg-gray-800 text-white px-3 py-1 rounded-full text-[12px] lg:text-sm">
                Foto Cinta Kami
              </div>
                    </div>
                </div>
            </div>
            <div class="flex mt-5">
                <div class="lg:mx-20 w-full">
                <div class="bunga -z-2 absolute "></div>
                <div class="bunga2 -z-2 absolute  lg:right-100 lg:mt-20 right-10 mt-10"></div>
                <div class="bunga3 -z-2 absolute lg:mt-7  lg:right-220 mt-40"></div>
                <div class="bunga3 -z-2 absolute  lg:right-80 right-12 mt-70 rotate-50"></div>
                    <h1 class="lg:text-3xl text-lg font-extrabold lg:pb-3 lg:text-center lg:w-70 lg:mx-auto">Story Our Meet Until Now
                    </h1>
                    <div class="flex flex-col-reverse lg:flex-row justify-start items-center gap-7">
                        <!-- Bingkai foto -->
                        <div
                            class="relative w-82 h-100 border-10 border-primary lg:rounded-full rounded-[40px] overflow-hidden">
                            <img :src="imageUrl" alt="Foto Cinta" class="w-full h-full object-cover" :key="imageUrl" />
                            <!-- Optional: Bisa ditambahkan overlay teks atau ikon -->
                            <div class="absolute lg:bottom-3 bottom-4 lg:left-10 left-4 bg-gray-800 text-white px-3 py-1 rounded-full text-[12px] lg:text-sm">
                Foto Cinta Kami
              </div>
                        </div>
    
                        <div class="flex flex-col w-fit my-auto gap-1">
                            <h4 class="lg:text-2xl text-sm font-semibold">First Meet</h4>
                            <p class="text-[12px] lg:text-[15px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos iusto totam facere,
                                obcaecati maiores minus in qui modi reprehenderit necessitatibus.</p>
                            <h4 class="lg:text-2xl text-sm font-semibold">Dating</h4>
                            <p class="text-[12px] lg:text-[15px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos iusto totam facere,
                                obcaecati maiores minus in qui modi reprehenderit necessitatibus.</p>
                            <h4 class="lg:text-2xl text-sm font-semibold">Our Family Meet</h4>
                            <p class="text-[12px] lg:text-[15px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos iusto totam facere,
                                obcaecati maiores minus in qui modi reprehenderit necessitatibus.</p>
                            <h4 class="lg:text-2xl text-sm font-semibold">Wedding Proposal</h4>
                            <p class="text-[12px] lg:text-[15px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos iusto totam facere,
                                obcaecati maiores minus in qui modi reprehenderit necessitatibus.</p>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </section>
</template>

<style scope>
/* Teks overlay di gambar */
.relative .absolute {
  bottom: 10%;
  left: 20%;
  background-color: rgba(0, 0, 0, 0.6);
  color: white;
  padding: 8px 16px;
  border-radius: 10px;
  font-size: 12px;
  text-transform: uppercase;
  font-weight: bold;
}
@media screen and (max-width: 760px) {
    .relative .absolute {
    bottom: 5%;
    left: 10%;
    font-size: 10px;
    }
}

      .bunga {
        position: absolute;
        width: 50px; /* Ganti dengan ukuran bunga Anda */
        height: 50px; /* Ganti dengan ukuran bunga Anda */
        background-image: url("/img/bunga3.png"); /* Ganti dengan path bunga Anda */
        background-size: cover;
        transform: translateY(0) rotate(-90deg); /* Menghadap ke bawah */
        animation: float 6s infinite ease-out;

      }
      .bunga2 {
        position: absolute;
        width: 50px; /* Ganti dengan ukuran bunga Anda */
        height: 50px; /* Ganti dengan ukuran bunga Anda */
        background-image: url("/img/bunga3.png"); /* Ganti dengan path bunga Anda */
        background-size: cover;
        transform: translateY(0) rotate(10deg); /* Menghadap ke bawah */
        animation: float 6s infinite ease-out;

      }
      .bunga3 {
        position: absolute;
        width: 50px; /* Ganti dengan ukuran bunga Anda */
        height: 50px; /* Ganti dengan ukuran bunga Anda */
        background-image: url("/img/bunga3.png"); /* Ganti dengan path bunga Anda */
        background-size: cover;
        transform: translateY(0) rotate(-70deg); /* Menghadap ke bawah */
        animation: float 6s infinite ease-out;

      }

        @keyframes float {
            0% {
                margin: -300px 3px; /* Mulai dari atas layar */
                transform: translateY(0) rotate(180deg); /* Menghadap ke bawah */
                opacity: 1;
            }
            50% {
                margin: 100px 100px; /* Mulai dari atas layar */
                transform: translateY(-100px) rotate(290deg); /* Menghadap ke atas */
                 opacity: 0.8; /* Sedikit transparansi saat jatuh */
            }
            
            100% {
                margin: 250px 0px; /* Mulai dari atas layar */
                transform: translateY(0) rotate(540deg); /* Menghadap ke bawah lagi */
                opacity: 0; /* Menghilang saat mencapai bawah */
            }
        }

        /* Menambahkan lebih banyak bunga melayang */
        .bunga:nth-child(2) {
            animation-duration: 8s;
            animation-delay: 2s;
            left: 20%;
        }

        .bunga:nth-child(3) {
            animation-duration: 5s;
            animation-delay: 1s;
            left: 40%;
        }

        .bunga:nth-child(4) {
            animation-duration: 7s;
            animation-delay: 3s;
            left: 60%;
        }
   
</style>