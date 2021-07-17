<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nilai extends Model
{
    protected $table    = 'nilai';
    protected $fillable = ['mahasiswa_id', 'makul_id', 'nilai'];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id', 'id');
    }

    public function makul()
    {
        return $this->belongsTo(Makul::class, 'makul_id', 'id');
    }

    // public function npm()
    // {
    //     return $this->belongsTo(Npm::class, 'npm', 'id');
    // }

    // public function sks()
    // {
    //     return $this->belongsTo(Sks::class, 'sks', 'id');
    // }
}
