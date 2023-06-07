@extends('front.layout.app')


@section('title')
    Homepage
@endsection

@section('content')
    <!-- Hero Section -->
    <div id="image-hero" class="mb-5 text-center d-flex justify-content-center flex-column"
        style=" background: url({{ asset('assets/front/images/luca-bravo-O453M2Liufs-unsplash.jpg') }}) center center/cover
        no-repeat;">
        <div class="container z-3">
            <div class="text-white ">
                <h1 class="display-5"> Mirësevini në World Tours</h1>
                <p class="mt-4"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                    been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book.</p>
            </div>
            <div class="card w-75 mx-auto custom-hero-card mt-5">
                <div class="card-body">
                    <form action="{{ route('search') }}" method="GET">
                        <div class="row">
                            <div class="col-12 col-md-10">
                                <input type="search" name="search" class="form-control" id="location"
                                    placeholder=" Vendodhja" aria-label="Location"
                                    style="font-family: Arial, FontAwesome;">
                            </div>
                            <div class="col-12 col-md-2 mt-2 mt-md-0">
                                <input type="submit" class="btn btn-primary w-100" value="Search">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
    <!-- Hero Section End -->


    <!-- Cards -->
    <div class="container">

        <div class="row">
            <div class="col-12 d-flex justify-content-center mb-5">
                <div class="text-center">
                    <span class="">Explore</span>
                    <h1 class="display-5 " style=" color: var(--secondary-color) ">Turet më të reja</h1>
                </div>

            </div>
        </div>


        <div class="row mb-4">
            <div class="col-12">

                <div class="row">
                    <!-- Slider main container -->
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            @if ($tours->count())
                                @foreach ($tours as $tour)
                                    <div class="swiper-slide">
                                        <div class="card mb-3 ms-3 me-3 tour-card shadow">
                                            <div class="card__header">
                                                <div class="card-picture">
                                                    <div class="card-img-overlay">

                                                    </div>
                                                    <img src="{{ URL::asset('storage/' . $tour->img1) }}"
                                                        class="card-img-top" height="300px" alt="Tour">
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
                                                    <span>{{ $tour->duration }} Ditë</span>
                                                </div>

                                                <div class="card-data">
                                                    <span><i class="bi bi-people p-2"></i></span>
                                                    <span>{{ $tour->max_persons }} Persona</span>
                                                </div>

                                            </div>
                                            <div class="card-footer ">
                                                <div class="d-flex justify-content-between align-items-center px-2 my-2">
                                                    <div>
                                                        <p class="m-0">
                                                            <span class="value">
                                                                {{ number_format($tour->price, 0) }} Lekë
                                                            </span>
                                                            <span class="value-text">
                                                                /Person</span>
                                                        </p>

                                                    </div>


                                                    <a href="{{ route('singleTour', $tour->id) }}"
                                                        class="btn btn-rezervo-button">Detaje</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif



                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                    </div>




                </div>

            </div>


        </div>

    </div>
    <!-- Cards End-->

    <!-- Destinations -->
    <section class="custom-destinations">
        <div class="container text-center pb-3">
            <div class="row mb-5 pt-3">
                <div class="col-12 mt-5">
                    <h1 class="display-5 text-white">Destinacione të Kërkuara</h1>
                </div>
            </div>

            <div class="row pb-5">
                <div class="col-12 col-lg-6 p-md-3">
                    <div class="card border-0 m-3 destinations shadow text-white">

                        <img src="{{ asset('assets/front/images/luca-bravo-O453M2Liufs-unsplash.jpg') }}" alt="...">
                        <a href="{{ route('albanianTours') }}">
                            <h2 class="display-6 z-3">Shqipëri</h2>
                        </a>


                    </div>
                </div>
                <div class="col-12 col-lg-6 p-md-3">
                    <div class="card border-0 m-3 destinations shadow text-white">
                        <img src="{{ asset('assets/front/images/luca-bravo-O453M2Liufs-unsplash.jpg') }}" alt="...">

                        <a href="{{ route('otherTours') }}">
                            <h2 class="display-6 z-3">Jashtë Vendit</h2>
                        </a>


                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Destinations End -->

    <!-- Image & Description Section -->
    <section class="custom-home-about py-md-5 py-sm-0">
        <div class="container d-flex py-4 ">
            <div class="row d-flex">
                <div class="col-6 d-none d-md-block">
                    <div class="img-custom-homepage"
                        style="background-image: url({{ asset('assets/front/images/architecture-g3dc8240ae_1920.jpg') }});">

                    </div>

                </div>
                <div class="col-12 col-md-6">
                    <div class="mt-5 mt-md-0 pe-3">
                        <h1 class="display-6">Bëjeni Udhëtimin Tuaj Të Paharruar Dhe Të Sigurt Me Ne</h1>
                        <p class="mt-5 me-5 mb-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus
                            accusantium
                            amet
                            atque, quod
                            numquam earum cum esse laboriosam rerum culpa veniam incidunt natus! Ad necessitatibus
                            mollitia
                            fuga officia sit cum!</p>
                    </div>

                </div>
            </div>
        </div>


    </section>
    <!-- Image & Description Section End-->
@endsection
