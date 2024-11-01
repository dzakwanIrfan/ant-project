<script setup>
import { Link } from '@inertiajs/vue3';
const animasi = "transition-transform duration-300 ease-in-out hover:-translate-y-1";
</script>

<template>
    <Link 
        class="flex flex-col gap-4 w-full p-4 sm:p-6 md:p-8 border-2 border-blue3 hover:shadow-xl bg-white"
        href="#"
        :class="animasi"
    >
        <div class="flex flex-col sm:flex-row sm:justify-between gap-2 sm:gap-0 text-myBlack">
            <div class="font-bold text-lg sm:text-xl">Masjid Syuhada</div>
            <div class="text-sm sm:text-base">04 Oktober 2024</div>
        </div>
        <hr class="border border-blue3">
        <div class="flex flex-col gap-2">
            <p class="text-myBlack text-sm sm:text-base">Jl. Raya Masjid No. 123, Desa Sukamaju, Kecamatan Sukaraya, Kabupaten Banyumas, Jawa Tengah, 53175</p>
            <p class="text-myBlack text-sm sm:text-base">
                <span class="font-bold">Catatan:</span>
                Kami menginginkan desain masjid dengan gaya arsitektur tradisional Jawa, lengkap dengan atap tumpang dan ornamen khas. Mohon ...
            </p>
            <p class="text-myBlack text-sm sm:text-base">
                <span class="font-bold text-red-600">Permohonan ditolak:</span>
                Lokasi pembangunan tidak memenuhi syarat teknis yang diperlukan untuk desain masjid yang aman dan sesuai standar dan informasi ...
            </p>
        </div>

        <!-- Timeline Status yang Responsive -->
        <div class="relative">
            <!-- Background Line -->
            <span class="w-full h-0.5 bg-gray-500 absolute top-1/2 hidden sm:block z-10"></span>
            
            <!-- Status Items Container -->
            <div class="flex flex-col sm:flex-row sm:justify-between gap-2 sm:gap-4 text-white relative overflow-x-scroll no-scrollbar">
                <span class="flex items-center px-3 py-1.5 sm:px-4 sm:py-2 bg-blue3 rounded z-20 text-xs sm:text-sm md:text-base">
                    <span class="sm:inline">Pending</span>
                </span>
                <span class="flex items-center px-3 py-1.5 sm:px-4 sm:py-2 bg-gray-500 rounded z-20 text-xs sm:text-sm md:text-base">
                    <span class="sm:inline">Terkonfirmasi</span>
                </span>
                <span class="flex items-center px-3 py-1.5 sm:px-4 sm:py-2 bg-gray-500 rounded z-20 text-xs sm:text-sm md:text-base">
                    <span class="sm:inline">Proses</span>
                </span>
                <span class="flex items-center px-3 py-1.5 sm:px-4 sm:py-2 bg-gray-500 rounded z-20 text-xs sm:text-sm md:text-base">
                    <span class="sm:inline">Selesai</span>
                </span>
            </div>
        </div>
    </Link>
</template>