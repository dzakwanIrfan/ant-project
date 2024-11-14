<script setup>
import { computed, ref } from 'vue';
import NavLink from '@/Components/Navbar/NavLink.vue';
import ResponsiveNavLink from '@/Components/Navbar/ResponsiveNavLink.vue';
import { Link, usePage } from '@inertiajs/vue3';
import { onClickOutside } from '@vueuse/core';

const showNav = ref(false);
const showProfileDropdown = ref(false);
const profileButtonRef = ref(null);
const auth = usePage().props.auth.user;
const isAuth = computed(() => auth !== null);

const props = defineProps({
    transparant: {
        type: Boolean,
        default: false,
    },
});

const transparantClass = computed(() => {
    return props.transparant
        ? 'sm:bg-transparent bg-white absolute top-0 left-0 right-0'
        : 'bg-white';
});

onClickOutside(profileButtonRef, () => {
    showProfileDropdown.value = false;
});

const toggleProfileDropdown = () => {
    showProfileDropdown.value = !showProfileDropdown.value;
};
</script>

<template>
    <nav class="w-full" :class="transparantClass">
        <!-- Primary Navbar -->
        <div class="px-4 sm:px-6 xl:px-20">
            <div class="flex h-20 justify-between items-center">
                <!-- Log0 -->
                <Link :href="route('home')" class="font-bold text-2xl">
                    <span class="text-myBlack">ANT-PROJECT</span><span class="text-blue2">.ID</span>
                </Link>

                <!-- Navigation Links -->
                <div class="hidden md:-my-px md:ms-10 lg:flex xl:gap-4">
                    <NavLink
                        :href="route('home')"
                        :active="route().current('home')"
                    >
                        Beranda
                    </NavLink>
                    <NavLink
                        :href="route('portofolio')"
                        :active="route().current('portofolio')"
                    >
                        Portofolio
                    </NavLink>
                    <NavLink
                        :href="route('tentang')"
                        :active="route().current('tentang')"
                    >
                        Tentang
                    </NavLink>
                    <NavLink
                        :href="route('kontak')"
                        :active="route().current('kontak')"
                    >
                        Kontak
                    </NavLink>
                </div>

                <!-- Profile Section -->
                <div class="hidden lg:flex relative" v-if="isAuth">
                    <!-- Profile Button -->
                    <button 
                        ref="profileButtonRef"
                        @click="toggleProfileDropdown"
                        class="flex items-center gap-3 border-2 border-blue3 rounded-lg px-4 py-2 hover:shadow"
                    >
                        <img 
                            :src="auth.photo ?? 'blank-profile.png'" 
                            alt="Blank Profile" 
                            class="rounded-full size-8 object-cover"
                        >
                        <div class="text-base text-myBlack">
                            {{ auth.name }}
                        </div>
                    </button>

                    <!-- Profile Dropdown -->
                    <div 
                        v-show="showProfileDropdown" 
                        class="absolute -bottom-24 w-full bg-white rounded-lg shadow-lg py-2 border border-gray-200 z-50"
                    >
                        <!-- Profile Menu -->
                        <Link 
                            :href="route('profile.show')" 
                            class="block px-4 py-2 text-sm text-myBlack hover:bg-gray-100"
                        >
                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>
                                Profile
                            </div>
                        </Link>

                        <!-- Logout Menu -->
                        <Link 
                            :href="route('logout')"
                            method="post"
                            as="button"
                            class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100 block"
                        >
                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                                </svg>
                                Logout
                            </div>
                        </Link>
                    </div>
                </div>

                <!-- Login/Register Button -->
                <div v-else class="lg:flex hidden text-lg justify-between items-center gap-6">
                    <Link 
                        :href="route('login')" 
                        class="text-myBlack font-base hover:underline"
                    >
                        Masuk
                    </Link>
                    <Link 
                        :href="route('register')" 
                        class="text-white bg-blue3 px-6 py-2 rounded-md font-bold hover:bg-[#003966]"
                    >
                        Daftar
                    </Link>
                </div>

                <!-- Hamburger -->
                <div class="lg:hidden flex items-center">
                    <button
                        @click="showNav =! showNav"
                    >
                        <svg
                            class="h-6 w-6"
                            stroke="currentColor"
                            fill="none"
                            viewBox="0 0 24 24"
                        >
                            <path
                                :class="{
                                    hidden: showNav,
                                    'inline-flex':
                                        !showNav,
                                }"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"
                            />
                            <path
                                :class="{
                                    hidden: !showNav,
                                    'inline-flex':
                                        showNav,
                                }"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"
                            />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div
            :class="{
                block: showNav,
                hidden: !showNav,
            }"
            class="lg:hidden bg-white"
        >
            <div class="space-y-1 pb-3 pt-2">
                <ResponsiveNavLink
                    :href="route('home')"
                    :active="route().current('home')"
                >
                    Beranda
                </ResponsiveNavLink>
                <ResponsiveNavLink
                    :href="route('portofolio')"
                    :active="route().current('portofolio')"
                >
                    Portofolio
                </ResponsiveNavLink>
                <ResponsiveNavLink
                    :href="route('tentang')"
                    :active="route().current('tentang')"
                >
                    Tentang
                </ResponsiveNavLink>
                <ResponsiveNavLink
                    :href="route('kontak')"
                    :active="route().current('kontak')"
                >
                    Kontak
                </ResponsiveNavLink>
            </div>

            <!-- Responsive Settings Options -->
            <div
                class="border-t border-gray-200 pb-1 pt-4"
            >
                <div class="mt-3 space-y-1" v-if="isAuth">
                    <ResponsiveNavLink :href="route('profile.show')">
                        Profile
                    </ResponsiveNavLink>
                    <ResponsiveNavLink 
                        :href="route('logout')"
                        method="post"
                        as="button"
                        class="text-red-600 font-bold"
                    >
                        Logout
                    </ResponsiveNavLink>
                </div>

                <div class="mt-3 space-y-1" v-else>
                    <ResponsiveNavLink :href="route('register')">
                        Daftar
                    </ResponsiveNavLink>
                    <ResponsiveNavLink :href="route('login')">
                        Masuk
                    </ResponsiveNavLink>
                </div>
            </div>
        </div>
    </nav>
</template>