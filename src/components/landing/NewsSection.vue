<template>
  <section class="news-section">
    <div class="container">
      <h2 class="section-title">Berita Terkini</h2>
      <div class="news-grid">
        <div
          v-for="(news, index) in newsItems"
          :key="index"
          class="news-card"
          :class="{ 'is-visible': news.isVisible }"
          :style="{ 'transition-delay': news.delay }">
          <img :src="news.image" :alt="news.alt" class="news-image" />
          <div class="news-content">
            <h3 class="news-title">{{ news.title }}</h3>
            <p class="news-date">{{ news.date }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue';

// Data dummy untuk item berita
const newsItems = ref([
  {
    image: '/src/assets/img/berita1.jpg',
    alt: 'Gambar Berita',
    title: 'Wawali Gelar Rakor Jalang Charity & Sport Match 2025',
    date: '17 Juli 2025',
    isVisible: false,
    delay: '0s',
  },
  {
    image: '/src/assets/img/berita2.jpg',
    alt: 'Gambar Berita',
    title: 'Judul Berita Lainnya di Sini',
    date: '16 Juli 2025',
    isVisible: false,
    delay: '0.2s', // Penundaan untuk muncul berurutan
  },
  {
    image: '/src/assets/img/berita3.jpg',
    alt: 'Gambar Berita',
    title: 'Berita Terbaru Hari Ini',
    date: '15 Juli 2025',
    isVisible: false,
    delay: '0.2s', // Penundaan untuk muncul berurutan
  },
  // Tambahkan item berita lainnya jika diperlukan
]);

let observers = [];

onMounted(() => {
  const cards = document.querySelectorAll('.news-card');

  cards.forEach((card, index) => {
    // Hitung penundaan berdasarkan indeks untuk penampilan berurutan
    newsItems.value[index].delay = `${index * 0.30}s`;

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            // Kartu masuk ke dalam viewport
            newsItems.value[index].isVisible = true;
          } else {
            // Kartu keluar dari viewport (baik ke atas maupun ke bawah)
            newsItems.value[index].isVisible = false;
          }
        });
      },
      {
        root: null, // relatif terhadap viewport
        rootMargin: '0px',
        threshold: 0.1, // Pemicu ketika 10% kartu terlihat
      }
    );
    observer.observe(card);
    observers.push(observer);
  });
});

onBeforeUnmount(() => {
  // Putuskan semua observer saat komponen dilepas
  observers.forEach((observer) => observer.disconnect());
});
</script>

<style scoped>
/* Gaya yang sudah ada tetap sama */
.news-section {
  background-color: #f8f8f8;
  padding: 80px 16px;
  position: relative;
  z-index: 1; /* Pastikan di atas HeroSection (z-index: 0) */
  box-sizing: border-box;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
}

.section-title {
  font-size: 28px;
  font-weight: bold;
  color: #333;
  margin-bottom: 48px;
  text-align: center;
}

.news-grid {
  display: grid;
  grid-template-columns: 1fr;
  gap: 24px;
}

@media (min-width: 640px) {
  .news-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (min-width: 1024px) {
  .news-grid {
    grid-template-columns: repeat(3, 1fr);
  }
}

.news-card {
  background-color: #fff;
  border-radius: 8px;
  overflow: hidden;
  transition: transform 0.2s ease, box-shadow 0.2s ease, opacity 0.5s ease,
    transform 0.5s ease; /* Tambahkan opasitas dan transformasi ke transisi */
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
  display: flex;
  flex-direction: column;

  /* Kondisi awal untuk animasi */
  opacity: 0;
  transform: translateY(50px); /* Mulai dari bawah */
}

.news-card.is-visible {
  opacity: 1;
  transform: translateY(0); /* Pindah ke posisi aslinya */
}

/* Tambahan: Animasi ketika keluar dari viewport ke atas */
/* Karena transform: translateY(50px) sudah ada di news-card,
   saat is-visible dihilangkan, ia akan kembali ke kondisi tersebut. */
/* Jika Anda ingin animasi menghilang ke atas lebih jauh atau berbeda,
   Anda bisa tambahkan class terpisah untuk itu, tapi untuk saat ini,
   kondisi awal news-card sudah cukup. */

.news-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.news-image {
  height: 192px;
  background-color: #ccc;
  color: #555;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 14px;
  object-fit: cover;
  width: 100%;
}

.news-content {
  padding: 24px;
}

.news-title {
  font-size: 18px;
  font-weight: 600;
  color: #222;
  margin-bottom: 8px;
}

.news-date {
  font-size: 14px;
  color: #777;
}

@media (max-width: 768px) {
  .news-section {
    padding: 60px 16px;
  }
  .section-title {
    font-size: 24px;
    margin-bottom: 30px;
  }
}

@media (max-width: 480px) {
  .news-section {
    padding: 40px 16px;
  }
  .section-title {
    font-size: 20px;
  }
}
</style>
