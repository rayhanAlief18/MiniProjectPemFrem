<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        {{-- animate.css --}}
        <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        />


        @vite('resources/sass/app.scss')
    </head>
    <body>
        <nav class="navbar d-flex navbar-expand-lg gap-5 z-1 mt-n10" style="background-color:#DF4775">
          <div class="container">
            <a class="navbar-brand text-white" href="#">Rayhan Alief Febryan</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                      <ul class="navbar-nav mx-auto gap-5">
                        <li class="nav-item  ">
                          <a class="nav-link text-white active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item  ">
                          <a class="nav-link text-white" href="{{route('barang.index')}}">Barang</a>
                        </li>
                        <li class="nav-item  ">
                          <a class="nav-link text-white" href="#">Pricing</a>
                        </li>
                      </ul>
                    </div>
            </div>        
          </nav>
                  <div class="container-fluid banner-desc d-flex justify-content-start row">
                    <div class="col-md-6 d-flex justify-content-center align-items-center position-relative">
                      <div class="shapes position-absolute overflow-hidden animate__animated animate__backInDown" style="z-0">
                        <img src="{{ Vite::asset('resources/images/profile.png') }}" alt="" class="img-profile" width="100%">
                      </div>
                    </div>
                    <div class="text-banner col-md-6 d-flex align-items-center justify-content-start">
                      <div class="d-flex flex-column gap-4">
                        <p class="font-title-name animate__animated animate__bounceInDown">Rayhan Alief Febryan</p>  
                        <h1 class="font-title ">Front End</h1>
                        <h1 class="font-title ">Developer Based</h1>
                        <h1 class="font-title ">On Sidoarjo</h1>
                        <p class="font-desc">Halo! Saya Rayhan Alief, seorang mahasiswa semester 4 jurusan Sistem Informasi di Telkom University Surabaya, yang saat ini menetap di Sidoarjo. Saya sangat antusias dalam belajar dan menjelajahi dunia teknologi informasi, serta senang berbagi pengetahuan</p>

                        
                        <a href="#biodata" class="animate__bounceInUp animate__animated button-profile d-flex justify-content-center align-items-center" style="width:300px;">
                          <p href="" class="mt-3">See Profile</p>
                          {{-- <i class="bi bi-arrow-right arow-left-btn p-2"></i> --}}
                        </a>  
                      </div>
                    </div>
                  </div>

                  <div class="container mt-2" id="biodata">
                    <div class="row d-flex justify-content-center">
                            <div class="col-md-6 card p-3">
                              <div class="text-center">
                                  <img src="{{ Vite::asset('resources/images/avatar-1.png') }}" width="200" class="rounded-circle">
                              </div>
                              <div class="text-center mt-3">
                                  <h5 class="mt-2 mb-0">Rayhan Alief Febryan</h5>
                                  <span style="color: darkslategray">Front End Developer</span>
                                  <div class="px-4 mt-1">
                                      <p class="fonts">Hi... Saya Rayhan Alief Febryan seorang front end developer berbasis di sidoarjo. Tahun ini saya berumur 20 tahun. Pengalaman saya di perkuliahan pernah mengikuti beberapa kepanitiaan dan lomba. Saya lulusan dari SMK Antartika 2 Sidoarjo  </p>
                                  </div>
                                  <ul class="d-flex justify-content-center list-unstyled gap-5 " style="color:#3075b6">
                                      <li><i class="bi bi-facebook"></i></li>
                                      <li><i class="bi bi-dribbble"></i></li>
                                      <li><i class="bi bi-instagram"></i></li>
                                      <li><i class="bi bi-linkedin"></i></li>
                                      <li><i class="bi bi-google"></i></li>
                                  </ul>
                                  <div class="buttons">
                                      <button class="btn btn-outline-primary px-4">Message</button>
                                      <button class="btn btn-primary px-4 ms-3">Contact</button>
                                  </div>
                              </div>
                          </div>
                    </div>
                </div>

                <footer class="footer text-white py-4" style="background-color:#DF4775">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-6">
                              <h5>Informasi Kontak</h5>
                              <p>Jl. Ketinting No. 123, Sidomakmur, Indonesia</p>
                              <p>Email: rewreeh@student.com</p>
                              <p>Telepon: 123-456-7890</p>
                          </div>
                          
                      </div>
                      <hr class="mt-4">
                      <div class="text-center">
                          <p>&copy; Rayhan Alief Febryan.</p>
                      </div>
                  </div>
              </footer>
        @vite('resources/js/app.js')
    </body>
</html>
