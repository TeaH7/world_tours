@extends('admin.dashboard')

@section('admin_content')




    <!-- Basic Bootstrap Table -->
    <div class="container mt-5">

        <div class="card">
            <h5 class="card-header">Reservations</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Number of People</th>
                            <th>Tour Name</th>
                            <th>Tour Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @if ($reservations->count())
                            @foreach ($reservations as $reservation)
                                <tr>

                                    <td>{{ $reservation->first_name }}</td>
                                    <td>{{ $reservation->last_name }}</td>
                                    <td>{{ $reservation->email }}</td>
                                    <td>{{ $reservation->phone }}</td>
                                    <td>{{ $reservation->nr_of_people }}</td>
                                    <td>{{ $reservation->tour->title }}</td>
                                    <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $reservation->tourDate->start_date)->format('m-d') }}
                                        /
                                        {{ \Carbon\Carbon::createFromFormat('Y-m-d', $reservation->tourDate->end_date)->format('m-d') }}
                                    </td>

                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">

                                                <form action="{{ route('reservation.destroy', $reservation->id) }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="dropdown-item"><i class="bx bx-trash me-1"></i>
                                                        Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr colSpan="10">
                                <td colSpan="10">
                                    Nothing to show.
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                <div class="container">
                    {{ $reservations->links() }}
                </div>
            </div>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->
@endsection
