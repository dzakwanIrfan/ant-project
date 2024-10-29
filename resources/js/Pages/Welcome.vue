<script setup>
import { Head } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import Hero from '@/Components/Home/Hero.vue';
import Deskripsi from '@/Components/Home/Deskripsi.vue';
import Accordion from '@/Components/Accordion.vue';
import Bagaimana from '@/Components/Home/Bagaimana.vue';
import ProgramKami from '@/Components/Home/ProgramKami.vue';
import SlideHome from '@/Components/SlideHome.vue';
const animasi = "transition-transform duration-300 ease-in-out hover:-translate-y-1";
</script>

<template>
    <Head title="Beranda" />
    <GuestLayout>
        <Hero />
        <Deskripsi />
        <Bagaimana />
        <ProgramKami />
        <div class="py-16 bg-blue3 text-white text-xl">
            <div class="md:px-80 px-4 text-center m-auto sm:text-base text-sm">
                Kami telah menyelesaikan lebih dari 100 proyek desain masjid dan mushola di seluruh Indonesia, membantu mewujudkan tempat ibadah yang fungsional dan estetis.
            </div> 
        </div>
        <SlideHome />
    </GuestLayout>
</template>
