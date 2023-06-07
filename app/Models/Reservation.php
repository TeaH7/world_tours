<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'nr_of_people',
        'tour_id',
        'tour_date_id'
    ];


    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }

    public function tourDate()
    {
        return $this->belongsTo(TourDate::class);
    }
}
