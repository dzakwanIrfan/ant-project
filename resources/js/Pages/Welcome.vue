<script setup>
import { Head, Link } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';
const animasi = "transition-transform duration-300 ease-in-out hover:-translate-y-1";
</script>

<template>
    <Head title="Beranda" />
    <GuestLayout>
        <section id='hero' class="w-full bg-gradient-to-b from-white to-[#53B4FC] h-screen mx-auto overflow-hidden">
            <div class="bg-gradient-to-b from-[rgba(83,180,252,0)] to-[#53B4FC] h-20 absolute bottom-0 right-0 left-0 z-10"></div>
            <img 
                src="masjid/masjid4.png" 
                alt="masjid" 
                class="absolute transform bottom-0 right-0 object-cover transition-all h-2/3"
            >
            <div class="px-32 pt-56">
                <div class="text-blue3 font-black lg:text-[5rem] leading-none">
                    <div>Desain Masjid Gratis</div>
                    <div>Untuk Umat!</div>
                </div>
                <div class="text-myBlack text-lg mt-4">
                    Bersama kita wujudkan masjid indah, gratis dan mudah.
                </div>
                <div class="sm:mt-20 mt-10 flex gap-8 justify-normal">
                    <Link
                        href="#"
                        class="bg-blue3 hover:bg-hover_blue3 text-white font-bold sm:text-lg text-base sm:px-6 sm:py-3 px-4 py-2 rounded-lg"
                        :class="animasi"
                    >
                        Isi Formulir
                    </Link>
                    <Link
                        href="#"
                        class="underline text-white text-lg px-6 py-3"
                        :class="animasi"
                    >
                        Lihat Ketentuan
                    </Link>
                </div>
            </div>
        </section>
        <section id="deskripsi" class="lg:px-32 xl:px-40 md:px-12 px-4 py-20 w-full mx-auto relative">
            <img src="masjid/line.svg" alt="Line" class="absolute bottom-0 left-0 w-2/3 sm:w-1/3">
            <h2 class="font-bold text-blue3 lg:text-5xl text-4xl">Mengapa Kami Membantu Desain Masjid Gratis?</h2>
            <div class="row flex justify-between gap-16 items-start mt-8">
                <div class="text-justify lg:w-8/12">
                    <p>
                        &emsp;Masjid, sebagai tempat ibadah utama umat Islam di Indonesia, khususnya di Jawa, sering kali dibangun melalui gotong royong masyarakat dengan dana seadanya. Sayangnya, kebutuhan mendesak akan masjid sering kali tidak diimbangi dengan perencanaan yang matang dan standar konstruksi yang baik, sehingga pembangunan masjid dilakukan secara terburu-buru.
                    </p>
                    &nbsp;
                    <p>
                        &emsp;Kami di Ant-Project, sebuah komunitas yang peduli terhadap pembangunan tempat ibadah, menyadari bahwa masih banyak pihak yang belum memberikan kontribusi optimal dalam hal ini. Ant-Project hadir untuk menjawab kebutuhan masyarakat dalam merencanakan dan membangun masjid dengan desain yang lebih baik, fungsional, dan sesuai standar konstruksi. Dengan melibatkan para ahli di bidang arsitektur dan teknik sipil, kami ingin memastikan bahwa setiap masjid yang dibangun melalui kerja sama ini tidak hanya indah secara estetika, tetapi juga aman dan nyaman digunakan dalam jangka panjang. Melalui layanan desain masjid gratis, kami berharap dapat meringankan beban masyarakat yang ingin mendirikan tempat ibadah tanpa mengesampingkan kualitas dan standar bangunan yang baik.
                    </p>
                </div>
                <img src="masjid/sipil.svg" alt="Teknik Sipil" class="w-4/12 object-cover hidden lg:block">
            </div>
        </section>
    </GuestLayout>
</template>
