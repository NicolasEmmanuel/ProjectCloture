<?php

namespace App\Models;

use App\Models\DetailFormation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Formation extends Model
{
    use HasFactory;
    public function detail_formation(){
        return $this->hasMany(DetailFormation::class);
    }
}