<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class s_pendatang extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function penduduk()
    {
        return $this->hasOne(penduduk::class, 'id', 'id_penduduk');
    }
}
