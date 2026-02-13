<script lang="ts" setup>
import { ref } from 'vue';

// Reactive state untuk URL gambar
const imageUrl = ref('https://images.unsplash.com/photo-1519741497674-611481863552?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); // Ganti dengan foto default atau URL dinamis
</script>
<template>
    <div class="lg:pt-10 lg:mx-40 lg:my-10 mx-8 my-10 animate-fade-in">
        <div class="flex flex-col lg:flex-row gap-5 pb-3">
            <div class="">
                <h1 class="text-3xl font-bold pb-2">About Our Love</h1>
                <p class="text-[12px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eos incidunt beatae quis neque magnam
                    aliquid quos vel doloribus repudiandae hic possimus voluptate dolores, earum sapiente eius
                    perferendis temporibus nihil.</p>
                <h3 class="text-lg font-semibold">Rama Podungge</h3>
                <p class="text-[12px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, maxime!</p>
                <h3 class="text-lg font-semibold">Siskawati Tolana</h3>
                <p class="text-[12px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, maxime!</p>
            </div>
            <div class="flex justify-center items-center">
                <!-- Bingkai foto -->
                <div
                    class="relative w-100 h-72 border-10 border-pink-500 lg:rounded-full rounded-[40px] overflow-hidden">
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
                <h1 class="lg:text-3xl text-lg font-extrabold lg:pb-3 lg:text-center lg:w-70 lg:mx-auto">Story Our Meet Until Now
                </h1>
                <div class="flex flex-col-reverse lg:flex-row justify-start items-center gap-7">
                    <!-- Bingkai foto -->
                    <div
                        class="relative w-82 h-100 lg:w-50 lg:h-50 border-10 border-[#f14e95] lg:rounded-full rounded-[40px] overflow-hidden">
                        <img :src="imageUrl" alt="Foto Cinta" class="w-full h-full object-cover" :key="imageUrl" />
                        <!-- Optional: Bisa ditambahkan overlay teks atau ikon -->
                        <div class="absolute lg:bottom-3 bottom-4 lg:left-10 left-4 bg-gray-800 text-white px-3 py-1 rounded-full text-[12px] lg:text-sm">
            Foto Cinta Kami
          </div>
                    </div>

                    <div class="flex flex-col w-fit my-auto gap-1">
                        <h4 class="lg:text-lg text-sm font-semibold">First Meet</h4>
                        <p class="text-[12px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos iusto totam facere,
                            obcaecati maiores minus in qui modi reprehenderit necessitatibus.</p>
                        <h4 class="lg:text-lg text-sm font-semibold">Dating</h4>
                        <p class="text-[12px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos iusto totam facere,
                            obcaecati maiores minus in qui modi reprehenderit necessitatibus.</p>
                        <h4 class="lg:text-lg text-sm font-semibold">Our Family Meet</h4>
                        <p class="text-[12px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos iusto totam facere,
                            obcaecati maiores minus in qui modi reprehenderit necessitatibus.</p>
                        <h4 class="lg:text-lg text-sm font-semibold">Wedding Proposal</h4>
                        <p class="text-[12px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos iusto totam facere,
                            obcaecati maiores minus in qui modi reprehenderit necessitatibus.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
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
</style>