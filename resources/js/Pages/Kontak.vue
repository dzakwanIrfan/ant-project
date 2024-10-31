<script setup>
import { Head } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import TextInput from '@/Components/TextInput.vue';
import InputLabel from '@/Components/InputLabel.vue';
import InputError from '@/Components/InputError.vue';
import TextAreaInput from '@/Components/TextAreaInput.vue';
</script>

<template>
    <Head title="Kontak" />
    <GuestLayout>
        <div id="kontak" class="xl:px-40 lg:px-32 md:px-12 sm:px-8 px-4 py-4 md:py-12 lg:py-20">
            <div class="flex flex-col lg:flex-row w-full gap-8">
                <div class="flex flex-col justify-between gap-8 lg:w-7/12 w-full">
                    <div>
                        <h1 class="font-bold text-3xl sm:text-4xl lg:text-5xl text-blue3">
                            Kontak Kami
                        </h1>
                        <div class="flex flex-col gap-4 mt-4">
                            <div class="lg:w-1/2 w-full">
                                Email, telepon, atau lengkapi formulir untuk mengetahui bagaimana kami dapat memecahkan masalah pengiriman pesan Anda.
                            </div>
                            <div class="flex flex-col">
                                <span>admin@ant-project.id</span>
                                <span>+62-8778-7204-325</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row justify-between gap-6">
                        <div class="flex flex-col">
                            <div class="font-bold">Dukungan Pengguna</div>
                            <div class="text-sm">Tim dukungan kami siap membantu Anda mengatasi masalah atau pertanyaan apa pun yang Anda miliki.</div>
                        </div>
                        <div class="flex flex-col">
                            <div class="font-bold">Umpan Balik dan Saran</div>
                            <div class="text-sm">Kami menghargai umpan balik Anda dan terus berupaya meningkatkan layanan kami. Masukan Anda sangat penting.</div>
                        </div>
                        <div class="flex flex-col">
                            <div class="font-bold">Pertanyaan Media</div>
                            <div class="text-sm">Untuk pertanyaan terkait media atau pertanyaan akses, silakan hubungi kami di admin@ant-project.id</div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-4 p-4 sm:p-6 lg:p-8 border-2 border-blue3 lg:w-5/12 w-full bg-white hover:shadow-xl">
                    <div>
                        <h2 class="text-2xl sm:text-3xl font-bold text-myBlack">Hubungi Kami</h2>
                        <p class="text-sm sm:text-base">Anda dapat menghubungi kami kapan saja</p>
                    </div>
                    <form action="" class="flex flex-col gap-6 lg:gap-8">
                        <div class="flex flex-col gap-4">
                            <div class="flex flex-col sm:flex-row gap-4 justify-between">
                                <div class="w-full">
                                    <InputLabel for="firstname" value="Nama Depan" />
                        
                                    <TextInput
                                        id="firstname"
                                        type="text"
                                        class="mt-1 block w-full"
                                        required
                                        autofocus
                                    />
                    
                                    <InputError class="mt-2" />
                                </div>
                                <div class="w-full">
                                    <InputLabel for="lastname" value="Nama Belakang" />
                        
                                    <TextInput
                                        id="lastname"
                                        type="text"
                                        class="mt-1 block w-full"
                                        required
                                    />
                    
                                    <InputError class="mt-2" />
                                </div>
                            </div>
                            <div>
                                <InputLabel for="email" value="Alamat Email" />
                    
                                <TextInput
                                    id="email"
                                    type="email"
                                    class="mt-1 block w-full"
                                    required
                                    autocomplete="email"
                                />
                
                                <InputError class="mt-2" />
                            </div>
                            <div>
                                <InputLabel for="phone" value="Nomor Telepon" />
                    
                                <TextInput
                                    id="phone"
                                    type="tel"
                                    class="mt-1 block w-full"
                                    required
                                />
                
                                <InputError class="mt-2" />
                            </div>
                            <div>
                                <InputLabel for="message" value="Bagaimana kami bisa membantu Anda?" />
                    
                                <TextAreaInput
                                    id="message"
                                    class="mt-1 block w-full"
                                    required
                                    rows="4"
                                >
                                </TextAreaInput>
                
                                <InputError class="mt-2" />
                            </div>
                        </div>
                        <button class="w-full text-center bg-blue3 hover:bg-hover_blue3 text-white text-sm font-bold rounded-lg py-2.5 px-4">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>