<script setup>
import { Link } from '@inertiajs/vue3';

const animasi = "transition-transform duration-300 ease-in-out hover:-translate-y-1";

const props = defineProps({
    nama: {
        type: String,
        required: true,
    },
    tanggal: {
        type: String,
        required: true,
    },
    alamat: {
        type: String,
        required: true,
    },
    gambar: {
        type: String,
        required: true,
    },
    jenis: {
        type: String,
        required: true,
    },
    href: {
        type: String,
        required: true,
    },
})
</script>

<template>
    <Link 
        class="flex flex-col h-full bg-white border-2 border-blue3 rounded-lg hover:shadow-xl transition duration-300 ease-in-out gap-4 p-4" 
        :class="animasi"
        :href="href"
    >
        <!-- Image Container -->
        <img 
            :src="gambar" 
            :alt="nama" 
            class="w-full xl:h-[300px] lg:h-48 h-[250px] object-cover"
        >
        
        <hr class="border-blue3">
        <!-- Content Container -->
        <div class="flex flex-col flex-grow">
            <div class="flex flex-col space-y-2">
                <div class="flex flex-col">
                    <div class="flex justify-between items-start">
                        <h2 class="font-bold text-xl md:text-2xl text-blue3 line-clamp-2">{{ nama }}</h2>
                        <small class="text-sm text-gray-600 whitespace-nowrap ml-2">{{ tanggal }}</small>
                    </div>
                    <div class="font-bold text-xs text-gray-700">
                        {{ jenis }}
                    </div>
                </div>
                <div class="text-myBlack text-sm">
                    {{ alamat }}
                </div>
            </div>
        </div>
    </Link>
</template>