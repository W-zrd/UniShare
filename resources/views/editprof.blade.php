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
                                        <p class="card-text text-secondary mb-0 small">Username</p>
                                        <p class="card-text text-dark">{{ auth()->user()->username }}</p>
                                        <p class="card-text text-secondary mb-0 small">Email</p>
                                        <p class="card-text">{{ auth()->user()->email }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col">
                            <div class="cell">
                                <ul class="nav flex-column bg-white p-2 mt-3">
                                    <li class="nav-item px-1">
                                        <a class="nav-link active nav-JS" aria-current="page" href="#" data-tab="profil">Profil</a>
                                    </li>
                                    <li class="nav-item px-1">
                                        <a class="nav-link nav-JS" href="#" data-tab="privasiii">Privasi</a>
                                    </li>
                                    <li class="nav-item px-1 mb-5">
                                        <a class="nav-link disabled nav-JS" aria-disabled >Riwayat</a>
                                    </li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="text-danger border-0 bg-white px-1 h5 ps-3 pb-2">Log Out</button>
                                    </form>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div id="profil" class="tab-content">
                        <div class="cell justify-content-center rounded bg-white"> 
                            <div class="m-3 h-25 text-center">
                                <img src="{{ asset('assets/img/demonzz.jpg') }}" class="rounded-circle m-1 pt-3" alt="Profile Picture" style="width: 125px">
                                <h3 >{{auth()->user()->nama_lengkap}}</h3>
                                <hr>
                            </div>
                            <div>
                                <form action="/editprofUpper/{{auth()->user()->id}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row p-3 pt-0">
                                        <div class="col">
                                            <label class="ps-1 pb-1">Nama Lengkap</label>
                                            <input type="text" name="inNama" class="form-control activecolor"value="{{ auth()->user()->nama_lengkap}}">
                                        </div>
                                        <div class="col">
                                            <label class="ps-1 pb-1">Username</label>
                                            <input type="text" name="inUsername" class="form-control activecolor"value="{{ auth()->user()->username}}">
                                        </div>
                                    </div>
                                    <div class="row p-3 pt-0">
                                        <div class="col">
                                            <label class="ps-1 pb-1">Alamat</label>
                                            <input type="text" name="inAlamat" class="form-control activecolor" value="{{ auth()->user()->alamat}}">
                                        </div>
                                        <div class="col">
                                            <label class="ps-1 pb-1">Jenis Kelamin</label>
                                            <select class="form-select activecolor">
                                                <option value="1">Laki-Laki</option>
                                                <option value="2">Perempuan</option>
                                                <option value="3">Rather not say</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row p-3 pt-0">
                                        
                                    </div>
                                    <button type="submit" class="btn btn-primary m-3 mt-0 float-right">Apply</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="privasiii" class="tab-content">
                        <div class="cell justify-content-center rounded bg-white"> 
                            <div class="m-3 h-25 text-center">
                                <img src="{{ asset('assets/img/demonzz.jpg') }}" class="rounded-circle m-1 pt-3" alt="Profile Picture" style="width: 125px">
                                <h3 >Nama lengkap</h3>
                                <hr>
                            </div>
                            <div>
                                <form action="/editprofBelow/{{auth()->user()->id}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row p-3 pt-0">
                                        <div class="col">
                                            <label class="ps-1 pb-1">Username</label>
                                            <input type="text" name="inUsername" class="form-control activecolor" value="{{ auth()->user()->username}}">
                                        </div>
                                        <div class="col">
                                            <label class="ps-1 pb-1">Email</label>
                                            <input type="text" name="inEmail" class="form-control activecolor" value="{{ auth()->user()->email}}">
                                        </div>
                                    </div>
                                    <div class="row p-3 pt-0">
                                        <div class="col">
                                            <label class="ps-1 pb-1">Password</label>
                                            <input type="password" name="inPassword" class="form-control activecolor">
                                        </div>
                                        <div class="col">
                                            <label class="ps-1 pb-1">No Telp</label>
                                            <input type="text" name="inNotelp" class="form-control activecolor" value="{{ auth()->user()->telepon}}">
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
  
