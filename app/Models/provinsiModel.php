<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provinsiModel extends Model
{
    use HasFactory;
    protected $table = "provinsi";
    protected $guarded = [];

    public function kota()
    {
        return $this->hasOne(kotaModel::class, "id");
    }

    public function form()
    {
        return $this->belongsTo(formModel::class, "id");
    }
}
