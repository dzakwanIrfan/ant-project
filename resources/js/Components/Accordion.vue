<template>
    <div class="space-y-0">
      <div v-for="(item, index) in items" :key="index" class="border-b-2 border-blue3 border-collapse" :class="getTopBorder(index)">
        <button
          class="w-full md:px-16 sm:px-12 px-4 sm:py-12 py-8 md:text-3xl sm:text-2xl text-xl flex items-start justify-between text-myBlack"
          @click="toggle(index)"
        >
          <div class="flex justify-between sm:gap-20 gap-12">
            <div>
              0{{ index + 1 }}
            </div>
            <div class="flex flex-col text-left sm:gap-0 gap-1">
                <div class="">
                  {{ item.title }}
                </div>
                <div v-show="isOpen(index)" class="text-base">
                  {{ item.content }}
                </div>
            </div>
          </div>
          <div class="pi md:pl-16 sm:pl-12 pl-8" :class="getClass(index)"></div>
        </button>
      </div>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  import 'primeicons/primeicons.css';

  function getTopBorder(index) {
    return index === 0 
      ? 'border-t-2' 
      : '';
  }
  
  const items = [
    { title: 'Masuk dan Daftar pada website kami ', content: 'Pertama, pemohon perlu mendaftar dan membuat akun di website kami. Setelah itu, masuk menggunakan akun yang telah dibuat.' },
    { title: 'Isi Formulir Pengajuan Desain Masjid Gratis', content: 'Setelah masuk, pemohon diharap untuk mengisi formulir yang tersedia. Formulir ini mencakup detail penting terkait lokasi, ukuran lahan, anggaran, dan kebutuhan khusus lainnya yang akan menjadi bahan pertimbangan dalam perencanaan desain.' },
    { title: 'Tinjauan dan Verifikasi oleh Tim Ant-Project', content: 'Setelah formulir diajukan, tim Ant-Project akan melakukan peninjauan dan verifikasi data yang telah dimasukkan. Kami akan memastikan bahwa semua informasi yang dibutuhkan telah lengkap.' },
    { title: 'Koordinasi Awal dengan Pemohon', content: 'Setelah verifikasi selesai, tim kami akan menghubungi pemohon untuk melakukan koordinasi awal. Ini bertujuan untuk mendiskusikan kebutuhan lebih lanjut dan menjawab pertanyaan yang mungkin timbul.' },
    { title: 'Survey Lokasi', content: 'Tim Ant-Project akan mengunjungi lokasi yang diajukan untuk melakukan survey lapangan. Kami akan memeriksa kondisi lahan, aksesibilitas, dan faktor-faktor lain yang berpengaruh dalam proses perancangan.' },
    { title: 'Pembuatan Konsep Desain', content: 'Berdasarkan data yang terkumpul dari survey dan informasi dari formulir, tim Ant-Project akan mulai membuat konsep desain awal. Desain ini akan disesuaikan dengan kebutuhan dan keinginan pemohon.' },
    { title: 'Penyusunan Detail Engineering Design (DED)', content: 'Setelah konsep disetujui, tim akan melanjutkan dengan penyusunan Detail Engineering Design (DED), yang mencakup perencanaan teknis lengkap untuk pembangunan masjid.' },
    { title: 'Serah Terima Desain', content: 'Setelah DED selesai, kami akan menyerahkan hasil desain kepada pemohon. Desain yang diserahkan akan mencakup semua detail teknis yang dibutuhkan untuk memulai pembangunan masjid.' },
  ];
  
  const openIndex = ref(null);
  
  function getClass(index) {
    return openIndex.value === index 
      ? 'pi-angle-down' 
      : 'pi-angle-right';
  }
  
  function toggle(index) {
    openIndex.value = openIndex.value === index ? null : index;
  }
  
  function isOpen(index) {
    return openIndex.value === index;
  }
  </script>
  