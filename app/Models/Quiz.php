<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    function category(){
        return $this->belongTo(Category::class);
    }
}
