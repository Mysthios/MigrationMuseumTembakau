<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanans';
    protected $primaryKey = 'pesanan_id';

    protected $fillable = [
        'metode_pembayaran_id',
        'email',
        'nama_pelanggan',
        'nomor_hp',
        'tanggal_berkunjung',
        'jumlah_total',
    ];

    // Relasi
    public function metodePembayaran()
    {
        return $this->belongsTo(MetodePembayaran::class, 'metode_pembayaran_id', 'metode_pembayaran_id');
    }

    public function detailPemesanan()
    {
        return $this->hasMany(DetailPemesanan::class, 'pesanan_id', 'pesanan_id');
    }
}
