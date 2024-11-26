<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;

    protected $table = 'tikets';
    protected $primaryKey = 'tiket_id';

    protected $fillable = [
        'admin_id',
        'tipe_tiket',
        'harga',
        'deskripsi',
        'jumlah_maksimal_pengunjung',
        'tanggal_kadaluarsa',
    ];

    // Relasi
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id', 'admin_id');
    }

    public function detailPemesanan()
    {
        return $this->hasMany(DetailPemesanan::class, 'tiket_id', 'tiket_id');
    }
}
