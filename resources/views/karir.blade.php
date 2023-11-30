@extends('layouts.generics') 
@section('navbar')
    @include('layouts.parts.navbar')
@endsection
@section('content')
    <!-- Lowongan Kerja-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-11">
                <h2>Lowongan Kerja</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="card h-100 d-flex align-items-center">
                <img src="assets/img/01.jpg" class="img-fluid rounded" alt="thumbnail" style="background-color: white;">
                    <div class="card-body flex-fill">
                        <h5 class="card-title">Virtual Talent Inc.</h5>
                        <p class="card-text">Computer Forensic Analyst<br>Registrasi: 12 Agust - 28 Sept 2023<br>Lokasi: Remote from Home</p>
                    </div>
                </div>
            </div>            
            <div class="col-lg-3">
                <div class="card h-100 d-flex align-items-center">
                <img src="assets/img/01.jpg" class="img-fluid rounded" alt="thumbnail">
                    <div class="card-body flex-fill">
                        <h5 class="card-title">PT. Unity Dev Indonesia</h5>
                        <p class="card-text">Full stack Developer<br>Registrasi: 12 Des - 30 Jan 2024<br>Lokasi: Lembang, Bandung</p>
                    </div>
                </div>
            </div>            
            <div class="col-lg-3">
                <div class="card h-100 d-flex align-items-center">
                <img src="assets/img/01.jpg" class="img-fluid rounded" alt="thumbnail">
                    <div class="card-body flex-fill">
                        <h5 class="card-title">Opendub.ai</h5>
                        <p class="card-text">Data Scientist<br>Registrasi: 21 Feb - 30 Apr 2023<br>Lokasi: DKI Yogyakarta</p>
                    </div>
                </div>
            </div>                     
        </div>
    </div>
    <!-- Magang-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-11">
                <h2>Magang</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="card h-100 d-flex align-items-center">
                <img src="assets/img/01.jpg" class="img-fluid rounded" alt="thumbnail">
                    <div class="card-body flex-fill">
                        <h5 class="card-title">DKatalis Indonesia</h5>
                        <p class="card-text">Network Security Engineer<br>Registrasi: 21 Feb - 30 Apr 2023<br>Lokasi: DKI Yogyakarta.</p>
                    </div>
                </div>
            </div>            
            <div class="col-lg-3">
                <div class="card h-100 d-flex align-items-center">
                <img src="assets/img/01.jpg" class="img-fluid rounded" alt="thumbnail">
                    <div class="card-body flex-fill">
                        <h5 class="card-title">Intrego.ai</h5>
                        <p class="card-text">Software Engineer<br>Registrasi: 12 Des - 30 Jan 2024<br>Lokasi: Lembang, Bandung</p>
                    </div>
                </div>
            </div>            
            <div class="col-lg-3">
                <div class="card h-100 d-flex align-items-center">
                <img src="assets/img/01.jpg" class="img-fluid rounded" alt="thumbnail">
                    <div class="card-body flex-fill">
                        <h5 class="card-title">UI/UX Designer</h5>
                        <p class="card-text">UI/UX Designer<br>Registrasi: 12 Agust - 28 Sept 2023<br>Lokasi: Remote from Home</p>
                    </div>
                </div>
            </div>                   
        </div>
    </div>        
@endsection