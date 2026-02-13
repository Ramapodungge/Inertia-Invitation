<template>
    <div class="bg-gray-100">
        <section class="py-16">
          <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-extrabold mb-4">Event Details</h2>
            <div class="bg-white shadow-lg rounded-lg p-8">
              <h3 class="text-xl font-semibold mb-4">-- Date & Time --</h3>
              <p class="text-gray-700">{{ eventDate }}</p>
              <p class="text-gray-700">{{ eventTime }}</p>
              <button @click="addToCalendar" class="mt-4 bg-pink-500 text-white py-2 px-4 rounded-lg text-xs">
                Add to Calendar
              </button>

               <div class="container mx-auto px-4 text-center">
      <h2 class="text-xl font-semibold mt-3">-- Location --</h2>
      <div class="bg-pink-500 shadow-lg rounded-lg p-8">
        <h3 class="text-lg font-medium mb-4 text-white">Venue</h3>
        <p class="text-gray-300">The Grand Ballroom, Hotel XYZ</p>
        <a href="https://goo.gl/maps/xyz" target="_blank" class="text-white">View on Google Maps</a>
      </div>
    </div>

            </div>
          </div>
        </section>

    </div>
</template>

<script lang="ts" setup>
import { ref } from 'vue'

const eventDate = ref('Saturday, 10th July 2030')
const eventTime = ref('19:00 WITA')

const addToCalendar = () => {
  // Logic to add event to the user's calendar
  alert('Added to calendar!')
}
</script>
