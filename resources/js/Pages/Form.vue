<template>
    <Head title="Permohonan" />
    <GuestLayout>
        <div class="min-h-screen bg-gray-50">
            <!-- Container with responsive padding -->
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <!-- Main content wrapper -->
                <div class="flex flex-col lg:flex-row gap-8">
                    <!-- Timeline section -->
                    <div class="w-full lg:w-3/12 lg:sticky lg:top-8 lg:self-start">
                        <h1 class="text-xl sm:text-2xl text-blue3 font-bold mb-6">
                            Formulir Permohonan
                        </h1>
                        <VerticalTimeline />
                    </div>

                    <!-- Form section -->
                    <div class="w-full lg:w-9/12">
                        <div class="bg-white rounded-lg shadow-sm p-6 space-y-8">
                            <!-- Informasi Pemohon -->
                            <section>
                                <h2 class="text-xl sm:text-2xl font-bold text-blue3 mb-6">
                                    Informasi Pemohon
                                </h2>
                                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                                    <!-- Nama Lengkap -->
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <InputLabel for="nama_lengkap" value="Nama Lengkap" />
                                            <span class="text-red-700">*</span>
                                        </div>
                                        <TextInput
                                            id="nama_lengkap"
                                            name="nama_lengkap"
                                            type="text"
                                            class="block w-full"
                                            required
                                            autofocus
                                        />
                                        <InputError class="mt-2" />
                                    </div>

                                    <!-- No. WA/Telepon -->
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <InputLabel for="no_hp" value="No. WA/Telepon" />
                                            <span class="text-red-700">*</span>
                                        </div>
                                        <TextInput
                                            id="no_hp"
                                            name="no_hp"
                                            type="text"
                                            class="block w-full"
                                            required
                                        />
                                        <InputError class="mt-2" />
                                    </div>

                                    <!-- Email -->
                                    <div>
                                        <InputLabel for="email" value="Email" />
                                        <TextInput
                                            id="email"
                                            name="email"
                                            type="email"
                                            class="block w-full mt-1"
                                        />
                                        <InputError class="mt-2" />
                                    </div>

                                    <!-- Nama Masjid -->
                                    <div>
                                        <InputLabel for="nama_masjid" value="Nama Masjid" />
                                        <TextInput
                                            id="nama_masjid"
                                            name="nama_masjid"
                                            type="text"
                                            class="block w-full mt-1"
                                        />
                                        <InputError class="mt-2" />
                                    </div>
                                </div>
                            </section>

                            <!-- Detail Lokasi Pembangunan -->
                            <section>
                                <h2 class="text-xl sm:text-2xl font-bold text-blue3 mb-6">
                                    Detail Lokasi Pembangunan
                                </h2>
                                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                                    <!-- Alamat -->
                                    <div class="sm:col-span-2 lg:col-span-3">
                                        <div class="flex justify-between mb-1">
                                            <InputLabel for="alamat_lengkap_lokasi" value="Alamat Lengkap Lokasi" />
                                            <span class="text-red-700">*</span>
                                        </div>
                                        <TextAreaInput
                                            id="alamat_lengkap_lokasi"
                                            name="alamat_lengkap_lokasi"
                                            class="block w-full"
                                            required
                                        />
                                        <InputError class="mt-2" />
                                    </div>

                                    <!-- Koordinat -->
                                    <div>
                                        <InputLabel for="koordinat" value="Koordinat" />
                                        <TextInput
                                            id="koordinat"
                                            name="koordinat"
                                            type="text"
                                            class="block w-full mt-1"
                                        />
                                        <InputError class="mt-2" />
                                    </div>

                                    <!-- Kondisi Lahan -->
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <InputLabel for="kondisi_lahan" value="Kondisi Lahan" />
                                            <span class="text-red-700">*</span>
                                        </div>
                                        <select 
                                            name="kondisi_lahan" 
                                            id="kondisi_lahan" 
                                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue3 focus:ring-blue3"
                                            required
                                        >
                                            <option selected disabled>-- Pilih Opsi Kondisi Lahan --</option>
                                            <option value="Kosong">Kosong</option>
                                            <option value="Sawah">Sawah</option>
                                            <option value="Terdapat Bangunan">Terdapat Bangunan</option>
                                        </select>
                                        <InputError class="mt-2" />
                                    </div>

                                    <!-- Status Lahan -->
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <InputLabel for="status_lahan_wakaf" value="Status Lahan Wakaf" />
                                            <span class="text-red-700">*</span>
                                        </div>
                                        <select 
                                            name="status_lahan_wakaf" 
                                            id="status_lahan_wakaf" 
                                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue3 focus:ring-blue3"
                                            required
                                        >
                                            <option selected disabled>-- Pilih Opsi Status Lahan Wakaf --</option>
                                            <option value="Wakaf & Bersertifikat">Wakaf & Bersertifikat</option>
                                            <option value="Wakaf & Surat Pernyataan Keterangan Bermaterai">Wakaf & Surat Pernyataan Keterangan Bermaterai</option>
                                            <option value="Wakaf">Wakaf</option>
                                            <option value="Rencana akan diwakafkan">Rencana akan diwakafkan</option>
                                            <option value="Sedang pelunasan pembelian">Sedang pelunasan pembelian</option>
                                        </select>
                                        <InputError class="mt-2" />
                                    </div>

                                    <!-- Panjang Lahan -->
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <InputLabel for="panjang_lahan" value="Panjang Lahan" />
                                            <span class="text-red-700">*</span>
                                        </div>
                                        <TextInput
                                            id="panjang_lahan"
                                            name="panjang_lahan"
                                            type="number"
                                            min="1"
                                            class="block w-full"
                                            required
                                        />
                                        <InputError class="mt-2" />
                                    </div>

                                    <!-- Lebar Lahan -->
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <InputLabel for="lebar_lahan" value="Lebar Lahan" />
                                            <span class="text-red-700">*</span>
                                        </div>
                                        <TextInput
                                            id="lebar_lahan"
                                            name="lebar_lahan"
                                            type="number"
                                            min="1"
                                            class="block w-full"
                                            required
                                        />
                                        <InputError class="mt-2" />
                                    </div>
                                </div>
                            </section>

                            <!-- Kebutuhan Design -->
                            <section>
                                <h2 class="text-xl sm:text-2xl font-bold text-blue3 mb-6">
                                    Kebutuhan Design
                                </h2>
                                <!-- Add design requirement fields here -->
                            </section>

                            <!-- Catatan Khusus -->
                            <section>
                                <h2 class="text-xl sm:text-2xl font-bold text-blue3 mb-6">
                                    Catatan Khusus
                                </h2>
                                <div class="grid grid-cols-1 gap-6">
                                    <div>
                                        <InputLabel for="catatan" value="Catatan" />
                                        <TextAreaInput
                                            id="catatan"
                                            name="catatan"
                                            class="block w-full mt-1"
                                        />
                                        <InputError class="mt-2" />
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>

<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextAreaInput from '@/Components/TextAreaInput.vue';
import TextInput from '@/Components/TextInput.vue';
import VerticalTimeline from '@/Components/VerticalTimeline.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>