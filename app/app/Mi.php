<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mi extends Model
{
    protected $table = 'siswa_mi';
    public $fillable = [
        'nama',
        'jenis_kelamin'
    ];

}
