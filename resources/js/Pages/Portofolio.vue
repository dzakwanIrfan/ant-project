<script setup>
import { Head } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import CardPortofolio from '@/Components/Portofolio/CardPortofolio.vue';

const portofolios = [
    {
        nama: 'Masjid Syuhada',
        tanggal: '24 September 2024',
        alamat: 'Jl. I Dewa Nyoman Oka No.13, Kotabaru, Kec. Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55224',
        jenis: 'Bangun Baru',
        gambar: 'masjid/download.jpeg',
        href: '#',
    },
    {
        nama: 'Masjid Agung Jawa Tengah',
        tanggal: '03 Juni 2024',
        alamat: 'Jl. Gajah Raya, Sambirejo, Kec. Gayamsari, Kota Semarang, Jawa Tengah 50166',
        jenis: 'Desain Renovasi',
        gambar: 'masjid/slide3.jpg',
        href: '#',
    },
    {
        nama: 'Masjid Rakyat Indonesia',
        tanggal: '20 Juli 2024',
        alamat: 'Jl. Gajah Raya, Sambirejo, Kec. Gayamsari, Kota Semarang, Jawa Tengah 50166',
        jenis: 'Desain Renovasi',
        gambar: 'masjid/masjid-portofolio-1.jpg',
        href: '#',
    },
    {
        nama: 'Masjid Al-Ikhlas',
        tanggal: '19 Juli 2024',
        alamat: 'Jl. Gajah Raya, Sambirejo, Kec. Gayamsari, Kota Semarang, Jawa Tengah 50166',
        jenis: 'Desain Renovasi',
        gambar: 'masjid/slide2.jpg',
        href: '#',
    },
    {
        nama: 'Masjid Al-Huda',
        tanggal: '1 Mei 2024',
        alamat: 'Jl. Gajah Raya, Sambirejo, Kec. Gayamsari, Kota Semarang, Jawa Tengah 50166',
        jenis: 'Desain Renovasi',
        gambar: 'masjid/mufid-majnun-DkWjUb8BC6Y-unsplash.jpg',
        href: '#',
    },
]
</script>

<template>
    <Head title="Portofolio" />
    <GuestLayout>
        <div 
            id="portofolio" 
            class="w-full mx-auto relative"
        >
            <div class="xl:px-40 lg:px-32 md:px-12 px-4 bg-gradient-to-r from-[rgba(83,180,252,0)] to-[#53B4FC]">
                <div 
                    class="font-bold xl:text-5xl text-4xl py-20 text-center md:text-left text-blue3"
                >
                    MENAMPILKAN PROYEK TERBARU KAMI
                </div>
            </div>
            <div class="mx-auto xl:px-40 lg:px-32 md:px-12 px-4 py-8 relative">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 z-20 relative">
                    <CardPortofolio 
                        v-for="portofolio in portofolios" 
                        :nama="portofolio.nama" 
                        :tanggal="portofolio.tanggal" 
                        :alamat="portofolio.alamat" 
                        :jenis="portofolio.jenis" 
                        :gambar="portofolio.gambar" 
                    />
                </div>
                <img src="masjid/line.svg" alt="line" class="absolute top-0 left-0 rotate-180 w-1/2 sm:w-auto">
                <img src="masjid/line.svg" alt="line" class="absolute bottom-0 right-0 w-1/2 sm:w-auto">
            </div>
        </div>
    </GuestLayout>
</template>
