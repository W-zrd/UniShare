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

  </head>

<body>
    
    <section class="page-input">
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-light border-danger navbar_dashboard h-25 shadow-sm" data-bs-theme="light" style="background-color:#f6f7ff">
            <div class="container" data-bs-theme="light" >
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
                            <a class="nav-link fs-6" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-6" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-6" href="#">Features</a>
                        </li>
                         
                    </ul>
                </div>
            </div>
        </nav>

        <!-- TITLE -->
        <div class="row m-2 justify-content-center">
            <div class="col-5 mt-5">
                <div class="content-box-sign border p-5 border-dark rounded shadow" style="background-color:#f6f7ff">
                    <h1 class="fw-bold pb-3 text-center" style="font-size:35px" >Login</h1>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="pb-3">
                            <label for="username" class="form-label text-secondary">Username</label>

                            <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp" required>


                        </div>
                        <div class="pb-3">
                            <label for="password" class="form-label text-secondary">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="pb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label class="form-check-label text-secondary" for="remember">Remember me</label>
                        </div>

                        @if (session('error'))
                            <div class="alert alert-danger me-3 pb-0">
                                <p class="text-center">Incorrect Username or Password</p>
                            </div>
                        @endif
                        <button type="submit" class="btn btn-primary w-100 fw-medium pb-2">Login</button>
                    </form>
                    <div class="mt-1 text-secondary">
                        Don't have an account? <a href="{{ route('tampilkan.register') }}" style="color: #f75600;">Register here</a>
                    </div>
                </div>
            </div>
            
            <!-- IMAGE -->
            <div class="col-4 ms-1">
                <img src="/assets/img/UniShare-with-Text-2.png" class="img-fluid p-0" alt="s" style="transform:scale(0.7) ">
            </div>
        </div>
    </section>

    <!-- JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/"></script>
</body>
</html>
