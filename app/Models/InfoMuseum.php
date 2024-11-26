<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoMuseum extends Model
{
    use HasFactory;

    protected $table = 'info_museums';
    protected $primaryKey = 'info_id';

    protected $fillable = [
        'admin_id',
        'nama',
        'deskripsi',
        'alamat',
        'jam_operasional',
        'kontak_phone',
        'email',
        'link_map',
        'link_sosial_media',
    ];

    // Relasi
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id', 'admin_id');
    }
}

