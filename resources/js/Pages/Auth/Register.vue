<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <GuestLayout class="bg-gradient-to-r from-white to-[#53B4FC]">
        <div class="min-h-screen lg:px-32 xl:px-40 md:px-12 px-4 pt-40">
            <Head title="Daftar | ant-project.id" />
            <div class="flex gap-8 justify-between lg:max-w-5xl w-full bg-white border-blue3 border p-8 shadow-xl m-auto mb-20">
                <img src="masjid/mufid-majnun-DkWjUb8BC6Y-unsplash.jpg" alt="" class="w-1/2 hidden lg:block object-cover">
                <div class="flex flex-col gap-8 lg:w-1/2 w-full">
                    <div class="flex flex-col">
                        <div class="font-bold text-3xl sm:text-[40px] text-blue3">
                            Buat Akun Baru
                        </div>
                        <div class="text-myBlack">
                            Sudah punya akun? <Link :href="route('login')" class="text-blue3 underline">ayo masuk</Link>
                        </div>
                    </div>
        
                    <div class="flex flex-col gap-4">
                        <form @submit.prevent="submit">
                            <div>
                                <InputLabel for="name" value="Nama Lengkap" />

                                <TextInput
                                    id="name"
                                    type="text"
                                    class="mt-1 block w-full"
                                    v-model="form.name"
                                    required
                                    autofocus
                                    autocomplete="name"
                                />

                                <InputError class="mt-2" :message="form.errors.name" />
                            </div>

                            <div class="mt-4">
                                <InputLabel for="email" value="Email" />

                                <TextInput
                                    id="email"
                                    type="email"
                                    class="mt-1 block w-full"
                                    v-model="form.email"
                                    required
                                    autocomplete="username"
                                />

                                <InputError class="mt-2" :message="form.errors.email" />
                            </div>

                            <div class="mt-4">
                                <InputLabel for="password" value="Kata Sandi" />

                                <TextInput
                                    id="password"
                                    type="password"
                                    class="mt-1 block w-full"
                                    v-model="form.password"
                                    required
                                    autocomplete="new-password"
                                />

                                <InputError class="mt-2" :message="form.errors.password" />
                            </div>

                            <div class="mt-4">
                                <InputLabel
                                    for="password_confirmation"
                                    value="Konfirmasi Kata Sandi"
                                />

                                <TextInput
                                    id="password_confirmation"
                                    type="password"
                                    class="mt-1 block w-full"
                                    v-model="form.password_confirmation"
                                    required
                                    autocomplete="new-password"
                                />

                                <InputError
                                    class="mt-2"
                                    :message="form.errors.password_confirmation"
                                />
                            </div>

                            <div class="mt-6 flex items-center justify-center">
                                <PrimaryButton
                                    class="w-full"
                                    :class="{ 'opacity-25': form.processing }"
                                    :disabled="form.processing"
                                >
                                    DAFTAR
                                </PrimaryButton>
                            </div>
                        </form>
                        <div class="flex items-center">
                            <div class="flex-grow h-[0.5px] bg-myBlack "></div>
                            <div class="px-4 text-myBlack">atau</div>
                            <div class="flex-grow h-[0.5px] bg-myBlack "></div>
                        </div>
                        <button class="flex px-4 py-2 gap-4 bg-white border-myBlack border justify-center rounded w-auto max-w-sm m-auto text-myBlack active:border-blue3 active:ring-2 active:ring-blue3">
                            <img src="icon/google-icon-logo-svgrepo-com.svg" alt="Google" class="size-6">
                            <p>Sign in with Google</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>
