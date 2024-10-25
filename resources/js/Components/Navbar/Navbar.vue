<script setup>
import { computed, ref } from 'vue';
import NavLink from '@/Components/Navbar/NavLink.vue';
import ResponsiveNavLink from '@/Components/Navbar/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';

const showNav = ref(false);
const props = defineProps({
    transparant: {
        type: Boolean,
        default: false,
    },
});

const transparantClass = computed(() => {
    return props.transparant
        ? 'bg-transparent'
        : '';
})
</script>

<template>
    <nav class="bg-white w-full z-50 absolute top-0 left-0 right-0" :class="transparantClass">
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

                <!-- Login/Register Button -->
                <div class="lg:flex hidden text-lg justify-between items-center gap-6">
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
            class="lg:hidden"
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
                <!-- <div class="px-4">
                    <div
                        class="text-base font-medium text-gray-800"
                    >
                        Dzakwan
                    </div>
                    <div class="text-sm font-medium text-gray-500">
                        dzakwan@gmail.com
                    </div>
                </div> -->

                <div class="mt-3 space-y-1">
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