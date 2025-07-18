<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    protected $table = 'kelurahan';
    public $timestamps = false;

    public function pasien()
    {
        return $this->hasMany(Pasien::class);
    }
}
