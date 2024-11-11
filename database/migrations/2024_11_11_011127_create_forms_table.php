<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Constants for enum values to maintain consistency and reusability
     */
    private const KONDISI_LAHAN = [
        'Kosong',
        'Sawah', 
        'Terdapat Bangunan'
    ];

    private const STATUS_WAKAF = [
        'Wakaf & Bersertifikat',
        'Wakaf & Surat Pernyataan Keterangan Bermaterai',
        'Wakaf',
        'Rencana akan diwakafkan',
        'Sedang pelunasan pembelian'
    ];

    private const FASILITAS = [
        'TPQ',
        'Ruang Rapat',
        'Parkir',
        'AC',
        'Taman/Bukaan',
        'Mihrab Imam'
    ];

    private const JENIS_ATAP = [
        'Limasan',
        'Plat',
        'Kubah'
    ];

    private const REFERENSI_DESAIN = [
        'Tradisional',
        'Modern', 
        'Timur Tengah',
        'Melayu',
        'Hijau (Sustain Ramah Lingkungan)',
        'Modular',
        'Multifungsi',
        'Minimalis'
    ];

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('forms', function (Blueprint $table) {
            // Primary Key
            $table->id();

            // Personal Information
            $table->string('nama_lengkap');
            $table->string('email');
            $table->string('no_hp');

            // Location Details
            $table->string('nama_masjid')->nullable();
            $table->text('alamat_lengkap_lokasi')->nullable();
            $table->string('koordinat')->nullable();

            // Land Information
            $table->enum('kondisi_lahan', self::KONDISI_LAHAN);
            $table->decimal('panjang_lahan', 8, 2);
            $table->decimal('lebar_lahan', 8, 2);
            $table->enum('status_lahan_wakaf', self::STATUS_WAKAF);

            // Design Requirement
            $table->integer('kapasitas_jamaah')->unsigned();
            $table->enum('fasilitas_tambahan', self::FASILITAS);
            $table->tinyInteger('jumlah_lantai')->unsigned();
            $table->enum('atap', self::JENIS_ATAP);
            $table->enum('referensi', self::REFERENSI_DESAIN);
            $table->decimal('batasan_budget', 15, 2);

            // Additional Information
            $table->text('catatan');

            // Timestamps
            $table->timestamps();

            // Indexes
            $table->index(['nama_lengkap', 'email']);
            $table->index('no_hp');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};