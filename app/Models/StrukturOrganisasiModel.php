<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StrukturOrganisasiModel extends Model
{
    use HasFactory;
    protected $table = 'struktur_organisasi';
    protected $fillable = [
        'nama',
        'jabatan',
        'foto'
    ];

}
