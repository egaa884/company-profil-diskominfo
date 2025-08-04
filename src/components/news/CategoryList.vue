<template>
  <div class="category-list">
    <h3 class="text-xl font-bold text-gray-800 mb-4">Kategori</h3>
    <div class="bg-blue-50 rounded-lg p-4">
      <ul class="space-y-2">
        <li 
          v-for="(category, index) in categories" 
          :key="index"
          class="text-blue-600 hover:text-blue-800 cursor-pointer underline"
        >
          {{ category }}
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: 'CategoryList',
  data() {
    return {
      categories: [
        'Dokumen',
        'Standar Operasional Prosedur (SOP)',
        'Laporan Kinerja',
        'Laporan Penerimaan Layanan Publik',
        'Laporan Pengaduan Pelayanan Publik',
        'Berita',
        'Informasi'
      ]
    }
  }
}
</script>

<style scoped>
.category-list {
  margin-top: 2rem;
}
</style> 