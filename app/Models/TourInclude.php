<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourInclude extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'is_included',
        'tour_id'
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
}
