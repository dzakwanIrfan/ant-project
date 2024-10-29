<script setup>
import { Link } from '@inertiajs/vue3';
const animasi = "transition-transform duration-300 ease-in-out hover:-translate-y-1";
</script>

<template>
    <section id='hero' class="w-full bg-gradient-to-t sm:bg-gradient-to-b from-white to-[#53B4FC] xs:min-h-screen mx-auto overflow-hidden sm:block flex flex-col">
        <div class="bg-gradient-to-b from-[rgba(83,180,252,0)] to-[#53B4FC] h-20 absolute bottom-0 right-0 left-0 z-10 sm:block hidden"></div>
        <img 
            src="masjid/masjid4.png" 
            alt="masjid" 
            class="absolute bottom-0 right-0 object-cover transition-all xl:h-[65%] lg:h-[60%] md:h-[50%] sm:h-[37.5%] sm:block hidden left-1/2 md:left-auto transform -translate-x-1/2 md:-translate-x-0"
        >
        <img src="masjid/yoga-sukma-h4xWsKltqJM-unsplash.jpg" alt="masjid" class="object-cover object-top h-80 w-full block sm:hidden">
        <div class="xl:px-32 lg:px-28 md:px-20 px-4 md:pt-56 sm:pt-40 pt-4">
            <div class="text-blue3 font-black xl:text-[5rem] lg:text-[4.5rem] md:text-[4rem] sm:text-[3.5rem] text-[2.3rem] text-left sm:text-center md:text-left leading-none">
                <div>Desain Masjid Gratis</div>
                <div>Untuk Umat!</div>
            </div>
            <div class="text-myBlack text-base sm:text-lg sm:mt-4 mt-0 text-left sm:text-center md:text-left">
                Bersama kita wujudkan masjid indah, gratis dan mudah.
            </div>
            <div class="mt-10 md:mt-20 flex sm:gap-8 gap-4 justify-center md:justify-normal">
                <Link
                    href="#"
                    class="bg-blue3 hover:bg-hover_blue3 text-white font-bold sm:text-lg text-base sm:px-6 sm:py-3 px-4 py-2 rounded-lg"
                    :class="animasi"
                >
                    Isi Formulir
                </Link>
                <Link
                    href="#"
                    class="underline sm:text-white text-myBlack sm:text-lg text-base sm:px-6 sm:py-3 px-4 py-2"
                    :class="animasi"
                >
                    Lihat Ketentuan
                </Link>
            </div>
        </div>
    </section>
</template>