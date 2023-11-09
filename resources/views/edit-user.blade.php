<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/assets/css/crud.css') }}" rel="stylesheet" />
    <!-- BOOTSTRAP -->
    <link href="{{ asset('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

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

      <!-- INPUT FORMS -->
      <div class="col-9 mx-auto mt-5">
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
  </div>
    
    


      




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>