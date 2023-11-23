@extends('layouts.generics')
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
                                        <p class="card-text text-dark">{{auth()->user()->username}} </p>
                                        <p class="card-text text-secondary mb-0 small">Email</p>
                                        <p class="card-text">{{auth()->user()->email}}</p>
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
                                <h3 >{{auth()->user()->nama_lengkap}}</h3>
                                <hr>
                            </div>
                            <div>
                                <form>
                                    <div class="row p-3 pt-0">
                                        <div class="col">
                                            <label class="ps-1 pb-1" for="formGroupExampleInput">Nama Lengkap</label>
                                            <input type="text" class="form-control activecolor"value={{auth()->user()->nama_lengkap}}>
                                        </div>
                                        <div class="col">
                                            <label class="ps-1 pb-1" for="formGroupExampleInput">Nama Belakang</label>
                                            <input type="text" class="form-control activecolor">
                                        </div>
                                    </div>
                                    <div class="row p-3 pt-0">
                                        <div class="col">
                                            <label class="ps-1 pb-1" for="formGroupExampleInput">Username</label>
                                            <input type="text" class="form-control activecolor"value={{auth()->user()->username}}>
                                        </div>
                                        <div class="col">
                                            <label class="ps-1 pb-1" for="formGroupExampleInput">Alamat</label>
                                            <input type="text" class="form-control activecolor" value={{auth()->user()->alamat}}>
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
                                <h3 >{{auth()->user()->nama_lengkap}}</h3>
                                <hr>
                            </div>
                            <div>
                                <form>
                                    <div class="row p-3 pt-0">
                                        <div class="col">
                                            <label class="ps-1 pb-1" for="formGroupExampleInput">Username</label>
                                            <input type="text" class="form-control activecolor" value={{auth()->user()->username}}>
                                        </div>
                                        <div class="col">
                                            <label class="ps-1 pb-1" for="formGroupExampleInput">Email</label>
                                            <input type="text"value={{auth()->user()->email}} class="form-control activecolor" >
                                        </div>
                                    </div>
                                    <div class="row p-3 pt-0">
                                        <div class="col">
                                            <label class="ps-1 pb-1" for="formGroupExampleInput">Password</label>
                                            <input type="password" class="form-control activecolor">
                                        </div>
                                        <div class="col">
                                            <label class="ps-1 pb-1" for="formGroupExampleInput">No Telp</label>
                                            <input type="text" class="form-control activecolor" value={{auth()->user()->telepon}}>
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