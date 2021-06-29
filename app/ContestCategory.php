<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContestCategory extends Model
{
    use HasFactory;
    
    public function contests()
    {
        return $this->hasMany(Contest::class);
    }
}
