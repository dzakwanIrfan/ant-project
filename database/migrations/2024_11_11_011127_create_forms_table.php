<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
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

    private const JENIS_ATAP = [
        'Limasan',
        'Plat',
        'Kubah'
    ];

    public function up(): void
    {
        Schema::create('forms', function (Blueprint $table) {
            // Primary Key
            $table->id();

            $table->string('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->string('tracking_number')->unique();

            // Personal Information
            $table->string('nama_lengkap');
            $table->string('email')->nullable();
            $table->string('no_hp');
            $table->string('nama_masjid')->nullable();

            // Location Details
            $table->text('alamat_lengkap_lokasi');
            $table->string('koordinat')->nullable();
            $table->enum('kondisi_lahan', self::KONDISI_LAHAN);
            $table->decimal('panjang_lahan', 8, 2);
            $table->decimal('lebar_lahan', 8, 2);
            $table->enum('status_lahan_wakaf', self::STATUS_WAKAF);

            // Design Requirement
            $table->integer('kapasitas_jamaah')->unsigned();
            $table->json('fasilitas_tambahan')->nullable(); 
            $table->tinyInteger('jumlah_lantai')->unsigned();
            $table->enum('atap', self::JENIS_ATAP);

            // Additional Information
            $table->text('catatan')->nullable();

            // Timestamps
            $table->timestamps();

            // Indexes
            $table->index(['nama_lengkap', 'email']);
            $table->index('no_hp');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
