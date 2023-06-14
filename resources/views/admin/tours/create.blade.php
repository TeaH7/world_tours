@extends('admin.dashboard')

@section('admin_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Create Tour</h4>

        <form action="{{ route('tours.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <h5 class="card-header">Tour Details</h5>
                        <div class="card-body">
                            <div>
                                <label for="defaultFormControlInput" class="form-label">Tour Main Title</label>
                                <input type="text" class="form-control @error('tour_type') is-invalid  @enderror"
                                    id="defaultFormControlInput" aria-describedby="defaultFormControlHelp" name="tour_type"
                                    value="{{ old('tour_type') }}" />
                                @error('tour_type')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <label for="defaultFormControlInput" class="form-label">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid  @enderror"
                                    id="defaultFormControlInput" aria-describedby="defaultFormControlHelp" name="title"
                                    value="{{ old('title') }}" />
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="row
                                    mt-3">
                                <div class="col-6">
                                    <div>
                                        <label for="defaultFormControlInput" class="form-label">Country</label>
                                        <input type="text" class="form-control @error('location') is-invalid  @enderror"
                                            id="defaultFormControlInput" placeholder="Albania"
                                            aria-describedby="defaultFormControlHelp" name="location"
                                            value="{{ old('location') }}" />
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
                                            name="duration" value="{{ old('duration') }}" />
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
                                        <input type="number"
                                            class="form-control @error('max_persons') is-invalid  @enderror"
                                            id="defaultFormControlInput" aria-describedby="defaultFormControlHelp"
                                            name="max_persons" value="{{ old('max_persons') }}" />
                                        @error('max_persons')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div>
                                        <label for="defaultFormControlInput" class="form-label">Price</label>
                                        <input type="number" class="form-control @error('price') is-invalid  @enderror"
                                            id="defaultFormControlInput" aria-describedby="defaultFormControlHelp"
                                            name="price" value="{{ old('price') }}" />
                                        @error('price')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label for="defaultFormControlInput" class="form-label">Months Of Tour</label>
                                <input type="text" class="form-control @error('months') is-invalid  @enderror"
                                    id="defaultFormControlInput" placeholder="Mars, Qershor"
                                    aria-describedby="defaultFormControlHelp" name="months" value="{{ old('months') }}" />
                                @error('months')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mt-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Excerpt</label>
                                <textarea class="form-control @error('excerpt') is-invalid  @enderror" id="exampleFormControlTextarea1" rows="3"
                                    name="excerpt">{{ old('excerpt') }}</textarea>
                                @error('excerpt')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Descripton</label>
                                <textarea class="form-control @error('description') is-invalid  @enderror" id="exampleFormControlTextarea1"
                                    rows="3" name="description">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="row mt-3">
                                <h6 class="mt-3">Tour Details</h6>
                                <div class="col-6">
                                    <div>
                                        <label for="defaultFormControlInput" class="form-label">Detail 1</label>
                                        <input type="text"
                                            class="form-control @error('details1') is-invalid  @enderror"
                                            id="defaultFormControlInput" aria-describedby="defaultFormControlHelp"
                                            name="details1" value="{{ old('details1') }}" />
                                        @error('details1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div>

                                        <label for="defaultFormControlInput" class="form-label">Detail 2</label>
                                        <input type="text"
                                            class="form-control @error('details2') is-invalid  @enderror"
                                            id="defaultFormControlInput" aria-describedby="defaultFormControlHelp"
                                            name="details2" value="{{ old('details2') }}" />
                                        @error('details2')
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

                                        <label for="defaultFormControlInput" class="form-label">Detail 3</label>
                                        <input type="text"
                                            class="form-control @error('details3') is-invalid  @enderror"
                                            id="defaultFormControlInput" aria-describedby="defaultFormControlHelp"
                                            name="details3" value="{{ old('details3') }}" />
                                        @error('details3')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div>

                                        <label for="defaultFormControlInput" class="form-label">Detail 4</label>
                                        <input type="text"
                                            class="form-control @error('details4') is-invalid  @enderror"
                                            id="defaultFormControlInput" aria-describedby="defaultFormControlHelp"
                                            name="details4" value="{{ old('details4') }}" />
                                        @error('details4')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6 offset-3">
                                    <div>

                                        <label for="defaultFormControlInput" class="form-label">Detail 5</label>
                                        <input type="text"
                                            class="form-control @error('details5') is-invalid  @enderror"
                                            id="defaultFormControlInput" aria-describedby="defaultFormControlHelp"
                                            name="details5" value="{{ old('details5') }}" />
                                        @error('details5')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <h5 class="card-header">Images</h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div>
                                        <label for="formFileDisabled" class="form-label">Cover Image</label>
                                        <input class="form-control @error('img1') is-invalid  @enderror" type="file"
                                            id="formFileDisabled" name="img1" />
                                        @error('img1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-6">
                                    <div>
                                        <label for="formFileDisabled" class="form-label">Image 2</label>
                                        <input class="form-control @error('img2') is-invalid  @enderror" type="file"
                                            id="formFileDisabled" name="img2" />
                                        @error('img2')
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
                                        <label for="formFileDisabled" class="form-label">Image 3</label>
                                        <input class="form-control @error('img3') is-invalid  @enderror" type="file"
                                            id="formFileDisabled" name="img3" />
                                        @error('img3')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-6">
                                    <div>
                                        <label for="formFileDisabled" class="form-label">Image 4</label>
                                        <input class="form-control @error('img4') is-invalid  @enderror" type="file"
                                            id="formFileDisabled" name="img4" />
                                        @error('img4')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card mb-4">
                        <h5 class="card-header">Dates</h5>
                        <div class="card-body ">
                            <div class="row" id="dates-container">
                                <div class="col-6">
                                    <div class="mb-3 row">
                                        <label for="start_date[]" class="form-label">Start Date</label>
                                        <div class="col-md-10">
                                            <input class="form-control @error('dates.0.start_date') is-invalid  @enderror"
                                                type="date" name="dates[0][start_date]" id="start_date" />
                                            @error('dates.0.start_date')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                        </div>
                                    </div>

                                </div>
                                <div class="col-6">
                                    <div class="mb-3 row">
                                        <label for="end_date[]" class="form-label">End Date</label>
                                        <div class="col-md-10">
                                            <input class="form-control @error('dates.0.end_date') is-invalid  @enderror"
                                                type="date" id="end_date" name="dates[0][end_date]" />
                                            @error('dates.0.end_date')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-12">
                                    <div class="">
                                        <button type="button" class="btn btn-primary" id="add-date">Add Date</button>
                                        <button type="button" class="btn btn-primary" id="remove-date">Remove
                                            Date</button>
                                    </div>

                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="card mb-4">
                        <h5 class="card-header">What's Included/Not Included</h5>
                        <div class="card-body">
                            <div class="row" id="includes-container">
                                <div class="col-12">
                                    <div>
                                        <label for="defaultFormControlInput" class="form-label">Title</label>
                                        <input type="text"
                                            class="form-control @error('include.0.title') is-invalid  @enderror"
                                            id="defaultFormControlInput" placeholder="John Doe" name="include[0][title]"
                                            aria-describedby="defaultFormControlHelp" />
                                        @error('include.0.title')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                </div>

                                <div class="col-12">

                                    <div class="form-check form-check-inline mt-3">
                                        <input
                                            class="form-check-input @error('include.0.is_included') is-invalid  @enderror "
                                            type="checkbox" id="inlineCheckbox1" name="include[0][is_included]"
                                            value="1" />
                                        <label class="form-check-label" for="inlineCheckbox1">Is Included?</label>
                                        @error('include.0.is_included')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12">
                                    <div class="">
                                        <button type="button" class="btn btn-primary" id="add-includes">Add </button>
                                        <button type="button" class="btn btn-primary" id="remove-includes">Remove
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <h5 class="card-header">Itinerary</h5>
                        <div class="card-body ">
                            <div class="row" id="itinerary-container">

                                <div class="col-6 mb-3">

                                    <label for="day_itinerary" class="form-label">Day of Itinerary</label>

                                    <input class="form-control @error('itinerary.0.day_itinerary') is-invalid  @enderror"
                                        type="number" name="itinerary[0][day_itinerary]" id="day_itinerary" />
                                    @error('itinerary.0.day_itinerary')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror



                                </div>
                                <div class="col-6 mb-3">

                                    <label for="title" class="form-label">Title of Itinerary</label>

                                    <input
                                        class="form-control @error('itinerary.0.title_itinerary') is-invalid  @enderror"
                                        type="text" id="title_itinerary" name="itinerary[0][title_itinerary]" />
                                    @error('itinerary.0.title_itinerary')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror




                                </div>
                                <div class="col-12 mt-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Descripton</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="itinerary[0][description_itinerary]"></textarea>
                                </div>

                            </div>

                            <div class="row mt-3">
                                <div class="col-12">
                                    <div class="">
                                        <button type="button" class="btn btn-primary" id="add-itinerary">Add
                                            Another</button>
                                        <button type="button" class="btn btn-primary" id="remove-itinerary">Remove
                                        </button>
                                    </div>

                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection


@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const addDateButton = document.getElementById('add-date');
            const removeDateButton = document.getElementById('remove-date');
            const datesContainer = document.getElementById('dates-container');

            let indexDate = 1;
            let indexIncludes = 1;
            let indexItinerary = 1;


            addDateButton.addEventListener('click', function() {
                const dateInputs = document.createElement('div');
                dateInputs.classList.add('date-inputs');
                dateInputs.classList.add('row')
                dateInputs.classList.add('mt-3')

                const dateCol1 = document.createElement('div');
                dateCol1.classList.add('col-6')
                const dateCol2 = document.createElement('div');
                dateCol2.classList.add('col-6')


                const startDateLabel = document.createElement('label');
                startDateLabel.textContent = 'Start Date:';
                startDateLabel.classList.add('form-label');

                const startDateInput = document.createElement('input');
                startDateInput.type = 'date';
                startDateInput.name = `dates[${indexDate}][start_date]`;
                startDateInput.required = true;
                startDateInput.classList = 'form-control';

                const endDateLabel = document.createElement('label');
                endDateLabel.textContent = 'End Date:';
                endDateLabel.classList.add('form-label');

                const endDateInput = document.createElement('input');
                endDateInput.type = 'date';
                endDateInput.name = `dates[${indexDate}][end_date]`;
                endDateInput.required = true;
                endDateInput.classList = 'form-control';

                dateCol1.appendChild(startDateLabel);
                dateCol1.appendChild(startDateInput);
                dateCol2.appendChild(endDateLabel);
                dateCol2.appendChild(endDateInput);

                datesContainer.appendChild(dateInputs);
                dateInputs.appendChild(dateCol1);
                dateInputs.appendChild(dateCol2);

                indexDate++;
            });

            removeDateButton.addEventListener('click', function() {
                const dateInputs = datesContainer.querySelectorAll('.date-inputs');
                const lastIndex = dateInputs.length - 1;

                if (lastIndex >= 0) {
                    datesContainer.removeChild(dateInputs[lastIndex]);
                    indexDate--;
                }
            });



            const addIncludesButton = document.getElementById('add-includes');
            const removeIncludesButton = document.getElementById('remove-includes');
            const includesContainer = document.getElementById('includes-container');


            addIncludesButton.addEventListener('click', function() {
                const includeInputs = document.createElement('div');
                includeInputs.classList.add('include-inputs')
                includeInputs.classList.add('mt-3')

                const inputCol1 = document.createElement('div');
                inputCol1.classList.add('col-12');
                const inputCol2 = document.createElement('div');
                inputCol2.classList.add('col-12');


                const includeLabel = document.createElement('label');
                includeLabel.textContent = 'Title';
                includeLabel.classList.add('form-label');

                const includeInput = document.createElement('input');
                includeInput.type = 'text';
                includeInput.name = `include[${indexIncludes}][title]`;
                includeInput.classList = 'form-control';


                const radioCheck = document.createElement('div');
                radioCheck.classList.add('form-check');
                radioCheck.classList.add('form-check-inline');
                radioCheck.classList.add('mt-3');

                const radioInput = document.createElement('input');
                radioInput.type = 'checkbox';
                radioInput.value = '1';
                radioInput.name = `include[${indexIncludes}][is_included]`;
                radioInput.classList = 'form-check-input';
                const includeCheckLabel = document.createElement('label');
                includeCheckLabel.textContent = 'Is Included?';



                inputCol1.appendChild(includeLabel);
                inputCol1.appendChild(includeInput);
                inputCol2.appendChild(radioCheck);
                radioCheck.appendChild(radioInput);
                radioCheck.appendChild(includeCheckLabel);
                includesContainer.appendChild(includeInputs);
                includeInputs.appendChild(inputCol1);
                includeInputs.appendChild(inputCol2);
                indexIncludes++;

            });
            removeIncludesButton.addEventListener('click', function() {
                const includeInputs = includesContainer.querySelectorAll('.include-inputs');
                const lastIndex = includeInputs.length - 1;

                if (lastIndex >= 0) {
                    includesContainer.removeChild(includeInputs[lastIndex]);
                    indexIncludes--;
                }
            });



            const addItineraryButton = document.getElementById('add-itinerary');
            const removeItineraryButton = document.getElementById('remove-itinerary');
            const itineraryContainer = document.getElementById('itinerary-container');

            addItineraryButton.addEventListener('click', function() {
                const itineraryInputs = document.createElement('div');
                itineraryInputs.classList.add('include-inputs')
                itineraryInputs.classList.add('row')
                itineraryInputs.classList.add('px-0')
                itineraryInputs.classList.add('mx-auto')
                itineraryInputs.classList.add('mt-3')

                const hr = document.createElement('hr');
                hr.classList.add('mt-4')
                const headDiv = document.createElement('div');
                headDiv.classList.add('col-12')
                headDiv.classList.add('mt-1')

                const headlabel = document.createElement('h5');
                headlabel.textContent = 'Add Another';
                headlabel.classList.add('mt-3');


                const dayDiv = document.createElement('div');
                dayDiv.classList.add('col-6')
                dayDiv.classList.add('mb-3')


                const dayLabel = document.createElement('label');
                dayLabel.textContent = 'Day of Itinerary';
                dayLabel.classList.add('form-label');

                const dayInput = document.createElement('input');
                dayInput.type = 'number';
                dayInput.name = `itinerary[${indexItinerary}][day_itinerary]`;
                dayInput.classList = 'form-control';



                const titleDiv = document.createElement('div');
                titleDiv.classList.add('col-6')
                titleDiv.classList.add('mb-3')

                const titleLabel = document.createElement('label');
                titleLabel.textContent = 'Title of Itinerary';
                titleLabel.classList.add('form-label');

                const titleInput = document.createElement('input');
                titleInput.type = 'text';
                titleInput.name = `itinerary[${indexItinerary}][title_itinerary]`;
                titleInput.classList = 'form-control';


                const descriptionDiv = document.createElement('div');
                descriptionDiv.classList.add('col-12')
                descriptionDiv.classList.add('mt-3')

                const descriptionLabel = document.createElement('label');
                descriptionLabel.textContent = 'Descripton';
                descriptionLabel.classList.add('form-label');

                const descriptionTextarea = document.createElement('textarea');
                descriptionTextarea.name = `itinerary[${indexItinerary}][description_itinerary]`;
                descriptionTextarea.classList = 'form-control';


                headDiv.appendChild(headlabel);
                dayDiv.appendChild(dayLabel);
                dayDiv.appendChild(dayInput);
                headDiv.appendChild(headlabel);

                descriptionDiv.appendChild(descriptionLabel);
                descriptionDiv.appendChild(descriptionTextarea);

                titleDiv.appendChild(titleLabel);
                titleDiv.appendChild(titleInput);

                itineraryInputs.appendChild(hr);
                itineraryInputs.appendChild(headDiv);
                itineraryInputs.appendChild(dayDiv);
                itineraryInputs.appendChild(titleDiv);
                itineraryInputs.appendChild(descriptionDiv);
                itineraryContainer.appendChild(itineraryInputs);

                indexItinerary++;

            });

            removeItineraryButton.addEventListener('click', function() {
                const itineraryInputs = itineraryContainer.querySelectorAll('.include-inputs');
                const lastIndex = itineraryInputs.length - 1;

                if (lastIndex >= 0) {
                    itineraryContainer.removeChild(itineraryInputs[lastIndex]);
                    indexItinerary--;
                }
            });
        });
    </script>
@endsection
