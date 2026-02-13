<template>
    <section class="pb-3 bg-primary">
        <div class="container mx-auto py-10 px-4">
             <!-- Secteion GIft -->
        <div class="container mx-auto px-4 text-center">
            <h2 class="lg:text-3xl text-2xl font-extrabold mb-2 text-white">Gift Registry</h2>
            <div class="">
                <p class="text-white mb-3 lg:mb-6 text-[12px] lg:text-[15px]">We are so excited to begin our new life together. If you'd like to
                    contribute, we kindly ask for monetary gifts to help us with our journey.</p>

                    <h3 class="text-lg font-semibold text-white">Bank Transfer Details</h3>
                    <div class="w-full mx-auto flex justify-center py-2 lg:py-5">
                    <div class="bg-gray-100 lg:w-[50%] p-3 rounded-lg text-[12px] lg:text-[14px]">
                        <p class="text-gray-700 font-medium">Bank Name: <span class="text-blue-600">Bank XYZ</span></p>
                        <p class="text-gray-700 font-medium">Account Number: <span class="text-blue-600">1234567890</span>
                        </p>
                        <p class="text-gray-700 font-medium">Account Holder: <span class="text-blue-600">John Doe</span></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Section gift -->
         <!-- Secteion Kehadiran -->
            <div class="bg-white rounded-xl shadow-md w-full">
                <h1 class="lg:text-2xl text-lg font-bold text-center py-4">RSVP - Confirm Your Attendance</h1>
                <div class="flex gap-4 justify-center lg:py-3 lg:px-40 px-5 pb-5">
                    <div class="flex flex-col">
                        <label for="name" class="block text-gray-700 font-medium text-[9px] lg:text-[14px]">Name</label>
                        <input type="text" id="name"
                            class="lg:w-90 text-[9px] lg:text-[14px] p-1 border border-gray-300 rounded-md mb-2"
                            placeholder="Enter your name" required />
                        <!-- Kehadiran -->
                        <label for="attendance" class="block text-gray-700 font-medium text-[9px] lg:text-[14px]">Kehadiran</label>
                        <select id="attendance" class="lg:w-90 p-1 text-[9px] lg:text-[14px] text-gray-400 border border-gray-300 rounded-md mb-2"
                            required>
                            <option value="yes">Hadir</option>
                            <option value="no">Belum Hadir</option>
                        </select>
                        <!-- pesan -->
                        <label for="message" class="block text-gray-700 font-medium text-[9px] lg:text-[14px]">Message or
                            Wishes</label>
                        <textarea id="message" class="lg:w-full p-1 text-[9px] lg:text-[14px] border border-gray-300 rounded-md"
                            placeholder="Write a message or wish for the couple"></textarea>

                            <button class="mt-2 text-[9px] lg:text-[14px] py-1 rounded-2xl ring ring-primary hover:bg-primary hover:text-white">Kirim</button>
                    </div>
                    <div class="flex flex-col h-35 overflow-auto bg-primary px-2 py-1 shadow-md rounded-md text-white">
                        <div class="mb-2">
                            <h4 class="text-[9px] lg:text-[14px] font-semibold pb-1">Azwar</h4>
                            <p class="text-[8px] lg:text-[12px] text-primary px-1 mb-2 w-10 lg:w-15 bg-gray-200 rounded-2xl text-center">Hadir</p>
                            <p class="text-[8px] lg:text-[12px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora
                                provident alias ducimus consectetur earum deleniti natus saepe impedit iste, libero
                                maxime officiis hic. Quae aspernatur aperiam veritatis totam nemo repellat!</p>
                        </div>
                        <div class="mb-2">
                            <h4 class="text-[9px] lg:text-[14px] font-semibold pb-1">Iqbal</h4>
                            <p class="text-[8px] lg:text-[12px] text-primary px-1 mb-2 w-15 lg:w-25 bg-gray-200 rounded-2xl text-center">Belum
                                Hadir</p>
                            <p class="text-[8px] lg:text-[12px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora
                                provident alias ducimus consectetur earum deleniti natus saepe impedit iste,</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script lang="ts" setup>
import { ref } from 'vue'

</script>

<style scoped>
/* Additional styling if needed */
</style>
