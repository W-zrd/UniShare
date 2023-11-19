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
</head>

<body>

    <!-- NAVBAR -->
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


    <!-- POST CONTAINER -->
    <section class="post-container mx-auto m-5 p-5">
      <!-- Breadcumb -->
      <nav aria-label="breadcrumb" class="mb-5">
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="/event">Event</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{$post -> title}}</li>
            </ol>
      </nav>

      <!-- Content -->
      <div class="header-info ">
          <h1 class="mb-3">{{$post -> title}}</h1>
          <div class="organizer">
            <img src="{{ asset('/assets/img/demonzz.jpg') }}" alt="Profile Picture" class="rounded-circle" width="50" height="50">
            <div class="organizer-info">
                <p>{{$post -> author}}</p>
                <p style="font-size: small">{{$post->formatted_date}}</p>
            </div>
          </div>

          <!-- Tags -->
          <div class="tags mt-4">
            <p class="me-2">Tags: </p>
            <span style="background-color: #F75600" class="badge me-1 fw-medium">{{$post -> kategori}}</span>
            <span style="background-color: #F75600" class="badge me-1 fw-medium">{{$post -> tema}}</span>
          </div>
          
          <div class="thumbnail-container" style="background-color: antiquewhite">
            <img src="{{ asset('assets/img/01.jpg') }}" class="img-fluid" alt="">
          </div>

          {{-- Paragraph --}}
          <p class="mt-3">{!! nl2br(e($post->content)) !!}</p>

          {{-- Attachment --}}
          <h5 class="mt-5 mb-3">Attachment</h5>
          <div class="tags mt-2">
            <a href="{{$post -> url_event}}">
              <button type="button" class="btn btn-primary me-2" style="width: 200px">Link Pendaftaran</button>
            </a>
            
            <a href="{{$post -> guidebook}}">
              <button type="button" class="btn btn-primary me-2" style="width: 200px">Guidebook</button>
            </a>
            
          </div>
          



      </div>
    </section>
      
    
      <!-- JAVASCRIPT -->

    <!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <!-- Magnific Popup core JS file -->
    <script src="/assets/js/jquery-plugin/jquery.magnific-popup.min.js"></script>
    
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