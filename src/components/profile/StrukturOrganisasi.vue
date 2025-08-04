<template>
  <section class="struktur-organisasi-section">
    <div class="so-container">
      <div class="so-title-wrapper">
        <h2 class="so-main-title">
          STRUKTUR ORGANISASI
        </h2>
        <h3 class="so-sub-title">
          DINAS KOMUNIKASI DAN INFORMATIKA KOTA MADIUN
        </h3>
        <div class="so-divider"></div>
      </div>

      <div class="so-content-grid">
        <div class="so-kepala-dinas-column">
          <div class="so-kepala-dinas-card">
            <div class="so-profile-image-placeholder">
              <span class="so-image-text">Foto Kepala Dinas</span>
            </div>
            
            <div class="so-name-section">
              <div class="so-city-logo-placeholder">
                <span class="so-city-logo-text">KOTA MADIUN</span>
              </div>
              <h4 class="so-kepala-dinas-name">Noor Aflah, S.Kom.</h4>
            </div>
            
            <div class="so-position-box">
              <p class="so-position-text">KEPALA DINAS KOMUNIKASI</p>
              <p class="so-position-text">DAN INFORMATIKA</p>
            </div>
          </div>
        </div>

        <div class="so-message-column">
          <div class="so-message-card">
            <h4 class="so-message-title">Sambutan Kepala Dinas</h4>
            <p class="so-message-paragraph">
              Assalamualaikum warahmatullahi Wabarakatuh. Salam Sejahtera untuk kita semua.
            </p>
            <p class="so-message-paragraph">
              Sebagai Kepala Dinas Komunikasi dan Informatika Kota Madiun, saya mengucapkan 
              terima kasih atas kepercayaan yang diberikan untuk memimpin dinas yang memiliki 
              peran strategis dalam mendukung transformasi digital dan peningkatan pelayanan 
              publik di Kota Madiun.
            </p>
            <p class="so-message-paragraph">
              Dinas Komunikasi dan Informatika berkomitmen untuk terus mengembangkan 
              teknologi informasi dan komunikasi yang inovatif, handal, dan berkelanjutan 
              dalam mendukung visi Kota Madiun yang Maju, Mandiri, dan Berdaya Saing.
            </p>
            <p class="so-message-paragraph">
              Kami siap melayani masyarakat dengan sebaik-baiknya dan terus berinovasi 
              dalam memberikan solusi teknologi yang tepat guna untuk kemajuan Kota Madiun.
            </p>
          </div>
        </div>
      </div>

      <div class="so-button-wrapper">
        <button class="so-more-button">
          Selengkapnya Tentang Struktur Organisasi
        </button>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'StrukturOrganisasi'
}
</script>

<style scoped>
.struktur-organisasi-section {
  background-color: #ffffff; /* background-color: #ffffff; */
  padding-top: 4rem; /* py-16 */
  padding-bottom: 4rem; /* py-16 */
}

.so-container {
  max-width: 1280px; /* container mx-auto */
  margin-left: auto;
  margin-right: auto;
  padding-left: 1rem; /* px-4 */
  padding-right: 1rem; /* px-4 */
}

/* Title */
.so-title-wrapper {
  text-align: center; /* text-center */
  margin-bottom: 3rem; /* mb-12 */
}

.so-main-title {
  font-size: 1.875rem; /* text-3xl */
  line-height: 2.25rem; /* leading-9 (default untuk text-3xl) */
  font-weight: 700; /* font-bold */
  color: #1e3a8a; /* text-blue-900 */
  margin-bottom: 1rem; /* mb-4 */
  text-transform: uppercase; /* Tambahan untuk memastikan kapital semua */
}

@media (min-width: 768px) { /* md:text-4xl */
  .so-main-title {
    font-size: 2.25rem; /* text-4xl */
    line-height: 2.5rem; /* leading-10 (default untuk text-4xl) */
  }
}

.so-sub-title {
  font-size: 1.5rem; /* text-2xl */
  line-height: 2rem; /* leading-8 (default untuk text-2xl) */
  font-weight: 600; /* font-semibold */
  color: #1e40af; /* text-blue-800 */
  margin-bottom: 1rem; /* mb-4 */
  text-transform: uppercase; /* Tambahan untuk memastikan kapital semua */
}

@media (min-width: 768px) { /* md:text-3xl */
  .so-sub-title {
    font-size: 1.875rem; /* text-3xl */
    line-height: 2.25rem; /* leading-9 (default untuk text-3xl) */
  }
}

.so-divider {
  width: 8rem; /* w-32 */
  height: 0.25rem; /* h-1 */
  background-color: #2563eb; /* bg-blue-600 */
  margin-left: auto; /* mx-auto */
  margin-right: auto; /* mx-auto */
}

/* Content Grid */
.so-content-grid {
  display: grid; /* grid */
  grid-template-columns: 1fr; /* grid-cols-1 */
  gap: 3rem; /* gap-12 */
  align-items: flex-start; /* items-start */
}

@media (min-width: 1024px) { /* lg:grid-cols-2 */
  .so-content-grid {
    grid-template-columns: repeat(2, 1fr); /* grid-cols-2 */
  }
}

/* Left Column - Head of Department */
.so-kepala-dinas-column {
  text-align: center; /* text-center */
}

.so-kepala-dinas-card {
  background-color: #ffffff; /* bg-white */
  border-radius: 0.5rem; /* rounded-lg */
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.1); /* shadow-lg */
  padding: 2rem; /* p-8 */
  max-width: 28rem; /* max-w-md */
  margin-left: auto; /* mx-auto */
  margin-right: auto; /* mx-auto */
}

/* Profile Image */
.so-profile-image-placeholder {
  width: 12rem; /* w-48 */
  height: 12rem; /* h-48 */
  background-color: #d1d5db; /* bg-gray-300 */
  border-radius: 9999px; /* rounded-full */
  margin-left: auto; /* mx-auto */
  margin-right: auto; /* mx-auto */
  margin-bottom: 1.5rem; /* mb-6 */
  display: flex; /* flex */
  align-items: center; /* items-center */
  justify-content: center; /* justify-center */
}

.so-image-text {
  color: #4b5563; /* text-gray-600 */
  font-size: 1.125rem; /* text-lg */
  line-height: 1.75rem; /* leading-7 (default untuk text-lg) */
  font-weight: 500; /* font-medium */
}

/* Logo and Name Section */
.so-name-section {
  display: flex; /* flex */
  align-items: center; /* items-center */
  justify-content: center; /* justify-center */
  margin-bottom: 1.5rem; /* mb-6 */
}

.so-city-logo-placeholder {
  width: 3rem; /* w-12 */
  height: 3rem; /* h-12 */
  background-color: #22c55e; /* bg-green-500 */
  border-radius: 0.5rem; /* rounded-lg */
  margin-right: 1rem; /* mr-4 */
  display: flex; /* flex */
  align-items: center; /* items-center */
  justify-content: center; /* justify-center */
}

.so-city-logo-text {
  color: #ffffff; /* text-white */
  font-size: 0.75rem; /* text-xs */
  line-height: 1rem; /* leading-4 (default for text-xs) */
  font-weight: 700; /* font-bold */
  text-align: center; /* untuk teks dua baris di dalam elemen kecil */
}

.so-kepala-dinas-name {
  font-size: 1.25rem; /* text-xl */
  line-height: 1.75rem; /* leading-7 (default for text-xl) */
  font-weight: 700; /* font-bold */
  color: #1e3a8a; /* text-blue-900 */
}

/* Position Box */
.so-position-box {
  background-color: #16a34a; /* bg-green-600 */
  color: #ffffff; /* text-white */
  padding-top: 0.75rem; /* py-3 */
  padding-bottom: 0.75rem; /* py-3 */
  padding-left: 1.5rem; /* px-6 */
  padding-right: 1.5rem; /* px-6 */
  border-radius: 0.5rem; /* rounded-lg */
}

.so-position-text {
  font-weight: 600; /* font-semibold */
  text-transform: uppercase; /* kapital semua */
}

/* Right Column - Message */
.so-message-column {
  display: flex; /* space-y-6 */
  flex-direction: column;
  gap: 1.5rem; /* gap */
}

.so-message-card {
  background-color: #ffffff; /* bg-white */
  border-radius: 0.5rem; /* rounded-lg */
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.1); /* shadow-lg */
  padding: 2rem; /* p-8 */
}

.so-message-title {
  font-size: 1.25rem; /* text-xl */
  line-height: 1.75rem; /* leading-7 (default for text-xl) */
  font-weight: 700; /* font-bold */
  color: #1e3a8a; /* text-blue-900 */
  margin-bottom: 1rem; /* mb-4 */
}

.so-message-paragraph {
  color: #374151; /* text-gray-700 */
  line-height: 1.625; /* leading-relaxed */
  margin-bottom: 1rem; /* mb-4 (kecuali paragraf terakhir) */
}

.so-message-paragraph:last-child {
  margin-bottom: 0; /* Hapus margin bawah untuk paragraf terakhir */
}


/* Button */
.so-button-wrapper {
  text-align: center; /* text-center */
  margin-top: 3rem; /* mt-12 */
}

.so-more-button {
  /* Gradasi Background Button */
  background-image: linear-gradient(to right, #16a34a, #2563eb); /* from-green-600 to-blue-600 */
  color: #ffffff; /* text-white */
  padding-left: 2rem; /* px-8 */
  padding-right: 2rem; /* px-8 */
  padding-top: 1rem; /* py-4 */
  padding-bottom: 1rem; /* py-4 */
  border-radius: 0.5rem; /* rounded-lg */
  font-weight: 600; /* font-semibold */
  border: none; /* Hilangkan border default button */
  cursor: pointer; /* Ubah kursor */
  display: inline-block; /* Agar padding horizontal bekerja dengan baik */

  /* Transisi Hover */
  transition: all 0.3s ease; /* transition-all duration-300 */
}

.so-more-button:hover {
  /* Gradasi Hover Button */
  background-image: linear-gradient(to right, #15803d, #1d4ed8); /* hover:from-green-700 hover:to-blue-700 */
  transform: scale(1.05); /* hover:scale-105 */
}
</style>