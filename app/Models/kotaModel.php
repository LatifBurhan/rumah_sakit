<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kotaModel extends Model
{
    use HasFactory;
    protected $table = "kota";
    protected $guarded = [];

    public function provinsi()
    {
        return $this->belongsTo(provinsiModel::class, "provinsi_id", "id");
    }

}
