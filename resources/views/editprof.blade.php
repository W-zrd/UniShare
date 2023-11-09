<!DOCTYPE html>
<html>
  <head>
    <title>UniShare@Wzrd</title>

    <!-- METADATA -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:title" content="UniShare@Wzrd" />
    <meta property="og:description" content="UniShare" />
    <meta
      property="og:image"
      content="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/582b7519-2ab2-4e3d-b281-4cb2a59b36d8/dg4blgz-8ce48233-9f5d-4402-b827-7d44cb2373fa.jpg/v1/fill/w_1118,h_715,q_70,strp/demonzz_by_ourmine77_dg4blgz-pre.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9ODE4IiwicGF0aCI6IlwvZlwvNTgyYjc1MTktMmFiMi00ZTNkLWIyODEtNGNiMmE1OWIzNmQ4XC9kZzRibGd6LThjZTQ4MjMzLTlmNWQtNDQwMi1iODI3LTdkNDRjYjIzNzNmYS5qcGciLCJ3aWR0aCI6Ijw9MTI4MCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.Gg7IQQ72dETHVAR3_637RND_Db_D8eRO_9PIZES1dqY"
    />
    <meta property="og:url" content="https://unishare.flxnzz.my.id" />

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- FAVICON -->
    <link rel="shortcut icon" href="assets/img/favicon.png" />

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" />

    <style>
    .cell {
    min-height: 100px;
    border: 2px solid lightgray;
    margin: 1rem;
    }
    .activecolor:focus{
        border-color: #f75600;
        box-shadow: 0 0 2px #f75600;
    }
    </style>

  </head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-light navbar-light border-danger navbar_dashboard h-25 shadow-sm" data-bs-theme="light" >
        <div class="container" data-bs-theme="light">
            <a class="navbar-brand fs-4 fw-semibold" href="#" style="color: #121415;">
                <img src="assets/img/UniShare-logo.png" alt="Logo" width="45" height="45" class="d-inline-block align-items-center" />
                UniShare
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav justify-content-end ms-auto">
                    <li class="nav-item">
                        <a class="nav-link fs-6" href="dashboard">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6" href="karir">Karir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6" href="event">Acara</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6" href="beasiswa">Beasiswa</a>
                    </li>
                    <li class="nav-item">
                        <img src="assets/img/pp.png">
                    </li>                             
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fs-6" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Rafidhia Haikal
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item fs-6" href="editprof">Profile</a>
                            <a class="dropdown-item fs-6" href="/">Log Out</a>
                        </div>
                    </li> 
                </ul>
            </div>
        </div>
    </nav>

    <!-- EDIT PROF -->
    <section class="editprof-content">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-3">
                    <div class="row no-gutters">
                        <div class="col">
                            <div class="cell">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold text-primary">Profile</h5>
                                        <p class="card-text text-secondary mb-0 small">Username </p>
                                        <p class="card-text text-dark">rfdhaikal47 </p>
                                        <p class="card-text text-secondary mb-0 small">Email</p>
                                        <p class="card-text">admin@unishare.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col">
                            <div class="cell">
                                <ul class="nav flex-column bg-light p-2">
                                    <li class="nav-item px-1">
                                        <a class="nav-link active nav-JS" aria-current="page" href="#" data-tab="profil">Profil</a>
                                    </li>
                                    <li class="nav-item px-1">
                                        <a class="nav-link nav-JS" href="#" data-tab="privasiii">Privasi</a>
                                    </li>
                                    <li class="nav-item px-1 mb-5">
                                        <a class="nav-link disabled nav-JS" aria-disabled >Riwayat</a>
                                    </li>
                                    <li class="nav-item px-1 mt-5">
                                        <a class="nav-link text-danger" href="/">Log Out</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div id="profil" class="tab-content">
                        <div class="cell justify-content-center rounded bg-light"> 
                            <div class="m-3 h-25 text-center">
                                <img src="{{ asset('assets/img/demonzz.jpg') }}" class="rounded-circle m-1" alt="Profile Picture" style="width: 125px">
                                <h3 >Rafidhia Haikal Pasya</h3>
                                <hr>
                            </div>
                            <div>
                                <form>
                                    <div class="row p-3 pt-0">
                                        <div class="col">
                                            <label class="ps-1 pb-1" for="formGroupExampleInput">Nama Lengkap</label>
                                            <input type="text" class="form-control activecolor">
                                        </div>
                                        <div class="col">
                                            <label class="ps-1 pb-1" for="formGroupExampleInput">Nama Belakang</label>
                                            <input type="text" class="form-control activecolor">
                                        </div>
                                    </div>
                                    <div class="row p-3 pt-0">
                                        <div class="col">
                                            <label class="ps-1 pb-1" for="formGroupExampleInput">Username</label>
                                            <input type="text" class="form-control activecolor">
                                        </div>
                                        <div class="col">
                                            <label class="ps-1 pb-1" for="formGroupExampleInput">Alamat</label>
                                            <input type="text" class="form-control activecolor">
                                        </div>
                                    </div>
                                    <div class="row p-3 pt-0">
                                        <div class="col">
                                            <label class="ps-1 pb-1" for="formGroupExampleInput">Jenis Kelamin</label>
                                            <select class="form-select w-50 activecolor" aria-label="Default select example">
                                                <option selected value="1">Laki-Laki</option>
                                                <option value="2">Perempuan</option>
                                                <option value="3">Rather not say</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary m-3 mt-0 float-right">Apply</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="privasiii" class="tab-content">
                        <div class="cell justify-content-center rounded bg-light"> 
                            <div class="m-3 h-25 text-center">
                                <img src="{{ asset('assets/img/demonzz.jpg') }}" class="rounded-circle m-1" alt="Profile Picture" style="width: 125px">
                                <h3 >Rafidhia Haikal Pasya</h3>
                                <hr>
                            </div>
                            <div>
                                <form>
                                    <div class="row p-3 pt-0">
                                        <div class="col">
                                            <label class="ps-1 pb-1" for="formGroupExampleInput">Username</label>
                                            <input type="text" class="form-control activecolor">
                                        </div>
                                        <div class="col">
                                            <label class="ps-1 pb-1" for="formGroupExampleInput">Email</label>
                                            <input type="text" class="form-control activecolor">
                                        </div>
                                    </div>
                                    <div class="row p-3 pt-0">
                                        <div class="col">
                                            <label class="ps-1 pb-1" for="formGroupExampleInput">Password</label>
                                            <input type="password" class="form-control activecolor">
                                        </div>
                                        <div class="col">
                                            <label class="ps-1 pb-1" for="formGroupExampleInput">No Telp</label>
                                            <input type="text" class="form-control activecolor">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary m-3 mt-0 float-right">Apply</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        const tabs = document.querySelectorAll('.nav-JS');
        const tabContents = document.querySelectorAll('.tab-content');
        tabs.forEach(tab => {
            tab.addEventListener('click', (e) => {
                e.preventDefault();
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
                const tabName = tab.getAttribute('data-tab');
                tabContents.forEach(content => content.style.display = 'none');
                document.getElementById(tabName).style.display = 'block';
            });
        });
        // Remove active class from all tabs except the first one (Profil)
        tabs.forEach((tab, index) => {
            if (index !== 0) {
                tab.classList.remove('active');
            }
        });
        // Hide all tab contents except the first one (Profil)
        tabContents.forEach((content, index) => {
            if (index !== 0) {
                content.style.display = 'none';
            }
        });

    </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="assets/js/"></script>
</body>