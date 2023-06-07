@extends('front.layout.app')


@section('title')
    Rreth Nesh
@endsection

@section('content')
    @include('front.components.hero', [
        'title' => 'Rreth Nesh',
        'image' => 'assets/front/images/luca-bravo-O453M2Liufs-unsplash.jpg',
    ])


    <section>
        <div class="container">
            <div class="row p-5">
                <div class="col-12 text-center">
                    <h1>Kush Jemi Ne</h1>
                </div>
            </div>
            <div class="row pb-md-5">
                <div class="col-12 col-md-6">
                    <div>
                        <img src="{{ asset('assets/front/images/countryside-g408c9940c_1920.jpg') }}" alt="Photo1"
                            width="100%" height="70%">
                    </div>

                </div>
                <div class="col-12 col-md-6 p-lg-5">
                    <p class="pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis tenetur modi
                        nihil quaerat
                        maxime magnam expedita non, illum corrupti soluta alias, fugiat pariatur aperiam voluptatibus
                        nemo obcaecati unde amet fugit perferendis vel voluptatum qui, quo cum doloremque? Impedit quas
                        maiores unde deserunt. Unde laborum recusandae vitae quo id deleniti sint.Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Officiis tenetur modi
                        nihil quaerat
                        maxime magnam expedita non, illum corrupti soluta alias, fugiat pariatur aperiam voluptatibus
                        nemo obcaecati unde amet fugit perferendis vel voluptatum qui, quo cum doloremque? Impedit quas
                        maiores unde deserunt. Unde laborum recusandae vitae quo id deleniti sint.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="about-custom-sec2">
        <div class="container">
            <div class="row p-5">
                <div class="col-12 text-center text-white">
                    <h1>Çfarë Ne Ofrojmë</h1>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-12 col-md-6 p-lg-5 text-white">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis tenetur modi nihil quaerat
                        maxime magnam expedita non, illum corrupti soluta alias, fugiat pariatur aperiam voluptatibus
                        nemo obcaecati unde amet fugit perferendis vel voluptatum qui, quo cum doloremque? Impedit quas
                        maiores unde deserunt. Unde laborum recusandae vitae quo id deleniti sint.Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Officiis tenetur modi nihil quaerat
                        maxime magnam expedita non, illum corrupti soluta alias, fugiat pariatur aperiam voluptatibus
                        nemo obcaecati unde amet fugit perferendis vel voluptatum qui, quo cum doloremque? Impedit quas
                        maiores unde deserunt. Unde laborum recusandae vitae quo id deleniti sint.</p>
                </div>
                <div class="col-12 col-md-6">
                    <div>
                        <img src="{{ asset('assets/front/images/countryside-g408c9940c_1920.jpg') }}" alt="Photo1"
                            width="100%" height="70%">
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- Services -->

    <section class="services-about">
        <div class="container p-5">
            <div class="row pb-5">
                <div class="col-12 text-center">
                    <h1>Our Services</h1>
                </div>
            </div>
            <div class="row d-flex justify-content-center pb-4 pt-3">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-3">
                        <div class="service-icon">
                            <span><i class="bi bi-people"></i></span>
                        </div>

                        <div class="service-body mt-1">
                            <h5>8000+ Our Local
                                <br> Guides
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-3">
                        <div class="service-icon">
                            <span><i class="bi bi-people"></i></span>
                        </div>

                        <div class="service-body mt-1">
                            <h5>8000+ Our Local
                                <br> Guides
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-3">
                        <div class="service-icon">
                            <span><i class="bi bi-people"></i></span>
                        </div>

                        <div class="service-body mt-1">
                            <h5>8000+ Our Local
                                <br> Guides
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-3">
                        <div class="service-icon">
                            <span><i class="bi bi-people"></i></span>
                        </div>

                        <div class="service-body mt-1">
                            <h5>8000+ Our Local
                                <br> Guides
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
