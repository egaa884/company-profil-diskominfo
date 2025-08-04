<template>
  <div class="latest-news">
    <h3 class="text-xl font-bold text-gray-800 mb-4">Berita Terbaru</h3>
    <div class="space-y-4">
      <div 
        v-for="(news, index) in latestNews" 
        :key="index"
        class="bg-white rounded-lg shadow-md overflow-hidden"
      >
        <div class="w-full h-24 bg-gray-400" style="background-color: #8F8F8F;"></div>
        <div class="p-3">
          <p class="text-sm text-gray-600 line-clamp-3">
            {{ news.description }}
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'LatestNews',
  data() {
    return {
      latestNews: [
        {
          description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        },
        {
          description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        }
      ]
    }
  }
}
</script>

<style scoped>
.latest-news {
  margin-top: 17%;
}
.line-clamp-3 {
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
}
</style> 