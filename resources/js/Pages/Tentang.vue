<script setup>
import { Head } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import CardTentang from '@/Components/Tentang/CardTentang.vue';
</script>

<template>
    <Head title="Tentang" />
    <GuestLayout>
        <div 
            id="about" 
            class="w-full mx-auto relative"
        >
            <!-- Header -->
            <div class="xl:px-40 lg:px-32 md:px-12 px-4 bg-gradient-to-b from-[rgba(83,180,252,0)] to-[#53B4FC]">
                <div class="py-20 text-center flex flex-col sm:gap-4 gap-2">
                    <div 
                        class="font-bold xl:text-5xl text-4xl text-blue3"
                    >
                        Tentang Ant-Project
                    </div>
                    <span class="sm:w-[75%] w-full mx-auto">
                        <div>
                            ANT Project merupakan komunitas berjumlah 12 anggota dengan visi menyediakan layanan desain masjid gratis di Indonesia dengan target 6 proyek per tahun. Komunitas ini berdiri di Purbalingga pada hari Kamis, 27 Juni 2024 oleh Pengurus Utama.
                        </div>
                        <div>
                            Pengurus tersebut antara lain:
                        </div>
                    </span>
                </div>
            </div>

            <!-- Pictures -->
            <div class="mx-auto xl:px-40 lg:px-32 md:px-12 px-4 py-8 relative">
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 z-20 relative">
                    <CardTentang />
                    <CardTentang />
                    <CardTentang />
                    <CardTentang />
                    <CardTentang />
                    <CardTentang />
                    <CardTentang />
                    <CardTentang />
                </div>
                <img src="masjid/line.svg" alt="line" class="absolute top-0 left-0 w-1/2 sm:w-auto scale-x-[-1] rotate-180">
                <img src="masjid/line.svg" alt="line" class="absolute bottom-0 right-0 w-1/2 scale-x-[-1] sm:w-auto">
            </div>
        </div>
    </GuestLayout>
</template>
