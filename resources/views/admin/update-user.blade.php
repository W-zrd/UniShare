<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

  <link href="{{ asset('/assets/css/admin.css') }}" rel="stylesheet" />
  <link href="{{ asset('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  
  <title>Document</title>
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
        <div class="btn-group submenu ms-4 ps-2 mt-2 mb-3">
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
    

    <!-- INPUT FORMS -->
    <div class="col-9 mx-auto mt-5 content">
      <h2 class="text-center mb-3">Update User</h2>
      <form action="/update/user/{{$data->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="nama_lengkap" class="form-label text-secondary">Nama Lengkap</label>
          <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="{{ $data->nama_lengkap }}">
        </div>
        <div class="mb-3">
            <label for="username" class="form-label text-secondary">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="{{ $data->username }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label text-secondary">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $data->email }}">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label text-secondary">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $data->alamat }}">
        </div>
        <div class="mb-3">
            <label for="universitas" class="form-label text-secondary">Universitas</label>
            <input type="text" class="form-control" id="universitas" name="universitas" value="{{ $data->universitas }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    
  </div>
  

  


  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
  <script>
    $('#example').DataTable();
  </script>
</body>
</html>