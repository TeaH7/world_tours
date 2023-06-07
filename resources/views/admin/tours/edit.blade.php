@extends('admin.dashboard')

@section('admin_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Edit Tour</h4>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        @endif


        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('tours.update', $tour->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="card mb-4">
                        <h5 class="card-header">Tour Details</h5>
                        <div class="card-body">
                            <div>
                                <label for="defaultFormControlInput" class="form-label">Tour Main Title</label>
                                <input type="text" class="form-control @error('tour_type') is-invalid  @enderror"
                                    id="defaultFormControlInput" placeholder="John Doe"
                                    aria-describedby="defaultFormControlHelp" name="tour_type"
                                    value="{{ $tour->tour_type }}" />
                                @error('tour_type')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <label for="defaultFormControlInput" class="form-label">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid  @enderror"
                                    id="defaultFormControlInput" placeholder="John Doe"
                                    aria-describedby="defaultFormControlHelp" name="title" value="{{ $tour->title }}" />
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="row mt-3">
                                <div class="col-6">
                                    <div>
                                        <label for="defaultFormControlInput" class="form-label">Country</label>
                                        <input type="text" class="form-control @error('location') is-invalid  @enderror"
                                            id="defaultFormControlInput" placeholder="Albania"
                                            aria-describedby="defaultFormControlHelp" name="location"
                                            value="{{ $tour->location }}" />
                                        @error('location')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div>
                                        <label for="defaultFormControlInput" class="form-label">Duration</label>
                                        <input type="number" class="form-control @error('duration') is-invalid  @enderror"
                                            id="defaultFormControlInput" aria-describedby="defaultFormControlHelp"
                                            name="duration" value="{{ $tour->duration }}" />
                                        @error('duration')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <div>
                                        <label for="defaultFormControlInput" class="form-label">Max Person</label>
                                        <input type="number" class="form-control" id="defaultFormControlInput"
                                            aria-describedby="defaultFormControlHelp" name="max_persons"
                                            value="{{ $tour->max_persons }}" />
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div>
                                        <label for="defaultFormControlInput" class="form-label">Price</label>
                                        <input type="number" class="form-control" id="defaultFormControlInput"
                                            aria-describedby="defaultFormControlHelp" name="price"
                                            value="{{ $tour->price }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label for="defaultFormControlInput" class="form-label">Months Of Tour</label>
                                <input type="text" class="form-control" id="defaultFormControlInput"
                                    placeholder="Mars, Qershor" aria-describedby="defaultFormControlHelp" name="months"
                                    value="{{ $tour->months }}" />
                            </div>

                            <div class="mt-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Excerpt</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="excerpt">{{ $tour->excerpt }}</textarea>
                            </div>
                            <div class="mt-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Descripton</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{ $tour->description }}</textarea>
                            </div>

                            <div class="row mt-3">
                                <h6 class="mt-3">Tour Details</h6>
                                <div class="col-6">

                                    <div>

                                        <label for="defaultFormControlInput" class="form-label">Detail 1</label>
                                        <input type="text" class="form-control" id="defaultFormControlInput"
                                            placeholder="John Doe" aria-describedby="defaultFormControlHelp"
                                            name="details1" value="{{ $tour->details1 }}" />
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div>

                                        <label for="defaultFormControlInput" class="form-label">Detail 2</label>
                                        <input type="text" class="form-control" id="defaultFormControlInput"
                                            placeholder="John Doe" aria-describedby="defaultFormControlHelp"
                                            name="details2" value="{{ $tour->details2 }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <div>

                                        <label for="defaultFormControlInput" class="form-label">Detail 3</label>
                                        <input type="text" class="form-control" id="defaultFormControlInput"
                                            placeholder="John Doe" aria-describedby="defaultFormControlHelp"
                                            name="details3" value="{{ $tour->details3 }}" />
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div>

                                        <label for="defaultFormControlInput" class="form-label">Detail 4</label>
                                        <input type="text" class="form-control" id="defaultFormControlInput"
                                            placeholder="John Doe" aria-describedby="defaultFormControlHelp"
                                            name="details4" value="{{ $tour->details4 }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6 offset-3">
                                    <div>

                                        <label for="defaultFormControlInput" class="form-label">Detail 5</label>
                                        <input type="text" class="form-control" id="defaultFormControlInput"
                                            placeholder="John Doe" aria-describedby="defaultFormControlHelp"
                                            name="details5" value="{{ $tour->details5 }}" />
                                    </div>
                                </div>

                            </div>
                            <div class="row mt-3">
                                <div class="mb-4">
                                    <h5 class="h5">Images</h5>
                                    <div class="row">
                                        <div class="col-6">
                                            <div>
                                                <label for="formFileDisabled" class="form-label">Cover Image</label>
                                                <input class="form-control" type="file" id="formFileDisabled"
                                                    name="img1" />
                                                <img src="{{ asset('/storage/' . $tour->img1) }}" alt=""
                                                    class="img-thumbnail mt-2">
                                            </div>

                                        </div>
                                        <div class="col-6">
                                            <div>
                                                <label for="formFileDisabled" class="form-label">Image 2</label>
                                                <input class="form-control" type="file" id="formFileDisabled"
                                                    name="img2" />
                                                <img src="{{ asset('/storage/' . $tour->img2) }}" alt=""
                                                    class="img-thumbnail mt-2">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <div>
                                                <label for="formFileDisabled" class="form-label">Image 3</label>
                                                <input class="form-control" type="file" id="formFileDisabled"
                                                    name="img3" />
                                                <img src="{{ asset('/storage/' . $tour->img3) }}" alt=""
                                                    class="img-thumbnail mt-2">
                                            </div>

                                        </div>
                                        <div class="col-6">
                                            <div>
                                                <label for="formFileDisabled" class="form-label">Image 4</label>
                                                <input class="form-control" type="file" id="formFileDisabled"
                                                    name="img4" />
                                                <img src="{{ asset('/storage/' . $tour->img4) }}" alt=""
                                                    class="img-thumbnail mt-2">
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="d-table mx-auto my-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-md-6">

                <div class="card mb-4">
                    <h5 class="card-header">Dates</h5>
                    <div class="card-body ">
                        @if ($tour->dates->count())
                            @foreach ($tour->dates as $date)
                                <form action="{{ route('tour.update.date', $date->id) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="row" id="dates-container">
                                        <div class="col-6">
                                            <div class="mb-3 row">
                                                <label for="start_date[]" class="form-label">Start Date</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="date" name="start_date"
                                                        id="start_date" value="{{ $date->start_date }}" />
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3 row">
                                                <label for="end_date[]" class="form-label">End Date</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="date" id="end_date"
                                                        name="end_date" value="{{ $date->end_date }}" />
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="d-table mx-auto my-3">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="card mb-4">
                    <h5 class="card-header">What's Included/Not Included</h5>
                    <div class="card-body">
                        @if ($tour->includes->count())
                            @foreach ($tour->includes as $include)
                                <form action="{{ route('tour.update.include', $include->id) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="row" id="includes-container">
                                        <div class="col-12">
                                            <div>
                                                <label for="defaultFormControlInput" class="form-label">Title</label>
                                                <input type="text" class="form-control" id="defaultFormControlInput"
                                                    placeholder="John Doe" name="title"
                                                    aria-describedby="defaultFormControlHelp"
                                                    value="{{ $include->description }}" />
                                            </div>

                                        </div>

                                        <div class="col-12">

                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    name="is_included"
                                                    {{ $include->is_included === 1 ? 'checked' : '' }} />
                                                <label class="form-check-label" for="inlineCheckbox1">Is Included?</label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="d-table mx-auto my-3">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            @endforeach
                        @endif

                    </div>
                </div>

                <div class="card mb-4">
                    <h5 class="card-header">Itinerary</h5>
                    <div class="card-body ">
                        @if ($tour->itineraries->count())
                            @foreach ($tour->itineraries as $itinerary)
                                <form action="{{ route('tour.update.itinerary', $itinerary->id) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="row" id="itinerary-container">

                                        <div class="col-6 mb-3">

                                            <label for="day_itinerary" class="form-label">Day of Itinerary</label>

                                            <input class="form-control" type="number" name="day_itinerary"
                                                id="day_itinerary" value="{{ $itinerary->day }}" />



                                        </div>
                                        <div class="col-6 mb-3">

                                            <label for="title" class="form-label">Title of Itinerary</label>

                                            <input class="form-control" type="text" id="title_itinerary"
                                                name="title_itinerary" value="{{ $itinerary->title }}" />



                                        </div>
                                        <div class="col-12 mt-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Descripton</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" name="description_itinerary">{{ $itinerary->description }} </textarea>
                                        </div>

                                    </div>
                                    <div class="d-table mx-auto my-3">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
