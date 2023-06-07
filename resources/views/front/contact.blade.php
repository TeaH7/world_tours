@extends('front.layout.app')

@section('title')
    Na Kontaktoni
@endsection
@section('content')
    @include('front.components.hero', [
        'title' => 'Na Kontaktoni',
        'image' => 'assets/front/images/luca-bravo-O453M2Liufs-unsplash.jpg',
    ])

    <section class="py-5">
        <div class="container">
            <!--Google map-->
            <div id="map-container-google-1" class="z-depth-1-half map-container " style="height: 500px">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2995.6000425401235!2d19.800696915669473!3d41.33930970693668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x135031a23592069b%3A0x7a1efe58a92357c7!2sRruga%20Don%20Bosko%2C%20Tiran%C3%AB%2C%20Albania!5e0!3m2!1sen!2s!4v1679927351627!5m2!1sen!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" class="h-100 w-100"></iframe>
            </div>

            <!--Google Maps-->




            <div class="row">
                <div class="col-12 mt-5">
                    <h3>Dërgo Një Mesazh</h3>
                </div>
            </div>

            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-8 mt-4">
                        <form class="custom-form-contact">
                            <div class="row">
                                <div class="col-6 mb-4">
                                    <input class="form-control @error('name') is-invalid  @enderror" type="text"
                                        placeholder="Emër" aria-label="default input example" name="name">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <input type="email" class="form-control @error('email') is-invalid  @enderror"
                                        id="exampleFormControlInput1" placeholder="Email" name="email">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control @error('message') is-invalid  @enderror" placeholder="Leave a comment here" name="message"
                                            id="floatingTextarea2" style="height: 100px"></textarea>
                                        <label for="floatingTextarea2">Mesazhi</label>
                                        @error('message')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary mt-4 contact-button">Dërgo</button>
                                </div>

                            </div>
                        </form>

                    </div>
                    <div class="col-12 col-md-4 d-none d-md-flex  justify-content-md-end ">
                        <div class="mt-4">
                            <div class="media contact-info d-flex">
                                <span class="contact-info__icon h3"><i class="bi bi-house-door me-2"></i></span>
                                <div class="media-body">
                                    <h6>Tiranë, Shqipëri</h6>
                                    <p>Rr. Don Bosko</p>
                                </div>
                            </div>
                            <div class="media contact-info d-flex  mt-3 mb-3">
                                <span class="contact-info__icon h3"><i class="bi bi-phone me-2"></i></span>
                                <div class="media-body">
                                    <h6>+355 68 31 58 859</h6>
                                    <p>E Hënë - E Premte 9AM - 6PM</p>
                                </div>
                            </div>
                            <div class="media contact-info d-flex">
                                <span class="contact-info__icon h3"><i class="bi bi-envelope me-2"></i></span>
                                <div class="media-body">
                                    <h6>worldtours@gmail.com</h6>
                                    <p>Dërgoni mesazhin tuaj në çdo kohë</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </form>
        </div>
    </section>
@endsection
