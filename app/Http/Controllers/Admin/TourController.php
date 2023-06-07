<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Tour;
use App\Models\TourDate;
use App\Models\Itinerary;
use App\Models\TourInclude;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTourRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateTourRequest;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tours = Tour::latest()->paginate(10);
        return view('admin.tours.index', ['tours' => $tours]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tours.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTourRequest $request)
    {
        try {
            $data = $request->validated();
            $dates = $data['dates'];
            $includes = $data['include'];
            $itineraries = $data['itinerary'];

            //* Check if request has a file
            if ($request->hasFile('img1')) {
                $year = date('Y');
                $month = date('M');
                $day = date('j');

                //* Check if a directory exists else create it.
                if (!Storage::directories('uploads/' . $year . '/' . $month . '/' . $day)) {
                    Storage::makeDirectory('uploads/' . $year . '/' . $month . '/' . $day);
                }

                //* Set a variable for the file in the request
                $file = $request->file('img1');
                //* Set a variable for the name of the file in the request
                $fileNameImg1 =  date('Ymj') . '_' . time() . $file->getClientOriginalName();
                //* Set a variable for the path of the file in the request
                $pathLink = $file->storeAs('uploads/' . $year . '/' . $month . '/' . $day, $fileNameImg1);
                $data['img1'] = $pathLink;
            }

            //* Check if request has a file
            if ($request->hasFile('img2')) {
                $year = date('Y');
                $month = date('M');
                $day = date('j');

                //* Check if a directory exists else create it.
                if (!Storage::directories('uploads/' . $year . '/' . $month . '/' . $day)) {
                    Storage::makeDirectory('uploads/' . $year . '/' . $month . '/' . $day);
                }

                //* Set a variable for the file in the request
                $file = $request->file('img2');
                //* Set a variable for the name of the file in the request
                $fileNameImg1 =  date('Ymj') . '_' . time() . $file->getClientOriginalName();
                //* Set a variable for the path of the file in the request
                $pathLink = $file->storeAs('uploads/' . $year . '/' . $month . '/' . $day, $fileNameImg1);
                $data['img2'] = $pathLink;
            }


            //* Check if request has a file
            if ($request->hasFile('img3')) {
                $year = date('Y');
                $month = date('M');
                $day = date('j');

                //* Check if a directory exists else create it.
                if (!Storage::directories('uploads/' . $year . '/' . $month . '/' . $day)) {
                    Storage::makeDirectory('uploads/' . $year . '/' . $month . '/' . $day);
                }

                //* Set a variable for the file in the request
                $file = $request->file('img3');
                //* Set a variable for the name of the file in the request
                $fileNameImg1 =  date('Ymj') . '_' . time() . $file->getClientOriginalName();
                //* Set a variable for the path of the file in the request
                $pathLink = $file->storeAs('uploads/' . $year . '/' . $month . '/' . $day, $fileNameImg1);
                $data['img3'] = $pathLink;
            }


            //* Check if request has a file
            if ($request->hasFile('img4')) {
                $year = date('Y');
                $month = date('M');
                $day = date('j');

                //* Check if a directory exists else create it.
                if (!Storage::directories('uploads/' . $year . '/' . $month . '/' . $day)) {
                    Storage::makeDirectory('uploads/' . $year . '/' . $month . '/' . $day);
                }

                //* Set a variable for the file in the request
                $file = $request->file('img4');
                //* Set a variable for the name of the file in the request
                $fileNameImg1 =  date('Ymj') . '_' . time() . $file->getClientOriginalName();
                //* Set a variable for the path of the file in the request
                $pathLink = $file->storeAs('uploads/' . $year . '/' . $month . '/' . $day, $fileNameImg1);
                $data['img4'] = $pathLink;
            }

            $tour = Tour::create([
                'tour_type' => $data['tour_type'],
                'title' => $data['title'],
                'excerpt' => $data['excerpt'],
                'price' => $data['price'],
                'location' => $data['location'],
                'duration' => $data['duration'],
                'months' => $data['months'],
                'description' => $data['description'],
                'details1' => $data['details1'],
                'details2' => $data['details2'],
                'details3' => $data['details3'],
                'details4' => $data['details4'],
                'details5' => $data['details5'],
                'max_persons' => $data['max_persons'],
                'img1' => $data['img1'],
                'img2' => isset($data['img2']) ? $data['img2'] : null,
                'img3' => isset($data['img3']) ? $data['img3'] : null,
                'img4' => isset($data['img4']) ? $data['img4'] : null,
            ]);



            foreach ($dates as $date) {

                TourDate::create([
                    'start_date' => $date['start_date'],
                    'end_date' => $date['end_date'],
                    'tour_id' => $tour->id
                ]);
            }

            foreach ($includes as $include) {
                TourInclude::create([
                    'description' => $include['title'],
                    'is_included' => isset($include['is_included']) && $include['is_included'] == 1 ? 1 : 0,
                    'tour_id' => $tour->id
                ]);
            }


            foreach ($itineraries as $itinerary) {
                Itinerary::create([
                    'day' => $itinerary['day_itinerary'],
                    'title' => $itinerary['title_itinerary'],
                    'description' => $itinerary['description_itinerary'],
                    'tour_id' => $tour->id
                ]);
            }

            return redirect()->route('tours.index')->with('success', 'Tour Created Successfully');
        } catch (\Exception $e) {
            return redirect()->route('tours.index')->with('error', 'Upss!...Something Went Wrong!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tour = Tour::with(['dates', 'includes', 'itineraries'])->where('id', $id)->first();

        return view('admin.tours.edit', ['tour' => $tour]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTourRequest $request, string $id)
    {
        try {
            $tour = Tour::where('id', $id)->first();

            $data = $request->validated();

            //* Check if request has a file
            if ($request->hasFile('img1')) {
                $year = date('Y');
                $month = date('M');
                $day = date('j');

                //* Check if a directory exists else create it.
                if (!Storage::directories('uploads/' . $year . '/' . $month . '/' . $day)) {
                    Storage::makeDirectory('uploads/' . $year . '/' . $month . '/' . $day);
                }

                //* Set a variable for the file in the request
                $file = $request->file('img1');
                //* Set a variable for the name of the file in the request
                $fileNameImg1 =  date('Ymj') . '_' . time() . $file->getClientOriginalName();
                //* Set a variable for the path of the file in the request
                $pathLink = $file->storeAs('uploads/' . $year . '/' . $month . '/' . $day, $fileNameImg1);
                $data['img1'] = $pathLink;
            }

            //* Check if request has a file
            if ($request->hasFile('img2')) {
                $year = date('Y');
                $month = date('M');
                $day = date('j');

                //* Check if a directory exists else create it.
                if (!Storage::directories('uploads/' . $year . '/' . $month . '/' . $day)) {
                    Storage::makeDirectory('uploads/' . $year . '/' . $month . '/' . $day);
                }

                //* Set a variable for the file in the request
                $file = $request->file('img2');
                //* Set a variable for the name of the file in the request
                $fileNameImg1 =  date('Ymj') . '_' . time() . $file->getClientOriginalName();
                //* Set a variable for the path of the file in the request
                $pathLink = $file->storeAs('uploads/' . $year . '/' . $month . '/' . $day, $fileNameImg1);
                $data['img2'] = $pathLink;
            }


            //* Check if request has a file
            if ($request->hasFile('img3')) {
                $year = date('Y');
                $month = date('M');
                $day = date('j');

                //* Check if a directory exists else create it.
                if (!Storage::directories('uploads/' . $year . '/' . $month . '/' . $day)) {
                    Storage::makeDirectory('uploads/' . $year . '/' . $month . '/' . $day);
                }

                //* Set a variable for the file in the request
                $file = $request->file('img3');
                //* Set a variable for the name of the file in the request
                $fileNameImg1 =  date('Ymj') . '_' . time() . $file->getClientOriginalName();
                //* Set a variable for the path of the file in the request
                $pathLink = $file->storeAs('uploads/' . $year . '/' . $month . '/' . $day, $fileNameImg1);
                $data['img3'] = $pathLink;
            }


            //* Check if request has a file
            if ($request->hasFile('img4')) {
                $year = date('Y');
                $month = date('M');
                $day = date('j');

                //* Check if a directory exists else create it.
                if (!Storage::directories('uploads/' . $year . '/' . $month . '/' . $day)) {
                    Storage::makeDirectory('uploads/' . $year . '/' . $month . '/' . $day);
                }

                //* Set a variable for the file in the request
                $file = $request->file('img4');
                //* Set a variable for the name of the file in the request
                $fileNameImg1 =  date('Ymj') . '_' . time() . $file->getClientOriginalName();
                //* Set a variable for the path of the file in the request
                $pathLink = $file->storeAs('uploads/' . $year . '/' . $month . '/' . $day, $fileNameImg1);
                $data['img4'] = $pathLink;
            }

            $tour->update([
                'tour_type' => $data['tour_type'],
                'title' => $data['title'],
                'excerpt' => $data['excerpt'],
                'price' => $data['price'],
                'location' => $data['location'],
                'duration' => $data['duration'],
                'months' => $data['months'],
                'description' => $data['description'],
                'details1' => $data['details1'],
                'details2' => $data['details2'],
                'details3' => $data['details3'],
                'details4' => $data['details4'],
                'details5' => $data['details5'],
                'max_persons' => $data['max_persons'],
                'img1' => isset($data['img1']) ? $data['img1'] : $tour->img1,
                'img2' => isset($data['img2']) ? $data['img2'] : $tour->img2,
                'img3' => isset($data['img3']) ? $data['img3'] : $tour->img3,
                'img4' => isset($data['img4']) ? $data['img4'] : $tour->img4,
            ]);

            return redirect()->route('tours.index')->with('success', 'Tour Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('tours.index')->with('error', 'Upss!...Something Went Wrong!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $tour = Tour::where('id', $id)->first();
            TourDate::where('tour_id', $id)->delete();
            TourInclude::where('tour_id', $id)->delete();
            Itinerary::where('tour_id', $id)->delete();

            $tour->delete();

            return redirect()->route('tours.index')->with('success', 'Tour Deleted Successfully');
        } catch (\Exception $e) {
            return redirect()->route('tours.index')->with('error', 'Upss!...Something Went Wrong!');
        }
    }
}
