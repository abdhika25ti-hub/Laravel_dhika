<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portofolio_1001 extends Model
{
    use HasFactory;

    protected $table = 'portofolio_1001';
    protected $primaryKey = 'portofolio_id';

    protected $fillable = [
        'nama',
        'profil_pribadi',
        'kontak',
        'alamat',
        'keahlian',
        'riwayat_pendidikan',
        'foto',
    ];
}
