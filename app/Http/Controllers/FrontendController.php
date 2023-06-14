<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Tour;
use App\Models\Contact;
use App\Models\TourDate;
use App\Models\Itinerary;
use App\Models\Reservation;
use App\Models\TourInclude;
use Illuminate\Http\Request;
use App\Mail\ReservationMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreTourRequest;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\StoreReservationRequest;

class FrontendController extends Controller
{
    public function home()
    {

        $tours = Tour::latest()->limit(6)->get();

        return view('front.index', ['tours' => $tours]);
    }


    public function allTours()
    {
        $allTours = Tour::paginate(6);

        return view('front.all_tours', ['allTours' => $allTours]);
    }


    public function albanianTours()
    {
        $albaniaTours = Tour::where('location', 'LIKE', '%' . 'albania' . '%')->paginate(6);


        return view('front.albania_tours', ['albaniaTours' => $albaniaTours]);
    }



    public function otherTours()
    {
        $otherTours = Tour::where('location', 'NOT LIKE', '%' . 'albania' . '%')->paginate(6);


        return view('front.countries_tours', ['otherTours' => $otherTours]);
    }


    public function showTour($id)
    {
        $tour = Tour::where('id', $id)->first();
        $includes = TourInclude::where(['is_included' => 1, 'tour_id' => $tour->id])->get();
        $notIncludes = TourInclude::where(['is_included' => 0, 'tour_id' => $tour->id])->get();
        $itineraries = Itinerary::where(['tour_id' => $tour->id])->orderBy('day', 'asc')->get();
        $days = TourDate::where(['tour_id' => $tour->id])->where('start_date', '>', Carbon::now()->format('Y-m-d'))->orderBy('start_date', 'asc')->get();

        return view('front.single_tour', [
            'tour' => $tour,
            'includes' => $includes,
            'notIncludes' => $notIncludes,
            'itineraries' => $itineraries,
            'days' => $days
        ]);
    }


    public function storeReservation(StoreReservationRequest $request)
    {
        $data = $request->validated();

        $reserved = Reservation::where(['tour_id' => $data['tour_id'], 'tour_date_id' => $data['tour_date_id']])->sum('nr_of_people');

        $available = Tour::where('id', $data['tour_id'])->first();


        $currentNumber = $available->max_persons - (int)$reserved;

        if ($currentNumber >= (int)$data['nr_of_people']) {
            Reservation::create([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'nr_of_people' => $data['nr_of_people'],
                'tour_id' => $data['tour_id'],
                'tour_date_id' => $data['tour_date_id'],
            ]);



            $mailData = [
                'title' => 'Rezervimi u krye me sukses',
                'body' => 'Qe rezervimi te jete i vlefshem duhet qe ta paguani ate te pakten 24 ore para udhetimit. Ju faleminderojme per zgjedhjen tuaj!'
            ];

            Mail::to($data['email'])->send(new ReservationMail($mailData));

            return redirect()->back()->with('success', 'Rezervimi u krye me sukses. Ju lutemi qe ta paguani ate 24 ore para dates se nisjes. Faleminderit!');
        } else {
            return redirect()->back()->with('error', 'Rezervimi nuk mund te kryhet. Numri i vendeve te lira eshte ' . $currentNumber);
        }
    }

    public function contactUs()
    {
        return view('front.contact');
    }

    public function storeContact(StoreContactRequest $request)
    {
        $data = $request->validated();

        Contact::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'message' => $data['message'],
        ]);

        return redirect()->back()->with('success', 'Mesazhi u dergua.');
    }



    public function search(Request $request)
    {
        $search = $request->input('search');

        $tours = Tour::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('location', 'LIKE', "%{$search}%");

        return view('front.search', ['tours' => $tours->paginate(6), 'search' => $search]);
    }
}
