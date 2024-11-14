<script setup>
import { usePage } from '@inertiajs/vue3';
import { watch } from 'vue';
import { useAlert } from '@/plugins/alert';
import Navbar from '@/Components/Navbar/Navbar.vue';
import Footer from '@/Components/Footer/Footer.vue';
import AlertContainer from '@/Components/AlertContainer.vue';

const page = usePage();
const { success, error } = useAlert();

watch(
    () => page.props.flash,
    (flash) => {
        if (flash?.success) {
            success(flash.success);
        } else if (flash?.error) {
            error(flash.error);
        }
    },
    { immediate: true, deep: true }
);
</script>

<template>
    <div class="font-sans bg-white">
        <AlertContainer />
        
        <Navbar :transparant="route().current('home')" />
        <slot />
        <Footer />
    </div>
</template>