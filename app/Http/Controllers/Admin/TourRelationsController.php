<?php

namespace App\Http\Controllers\Admin;

use App\Models\TourDate;
use App\Models\Itinerary;
use App\Models\TourInclude;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TourRelationsController extends Controller
{
    public function updateTourDate(Request $request, $id)
    {
        $tourDate = TourDate::where('id', $id)->first();
        $date = $request->validate([
            'start_date' => ['required'],
            'end_date' => ['required'],
        ]);
        $tourDate->update([
            'start_date' => $date['start_date'],
            'end_date' => $date['end_date'],
            'tour_id' => $tourDate->tour_id
        ]);

        return redirect()->route('tours.index')->with('success', 'Tour Updated Successfully');
    }


    public function updateTourInlclude(Request $request, $id)
    {
        $tourInclude = TourInclude::where('id', $id)->first();
        $data = $request->validate([

            'title' => ['required', 'string'],
            'is_included' => ['nullable'],
        ]);


        $tourInclude->update([
            'description' => $data['title'],
            'is_included' => isset($data['is_included']) ? 1 : 0,
            'tour_id' => $tourInclude->tour_id
        ]);

        return redirect()->route('tours.index')->with('success', 'Tour Updated Successfully');
    }


    public function updateTourItinerary(Request $request, $id)
    {
        $tourItinerary = Itinerary::where('id', $id)->first();
        $data = $request->validate([

            'day_itinerary' => ['required', 'numeric'],
            'title_itinerary' => ['required', 'string'],
            'description_itinerary' => ['nullable'],
        ]);


        $tourItinerary->update([
            'day' => $data['day_itinerary'],
            'title' => $data['title_itinerary'],
            'description' => $data['description_itinerary'],
            'tour_id' => $tourItinerary->tour_id
        ]);

        return redirect()->route('tours.index')->with('success', 'Tour Updated Successfully');
    }
}
