<template>
  <section class="bg-primary lg:px-40 lg:py-10 py-5 px-0 animate-slide-up">
    <h1 class="text-3xl font-extrabold text-center text-white">Our Gallery</h1>
    <div class="overflow-hidden relative px-4">
      <!-- Gambar Carousel (Hanya bergulir otomatis pada mobile) -->
      <div class="mt-5 gallery-container">
        <div v-for="(item, index) in galery" :key="index" class="gallery-item border-10 border-white rounded-2xl">
          <img :src="item.img" alt="Foto Cinta" class="w-100 h-72 object-cover" />
          <div class="absolute lg:bottom-3 bottom-4 lg:left-10 left-4 bg-gray-800 text-white px-3 py-1 rounded-full text-[12px] lg:text-sm">
            {{ item.name }}
          </div>
        </div>
      </div>
      <div class="mt-10 hidden sm:grid gap-4 lg:grid-cols-3 sm:grid-cols-2">
        <div v-for="(item, index) in galery" :key="index" class="gallery-item border-10 border-white rounded-2xl">
          <img :src="item.img" alt="Foto Cinta" class="w-200 h-72 object-cover" />
          <div class="absolute lg:bottom-3 bottom-4 lg:left-10 left-4 bg-gray-800 text-white px-3 py-1 rounded-full text-[12px] lg:text-sm">
            {{ item.name }}
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script lang="ts" setup>
const galery = [
  {
    name: 'Foto Cinta Kami',
    img: 'https://images.unsplash.com/photo-1520854221256-17451cc331bf?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    deskripsi: '',
  },
  {
    name: 'Foto Cinta Kami',
    img: 'https://images.unsplash.com/photo-1607190074257-dd4b7af0309f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fHdlZGRpbmd8ZW58MHx8MHx8fDA%3D',
    deskripsi: '',
  },
  {
    name: 'Foto Cinta Kami',
    img: 'https://plus.unsplash.com/premium_photo-1663076211121-36754a46de8d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8d2VkZGluZ3xlbnwwfHwwfHx8MA%3D%3D',
    deskripsi: '',
  },
  {
    name: 'Foto Cinta Kami',
    img: 'https://images.unsplash.com/photo-1520854221256-17451cc331bf?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    deskripsi: '',
  },
  {
    name: 'Foto Cinta Kami',
    img: 'https://images.unsplash.com/photo-1607190074257-dd4b7af0309f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fHdlZGRpbmd8ZW58MHx8MHx8fDA%3D',
    deskripsi: '',
  },
  {
    name: 'Foto Cinta Kami',
    img: 'https://plus.unsplash.com/premium_photo-1663076211121-36754a46de8d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8d2VkZGluZ3xlbnwwfHwwfHx8MA%3D%3D',
    deskripsi: '',
  },
]
</script>

<style scoped>
/* Styling untuk kontainer gallery */
.gallery-container {
  display: flex;
  gap: 10px;
  flex-wrap: nowrap;
  transition: transform 0.5s ease;
  animation: slide 18s infinite;
}

/* Styling untuk setiap item gambar */
.gallery-item {
  position: relative;
  width: 100%;
  flex-shrink: 0;
  overflow: hidden;
}

/* Animasi untuk sliding otomatis di mobile */
@keyframes slide {
  0% {
    transform: translateX(0%);
  }
  16.67% {
    transform: translateX(-100%);
  }
  33.33% {
    transform: translateX(-200%);
  }
  50% {
    transform: translateX(-300%);
  }
  66.67% {
    transform: translateX(-400%);
  }
  83.33% {
    transform: translateX(-500%);
  }
  100% {
    transform: translateX(0%);
  }
}

/* Teks overlay di gambar */
.relative .absolute {
  bottom: 4%;
  left: 4%;
  background-color: rgba(0, 0, 0, 0.6);
  color: white;
  padding: 8px 16px;
  border-radius: 10px;
  font-size: 12px;
  text-transform: uppercase;
  font-weight: bold;
}

/* Tidak ada animasi pada perangkat desktop */
@media screen and (min-width: 780px) {
.gallery-container {
  display: none;
  gap: 10px;
  animation: none;
}

.gallery-item {
  position: relative;
  flex-shrink:1;
  overflow: auto;
}

}
</style>
