<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contest extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'title', 'submission_start', 'submission_end'
    ];

    public function contestCategory()
    {
        return $this->belongsTo(ContestCategory::class);
    }
}
