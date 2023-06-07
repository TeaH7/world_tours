   <!-- Header -->
   <header class="container-fluid px-0">
       <div class="top-bar container-fluid py-2 d-none d-lg-block">
           <div class="container">
               <div class="row align-items-center">
                   <div class="col-6">
                       <ul class="d-flex list-unstyled gap-3 m-0">
                           <li>
                               <a class="text-decoration-none text-white" href="#">Rr.Don Bosko</a>
                           </li>
                           <li>
                               <a class="text-decoration-none text-white" href="#">0683158859</a>
                           </li>
                           <li>
                               <a class="text-decoration-none text-white"
                                   href="mailto:travel@gmail.com">tours@gmail.com</a>
                           </li>


                       </ul>
                   </div>
                   <div class="col-6">
                       <ul class="d-flex list-unstyled gap-2 justify-content-end m-0">
                           <li>
                               <a class="text-decoration-none text-white" href="#"><i
                                       class="bi bi-facebook"></i></a>
                           </li>
                           <li>
                               <a class="text-decoration-none text-white" href="#"><i
                                       class="bi bi-whatsapp"></i></a>
                           </li>
                           <li>
                               <a class="text-decoration-none text-white" href="#"><i
                                       class="bi bi-instagram"></i></a>
                           </li>


                       </ul>
                   </div>
               </div>
           </div>
       </div>
       <nav class="navbar navbar-expand-lg">
           <div class="container">
               <a class="navbar-brand" href="{{ route('home') }}">
                   <img class="img-fluid" src="{{ asset('assets/front/images/Logo-dark.png') }}" alt="Logo"
                       width="250px">
               </a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                   aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                   <ul class="navbar-nav custom-nav-homepage">
                       <li class="nav-item mx-3 {{ request()->routeIs('home') ? 'active' : '' }}">
                           <a class="nav-link text-uppercase fs-6 fw-semibold " aria-current="page"
                               href="/">Kryefaqja</a>
                       </li>
                       <li class="nav-item dropdown mx-3 {{ request()->routeIs('allTours') || request()->routeIs('albanianTours') || request()->routeIs('otherTours') ? 'active' : '' }}"
                           id="tours-dropdown">

                           <a class="nav-link dropdown-toggle text-uppercase fs-6 fw-semibold" href="/all-tours"
                               role="button" aria-expanded="false">
                               Ture
                           </a>
                           <ul class="dropdown-menu">
                               <li><a class="dropdown-item" href="/albania-tours">Në Shqipëri</a></li>
                               <li><a class="dropdown-item" href="/other-countries">Të Tjera</a></li>
                           </ul>
                       </li>
                       <li class="nav-item mx-3 {{ request()->routeIs('aboutUs') ? 'active' : '' }}">
                           <a class="nav-link text-uppercase fs-6 fw-semibold" href="/about-us">Rreth Nesh</a>
                       </li>
                       <li class="nav-item mx-3 {{ request()->routeIs('contactUs') ? 'active' : '' }}">
                           <a class="nav-link text-uppercase fs-6 fw-semibold" href="/contact-us">Kontakt</a>
                       </li>

                   </ul>
               </div>
           </div>
       </nav>
   </header>
   <!-- Header End -->
