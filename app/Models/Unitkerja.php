<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unitkerja extends Model
{
    protected $table = 'unit_kerja';
    public $timestamps = false;

    protected $fillable = ['nama'];

    public function paramedik()
    {
        return $this->hasMany(Paramedik::class);
    }
}
