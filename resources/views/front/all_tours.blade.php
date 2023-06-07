@extends('front.layout.app')


@section('title')
    Të Gjitha Turet
@endsection

@section('content')
    @include('front.components.hero', [
        'title' => 'Të Gjitha Turet',
        'image' => 'assets/front/images/luca-bravo-O453M2Liufs-unsplash.jpg',
    ])



    <!-- Tours -->


    <section>
        <div class="container p-5">
            <div class="row pt-4">
                <div class="col-12">


                    <div class="row">
                        @if ($allTours->count())
                            @foreach ($allTours as $allTour)
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <div class="card ms-0 me-0 mb-2 ms-md-2 me-md-2 tour-card shadow">
                                        <div class="card__header">
                                            <div class="card-picture">
                                                <div class="card-img-overlay">

                                                </div>
                                                <img src="{{ URL::asset('storage/' . $allTour->img1) }}" class="card-img-top"
                                                    height="300px" alt="Tour">
                                            </div>

                                            <h3 class="head-card-title"><span>{{ $allTour->tour_type }}</span></h3>
                                        </div>
                                        <div class="card__body">

                                            <h4 class="card__sub-heading text-uppercase mt-3 mb-3"
                                                style="grid-column: 1 / -1; font-size: 1rem">{{ $allTour->title }}
                                            </h4>
                                            <p class="card-text">{{ $allTour->excerpt }}</p>

                                            <div class="card-data">
                                                <span><i class="bi bi-geo-alt p-2"></i></span>
                                                <span>{{ $allTour->location }}</span>
                                            </div>
                                            <div class="card-data">
                                                <span><i class="bi bi-calendar-event p-2"></i></span>
                                                <span>{{ $allTour->months }}</span>
                                            </div>
                                            <div class="card-data">
                                                <span><i class="bi bi-hourglass-split p-2"></i></i></span>
                                                <span>{{ $allTour->duration }} Dite</span>
                                            </div>

                                            <div class="card-data">
                                                <span><i class="bi bi-people p-2"></i></span>
                                                <span>{{ $allTour->max_persons }} Persona</span>
                                            </div>

                                        </div>
                                        <div class="card-footer pt-3">
                                            <div class="d-flex justify-content-between align-items-center px-2 my-2">
                                                <div>
                                                    <p class="m-0">
                                                        <span class="value">
                                                            {{ number_format($allTour->price, 0) }} Lekë
                                                        </span>
                                                        <span class="value-text">
                                                            /Person</span>
                                                    </p>

                                                </div>



                                                <a href="{{ route('singleTour', $allTour->id) }}"
                                                    class="btn btn-rezervo-button">Detaje</a>
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
                            {{-- <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav> --}}
                            {{ $allTours->links() }}
                        </div>
                    </div>

                </div>



            </div>
        </div>
    </section>
@endsection
