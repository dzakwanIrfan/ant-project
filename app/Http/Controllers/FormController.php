<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Http\Requests\StoreFormRequest;
use App\Http\Requests\UpdateFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    private function generateTrackingNumber()
    {
        $prefix = 'ANT';
        $date = now()->format('Ymd');

        // Mengambil nomor terakhir yang di-generate hari ini
        $lastTrackingNumber = Form::where('tracking_number', 'like', $prefix . $date . '%')
            ->orderBy('tracking_number', 'desc')
            ->lockForUpdate()
            ->first();

        if ($lastTrackingNumber) {
            $sequence = intval(substr($lastTrackingNumber->tracking_number, -4)) + 1;
        } else {
            $sequence = 1;
        }

        // Menghasilkan nomor tracking baru
        $newTrackingNumber = $prefix . $date . str_pad($sequence, 4, '0', STR_PAD_LEFT);

        return $newTrackingNumber;
    }


    public function store(Request $request)
    {
        try {
            // Validate the request data
            $validated = $request->validate([
                'nama_lengkap' => 'required|string|max:255',
                'no_hp' => 'required|string|max:20',
                'email' => 'nullable|email|max:255',
                'nama_masjid' => 'nullable|string|max:255',
                'alamat_lengkap_lokasi' => 'required|string',
                'koordinat' => 'nullable|string|max:255',
                'kondisi_lahan' => 'required|string|in:Kosong,Sawah,Terdapat Bangunan',
                'status_lahan_wakaf' => 'required|string|in:Wakaf & Bersertifikat,Wakaf & Surat Pernyataan Keterangan Bermaterai,Wakaf,Rencana akan diwakafkan,Sedang pelunasan pembelian',
                'panjang_lahan' => 'required|numeric|min:1',
                'lebar_lahan' => 'required|numeric|min:1',
                'kapasitas_jamaah' => 'required|numeric|min:1',
                'jumlah_lantai' => 'required|numeric|min:1',
                'atap' => 'required|string|in:Limasan,Plat,Kubah',
                'fasilitas_tambahan' => 'nullable|array',
                'fasilitas_tambahan.*' => 'string|in:TPQ,Ruang Rapat,Parkir,AC,Taman/Bukaan,Mihrab Imam',
                'catatan' => 'nullable|string',
            ]);

            DB::beginTransaction();

            // Generate tracking number first
            $trackingNumber = $this->generateTrackingNumber();

            // Create the mosque request
            Form::create([
                'tracking_number' => $trackingNumber,
                'user_id' => Auth::id(),
                'nama_lengkap' => $validated['nama_lengkap'],
                'no_hp' => $validated['no_hp'],
                'email' => $validated['email'],
                'nama_masjid' => $validated['nama_masjid'],
                'alamat_lengkap_lokasi' => $validated['alamat_lengkap_lokasi'],
                'koordinat' => $validated['koordinat'],
                'kondisi_lahan' => $validated['kondisi_lahan'],
                'status_lahan_wakaf' => $validated['status_lahan_wakaf'],
                'panjang_lahan' => $validated['panjang_lahan'],
                'lebar_lahan' => $validated['lebar_lahan'],
                'kapasitas_jamaah' => $validated['kapasitas_jamaah'],
                'jumlah_lantai' => $validated['jumlah_lantai'],
                'atap' => $validated['atap'],
                'fasilitas_tambahan' => $validated['fasilitas_tambahan'] ?? [],
                'catatan' => $validated['catatan'],
            ]);

            DB::commit();

            // Redirect back with success message using Inertia
            return back()->with('success', 'Permohonan berhasil dikirim. Nomor tracking: ' . $trackingNumber);

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error in form submission', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
    
            return back()->withErrors([
                'error' => 'Terjadi kesalahan saat memproses permohonan. Silakan coba lagi nanti.'
            ])->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Form $form)
    {
        return Inertia::render('Form');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFormRequest $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Form $form)
    {
        //
    }
}
