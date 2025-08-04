<template>
  <section class="sekilas-dinas">
    <div class="sekilas-container">
      <div class="sekilas-title-wrapper">
        <h2 class="sekilas-title">
          Sekilas Dinas Komunikasi dan Informatika Kota Madiun
        </h2>
        <div class="sekilas-divider"></div>
      </div>

      <div class="sekilas-content-grid">
        <div class="sekilas-image-column">
          <div class="sekilas-image-placeholder">
            <span class="sekilas-image-text">Foto Madiun</span>
          </div>
        </div>

        <div class="sekilas-text-column">
          <p class="sekilas-paragraph">
            Dinas Komunikasi dan Informatika Kota Madiun adalah instansi pemerintah yang bertanggung jawab 
            dalam bidang komunikasi, informatika, persandian, dan statistik. Dinas ini dibentuk berdasarkan 
            Peraturan Daerah Kota Madiun Nomor 04 tahun 2008 tentang Organisasi dan Tata Kerja Dinas Daerah 
            Kota Madiun.
          </p>
          
          <p class="sekilas-paragraph">
            Sejak awal berdirinya, Dinas Komunikasi dan Informatika telah mengalami beberapa kali perubahan 
            lokasi kantor, dimulai dari Jalan Basuki Rahmad, kemudian pindah ke Jalan Hayam Wuruk, 
            selanjutnya ke Jalan Pahlawan, dan saat ini berlokasi di Jalan Perintis Kemerdekaan Nomor 32, 
            Kelurahan Kartoharjo, Kecamatan Kartoharjo, Kota Madiun.
          </p>
          
          <p class="sekilas-paragraph">
            Saat ini, Dinas Komunikasi dan Informatika Kota Madiun memiliki struktur organisasi Type B 
            dengan tiga divisi utama: Divisi Pengelolaan Informasi Publik dan Komunikasi, Divisi Pengelolaan 
            Teknologi Informasi dan Komunikasi, serta Divisi Pengelolaan Statistik dan Persandian.
          </p>
          
          <p class="sekilas-paragraph">
            Dinas ini berperan penting dalam mendukung transformasi digital dan peningkatan pelayanan publik 
            di Kota Madiun melalui pengembangan teknologi informasi dan komunikasi yang inovatif dan 
            berkelanjutan.
          </p>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'SekilasDinas'
}
</script>

<style scoped>
.sekilas-dinas {
  background-color: #ffffff; /* background-color: #ffffff; */
  padding-top: 4rem; /* py-16 */
  padding-bottom: 4rem; /* py-16 */
}

.sekilas-container {
  max-width: 1280px; /* container mx-auto */
  margin-left: auto;
  margin-right: auto;
  padding-left: 1rem; /* px-4 */
  padding-right: 1rem; /* px-4 */
}

/* Title */
.sekilas-title-wrapper {
  text-align: center; /* text-center */
  margin-bottom: 3rem; /* mb-12 */
}

.sekilas-title {
  font-size: 1.875rem; /* text-3xl */
  line-height: 2.25rem; /* leading-9 (default untuk text-3xl) */
  font-weight: 700; /* font-bold */
  color: #1e3a8a; /* text-blue-900 */
  margin-bottom: 1rem; /* mb-4 */
}

@media (min-width: 768px) { /* md:text-4xl */
  .sekilas-title {
    font-size: 2.25rem; /* text-4xl */
    line-height: 2.5rem; /* leading-10 (default untuk text-4xl) */
  }
}

.sekilas-divider {
  width: 8rem; /* w-32 */
  height: 0.25rem; /* h-1 */
  background-color: #2563eb; /* bg-blue-600 */
  margin-left: auto; /* mx-auto */
  margin-right: auto; /* mx-auto */
}

/* Content Grid */
.sekilas-content-grid {
  display: grid; /* grid */
  grid-template-columns: 1fr; /* grid-cols-1 */
  gap: 3rem; /* gap-12 */
  align-items: flex-start; /* items-start */
}

@media (min-width: 1024px) { /* lg:grid-cols-2 */
  .sekilas-content-grid {
    grid-template-columns: repeat(2, 1fr); /* grid-cols-2 */
  }
}

/* Left Column - Image */
.sekilas-image-column {
  display: flex; /* flex */
  justify-content: center; /* justify-center */
}

.sekilas-image-placeholder {
  width: 100%; /* w-full */
  max-width: 28rem; /* max-w-md, 1rem = 16px, 448px */
  height: 20rem; /* h-80, 1rem = 16px, 320px */
  background-color: #d1d5db; /* bg-gray-300 */
  border-radius: 0.5rem; /* rounded-lg */
  display: flex; /* flex */
  align-items: center; /* items-center */
  justify-content: center; /* justify-center */
}

.sekilas-image-text {
  color: #4b5563; /* text-gray-600 */
  font-size: 1.125rem; /* text-lg */
  line-height: 1.75rem; /* leading-7 (default untuk text-lg) */
  font-weight: 500; /* font-medium */
}

/* Right Column - Text Content */
.sekilas-text-column {
  display: flex; /* space-y-6 */
  flex-direction: column;
  gap: 1.5rem; /* gap */
}

.sekilas-paragraph {
  color: #374151; /* text-gray-700 */
  line-height: 1.625; /* leading-relaxed */
}
</style>