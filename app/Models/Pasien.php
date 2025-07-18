<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'pasien';
    public $timestamps = false;

    protected $fillable = [
        'kode',
        'nama',
        'tmp_lahir',
        'tgl_lahir',
        'gender',
        'email',
        'alamat',
        'kelurahan_id',
    ];

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class);
    }

    public function periksa()
    {
        return $this->hasMany(Periksa::class);
    }
}
