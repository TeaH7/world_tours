@extends('front.layout.app')

@section('title')
    Single Tour
@endsection
@section('content')
    <section class="pt-4 border-top single-page-title">
        <div class="container">
            <div class="row">
                <div class="d-flex">
                    <div class="col-12 d-flex">
                        <h2>{{ $tour->title }}</h2>
                        <div class="ms-4 d-flex align-items-center">
                            <span><i class="bi bi-geo-alt me-1"></i>{{ $tour->location }}</span>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </section>

    <section class="pt-3">
        <div class="container">
            <div class="row styles-single-page pb-4">
                <div class="col-12 col-lg-8">
                    <div>
                        <div id="carouselExampleIndicators" class="carousel slide">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                @if ($tour->img2)
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                @endif
                                @if ($tour->img3)
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                @endif
                                @if ($tour->img4)
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                                        aria-label="Slide 4"></button>
                                @endif
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('storage/' . $tour->img1) }}" class="d-block w-100" alt="...">
                                </div>
                                @if ($tour->img2)
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/' . $tour->img2) }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                @endif
                                @if ($tour->img3)
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/' . $tour->img3) }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                @endif
                                @if ($tour->img4)
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/' . $tour->img4) }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                @endif


                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                    <div class="row icons-styles">
                        <div class="col-12">
                            <h3 class="mt-4 mb-4">Përshkrimi</h3>
                            <p class="mb-5" style="color: #697488;">{{ $tour->description }}</p>
                        </div>


                    </div>
                    <div class="border-top mt-4">
                        <div class="row includes-titles">
                            <div class="col-6 ">
                                <h3 class="mt-4">Çfarë Përfshihet</h3>
                            </div>
                            <div class="col-6">
                                <h3 class="mt-4">Çfarë Nuk Përfshihet</h3>
                            </div>
                        </div>
                        <div class="row mt-3 ">
                            <div class="col-6 includes-list">
                                <ul>
                                    @if ($includes->count())
                                        @foreach ($includes as $include)
                                            <li><i class="bi bi-check-lg me-2"></i>{{ $include->description }}</li>
                                        @endforeach
                                    @else
                                        <li><i class="bi bi-check-lg me-2"></i>Nuk ka</li>
                                    @endif

                                </ul>
                            </div>
                            <div class="col-6 excludes-list">
                                <ul>
                                    @if ($notIncludes->count())
                                        @foreach ($notIncludes as $notInclude)
                                            <li><i class="bi bi-x-lg me-2"></i>{{ $notInclude->description }}</li>
                                        @endforeach
                                    @else
                                        <li><i class="bi bi-x-lg me-2"></i>Nuk ka</li>
                                    @endif


                                </ul>
                            </div>

                            <div class="col-12 mt-5 icons-styles">
                                <h5 class="mb-4">Detaje të Tjera</h5>
                                <ul>
                                    @if ($tour->details1)
                                        <li>{{ $tour->details1 }}</li>
                                    @endif
                                    @if ($tour->details2)
                                        <li>{{ $tour->details2 }}</li>
                                    @endif
                                    @if ($tour->details3)
                                        <li>{{ $tour->details3 }}</li>
                                    @endif
                                    @if ($tour->details4)
                                        <li>{{ $tour->details4 }}</li>
                                    @endif
                                    @if ($tour->details5)
                                        <li>{{ $tour->details5 }}</li>
                                    @endif

                                </ul>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="border-top mt-4 mb-4">
                                    <h3 class="mt-4 mb-4">Itinerari</h3>

                                    <div class="accordion" id="accordionExample">
                                        @foreach ($itineraries as $itinerary)
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapse-{{ $itinerary->id }}"
                                                        aria-expanded="false"
                                                        aria-controls="collapse-{{ $itinerary->id }}">
                                                        <div class="d-flex"> <span><i class="bi bi-circle me-2"></i>Dita
                                                                {{ $itinerary->day }}
                                                                -
                                                                <span style="color:black">{{ $itinerary->title }}</span>
                                                            </span>

                                                        </div>
                                                    </button>
                                                </h2>
                                                <div id="collapse-{{ $itinerary->id }}"
                                                    class="accordion-collapse collapse "
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>{{ $itinerary->description }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>



                <div class="col-12 col-lg-4">
                    <div class="card p-4 price-single-card ">
                        <div class="card-head mb-4 single-tour-card">
                            <h4 id="tour-price">{{ number_format($tour->price, 0) }} Lekë/Person</h4>
                        </div>
                        <div class="card-body p-0">
                            <h6 class="mb-2">Informacione rreth Turit</h6>
                            <div class="card p-2 mb-3">

                                <div class="ms-2">
                                    <h6>Datat </h6>
                                    <p class="m-0 p-card">
                                        {{ $tour->months }}: @foreach ($days as $day)
                                            {{ \Carbon\Carbon::createFromFormat('Y-m-d', $day->start_date)->format('d') }}-{{ \Carbon\Carbon::createFromFormat('Y-m-d', $day->end_date)->format('d') }}
                                            @if (!$loop->last)
                                                ,
                                            @endif
                                        @endforeach
                                    </p>

                                </div>

                            </div>
                            <div class="card p-2 mb-3">
                                <div class="ms-2">
                                    <h6>Numri i Personave</h6>
                                    <p class="m-0 p-card">{{ $tour->max_persons }}</p>
                                </div>


                            </div>
                            <div class="card p-2 mb-3">
                                <div class="ms-2">
                                    <h6>Kohëzgjatja</h6>
                                    <p class="m-0 p-card">{{ $tour->duration }} Dite</p>
                                </div>


                            </div>
                            <div class="d-grid gap-2">


                                <button class="btn btn-primary p-3" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasWithBothOptions"
                                    aria-controls="offcanvasWithBothOptions">Rezervo</button>

                                <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1"
                                    id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                                    <div class="offcanvas-header">
                                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Te Dhenat Per
                                            Rezervim</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <form action="{{ route('reservation.store') }}" method="POST">
                                            @csrf
                                            <div class="m-2">
                                                <label class="pb-1">Emri</label>
                                                <input class="form-control @error('first_name') is-invalid  @enderror"
                                                    type="text" aria-label="default input example" name="first_name">
                                                @error('first_name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                <input class="form-control" type="hidden"
                                                    aria-label="default input example" name="tour_id"
                                                    value="{{ $tour->id }}">
                                            </div>
                                            <div class="m-2">
                                                <label class="pb-1">Mbiemri</label>
                                                <input class="form-control  @error('first_name') is-invalid  @enderror"
                                                    type="text" aria-label="default input example" name="last_name">
                                                @error('last_name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="m-2">
                                                <label class="pb-1">Email</label>
                                                <input class="form-control @error('email') is-invalid  @enderror"
                                                    type="text" aria-label="default input example" name="email">
                                                @error('email')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="m-2">
                                                <label class="pb-1">Numri i Telefonit</label>
                                                <input class="form-control @error('phone') is-invalid  @enderror"
                                                    type="text" aria-label="default input example" name="phone">
                                                @error('phone')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="m-2">
                                                <label class="pb-1">Numri i Personave</label>
                                                <input class="form-control  @error('nr_of_people') is-invalid  @enderror"
                                                    type="number" aria-label="default input example"
                                                    name="nr_of_people">
                                                @error('nr_of_people')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="m-2">
                                                <label class="pb-1">Zgjidhni një datë:</label><br>
                                                @foreach ($days as $day)
                                                    <div class="form-check form-check-inline">
                                                        <input
                                                            class="form-check-input @error('tour_date_id') is-invalid  @enderror "
                                                            type="radio" name="tour_date_id"
                                                            value="{{ $day->id }}">
                                                        <label class="form-check-label"
                                                            for="inlineRadio1">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $day->start_date)->format('d M') }}-{{ \Carbon\Carbon::createFromFormat('Y-m-d', $day->end_date)->format('d M') }}

                                                        </label>
                                                        @if ($loop->last)
                                                            @error('tour_date_id')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        @endif
                                                    </div>
                                                @endforeach



                                            </div>

                                            <div class="d-grid gap-2 m-2">
                                                <button class="btn btn-primary" type="submit">Rezervo Tani</button>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="mt-3">
                            <span class="p-card">Not sure? You can cancel this reservation up to 24 hours in advance for
                                a full
                                refund.</span>
                        </div>
                    </div>

                </div>


            </div>


        </div>
    </section>
@endsection
