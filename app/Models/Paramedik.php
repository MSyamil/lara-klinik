<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paramedik extends Model
{
    protected $table = 'paramedik';
    public $timestamps = false;

    public function unitKerja()
    {
        return $this->belongsTo(UnitKerja::class, 'unit_kerja_id');
    }

    public function periksa()
    {
        return $this->hasMany(Periksa::class, 'dokter_id');
    }
}
