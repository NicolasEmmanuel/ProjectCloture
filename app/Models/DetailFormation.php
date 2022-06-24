<?php

namespace App\Models;

use App\Models\Formation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailFormation extends Model
{
    use HasFactory;
    public function formation(){
        $this->belongsTo(Formation::class);
    }
}