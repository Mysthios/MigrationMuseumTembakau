<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodePembayaran extends Model
{
    use HasFactory;

    protected $table = 'metode_pembayarans';
    protected $primaryKey = 'metode_pembayaran_id';

    protected $fillable = [
        'admin_id',
        'nama_metode',
        'nomor_akun',
        'nama_bank',
    ];

    // Relasi
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id', 'admin_id');
    }

    public function donasi()
    {
        return $this->hasMany(Donasi::class, 'metode_pembayaran_id', 'metode_pembayaran_id');
    }

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class, 'metode_pembayaran_id', 'metode_pembayaran_id');
    }
}
