<script setup>
import RiwayatCard from '@/Components/RiwayatCard.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head, Link, usePage } from '@inertiajs/vue3';
const animasi = "transition-transform duration-300 ease-in-out hover:-translate-y-1";
const user = usePage().props.auth.user;
</script>

<template>
    <Head title="Profile" />
    <GuestLayout>
        <div id="profile" class="xl:px-40 lg:px-20 md:px-12 sm:px-8 px-4 py-4 md:py-12 lg:py-20">
            <!-- Mengubah flex menjadi flex-col di mobile, dan flex-row di tablet ke atas -->
            <div class="flex flex-col md:flex-row gap-8 relative">
                <!-- Profile Info -->
                <div class="flex flex-col gap-4 w-full md:w-5/12 border-b md:border-b-0 md:border-r border-blue3 pb-6 md:pb-0 md:sticky md:top-4 h-fit md:h-svh overflow-x-scroll no-scrollbar">
                    <h1 class="font-bold text-blue3 text-2xl sm:text-3xl">Halaman Profil</h1>
                    <!-- Profile Content -->
                    <div class="flex flex-col lg:flex-row gap-4 sm:gap-8 md:pr-4">
                        <img src="blank-profile.png" alt="Blank Profile" 
                             class="rounded-xl w-32 h-32 sm:w-40 sm:h-40 object-cover mx-auto sm:mx-0">
                        <div class="flex flex-col justify-between space-y-4 sm:space-y-0">
                            <div class="flex flex-col gap-2">
                                <div class="flex flex-col text-myBlack">
                                    <h1 class="text-sm underline">Nama Lengkap</h1>
                                    <p class="text-base sm:text-lg font-bold leading-none">{{ user.name }}</p>
                                </div>
                                <div class="flex flex-col text-myBlack">
                                    <h1 class="text-sm underline">Alamat Email</h1>
                                    <p class="text-base sm:text-lg font-bold leading-none">{{ user.email }}</p>
                                </div>
                            </div>
                            <Link 
                                class="bg-blue3 text-center py-2 px-4 text-white hover:bg-hover_blue3 rounded-lg text-sm sm:text-base"
                                :href="route('profile.edit')"
                            >
                                Ubah Info Profil
                            </Link>
                        </div>
                    </div>
                </div>

                <!-- Info Pengajuan -->
                <div class="flex flex-col gap-4 w-full md:w-7/12">
                    <h1 class="font-bold text-blue3 text-2xl sm:text-3xl md:block hidden">Halaman Profil</h1>
                    <div class="flex flex-col gap-4">
                        <RiwayatCard />
                        <RiwayatCard />
                        <RiwayatCard />
                    </div>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>