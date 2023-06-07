<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourDate extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_date',
        'end_date',
        'tour_id',
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }


    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
