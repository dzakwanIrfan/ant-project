<script setup>
import { Link } from '@inertiajs/vue3';
import 'primeicons/primeicons.css';
import { ref } from 'vue';
const animasi = "transition-transform duration-300 ease-in-out hover:-translate-y-1";
const datas = [
    {
        id: 1,
        src: "masjid/slide1.jpg",
        alt: "Masjid Slide 1",
        href: "/",
    },
    {
        id: 2,
        src: "masjid/slide2.jpg",
        alt: "Masjid Slide 2",
        href: "/",
    },
    {
        id: 3,
        src: "masjid/slide3.jpg",
        alt: "Masjid Slide 3",
        href: "/",
    }
];

const currentIndex = ref(0);
function next() {
    currentIndex.value = (currentIndex.value + 1) % datas.length;
}
function prev() {
    currentIndex.value = (currentIndex.value - 1 + datas.length) % datas.length;
}
</script>

<template>
    <section id="slide" class="lg:px-32 xl:px-40 md:px-12 px-4 sm:py-20 py-12 w-full mx-auto relative">
        <div class="flex flex-col gap-8 border-2 border-blue3 p-8 hover:shadow-xl bg-white z-20 relative">
            <Link :href="datas[currentIndex].href">
                <img 
                    :src="datas[currentIndex].src"
                    :alt="datas[currentIndex].alt" 
                    class="w-full md:h-[30rem] sm:h-[20rem] h-[10rem] object-cover"
                >
            </Link>
            <div class="flex xs:flex-row flex-col xs:justify-between items-center xs:gap-0 gap-4">
                <div class="flex items-center sm:gap-4 gap-2 sm:text-3xl text-2xl">
                    <div 
                        id="prev" 
                        class="pi pi-chevron-circle-left hover:text-blue3 cursor-pointer" 
                        :class="animasi"
                        @click="prev"
                    >
                    </div>
                    <div 
                        id="next" 
                        class="pi pi-chevron-circle-right hover:text-blue3 cursor-pointer" 
                        :class="animasi"
                        @click="next"
                    >
                    </div>
                </div>
                <Link href="/" class="flex items-center sm:gap-4 gap-2 hover:text-blue3 sm:text-2xl text-xl" :class="animasi">
                    <div class="">Lihat Portofolio Kami</div>
                    <div class="pi pi-arrow-right"></div>
                </Link>
            </div>
        </div>
        <img src="masjid/line.svg" alt="Garis" class="absolute bottom-0 left-0 z-10 sm:w-auto w-1/2">
        <img src="masjid/line.svg" alt="Garis" class="absolute top-0 right-0 rotate-180 z-10 sm:w-auto w-1/2">
    </section>
</template>