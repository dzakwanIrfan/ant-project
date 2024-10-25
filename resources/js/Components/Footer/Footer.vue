<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <footer class="relative bg-blue3 pt-8 pb-6">
        <div class="container mx-auto px-4">
        <div class="flex flex-wrap text-left lg:text-left">
            <div class="w-full lg:w-6/12 px-4">
            <Link :href="route('dashboard')" class="font-bold sm:text-3xl text-2xl">
                <span class="text-white">ANT-PROJECT</span><span class="text-blue2">.ID</span>
            </Link>
            <h5 class="text-lg mt-0 mb-2 text-white">
                Temukan kami di platform lainnya!
            </h5>
            <div class="mt-6 lg:mb-0 mb-6">
                <button class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                <i class="fab fa-twitter"></i></button><button class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                <i class="fab fa-facebook-square"></i></button><button class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                <i class="fab fa-dribbble"></i></button><button class="bg-white text-beige_white shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                <i class="fab fa-github"></i>
                </button>
            </div>
            </div>
            <div class="w-full lg:w-6/12 px-4">
            <div class="flex flex-wrap items-top mb-6">
                <div class="w-full lg:w-4/12 px-4 ml-auto">
                <span class="block uppercase text-white text-sm font-bold mb-2">Navigation Links</span>
                <ul class="list-unstyled">
                    <li>
                    <a class="text-white hover:text-beige_white block pb-2 text-sm" href="https://www.creative-tim.com/presentation?ref=njs-profile">Beranda</a>
                    </li>
                    <li>
                    <a class="text-white hover:text-beige_white block pb-2 text-sm" href="https://blog.creative-tim.com?ref=njs-profile">Portofolio</a>
                    </li>
                    <li>
                    <a class="text-white hover:text-beige_white block pb-2 text-sm" href="https://www.github.com/creativetimofficial?ref=njs-profile">Tentang</a>
                    </li>
                    <li>
                    <a class="text-white hover:text-beige_white block pb-2 text-sm" href="https://www.creative-tim.com/bootstrap-themes/free?ref=njs-profile">Kontak</a>
                    </li>
                </ul>
                </div>
            </div>
            </div>
        </div>
        <hr class="my-6 border-white">
        <div class="flex flex-wrap items-center md:justify-between justify-center">
            <div class="w-full md:w-4/12 px-4 mx-auto text-center">
            <div class="text-sm text-white font-semibold py-1">
                Copyright © <span id="get-current-year">2024</span>
            </div>
            </div>
        </div>
        </div>
    </footer>
</template>