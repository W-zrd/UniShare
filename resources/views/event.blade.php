<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acara</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- FAVICON -->
    <link rel="shortcut icon" href="assets/img/favicon.png" />

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/event.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" />
</head>

<body>

    <section>
        <nav class="navbar navbar-expand-lg" data-bs-theme="light">
            <div class="container" data-bs-theme="light">
              <a class="navbar-brand fs-4 fw-semibold" href="#">
                <img src="assets/img/UniShare-logo.png" alt="Logo" width="45" height="45" class="d-inline-block align-items-center" />
                UniShare
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
    
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav justify-content-end ms-auto">
                  <li class="nav-item" id="navbar-item">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item" id="navbar-item">
                    <a class="nav-link" href="#">Karir</a>
                  </li>
                  <li class="nav-item" id="navbar-item">
                    <a class="nav-link" href="#">Acara</a>
                  </li>
                  <li class="nav-item" id="navbar-item">
                    <a class="nav-link" href="#">Beasiswa</a>
                  </li>

                  <li class="dropdown navbar-item">
                    <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Rafidhia Haikal
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Profile</a></li>
                      <li><a class="dropdown-item" href="#">Log Out</a></li>
                    </ul>
                  </li>
          
                </ul>
              </div>
            </div>
          </nav>
    </section>   

    <section>
        <div class="banner" style="background-image: url('assets/img/event-banner2.png')">

            <div class="row">

                <div class="col-4" id="header-thumbnail">
                    <img src="assets/img/acara-logo.svg" alt="" class="img-fluid">
                </div>


                <div class="col me-xl-5">
                    <h2 class="text-wrap" id="title-thumbnail">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </h2>
                    <h6 class="text-wrap text-white fw-normal mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo</h6>
                    <form class="d-flex search-bar mt-3" role="search">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
              
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
      <div class="card m-5 justify-content-center mx-auto shadow">
        <div class="row g-0">
          <div class="col-md-3">
            <img src="assets/img/01.jpg" class="img-fluid rounded" alt="...">
          </div>
          <div class="col mt-3">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    

    <!-- JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script async src="https://cdn.jsdelivr.net/npm/es-module-shims@1/dist/es-module-shims.min.js" crossorigin="anonymous"></script>
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