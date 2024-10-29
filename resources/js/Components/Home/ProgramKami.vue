<script setup>
import 'primeicons/primeicons.css';
import CardPortfolioHome from '../CardPortfolioHome.vue';
</script>

<template>
    <section id="program-kami" class="lg:px-32 xl:px-40 md:px-12 px-4 sm:py-20 py-12 w-full mx-auto relative">
        <h2 class="sm:text-6xl text-4xl font-black text-blue3 text-center sm:pb-20 pb-12">Program Kami</h2>
        <div class="flex gap-8 md:flex-row flex-col">
            <CardPortfolioHome
                href="/"
                title="Bangun Baru"
                description="Kami mendesain masjid baru dari konsep hingga DED yang memenuhi standar konstruksi."
                image="masjid/masjid-portofolio-1.jpg"
            />
            <CardPortfolioHome
                href="/"
                title="Desain Renovasi"
                description="Kami menawarkan desain renovasi untuk memperbaiki fungsi dan estetika masjid yang ada."
                image="masjid/ded.jpg"
            />
        </div>
    </section>
</template>