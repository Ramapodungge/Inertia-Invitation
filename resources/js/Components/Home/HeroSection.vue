<template>
    <Head>
        <title>Invitation</title>
         <link href="https://fonts.googleapis.com/css2?family=Sacramento&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </Head>
  <div class="flex text-center text-white justify-center items-center hero">
    <main class="px-4 md:px-8 z-10 animate-slide-up">
      <h4 class="text-[1.4rem]">Kepada Bapak/Ibu/Saudara/i,</h4>
      <h1 class="lg:text-[6rem] text-[3rem] name">Rama & Siska</h1>
      <p class="lg:text-[1.2rem]">Akan Melangsungkan Pernikahan dalam:</p>

      <!-- Countdown Cards -->
      <div id="countdown" class="flex justify-center lg:space-x-6 mt-6 mb-10"></div>
      <Link href="/home/section" class="px-5 py-3 bg-amber-50 text-pink-400 font-semibold rounded-xl hover:bg-pink-400 hover:text-amber-50">Lihat Undagan</Link>
    </main>
  </div>
</template>

<script lang="ts" setup>
import { onMounted } from 'vue';
import SimplyCountdown from 'simplycountdown.js'
import { Head, Link } from '@inertiajs/vue3';
// Tanggal event
const targetDate = {
  year: 2030,
  month: 2,
  day: 20,
  hours: 0,
  minutes: 0,
  seconds: 0
};

// Konfigurasi countdown
const options = {
  ...targetDate,
  words: {
    days: { lambda: (n: string, e: number) => (e > 1 ? n  : n), root: " Hari" },
    hours: { lambda: (n: string, e: number) => (e > 1 ? n  : n), root: " Jam" },
    minutes: { lambda: (n: string, e: number) => (e > 1 ? n  : n), root: " Menit" },
    seconds: { lambda: (n: string, e: number) => (e > 1 ? n : n), root: " Detik" }
  },
  plural: true,
  refresh: 1000, // refresh setiap detik
  onEnd: () => alert('Acara telah dimulai!'), // Callback saat countdown selesai
  removeZeroUnits: true,
};

// Menjalankan countdown saat komponen terpasang
onMounted(() => {
  SimplyCountdown('#countdown', options);
});
</script>

<style scoped>

.hero {
  background-image: url('/img/g1.jpg');
  background-size: cover; /* Mengatur gambar untuk memenuhi seluruh halaman */
  background-position: center; /* Mengatur posisi gambar agar terpusat */
  background-repeat: no-repeat; /* Menghindari pengulangan gambar */
  height: 100vh;
}

.hero::after{
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.4); /* Lapisan hitam transparan */
  z-index: 1; /* Menempatkan lapisan transparan di bawah konten */
}

h1 {
  font-family: "Sacramento", cursive;
}
/* @apply bg-white p-4 rounded-lg shadow-lg flex flex-col items-center; */
/* Styling untuk countdown cards yang sudah ada dari SimplyCountdown */


/* Styling untuk countdown cards yang sudah ada dari SimplyCountdown */

</style>
