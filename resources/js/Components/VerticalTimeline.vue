<template>
    <div class="relative">
      <!-- Vertical line -->
      <div class="absolute left-8 h-full border-2 border-gray-200"></div>
      
      <!-- Timeline items -->
      <div class="space-y-8">
        <!-- Item 1 -->
        <div class="relative flex items-center">
          <div class="absolute left-8 transform -translate-x-1/2 flex items-center justify-center">
            <div class="bg-blue2 shadow-xl w-6 h-6 rounded-full flex items-center justify-center z-10">
              <span class="text-white text-sm font-semibold">1</span>
            </div>
          </div>
          <div class="ml-16">
            <h3 class="font-medium text-myBlack text-sm">Informasi Pemohon</h3>
          </div>
        </div>

        <!-- Item 2 -->
        <div class="relative flex items-center">
          <div class="absolute left-8 transform -translate-x-1/2 flex items-center justify-center">
            <div class="bg-blue2 shadow-xl w-6 h-6 rounded-full flex items-center justify-center z-10">
              <span class="text-white text-sm font-semibold">2</span>
            </div>
          </div>
          <div class="ml-16">
            <h3 class="font-medium text-myBlack text-sm">Detail Lokasi Pembangunan</h3>
          </div>
        </div>

        <!-- Item 3 -->
        <div class="relative flex items-center">
          <div class="absolute left-8 transform -translate-x-1/2 flex items-center justify-center">
            <div class="bg-blue2 shadow-xl w-6 h-6 rounded-full flex items-center justify-center z-10">
              <span class="text-white text-sm font-semibold">3</span>
            </div>
          </div>
          <div class="ml-16">
            <h3 class="font-medium text-myBlack text-sm">Kebutuhan Design</h3>
          </div>
        </div>

        <!-- Item 4 -->
        <div class="relative flex items-center">
          <div class="absolute left-8 transform -translate-x-1/2 flex items-center justify-center">
            <div class="bg-blue2 shadow-xl w-6 h-6 rounded-full flex items-center justify-center z-10">
              <span class="text-white text-sm font-semibold">4</span>
            </div>
          </div>
          <div class="ml-16">
            <h3 class="font-medium text-myBlack text-sm">Catatan Khusus</h3>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'VerticalTimeline'
  }
  </script>