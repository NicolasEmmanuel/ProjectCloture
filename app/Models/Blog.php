<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [ "titre", "description", "category_id", 'image' ];
    
    public function category(){
        $this->belongsTo(Category::class);
    }

    public function user(){
        $this->belongsTo(User::class);
    }
}
