<template>
  <section class="about-section" ref="aboutSection">
    <div class="container">
      <h2
        class="section-title"
        :class="[
          isInView ? 'title-in' : scrollingDown ? 'title-out-left' : 'title-out-right'
        ]"
      >
        Sekilas Tentang Kami
      </h2>
      <br> <div class="content">
        <div
          class="text-column"
          :class="[
            isInView ? 'text-in' : scrollingDown ? 'text-out-left' : 'text-out-left'
          ]"
        >
          <p class="text-paragraph">
            Penjabaran tugas pokok dan fungsi Dinas Komunikasi dan Informatika Kota Madiun berpedoman pada Peraturan Wali Kota Madiun Nomor 69 Tahun 2020 tentang Kedudukan, Susunan Organisasi, Tugas, Fungsi dan Tata Kerja Dinas Komunikasi dan Informatika. Dinas Kominfo merupakan dinas tipe B dengan unsur pelaksana yang terdiri dari tiga bidang. Yakni, Bidang Pengelolaan Informasi dan Komunikasi Publik, Bidang Pengelolaan Teknologi Informasi dan Komunikasi, serta Bidang Pengelolaan Statistik dan Persandian.
          </p>
        </div>
        <div
          class="media-column"
          :class="[
            isInView ? 'media-in' : scrollingDown ? 'media-out-right' : 'media-out-right'
          ]"
        >
          <div class="image-wrapper">
            <img :src="pahlawanStreetCenterImage" alt="Pahlawan Street Center Madiun" class="image-pahlawan">
            <img :src="diskominfoLogoImage" alt="Logo Diskominfo" class="image-diskominfo">
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue'

// Mengimpor gambar dari lokasi assets Anda.
// Pastikan path ini benar sesuai struktur folder Anda (src/assets/img/)
// '@/' adalah alias untuk 'src/' yang umum digunakan di proyek Vite/Vue.
import pahlawanStreetCenterImage from '@/assets/img/pendekar.jpg' // Ini adalah gambar Pahlawan Street Center
import diskominfoLogoImage from '@/assets/img/logo-madiun-pesilat.png' // Ini adalah logo Diskominfo

const isInView = ref(false) // State untuk melacak apakah elemen ada di dalam viewport
const scrollingDown = ref(true) // State untuk melacak apakah pengguna scroll ke bawah
const aboutSection = ref(null) // Referensi ke elemen section untuk IntersectionObserver
let lastScrollY = window.scrollY // Menyimpan posisi scroll terakhir

// Fungsi untuk menangani event scroll
const handleScroll = () => {
  const currentScrollY = window.scrollY
  scrollingDown.value = currentScrollY > lastScrollY // Menentukan arah scroll
  lastScrollY = currentScrollY // Memperbarui posisi scroll terakhir
}

// Membuat IntersectionObserver untuk mendeteksi apakah elemen masuk ke dalam viewport
const observer = new IntersectionObserver(
  ([entry]) => {
    isInView.value = entry.isIntersecting // Memperbarui isInView berdasarkan apakah elemen terlihat
  },
  { threshold: 0.3 } // Trigger ketika 30% dari elemen terlihat
)

// Lifecycle hook: Saat komponen dipasang ke DOM
onMounted(() => {
  window.addEventListener('scroll', handleScroll) // Menambahkan event listener untuk scroll
  if (aboutSection.value) {
    observer.observe(aboutSection.value) // Mulai mengamati elemen aboutSection
  }
})

// Lifecycle hook: Saat komponen dilepas dari DOM
onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll) // Menghapus event listener untuk mencegah memory leak
  if (aboutSection.value) {
    observer.unobserve(aboutSection.value) // Berhenti mengamati elemen aboutSection
  }
})
</script>

<style scoped>
/* Bagian "Sekilas Tentang Kami" */
.about-section {
  background-color: #f3f4f5; /* Warna latar belakang bagian */
  padding-top: 80px; /* Padding atas konten internal */
  padding-left: 16px; /* Padding kiri */
  padding-right: 16px; /* Padding kanan */
  padding-bottom: 80px; /* Padding bawah */
  overflow: hidden; /* Menyembunyikan konten yang meluap untuk efek animasi */

  position: relative; /* Diperlukan untuk penentuan posisi jika ada elemen anak yang diposisikan absolut */
  z-index: 0; /* Mengembalikan ke z-index normal */
  box-sizing: border-box; /* Memastikan padding dan border termasuk dalam ukuran elemen */
}

.container {
  max-width: 1200px; /* Lebar maksimum konten */
  margin: 0 auto; /* Pusatkan container secara horizontal */
}

/* Judul Bagian */
.section-title {
  font-size: 28px; /* Ukuran font judul */
  font-weight: bold; /* Ketebalan font */
  color: #333; /* Warna teks judul */
  margin-bottom: 32px; /* Jarak bawah judul */
  text-align: center; /* Pusatkan teks judul */
  transform: translateX(100%); /* Awalnya bergeser 100% ke kanan (tidak terlihat) */
  opacity: 0; /* Awalnya tidak terlihat */
  transition: transform 1s ease, opacity 1s ease; /* Transisi untuk animasi */
}

/* Animasi Judul: Saat masuk viewport */
.title-in {
  transform: translateX(0); /* Bergeser ke posisi asli */
  opacity: 1; /* Menjadi terlihat */
}

/* Animasi Judul: Saat keluar viewport dan scroll ke bawah */
.title-out-left{
  transform: translateX(100%); /* Bergeser 100% ke kiri (keluar) */
  opacity: 0; /* Menjadi tidak terlihat */
}

/* Animasi Judul: Saat keluar viewport dan scroll ke atas */
.title-out-right {
  transform: translateX(100%); /* Bergeser 100% ke kanan (keluar) */
  opacity: 0; /* Menjadi tidak terlihat */
}

/* Konten utama (kolom teks dan kolom media) */
.content {
  display: flex; /* Menggunakan flexbox untuk tata letak kolom */
  flex-direction: column; /* Secara default kolom ditumpuk vertikal (untuk mobile) */
  gap: 48px; /* Jarak antara kolom */
}

/* Media Query: Untuk layar lebih besar dari 768px (misalnya tablet & desktop) */
@media (min-width: 768px) {
  .content {
    flex-direction: row; /* Kolom berjajar horizontal */
  }
}

/* Gaya dasar untuk kolom teks dan kolom media */
.text-column,
.media-column {
  flex: 1; /* Setiap kolom mengambil ruang yang sama */
  transition: transform 1s ease, opacity 1s ease, scale 1s ease; /* Transisi untuk animasi */
  opacity: 0; /* Awalnya tidak terlihat */
  scale: 0.9; /* Awalnya sedikit menyusut */
}

/* Paragraf teks */
.text-paragraph {
  color: #666; /* Warna teks paragraf */
  line-height: 1.8; /* Jarak antar baris */
}

/* ANIMASI TEKS */
/* Animasi Teks: Saat masuk viewport */
.text-in {
  transform: translateX(0); /* Bergeser ke posisi asli */
  opacity: 1; /* Menjadi terlihat */
  scale: 1; /* Kembali ke ukuran asli */
}
/* Animasi Teks: Saat keluar viewport dan scroll ke bawah */
.text-out-left {
  transform: translateX(-100%); /* Bergeser 100% ke kiri (keluar) */
  opacity: 0; /* Menjadi tidak terlihat */
  scale: 0.9; /* Sedikit menyusut */
}
/* Animasi Teks: Saat keluar viewport dan scroll ke atas */
.text-out-right {
  transform: translateX(100%); /* Bergeser 100% ke kanan (keluar) */
  opacity: 0; /* Menjadi tidak terlihat */
  scale: 0.9; /* Sedikit menyusut */
}

/* KOLOM MEDIA (GAMBAR/VIDEO) */
.media-column {
  /* Hapus background-color, min-height, border-radius, box-shadow, color, display, align-items, justify-content, text-align dari placeholder sebelumnya */
  position: relative; /* Diperlukan untuk penentuan posisi absolut gambar di dalamnya */
  display: flex; /* Menggunakan flexbox untuk tata letak konten di dalamnya */
  justify-content: center; /* Pusatkan konten secara horizontal */
  align-items: center; /* Pusatkan konten secara vertikal */
  min-height: 300px; /* Tinggi minimum kolom media, sesuaikan sesuai kebutuhan agar gambar tidak terpotong */
  box-sizing: border-box; /* Memastikan padding/border termasuk dalam lebar/tinggi */
}

.image-wrapper {
  position: relative; /* Menjadi konteks posisi untuk gambar absolut di dalamnya */
  width: 100%; /* Mengambil lebar penuh dari media-column */
  height: 100%; /* Mengambil tinggi penuh dari media-column */
  display: flex;
  flex-direction: column; /* Secara default menumpuk gambar secara vertikal */
  align-items: center; /* Pusatkan gambar secara horizontal dalam wrapper */
  justify-content: center; /* Pusatkan gambar secara vertikal dalam wrapper */
}

.image-pahlawan {
  max-width: 80%; /* Lebar maksimum gambar, sesuaikan sesuai kebutuhan */
  height: auto; /* Mempertahankan rasio aspek gambar */
  border-radius: 8px; /* Sudut membulat */
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15); /* Bayangan untuk efek kedalaman */
  transform: rotate(-5deg); /* Sedikit rotasi seperti di screenshot */
  position: absolute; /* Posisikan secara absolut untuk memungkinkan tumpang tindih */
  top: 0; /* Sesuaikan posisi atas */
  left: 0; /* Sesuaikan posisi kiri */
  z-index: 1; /* Memastikan gambar ini berada di atas latar belakang tetapi di bawah logo */
}

.image-diskominfo {
  max-width: 40%; /* Lebar maksimum logo, sesuaikan */
  height: auto; /* Mempertahankan rasio aspek */
  position: absolute; /* Posisikan secara absolut untuk penempatan yang tepat */
  bottom: 10%; /* Sesuaikan posisi dari bawah */
  right: 10%; /* Sesuaikan posisi dari kanan */
  z-index: 2; /* Memastikan logo berada di atas gambar jalanan */
  background-color: #fff; /* Latar belakang putih untuk logo seperti di screenshot */
  padding: 10px; /* Padding di sekitar logo */
  border-radius: 8px; /* Sudut membulat */
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); /* Bayangan untuk logo */
}


/* ANIMASI MEDIA */
/* Animasi Media: Saat masuk viewport */
.media-in {
  transform: translateX(0); /* Bergeser ke posisi asli */
  opacity: 1; /* Menjadi terlihat */
  scale: 1; /* Kembali ke ukuran asli */
}
/* Animasi Media: Saat keluar viewport dan scroll ke bawah */
.media-out-left {
  transform: translateX(-100%); /* Bergeser 100% ke kiri (keluar) */
  opacity: 0; /* Menjadi tidak terlihat */
  scale: 0.9; /* Sedikit menyusut */
}
/* Animasi Media: Saat keluar viewport dan scroll ke atas */
.media-out-right {
  transform: translateX(100%); /* Bergeser 100% ke kanan (keluar) */
  opacity: 0; /* Menjadi tidak terlihat */
  scale: 0.9; /* Sedikit menyusut */
}

/* Media Query untuk Responsivitas - PENTING! */
/* Untuk layar hingga 768px (misalnya tablet dalam mode potret) */
@media (max-width: 768px) {
  .about-section {
    padding-top: 40px; /* Kurangi padding atas */
    padding-left: 16px;
    padding-right: 16px;
    padding-bottom: 40px; /* Kurangi padding bawah */
  }

  .section-title {
    font-size: 24px; /* Kurangi ukuran font judul */
    margin-bottom: 24px; /* Kurangi jarak bawah judul */
  }

  .content {
    gap: 32px; /* Kurangi jarak antara kolom */
  }

  .text-paragraph {
    font-size: 0.9em; /* Sedikit kurangi ukuran font paragraf */
  }

  .image-pahlawan {
    max-width: 90%; /* Sesuaikan lebar gambar untuk layar lebih kecil */
    top: 5%; /* Sesuaikan posisi */
    left: 5%; /* Sesuaikan posisi */
    transform: rotate(-3deg); /* Kurangi rotasi sedikit */
  }

  .image-diskominfo {
    max-width: 30%; /* Sesuaikan lebar logo untuk layar lebih kecil */
    bottom: 5%; /* Sesuaikan posisi */
    right: 5%; /* Sesuaikan posisi */
  }

  .media-column {
    min-height: 250px; /* Sesuaikan tinggi kolom media untuk layar lebih kecil */
  }
}

/* Untuk layar hingga 480px (misalnya ponsel) */
@media (max-width: 480px) {
  .about-section {
    padding-top: 20px; /* Kurangi padding atas lebih jauh */
  }
  .section-title {
    font-size: 20px; /* Kurangi ukuran font judul lebih jauh */
  }
  .media-column {
    min-height: 200px; /* Sesuaikan tinggi kolom media untuk layar sangat kecil */
  }
  .image-pahlawan {
    max-width: 100%; /* Gunakan lebar penuh */
    transform: rotate(0deg); /* Hilangkan rotasi untuk mencegah masalah tata letak */
    position: relative; /* Kembalikan ke posisi relatif */
    top: auto; /* Hilangkan posisi absolut */
    left: auto; /* Hilangkan posisi absolut */
  }
  .image-diskominfo {
    max-width: 35%; /* Sesuaikan lebar logo */
    position: relative; /* Kembalikan ke posisi relatif */
    bottom: auto; /* Hilangkan posisi absolut */
    right: auto; /* Hilangkan posisi absolut */
    margin-top: 15px; /* Tambahkan jarak jika gambar ditumpuk secara vertikal */
  }
  .image-wrapper {
    flex-direction: column; /* Pastikan gambar ditumpuk secara vertikal */
    gap: 15px; /* Jarak antara gambar jika ditumpuk */
  }
}
</style>