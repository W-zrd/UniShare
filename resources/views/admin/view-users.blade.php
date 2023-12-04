<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/assets/css/admin.css') }}" rel="stylesheet" />
    <!-- BOOTSTRAP -->
    <link href="{{ asset('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
          <a href="{{ route('admin') }}">
            <button type="button" class="btn-dashboard">Dashboard</button>
          </a>
          
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
            <a href="{{ route('view-users') }}" 
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

          {{-- SUB-MENU 1: KARIR --}}
          <div class="btn-group submenu ms-4 ps-2 mb-3">
            <span class="material-symbols-outlined"> work </span>
            <a href=""
              onmouseover="this.style.color='#f75600'" 
              onmouseout="this.style.color='#7c7974'">Create New Career
            </a>
          </div>

          {{-- SUB-MENU 2: ACARA --}}
          <div class="btn-group submenu ms-4 ps-2 mb-3">
            <span class="material-symbols-outlined"> theater_comedy </span>
            <a href="{{ route('create-event') }}"
              onmouseover="this.style.color='#f75600'" 
              onmouseout="this.style.color='#7c7974'">Create New Event
            </a>
          </div>

          {{-- SUB-MENU 3: BEASISWA --}}
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
        <h1 class="mt-4 mb-5 text-center"> CRUD TABLE </h1>
        <div class="container table-users">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Alamat</th>
                <th scope="col">Universitas</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($data as $item)
                <tr>
                  <th scope="row">{{ $item->id }}</th>
                  <td>{{ $item->nama_lengkap }}</td>
                  <td>{{ $item->username }}</td>
                  <td>{{ $item->email }}</td>
                  <td>{{ $item->alamat }}</td>
                  <td>{{ $item->universitas }}</td>
                  
                  <td> 
                    <a href="/user/{{$item->id}}" class="material-symbols-outlined me-2" href="">edit</a>
                    <a href="/delete/user/{{$item->id}}" class="material-symbols-outlined"  id="delete-icon">delete_forever</a>
                  </td>
                </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div>

    
  </div>
    
    


      




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>