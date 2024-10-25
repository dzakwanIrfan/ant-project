<script setup>
import Navbar from '@/Components/Navbar/Navbar.vue';
import Footer from '@/Components/Footer/Footer.vue';
</script>

<template>
    <div class="font-sans bg-white">
        <Navbar :transparant="route().current('home')" />
        <slot />
        <Footer />
    </div>
</template>
