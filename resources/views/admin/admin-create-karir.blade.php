<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/assets/css/admin.css') }}" rel="stylesheet" />
    <!-- BOOTSTRAP -->
    <link href="{{ asset('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <title>Admin Dashboard</title>
</head>
<body>
  
  <div class="container-flex">

      <!-- SIDEBAR -->
      <div class="sidebar">
        <div class="container-flex header-logo p-0">
          <img src="{{ asset('/assets/img/UniShare-logo.png') }}" alt="" style="height: 36px; " >
          <h4 style="color: #F6F7FF" class="ms-2 mt-2">UniShare</h4>
        </div>

        <div class="dashboard">
          <button class="btn-dashboard">Dashboard</button>
        </div>
        
        <div class="">
          {{-- MENU 1: USER DETAILS --}}
          <div class="menu">
            <aside></aside>
            <h6>User Info & Details</h6>
          </div> <br>

          {{-- SUB-MENU 1: VIEW USER INFO --}}
          <div class="btn-group submenu ms-4 ps-2 mt-3 mb-3">
            <span class="material-symbols-outlined"> group </span>
            <a href="{{ route('admin') }}" 
              onmouseover="this.style.color='#f75600'" 
              onmouseout="this.style.color='#7c7974'">View User Info
            </a>
          </div>

          {{-- SUB-MENU 2: DOWNLOAD USER INFO --}}
          <div class="btn-group submenu ms-4 ps-2">
            <span class="material-symbols-outlined"> file_save </span>
            <a href=""
              onmouseover="this.style.color='#f75600'" 
              onmouseout="this.style.color='#7c7974'">Download User Info
            </a>
          </div>

          {{-- MENU 2: CREATE NEW POST --}}
          <div class="menu">
            <aside></aside>
            <h6>Create New Post</h6>
          </div> <br>

          {{-- SUB-MENU 1: YOUR POST --}}
          <div class="btn-group submenu ms-4 ps-2 mt-3 mb-3">
            <span class="material-symbols-outlined"> newspaper </span>
            <a href="" 
              onmouseover="this.style.color='#f75600'" 
              onmouseout="this.style.color='#7c7974'">Your Posts
            </a>
          </div>

          {{-- SUB-MENU 2: KARIR --}}
          <div class="btn-group submenu ms-4 ps-2 mb-3">
            <span class="material-symbols-outlined"> work </span>
            <a href=""
              onmouseover="this.style.color='#f75600'" 
              onmouseout="this.style.color='#7c7974'">Create New Career
            </a>
          </div>

          {{-- SUB-MENU 3: ACARA --}}
          <div class="btn-group submenu ms-4 ps-2 mb-3">
            <span class="material-symbols-outlined"> theater_comedy </span>
            <a href=""
              onmouseover="this.style.color='#f75600'" 
              onmouseout="this.style.color='#7c7974'">Create New Event
            </a>
          </div>

          {{-- SUB-MENU 4: BEASISWA --}}
          <div class="btn-group submenu ms-4 ps-2 mb-2">
            <span class="material-symbols-outlined"> school </span>
            <a href=""
              onmouseover="this.style.color='#f75600'" 
              onmouseout="this.style.color='#7c7974'">Create New Beasiswa
            </a>
          </div>

          {{-- MENU 3: SETTINGS --}}
          <div class="menu">
            <aside></aside>
            <h6>Settings</h6>
          </div> <br>

          {{-- SUB-MENU 1: MY PROFILE --}}
          <div class="btn-group submenu ms-4 ps-2 mt-3">
            <span class="material-symbols-outlined"> settings </span>
            <a href="" 
              onmouseover="this.style.color='#f75600'" 
              onmouseout="this.style.color='#7c7974'">My Profile
            </a>
          </div>

          {{-- SUB-MENU 2: HISTORY --}}
          <div class="btn-group submenu ms-4 ps-2 mt-3 mb-5">
            <span class="material-symbols-outlined"> history </span>
            <a href="" 
              onmouseover="this.style.color='#f75600'" 
              onmouseout="this.style.color='#7c7974'">History
            </a>
          </div>
          <br>
          
          <a class="logout" href="">
            <button class="btn-logout mt-5">
            <span class="material-symbols-outlined"> logout</span>Log Out</button>
          </a>

        </div>


      </div>
      
      <div class="ms-5 content">

        {{-- Welcoming Msg --}}
        <div class="row mt-5 ms-5 me-5">
          <div class="col">
            <h2>Welcome, Wzrd. Make a new karir</h2>
            <h6 class="mt-2 text-secondary fw-normal">Here's whats happening in your account today</h6>
          </div>
          <div class="col">
            <input class="form-control" type="text" placeholder="Search" aria-label="default input example" style="border-radius: 30px;">
            
          </div>
        </div>

        <section class="event-form p-5 me-5 ms-5 mt-4">
          <form action="/admin/karir/add" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- ROW 1 --}}
            <div class="row ">
              {{-- JUDUL --}}
              <div class="col">
                <div class="mb-3">
                  <label for="title" class="form-label">Judul</label>
                  <input value="{{old('title')}}" type="text" class="form-control" id="title" name="title" aria-describedby="judulPostHelp" style="border-radius: 20px">
                  @error('title')
                    <p class="alert alert-danger shadow-sm mt-2">{{$message}}</p>
                  @enderror
                </div>
              </div>
            </div>

            {{-- ROW 2 --}}
            <div class="row">
              {{-- PENYELENGGARA --}}
              <div class="col">
                <div class="mb-3">
                  <label for="author" class="form-label">Penyelenggara</label>
                  <input value="{{old('author')}}" type="text" class="form-control" id="author" name="author" aria-describedby="authorHelp" style="border-radius: 20px">
                  @error('author')
                    <p class="alert alert-danger shadow-sm mt-2">{{$message}}</p>
                  @enderror
                </div>
              </div>

              {{-- LINK ACARA --}}
              <div class="col">
                <div class="mb-3">
                  <label for="url_event" class="form-label">Link Acara</label>
                  <input value="{{old('url_event')}}" type="text" class="form-control" name="url_event" id="url_event" aria-describedby="urlHelp" style="border-radius: 20px">
                  @error('url_event')
                    <p class="alert alert-danger shadow-sm mt-2">{{$message}}</p>
                  @enderror
                </div>
              </div>
            </div>
  
            {{-- ROW 3 --}}
            <div class="row pt-2">
              {{-- TEMA ACARA --}}
              <div class="col">
                <div class="mb-3">
                  <label for="tema" class="form-label">Tema</label>
                  <select class="form-select" name="tema" aria-label="tema" style="border-radius: 20px">
                    <option value="Teknologi">Teknologi</option>
                    <option value="Sains">Sains</option>
                    <option value="Bisnis">Bisnis</option>
                    <option value="Desain">Desain</option>
                    <option value="Fotografi">Fotografi</option>
                    <option value="Manajemen">Manajemen</option>
                  </select>
                  @error('tema')
                    <p class="alert alert-danger shadow-sm">{{$message}}</p>
                  @enderror
                </div>
              </div>
  
              {{-- KATEGORI/TAGS --}}
              <div class="col">
                <div class="mb-3">
                  <label for="kategori" class="form-label">Kategori</label>
                  <select class="form-select" name="kategori" aria-label="kategori" style="border-radius: 20px">
                    <option value="Kompetisi">Kompetisi</option>
                    <option value="Workshop">Workshop</option>
                    <option value="Seminar">Seminar</option>
                  </select>
                  @error('kategori')
                    <p class="alert alert-danger shadow-sm">{{$message}}</p>
                  @enderror
                </div>
              </div>
            </div>
  
            {{-- ROW 4 (Optional Fields) --}}
            <div class="row pt-2">
              {{-- GUIDEBOOK --}}
              <div class="col">
                <div class="mb-3">
                  <label for="guidebook" class="form-label">Guidebook</label>
                  <input type="file" class="form-control @error('guidebook') is-invalid @enderror" id="guidebook" name="guidebook" aria-describedby="guidebookHelp" style="border-radius: 20px">
                  @error('guidebook')
                    <p class="alert alert-danger shadow-sm">{{$message}}</p>
                  @enderror
                </div>
              </div>

              {{-- BANNER ACARA --}}
              <div class="col">
                <div class="mb-3">
                  <label for="banner_img" class="form-label">Banner Acara</label>
                  <input type="file" class="form-control @error('banner_img') is-invalid @enderror" name="banner_img" \ id="banner_img" aria-describedby="urlHelp" style="border-radius: 20px">
                  @error('banner_img')
                    <p class="alert alert-danger shadow-sm">{{$message}}</p>
                  @enderror
                </div>
              </div>
            </div>

            {{-- ROW 5 --}}
            <div class="row pt-2">
              {{-- CONTENT --}}
              <div class="mb-3">
                <label for="content" class="form-label">Example textarea</label>
                <textarea class="form-control" id="content" name="content" rows="3">{{old('content')}}</textarea>
                @error('content')
                  <p class="alert alert-danger shadow-sm">{{$message}}</p>
                @enderror
              </div>
            </div>

            <button class="btn btn-primary" type="submit" style="background-color: #f75600; border-color: #f75600">Submit</button>
  
          </form>
        </section>
        
      </div>

  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>