<template>
    <Head title="Profile" />
    <GuestLayout>
        <div class="min-h-screen bg-gray-50">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <!-- Main content wrapper -->
                <div class="flex flex-col lg:flex-row gap-4">
                    <!-- Profile Section -->
                    <div class="w-full lg:w-4/12">
                        <!-- Sticky Profile Card -->
                        <div class="lg:sticky lg:top-8">
                            <div class="bg-white rounded-lg shadow-sm p-6">
                                <h2 class="text-xl sm:text-2xl font-bold text-blue3 mb-6 lg:hidden">
                                    Halaman Profil
                                </h2>
                                
                                <!-- Profile Content -->
                                <div class="flex flex-col gap-6">
                                    <!-- Profile Image -->
                                    <div class="flex justify-center lg:justify-start">
                                        <img 
                                            src="blank-profile.png" 
                                            alt="Profile Picture" 
                                            class="w-32 h-32 sm:w-40 sm:h-40 rounded-xl object-cover shadow-sm transform transition-transform duration-300 hover:scale-105"
                                        >
                                    </div>

                                    <!-- Profile Info -->
                                    <div class="space-y-4">
                                        <!-- Name -->
                                        <div class="space-y-1">
                                            <h3 class="text-sm text-gray-600 font-medium">Nama Lengkap</h3>
                                            <p class="text-lg font-bold text-gray-900">{{ user.name }}</p>
                                        </div>

                                        <!-- Email -->
                                        <div class="space-y-1">
                                            <h3 class="text-sm text-gray-600 font-medium">Alamat Email</h3>
                                            <p class="text-lg font-bold text-gray-900">{{ user.email }}</p>
                                        </div>

                                        <!-- Edit Profile Button -->
                                        <Link 
                                            :href="route('profile.edit')"
                                            class="mt-6 w-full inline-flex justify-center items-center px-4 py-2.5 bg-blue3 text-white text-sm font-medium rounded-lg hover:bg-hover_blue3 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue3 transition-colors duration-200"
                                        >
                                            Ubah Info Profil
                                        </Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- History Section -->
                    <div class="w-full lg:w-8/12">
                        <div class="lg:pl-8">
                            <!-- Title for larger screens -->
                            <h1 class="text-xl sm:text-2xl font-bold text-blue3 mb-6 hidden lg:block">
                                Halaman Profil
                            </h1>

                            <!-- History Cards -->
                            <div class="space-y-4">
                                <div class="transform transition-all duration-300 hover:-translate-y-1">
                                    <RiwayatCard />
                                </div>
                                <div class="transform transition-all duration-300 hover:-translate-y-1">
                                    <RiwayatCard />
                                </div>
                                <div class="transform transition-all duration-300 hover:-translate-y-1">
                                    <RiwayatCard />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>

<script setup>
import RiwayatCard from '@/Components/RiwayatCard.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head, Link, usePage } from '@inertiajs/vue3';

const user = usePage().props.auth.user;
</script>