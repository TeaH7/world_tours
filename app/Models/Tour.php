<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'tour_type',
        'title',
        'excerpt',
        'location',
        'img1',
        'img2',
        'img3',
        'img4',
        'duration',
        'price',
        'months',
        'description',
        'details1',
        'details2',
        'details3',
        'details4',
        'details5',
        'max_persons',
    ];


    public function dates()
    {
        return $this->hasMany(TourDate::class);
    }

    public function includes()
    {
        return $this->hasMany(TourInclude::class);
    }

    public function itineraries()
    {
        return $this->hasMany(Itinerary::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
