<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acara</title>

    <!-- BOOTSTRAP -->
    <link href="{{ asset('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- FAVICON -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/event.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" />

    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="{{ asset('/assets/css/magnific-popup.css') }}">
</head>

<body>

    <section>
        <nav class="navbar navbar-expand-lg" data-bs-theme="light">
            <div class="container" data-bs-theme="light">
              <a class="navbar-brand fs-4 fw-semibold" href="#">
                <img src="{{ asset('assets/img/UniShare-logo.png') }}" alt="Logo" width="45" height="45" class="d-inline-block align-items-center" />
                UniShare
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
    
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav justify-content-end ms-auto">
                  <li class="nav-item" id="navbar-item">
                    <a class="nav-link" href="dashboard">Home</a>
                  </li>
                  <li class="nav-item" id="navbar-item">
                    <a class="nav-link" href="#">Karir</a>
                  </li>
                  <li class="nav-item" id="navbar-item">
                    <a class="nav-link" href="event">Acara</a>
                  </li>
                  <li class="nav-item" id="navbar-item">
                    <a class="nav-link" href="beasiswa">Beasiswa</a>
                  </li>

                  <li class="dropdown navbar-item">
                    <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Rafidhia Haikal
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="editprof">Profile</a></li>
                      <li><a class="dropdown-item" href="/">Log Out</a></li>
                    </ul>
                  </li>
          
                </ul>
              </div>
            </div>
          </nav>
    </section>   

    <section>
        <div class="banner" style="background-image: url({{ asset('assets/img/event-banner2.png') }})">
            <div class="row">

                <div class="col-3" id="header-thumbnail">
                    <img src="{{ asset('assets/img/acara-logo.svg') }}" alt="" class="img-fluid mt-4">
                </div>


                <div class="col-7 mt-4">
                    <h2 class="text-wrap" id="title-thumbnail">Eksplorasi peluang karir dan pendidikan yang sesuai dengan minatmu.</h2>
                    <h6 class="text-wrap text-white fw-normal mt-2">Temukan berbagai program pendidikan yang dapat membantu mengembangkan keterampilanmu!</h6>
                    
              
                </div>

            </div>
        </div>
    </section>

    <section class="second-navbar pt-3 pb-3">
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Semua</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kompetisi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Workshop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Seminar</a>
        </li>
      </ul>
    </section>

    <section>
      <div class="container-fluid mx-auto">
        <div class="row mx-auto">

          <!-- FILTERS -->
          <div class="col-lg-3 m-3 mt-5 mx-auto" style="background-color: white">
            <ul class="list-group" style="max-width: 400px;">
              <h5 class="ms-3 mt-4">Filter</h5>
              <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="checkbox1">
                <label class="form-check-label" for="firstCheckbox">Sains</label>
              </li>
              <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="checkbox2">
                <label class="form-check-label" for="secondCheckbox">Teknologi</label>
              </li>
              <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="checkbox3">
                <label class="form-check-label" for="thirdCheckbox">Bisnis</label>
              </li>
              <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="checkbox3">
                <label class="form-check-label" for="thirdCheckbox">Desain</label>
              </li>
              <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="checkbox3">
                <label class="form-check-label" for="thirdCheckbox">Fotografi</label>
              </li>
              <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="checkbox3">
                <label class="form-check-label" for="thirdCheckbox">Manajemen</label>
              </li>
            </ul>
            
            <div class="justify-items-center mx-auto">
              <button type="button" class="btn btn-primary m-3 p-2 ps-5 pe-5">Apply!</button>
            </div>
            

          </div>

          <!-- CARDS -->

          <div class="col-lg-8 mt-5 mx-auto">
            @foreach ($data as $item)
            <!-- USER POST -->
            <div class="card mb-4" style="max-width: 1000px;">
              <div class="row g-0">
                <div class="col-lg-4">
                           
                  <a class="image-popup-no-margins" href="{{ asset('assets/img/01.jpg') }}" title="Caption. Can be aligned to any side and contain any HTML.">
                    <img src="{{ asset('assets/img/01.jpg') }}" class="img-fluid rounded" alt="thumbnail">
                  </a>
 
                </div>

                <div class="col-lg-8">
                  <div class="card-body">
                    <h5 class="card-title">{{$item->title}}</h5>
                    <p class="card-text">{{ substr($item->content, 0, 185) . " ..." }}</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated {{$item->formatted_date}}</small></p>
                    
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          
          
        </div>


      </div>



    </section>

    

    <!-- JAVASCRIPT -->

    <!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <!-- Magnific Popup core JS file -->
    <script src="/assets/js/jquery-plugin/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/script.js"></script>
    
    <script type="importmap">
    {
      "imports": {
        "@popperjs/core": "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/esm/popper.min.js",
        "bootstrap": "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.esm.min.js"
      }
    }
    </script>
    <script type="module">
      import * as bootstrap from 'bootstrap'

      new bootstrap.Popover(document.getElementById('popoverButton'))
    </script>


  </body>
</html>