<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formModel extends Model
{
    use HasFactory;
    protected $table = "form";
    protected $guarded = [];

    public function provinsi()
    {
        return $this->hasOne(provinsiModel::class, "provinsi_id");
    }

    public function kota()
    {
        return $this->hasOne(kotaModel::class, "kota_id");
    }
}
