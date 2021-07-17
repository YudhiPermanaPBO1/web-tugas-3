<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class makul extends Model
{
    protected $table    = 'makul';
    protected $fillable = ['kd_makul', 'nama_makul', 'sks'];

    public function user()
    {
        return $this->belongsTo(User::class, 'kd_makul', 'id');
    }
}
