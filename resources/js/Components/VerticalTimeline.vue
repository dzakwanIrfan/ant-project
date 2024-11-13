<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="relative">
      <!-- Vertical line -->
      <div class="absolute left-8 h-full border-2 border-gray-200"></div>
      
      <!-- Timeline items -->
      <div class="space-y-8">
        <!-- Item 1 -->
        <Link href="#informasi_pemohon" class="relative flex items-center">
          <div class="absolute left-8 transform -translate-x-1/2 flex items-center justify-center">
            <div class="bg-blue2 shadow-xl w-6 h-6 rounded-full flex items-center justify-center z-10">
              <span class="text-white text-sm font-semibold">1</span>
            </div>
          </div>
          <div class="ml-16">
            <h3 class="font-medium text-myBlack text-sm">Informasi Pemohon</h3>
          </div>
        </Link>

        <!-- Item 2 -->
        <Link href="#detail_lokasi_pembangunan" class="relative flex items-center">
          <div class="absolute left-8 transform -translate-x-1/2 flex items-center justify-center">
            <div class="bg-blue2 shadow-xl w-6 h-6 rounded-full flex items-center justify-center z-10">
              <span class="text-white text-sm font-semibold">2</span>
            </div>
          </div>
          <div class="ml-16">
            <h3 class="font-medium text-myBlack text-sm">Detail Lokasi Pembangunan</h3>
          </div>
        </Link>

        <!-- Item 3 -->
        <Link href="#kebutuhan_design" class="relative flex items-center">
          <div class="absolute left-8 transform -translate-x-1/2 flex items-center justify-center">
            <div class="bg-blue2 shadow-xl w-6 h-6 rounded-full flex items-center justify-center z-10">
              <span class="text-white text-sm font-semibold">3</span>
            </div>
          </div>
          <div class="ml-16">
            <h3 class="font-medium text-myBlack text-sm">Kebutuhan Design</h3>
          </div>
        </Link>

        <!-- Item 4 -->
        <Link href="#catatan_khusus" class="relative flex items-center">
          <div class="absolute left-8 transform -translate-x-1/2 flex items-center justify-center">
            <div class="bg-blue2 shadow-xl w-6 h-6 rounded-full flex items-center justify-center z-10">
              <span class="text-white text-sm font-semibold">4</span>
            </div>
          </div>
          <div class="ml-16">
            <h3 class="font-medium text-myBlack text-sm">Catatan Khusus</h3>
          </div>
        </Link>
      </div>
    </div>
</template>
  