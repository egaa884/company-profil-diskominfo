<template>
  <div class="news-card bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
    <div class="w-full h-32 bg-gray-400" style="background-color: #8F8F8F;"></div>
    <div class="p-4">
      <h4 class="font-semibold text-gray-800 mb-2 line-clamp-2">{{ title }}</h4>
      <p class="text-sm text-gray-500 mb-2">{{ date }}</p>
      <p class="text-sm text-gray-600 line-clamp-3">{{ description }}</p>
    </div>
  </div>
</template>

<script>
export default {
  name: 'NewsCard',
  props: {
    title: {
      type: String,
      default: 'Judul Berita'
    },
    date: {
      type: String,
      default: 'Tanggal'
    },
    description: {
      type: String,
      default: 'Deskripsi Berita'
    }
  }
}
</script>

<style scoped>
.line-clamp-2 {
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.line-clamp-3 {
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
}
</style> 