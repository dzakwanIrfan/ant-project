<script setup>
const animasi = "transition-transform duration-300 ease-in-out hover:-translate-y-1";
</script>

<template>
    <div class="flex flex-col gap-2" :class="animasi">
        <img 
            src="profile.jpg" 
            alt="Profile" 
            class="object-cover w-auto h-64 xl:h-80 sm:h-72 object-top rounded-2xl"
        >
        <div class="flex flex-col text-left text-base">
            <div class="font-bold">Ir. Redityo Januardi, S.T., M.T.</div>
            <div>Founder & CEO</div>
        </div>
    </div>
</template>