<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periksa extends Model
{
    protected $table = 'periksa';
    public $timestamps = false;

    protected $fillable = [
        'tanggal', 'berat', 'tinggi', 'tensi', 'keterangan',  'pasien_id', 'dokter_id'
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }

    public function paramedik()
    {
        return $this->belongsTo(Paramedik::class, 'dokter_id');
    }
}
