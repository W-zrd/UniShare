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

      <div class="col-10">
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
  </div>
    
    


      




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>