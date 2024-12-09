<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramDonasi extends Model
{
    use HasFactory;

    protected $table = 'program_donasis';
    protected $primaryKey = 'program_id';

    protected $fillable = [
        'admin_id',
        'judul',
        'deskripsi',
        'jumlah_target',
        'jumlah_sekarang',
        'tanggal_mulai',
        'tanggal_selesai',
        'status',
        'gambar',
    ];

    // Relasi
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id', 'admin_id');
    }

    public function donasi()
    {
        return $this->hasMany(Donasi::class, 'program_id', 'program_id');
    }
}
