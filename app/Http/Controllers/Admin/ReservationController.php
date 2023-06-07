<?php

namespace App\Http\Controllers\Admin;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::paginate(10);

        return view('admin.reservations.index', ['reservations' =>  $reservations]);
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        return redirect()->back();
    }
}
