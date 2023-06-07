@extends('admin.dashboard')

@section('admin_content')




    <!-- Basic Bootstrap Table -->
    <div class="container mt-5">

        <div class="card">
            <h5 class="card-header">Contacts</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>

                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @if ($contacts->count())
                            @foreach ($contacts as $contact)
                                <tr>

                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->message }}</td>

                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">

                                                <form action="{{ route('contact.destroy', $contact->id) }}" method="POST">
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
                    {{ $contacts->links() }}
                </div>
            </div>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->
@endsection
