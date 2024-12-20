<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    use HasFactory;

    protected $table = 'donasis';
    protected $primaryKey = 'donasi_id';

    protected $fillable = [
        'program_id',
        'metode_pembayaran_id',
        'nama_donatur',
        'email',
        'jumlah',
        'status_pembayaran',
    ];

    // Relasi
    public function programDonasi()
    {
        return $this->belongsTo(ProgramDonasi::class, 'program_id', 'program_id');
    }

    public function metodePembayaran()
    {
        return $this->belongsTo(MetodePembayaran::class, 'metode_pembayaran_id', 'metode_pembayaran_id');
    }

    // Relasi ke Admin
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id', 'admin_id');
    }

    // Relasi ke Donasi
    public function donasi()
    {
        return $this->hasMany(Donasi::class, 'program_id', 'program_id');
    }

}
