<template>
  <div class="news-grid">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">SEMUA BERITA</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <NewsCard 
        v-for="(news, index) in newsList" 
        :key="index"
        :title="news.title"
        :date="news.date"
        :description="news.description"
      />
    </div>
  </div>
</template>

<script>
import NewsCard from './NewsCard.vue'

export default {
  name: 'NewsGrid',
  components: {
    NewsCard
  },
  data() {
    return {
      newsList: [
        {
          title: 'Pembangunan Infrastruktur Digital Kota Madiun',
          date: '30 Jul 2025',
          description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        },
        {
          title: 'Peluncuran Aplikasi Smart City Madiun',
          date: '29 Jul 2025',
          description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        },
        {
          title: 'Workshop Teknologi Informasi untuk UMKM',
          date: '28 Jul 2025',
          description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        },
        {
          title: 'Peningkatan Layanan E-Government',
          date: '27 Jul 2025',
          description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        },
        {
          title: 'Pelatihan Digital Marketing untuk Pelaku Usaha',
          date: '26 Jul 2025',
          description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        },
        {
          title: 'Inovasi Teknologi dalam Pelayanan Publik',
          date: '25 Jul 2025',
          description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        }
      ]
    }
  }
}
</script>

<style scoped>
.news-grid {
  margin-bottom: 2rem;
}
</style> 