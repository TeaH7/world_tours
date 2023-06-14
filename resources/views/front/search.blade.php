@extends('front.layout.app')

@section('title')
    Search Result
@endsection

@section('content')
    @include('front.components.hero', [
        'title' => 'Rezultatet Per: ' . $search,
        'image' => 'assets/front/images/luca-bravo-O453M2Liufs-unsplash.jpg',
    ])


    <section>
        <div class="container p-5">
            <div class="row pt-4">
                <div class="col-12">


                    <div class="row">
                        @if ($tours->count())
                            @foreach ($tours as $tour)
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <div class="card ms-0 me-0 mb-2 ms-md-2 me-md-2 tour-card shadow">
                                        <div class="card__header">
                                            <div class="card-picture">
                                                <div class="card-img-overlay">

                                                </div>
                                                <img src="{{ URL::asset('storage/' . $tour->img1) }}" class="card-img-top"
                                                    height="300px" alt="Tour">
                                            </div>

                                            <h3 class="head-card-title"><span>{{ $tour->tour_type }}</span></h3>
                                        </div>
                                        <div class="card__body">

                                            <h4 class="card__sub-heading text-uppercase mt-3 mb-3"
                                                style="grid-column: 1 / -1; font-size: 1rem">{{ $tour->title }}
                                            </h4>
                                            <p class="card-text">{{ $tour->excerpt }}</p>

                                            <div class="card-data">
                                                <span><i class="bi bi-geo-alt p-2"></i></span>
                                                <span>{{ $tour->location }}</span>
                                            </div>
                                            <div class="card-data">
                                                <span><i class="bi bi-calendar-event p-2"></i></span>
                                                <span>{{ $tour->months }}</span>
                                            </div>
                                            <div class="card-data">
                                                <span><i class="bi bi-hourglass-split p-2"></i></i></span>
                                                <span>{{ $tour->duration }} Dite</span>
                                            </div>

                                            <div class="card-data">
                                                <span><i class="bi bi-people p-2"></i></span>
                                                <span>{{ $tour->max_persons }} Persona</span>
                                            </div>

                                        </div>
                                        <div class="card-footer pt-3">
                                            <div class="d-flex justify-content-between align-items-center px-2 my-2">
                                                <div>
                                                    <p class="m-0">
                                                        <span class="value">
                                                            {{ $tour->price }}
                                                        </span>
                                                        <span class="value-text">
                                                            per Person</span>
                                                    </p>

                                                </div>


                                                <a href="{{ route('singleTour', $tour->id) }}"
                                                    class="btn btn-rezervo-button">Details</a>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div>
                                <p>Nothing To Show</p>
                            </div>
                        @endif




                    </div>

                    <div class="row">
                        <div class="col-12">
                            {{ $tours->links() }}
                        </div>
                    </div>

                </div>



            </div>
        </div>
    </section>
@endsection
