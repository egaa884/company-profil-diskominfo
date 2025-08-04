<template>
  <div class="hot-news">
    <h2 class="text-2xl font-bold text-gray-800 mb-4 mt-5 pl-4 relative inline-block"> HOT NEWS
  <img
    :src="hotNewsLogo"
    alt="Hot News Logo"
    class="absolute -top-2 left-full ml-1 w-6 h-6" />
</h2>
    <div class="bg-white rounded-lg shadow-md p-6">
      <div class="flex gap-6">
        <div class="flex-1">
          <h3 class="text-xl font-semibold text-gray-800 mb-3">
            Madiuntoday.id Raih Penghargaan Inspiring Media Creator dalam Event Maju Mendunia 2025
          </h3>
          <p class="text-gray-600 mb-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna.
          </p>
          <p class="text-sm text-gray-500">Kamis 31 Jul 2025</p>
        </div>
        <div class="w-64 h-48 bg-gray-400 rounded-lg flex-shrink-0" style="background-color: #8F8F8F;"></div>
      </div>
    </div>
  </div>
</template>

<script>
import hotNewsLogo from '../../assets/img/fire.png';
export default {
  name: 'HotNews',
  data() { 
     return {
       hotNewsLogo: hotNewsLogo // Mengekspos variabel import ke template
     };
  }
}
</script>

<style scoped>
.hot-news {
  margin-bottom: 2rem;
  margin-top: 5%;
}
</style> 