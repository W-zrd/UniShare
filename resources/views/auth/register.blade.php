<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
        <section class="content">
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
            <div class="container-fluid mt-3">
                <div class="row justify-content-center">                             
                    <div class="row m-10 justify-content-center">
                        <div class="col-5 mt-5">
                            <div class="content-box-sign border p-5 border-dark rounded shadow" style="background-color:#f6f7ff">
                                <h1 class="fw-bold text-center" style="font-size:35px">Register</h1>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="pb-1">
                                        <label for="name" class="form-label text-secondary">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" required>
                                    </div>
                                    <div class="pb-1 pt-2">
                                        <label for="username" class="form-label text-secondary">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp" required>
                                    </div>
                                    <div class="pb-1 pt-2">
                                        <label for="email" class="form-label text-secondary">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="pb-1 pt-2">
                                        <label for="password" class="form-label text-secondary">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                    </div>
                                    <div class="pb-1 pt-2">
                                        <label for="password_confirmation" class="form-label text-secondary">Confirm Password</label>
                                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary fw-medium w-100 mt-2 pb-2 pt-2">Register</button>
                                </form>
                                <div class="mt-1">
                                    Already have an account? <a href="{{ route('tampilkan.login') }}" style="color: #f75600;">Login here</a>
                                </div>
                            </div>
                        </div>

                        <!-- IMAGE -->
                        <div class="col-4">
                            <img src="/assets/img/UniShare-with-Text-2.png" class="img-fluid p-0" alt="s" style="transform:scale(0.8)">
                        </div>
                    </div>

                    <!-- JAVASCRIPT -->
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
                    <script src="assets/js/"></script>  
                </div>
            </div>
        </section>
    </body>
</html>