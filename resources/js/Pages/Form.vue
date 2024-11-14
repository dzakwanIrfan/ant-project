<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextAreaInput from '@/Components/TextAreaInput.vue';
import TextInput from '@/Components/TextInput.vue';
import VerticalTimeline from '@/Components/VerticalTimeline.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { useAlert } from '@/plugins/alert';
import { Head, useForm } from '@inertiajs/vue3';

const form = useForm({
    nama_lengkap: '',
    no_hp: '',
    email: '',
    nama_masjid: '',
    alamat_lengkap_lokasi: '',
    koordinat: '',
    kondisi_lahan: '',
    status_lahan_wakaf: '',
    panjang_lahan: '',
    lebar_lahan: '',
    catatan: '',
    kapasitas_jamaah: '',
    jumlah_lantai: '',
    atap: '',
    fasilitas_tambahan: []
});

const submit = () => {
    form.post(route('form.store'), {
        preserveScroll: true,
        onSuccess: (response) => {
            console.log('Success response:', response?.props?.flash);
            if (response?.props?.flash?.success) {
                $alert.success(response.props.flash.success);
                form.reset();
            }
        },
        onError: (errors) => {
            console.error('Form submission errors:', errors);
            if (Object.keys(errors).length > 0) {
                let errorMessage = 'Mohon periksa kembali form isian Anda:';
                Object.keys(errors).forEach(key => {
                    errorMessage += `\n- ${errors[key]}`;
                });
                $alert.error(errorMessage);
            } else {
                $alert.error('Terjadi kesalahan saat mengirim formulir. Silakan coba lagi nanti.');
            }
        }
    });
};
</script>

<template>
    <Head title="Permohonan" />
    <GuestLayout>
        <div class="min-h-screen bg-gray-50">
            <!-- Container with responsive padding -->
            <div class="container mx-auto px-2 sm:px-6 lg:px-8 py-8">
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
                    <form @submit.prevent="submit" class="w-full lg:w-9/12">
                        <div class="bg-white rounded-lg shadow-sm p-6 space-y-8">
                            <!-- Informasi Pemohon -->
                            <section id="informasi_pemohon">
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
                                            type="text"
                                            class="block w-full"
                                            v-model="form.nama_lengkap"
                                            required
                                            autofocus
                                        />
                                        <InputError class="mt-2" :message="form.errors.nama_lengkap" />
                                    </div>

                                    <!-- No. WA/Telepon -->
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <InputLabel for="no_hp" value="No. WA/Telepon" />
                                            <span class="text-red-700">*</span>
                                        </div>
                                        <TextInput
                                            id="no_hp"
                                            type="text"
                                            v-model="form.no_hp"
                                            class="block w-full"
                                            required
                                        />
                                        <InputError class="mt-2" :message="form.errors.no_hp" />
                                    </div>

                                    <!-- Email -->
                                    <div>
                                        <InputLabel for="email" value="Email" />
                                        <TextInput
                                            id="email"
                                            type="email"
                                            class="block w-full mt-1"
                                            v-model="form.email"
                                        />
                                        <InputError class="mt-2" :message="form.errors.email" />
                                    </div>

                                    <!-- Nama Masjid -->
                                    <div>
                                        <InputLabel for="nama_masjid" value="Nama Masjid" />
                                        <TextInput
                                            id="nama_masjid"
                                            type="text"
                                            class="block w-full mt-1"
                                            v-model="form.nama_masjid"
                                        />
                                        <InputError class="mt-2" :message="form.errors.nama_masjid" />
                                    </div>
                                </div>
                            </section>

                            <!-- Detail Lokasi Pembangunan -->
                            <section id="detail_lokasi_pembangunan">
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
                                            class="block w-full"
                                            v-model="form.alamat_lengkap_lokasi"
                                            required
                                        />
                                        <InputError class="mt-2" :message="form.errors.alamat_lengkap_lokasi" />
                                    </div>

                                    <!-- Koordinat -->
                                    <div>
                                        <InputLabel for="koordinat" value="Koordinat" />
                                        <TextInput
                                            id="koordinat"
                                            type="text"
                                            class="block w-full mt-1"
                                            v-model="form.koordinat"
                                        />
                                        <InputError class="mt-2" :message="form.errors.koordinat" />
                                    </div>

                                    <!-- Kondisi Lahan -->
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <InputLabel for="kondisi_lahan" value="Kondisi Lahan" />
                                            <span class="text-red-700">*</span>
                                        </div>
                                        <select 
                                            id="kondisi_lahan" 
                                            class="w-full rounded-md border-gray-900 px-3 py-2 text-sm shadow-sm focus:border-blue3 focus:ring-blue3 focus:outline-none focus:ring-1 disabled:cursor-not-allowed disabled:bg-gray-50"
                                            v-model="form.kondisi_lahan"
                                            required
                                        >
                                            <option selected disabled>-- Pilih Opsi Kondisi Lahan --</option>
                                            <option value="Kosong">Kosong</option>
                                            <option value="Sawah">Sawah</option>
                                            <option value="Terdapat Bangunan">Terdapat Bangunan</option>
                                        </select>
                                        <InputError class="mt-2" :message="form.errors.kondisi_lahan"/>
                                    </div>

                                    <!-- Status Lahan -->
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <InputLabel for="status_lahan_wakaf" value="Status Lahan Wakaf" />
                                            <span class="text-red-700">*</span>
                                        </div>
                                        <select 
                                            id="status_lahan_wakaf" 
                                            class="w-full rounded-md border-gray-900 px-3 py-2 text-sm shadow-sm focus:border-blue3 focus:ring-blue3 focus:outline-none focus:ring-1 disabled:cursor-not-allowed disabled:bg-gray-50"
                                            v-model="form.status_lahan_wakaf"
                                            required
                                        >
                                            <option selected disabled>-- Pilih Opsi Status Lahan Wakaf --</option>
                                            <option value="Wakaf & Bersertifikat">Wakaf & Bersertifikat</option>
                                            <option value="Wakaf & Surat Pernyataan Keterangan Bermaterai">Wakaf & Surat Pernyataan Keterangan Bermaterai</option>
                                            <option value="Wakaf">Wakaf</option>
                                            <option value="Rencana akan diwakafkan">Rencana akan diwakafkan</option>
                                            <option value="Sedang pelunasan pembelian">Sedang pelunasan pembelian</option>
                                        </select>
                                        <InputError class="mt-2" :message="form.errors.status_lahan_wakaf" />
                                    </div>

                                    <!-- Panjang Lahan -->
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <InputLabel for="panjang_lahan" value="Panjang Lahan" />
                                            <span class="text-red-700">*</span>
                                        </div>
                                        <TextInput
                                            id="panjang_lahan"
                                            type="number"
                                            min="1"
                                            class="block w-full"
                                            v-model="form.panjang_lahan"
                                            required
                                        />
                                        <InputError class="mt-2" :message="form.errors.panjang_lahan" />
                                    </div>

                                    <!-- Lebar Lahan -->
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <InputLabel for="lebar_lahan" value="Lebar Lahan" />
                                            <span class="text-red-700">*</span>
                                        </div>
                                        <TextInput
                                            id="lebar_lahan"
                                            type="number"
                                            min="1"
                                            class="block w-full"
                                            v-model="form.lebar_lahan"
                                            required
                                        />
                                        <InputError class="mt-2" :message="form.errors.lebar_lahan" />
                                    </div>
                                </div>
                            </section>

                            <!-- Kebutuhan Design -->
                            <section id="kebutuhan_design">
                                <h2 class="text-xl sm:text-2xl font-bold text-blue3 mb-6">
                                    Kebutuhan Design
                                </h2>
                                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                                    <!-- Kapasitas Jamaah -->
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <InputLabel for="kapasitas_jamaah" value="Kapasitas Jamaah" />
                                            <span class="text-red-700">*</span>
                                        </div>
                                        <TextInput
                                            id="kapasitas_jamaah"
                                            type="number"
                                            min="1"
                                            class="block w-full"
                                            v-model="form.kapasitas_jamaah"
                                            required
                                        />
                                        <InputError class="mt-2" :message="form.errors.kapasitas_jamaah" />
                                    </div>
    
                                    <!-- Jumlah Lantai -->
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <InputLabel for="jumlah_lantai" value="Jumlah Lantai" />
                                            <span class="text-red-700">*</span>
                                        </div>
                                        <TextInput
                                            id="jumlah_lantai"
                                            type="number"
                                            min="1"
                                            class="block w-full"
                                            v-model="form.jumlah_lantai"
                                            required
                                        />
                                        <InputError class="mt-2" :message="form.errors.jumlah_lantai" />
                                    </div>
    
                                    <!-- Bentuk Atap -->
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <InputLabel for="atap" value="Bentuk Atap" />
                                            <span class="text-red-700">*</span>
                                        </div>
                                        <select 
                                            id="atap" 
                                            class="w-full rounded-md border-gray-900 px-3 py-2 text-sm shadow-sm focus:border-blue3 focus:ring-blue3 focus:outline-none focus:ring-1 disabled:cursor-not-allowed disabled:bg-gray-50"
                                            v-model="form.atap"
                                            required
                                        >
                                            <option selected disabled>-- Pilih Opsi Bentuk Atap --</option>
                                            <option value="Limasan">Limasan</option>
                                            <option value="Plat">Plat</option>
                                            <option value="Kubah">Kubah</option>
                                        </select>
                                        <InputError class="mt-2" :message="form.errors.atap" />
                                    </div>
                                    <!-- Fasilitas Tambahan -->
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <InputLabel for="fasilitas_tambahan" value="Fasilitas Tambahan" />
                                        </div>
                                        <div 
                                            id="fasilitas_tambahan" 
                                            class="space-y-2"
                                        >
                                            <label class="flex items-center">
                                                <input 
                                                    type="checkbox" 
                                                    value="TPQ" 
                                                    v-model="form.fasilitas_tambahan" 
                                                    class="mr-2 rounded-md border-gray-900 focus:border-blue3 focus:ring-blue3 focus:outline-none"
                                                >
                                                TPQ
                                            </label>
                                            <label class="flex items-center">
                                                <input 
                                                    type="checkbox" 
                                                    value="Ruang Rapat" 
                                                    v-model="form.fasilitas_tambahan" 
                                                    class="mr-2 rounded-md border-gray-900 focus:border-blue3 focus:ring-blue3 focus:outline-none"
                                                >
                                                Ruang Rapat
                                            </label>
                                            <label class="flex items-center">
                                                <input 
                                                    type="checkbox" 
                                                    value="Parkir" 
                                                    v-model="form.fasilitas_tambahan" 
                                                    class="mr-2 rounded-md border-gray-900 focus:border-blue3 focus:ring-blue3 focus:outline-none"
                                                >
                                                Parkir
                                            </label>
                                            <label class="flex items-center">
                                                <input 
                                                    type="checkbox" 
                                                    value="AC" 
                                                    v-model="form.fasilitas_tambahan" 
                                                    class="mr-2 rounded-md border-gray-900 focus:border-blue3 focus:ring-blue3 focus:outline-none"
                                                >
                                                AC
                                            </label>
                                            <label class="flex items-center">
                                                <input 
                                                    type="checkbox" 
                                                    value="Taman/Bukaan" 
                                                    v-model="form.fasilitas_tambahan" 
                                                    class="mr-2 rounded-md border-gray-900 focus:border-blue3 focus:ring-blue3 focus:outline-none"
                                                >
                                                Taman/Bukaan
                                            </label>
                                            <label class="flex items-center">
                                                <input 
                                                    type="checkbox" 
                                                    value="Mihrab Imam" 
                                                    v-model="form.fasilitas_tambahan" 
                                                    class="mr-2 rounded-md border-gray-900 focus:border-blue3 focus:ring-blue3 focus:outline-none"
                                                >
                                                Mihrab Imam
                                            </label>
                                        </div>
                                        <InputError class="mt-2" :message="form.errors.fasilitas_tambahan" />
                                    </div>
                                </div>

                            </section>

                            <!-- Catatan Khusus -->
                            <section id="catatan_khusus">
                                <h2 class="text-xl sm:text-2xl font-bold text-blue3 mb-6">
                                    Catatan Khusus
                                </h2>
                                <div class="grid grid-cols-1 gap-6">
                                    <div>
                                        <InputLabel for="catatan" value="Catatan" />
                                        <TextAreaInput
                                            id="catatan"
                                            class="block w-full mt-1"
                                            v-model="form.catatan"
                                        />
                                        <InputError class="mt-2" :message="form.errors.catatan"/>
                                    </div>
                                </div>
                            </section>
                            <button 
                                type="submit" 
                                class="bg-blue3 text-white font-semibold py-2 px-4 rounded-lg mt-6 w-full"
                                :class="{ 'opacity-25': form.processing }"
                                :disabled="form.processing"
                            >
                                Kirim Formulir
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>

