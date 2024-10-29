<script setup>
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: String,
    title: String,
    description: String,
    image: String,
});
const animasi = "transition-transform duration-300 ease-in-out hover:-translate-y-1";
</script>

<template>
    <Link :href="href" class="flex flex-col gap-8 p-8 border-2 border-blue3 bg-white hover:shadow-xl text-myBlack" :class="animasi">
        <div class="flex flex-col">
            <div class="flex justify-between text-3xl font-bold items-center">
                <div class="">{{ title }}</div>
                <div class="pi pi-arrow-right"></div>
            </div>
            <p class="text-base">{{ description }}</p>
        </div>
        <img :src="image" alt="masjid-portofolio-1" class="w-full object-cover lg:h-80 md:h-60 h-45">
    </Link>
</template>