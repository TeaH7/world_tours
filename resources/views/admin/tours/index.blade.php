@extends('admin.dashboard')


@section('admin_content')
    <!-- Basic Bootstrap Table -->
    <div class="container mt-5">

        <div class="card">
            <h5 class="card-header">Table Basic</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Location</th>
                            <th>Duration</th>
                            <th>Price</th>
                            <th>Max Persons</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @if ($tours->count())
                            @foreach ($tours as $tour)
                                <tr>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong>{{ $tour->title }}</strong>
                                    </td>
                                    <td>{{ $tour->location }}</td>
                                    <td>{{ $tour->duration }}</td>
                                    <td>{{ $tour->price }} Leke</td>
                                    <td>{{ $tour->max_persons }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('tours.edit', $tour->id) }}"><i
                                                        class="bx bx-edit-alt me-1"></i>
                                                    Edit</a>
                                                <form action="{{ route('tours.destroy', $tour->id) }}" method="POST">
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
                    {{ $tours->links() }}
                </div>
            </div>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->
@endsection
