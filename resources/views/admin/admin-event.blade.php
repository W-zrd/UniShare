<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/assets/css/admin.css') }}" rel="stylesheet" />
    <!-- BOOTSTRAP -->
    <link href="{{ asset('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
   
    <title>Admin Dashboard</title>
</head>
<body>
  
  <div class="container-flex">
    <div class="row">
      <!-- SIDEBAR -->
      <div class="col-2 sidebar">
        <h3 class="mt-4 text-center text-white">Admin Panel</h3>
          <ul class="nav flex-column m-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">User Lists</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Beasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Event</a>
              </li>
            </ul>
      </div>

      {{-- Welcoming Msg --}}
      <div class="col-10">
        <div class="container p-5">
          <div class="header">
            <h2>Welcome, Wzrd</h2>
            <h6 class="text-secondary fw-normal">Here's what's happening in your account today</h6>
          </div>
          <div class="form">
              <input class="form-control fw-light" type="text" placeholder="Search" aria-label="default input example">
          </div>
        </div>

        <section class="event-form p-5 me-5 ms-5">
          <form action="">

            {{-- ROW 1 --}}
            <div class="row ">
              {{-- JUDUL --}}
              <div class="col">
                <div class="mb-3">
                  <label for="title" class="form-label">Judul</label>
                  <input type="text" class="form-control" id="judul_post" aria-describedby="judulPostHelp" style="border-radius: 20px">
                </div>
              </div>
  
              {{-- PENYELENGGARA --}}
              <div class="col">
                <div class="mb-3">
                  <label for="author" class="form-label">Penyelenggara</label>
                  <input type="text" class="form-control" id="author_event" aria-describedby="authorHelp" style="border-radius: 20px">
                </div>
              </div>
            </div>
  
            {{-- ROW 2 --}}
            <div class="row pt-2">
              {{-- LINK ACARA --}}
              <div class="col">
                <div class="mb-3">
                  <label for="url_event" class="form-label">Link Acara</label>
                  <input type="text" class="form-control" id="url_event" aria-describedby="urlHelp" style="border-radius: 20px">
                </div>
              </div>
  
              {{-- KATEGORI/TAGS --}}
              <div class="col">
                <div class="mb-3">
                  <label for="url_event" class="form-label">Kategori</label>
                  <select class="form-select" aria-label="Default select example" style="border-radius: 20px">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
              </div>
            </div>
  
            {{-- ROW 3 --}}
            <div class="row pt-2">
              {{-- GUIDEBOOK --}}
              <div class="col">
                <div class="mb-3">
                  <label for="url_event" class="form-label">Guidebook</label>
                  <input type="text" class="form-control" id="url_event" aria-describedby="urlHelp" style="border-radius: 20px">
                </div>
              </div>

              {{-- BANNER ACARA --}}
              <div class="col">
                <div class="mb-3">
                  <label for="url_event" class="form-label">Banner Acara</label>
                  <input type="file" class="form-control" id="url_event" aria-describedby="urlHelp" style="border-radius: 20px">
                </div>
              </div>
            </div>

            {{-- ROW 4 --}}
            <div class="row pt-2">
              {{-- CONTENT --}}
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
            </div>

            <div class="d-grid gap-2 mt-3">
              <button class="btn btn-primary" type="button" style="background-color: #f75600; border-color: #f75600">Submit</button>
            </div>
  
          </form>
        </section>
        
      </div>

    </div>

    </div>
  </div>
    
    


      




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
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