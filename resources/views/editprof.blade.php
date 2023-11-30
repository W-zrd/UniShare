@extends('layouts.generics')
@section('navbar')
    @include('layouts.parts.navbar')
@endsection
@section('content')
    <!-- EDIT PROF -->
    <section class="editprof-content">
        <div class="container">
            <div class="row no-gutters mt-5 pt-5">
                <div class="col-3">
                    <div class="row no-gutters">
                        <div class="col">
                            <div class="cell">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold text-primary">Profile</h5>
                                        <p class="card-text text-secondary mb-0 small">Username </p>
                                        <p class="card-text text-dark">Username </p>
                                        <p class="card-text text-secondary mb-0 small">Email</p>
                                        <p class="card-text">Email</p>
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
                                <h3 >Nama lengkap</h3>
                                <hr>
                            </div>
                            <div>
                                <form>
                                    <div class="row p-3 pt-0">
                                        <div class="col">
                                            <label class="ps-1 pb-1" for="formGroupExampleInput">Nama Lengkap</label>
                                            <input type="text" class="form-control activecolor"value=Nama Lengkap>
                                        </div>
                                        <div class="col">
                                            <label class="ps-1 pb-1" for="formGroupExampleInput">Nama Belakang</label>
                                            <input type="text" class="form-control activecolor">
                                        </div>
                                    </div>
                                    <div class="row p-3 pt-0">
                                        <div class="col">
                                            <label class="ps-1 pb-1" for="formGroupExampleInput">Username</label>
                                            <input type="text" class="form-control activecolor"value=Username>
                                        </div>
                                        <div class="col">
                                            <label class="ps-1 pb-1" for="formGroupExampleInput">Alamat</label>
                                            <input type="text" class="form-control activecolor" value=Alamat>
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
                                <h3 >Nama lengkap</h3>
                                <hr>
                            </div>
                            <div>
                                <form>
                                    <div class="row p-3 pt-0">
                                        <div class="col">
                                            <label class="ps-1 pb-1" for="formGroupExampleInput">Username</label>
                                            <input type="text" class="form-control activecolor" value=Username>
                                        </div>
                                        <div class="col">
                                            <label class="ps-1 pb-1" for="formGroupExampleInput">Email</label>
                                            <input type="text"value= Email class="form-control activecolor" >
                                        </div>
                                    </div>
                                    <div class="row p-3 pt-0">
                                        <div class="col">
                                            <label class="ps-1 pb-1" for="formGroupExampleInput">Password</label>
                                            <input type="password" class="form-control activecolor">
                                        </div>
                                        <div class="col">
                                            <label class="ps-1 pb-1" for="formGroupExampleInput">No Telp</label>
                                            <input type="text" class="form-control activecolor" value=No Telp>
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
@endsection
  
