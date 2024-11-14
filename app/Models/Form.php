<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'user_id',
        'tracking_number',
        'nama_lengkap',
        'email',
        'no_hp',
        'nama_masjid',
        'alamat_lengkap_lokasi',
        'koordinat',
        'kondisi_lahan',
        'panjang_lahan',
        'lebar_lahan',
        'status_lahan_wakaf',
        'kapasitas_jamaah',
        'fasilitas_tambahan',
        'jumlah_lantai',
        'atap',
        'catatan',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'fasilitas_tambahan' => 'array',
        'panjang_lahan' => 'decimal:2',
        'lebar_lahan' => 'decimal:2',
        'kapasitas_jamaah' => 'integer',
        'jumlah_lantai' => 'integer',
    ];

    /**
     * The constants for the form options.
     */
    public const KONDISI_LAHAN = [
        'Kosong',
        'Sawah',
        'Terdapat Bangunan'
    ];

    public const STATUS_WAKAF = [
        'Wakaf & Bersertifikat',
        'Wakaf & Surat Pernyataan Keterangan Bermaterai',
        'Wakaf',
        'Rencana akan diwakafkan',
        'Sedang pelunasan pembelian'
    ];

    public const FASILITAS = [
        'TPQ',
        'Ruang Rapat',
        'Parkir',
        'AC',
        'Taman/Bukaan',
        'Mihrab Imam'
    ];

    public const JENIS_ATAP = [
        'Limasan',
        'Plat',
        'Kubah'
    ];
}