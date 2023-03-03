<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catigorie extends Model
{
    use HasFactory;
    
    protected $table = 'catigories';

    public function posts(){
        $this->belongsTo(Post::class);
    }

}
