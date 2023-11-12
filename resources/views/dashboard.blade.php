@extends('layouts.generics')
@section('content')   
    <!-- SEARCH, CAPAIAN BELAJAR, dan NOTIFIKASI-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body card-atas">
                        <h4 class="card-title">Temukan peluang yang tepat untuk mewujudkan impianmu bersama UniShare!</h4>
                        <div class="container mt-4">
                        <div class="input-group">
                                <input type="text" class="form-control autocomplete" placeholder="Cari sesuatu...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">Cari</button>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card d-flex justify-content-center align-items-center card-atas">
                    <img class="card-img-top img-fluid" src="assets/img/Bullseye.png" alt="Card image cap" style="width: 200px;">
                    <div class="card-body">
                        <h5 class="card-title ">Capaian Belajar</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card d-flex justify-content-center align-items-center card-atas">
                    <img class="card-img-top img-fluid" src="assets/img/Bullseye.png" alt="Card image cap" style="width: 200px;">
                    <div class="card-body">
                        <h5 class="card-title">Capaian Belajar</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- EXPLORE-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-11">
                <h2>Explore</h2>
            </div>
            <div class="col-lg-1">
                <h6>More  <span style="font-size: 24px;">&#8594;</span></h6>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="card h-100 d-flex align-items-center">
                <img src="assets/img/01.jpg" class="img-fluid rounded" alt="thumbnail">
                    <div class="card-body flex-fill card-bawah">
                        <h5 class="card-title">Nama Acara [Max 2 Baris]</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>            
            <div class="col-lg-3">
                <div class="card h-100 d-flex align-items-center">
                <img src="assets/img/01.jpg" class="img-fluid rounded" alt="thumbnail">
                    <div class="card-body flex-fill card-bawah">
                        <h5 class="card-title">Nama Acara [Max 2 Baris]</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>            
            <div class="col-lg-3">
                <div class="card h-100 d-flex align-items-center">
                <img src="assets/img/01.jpg" class="img-fluid rounded" alt="thumbnail">
                    <div class="card-body flex-fill card-bawah">
                        <h5 class="card-title">Nama Acara [Max 2 Baris]</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>            
            <div class="col-lg-3">
                <div class="card h-100 d-flex align-items-center">
                <img src="assets/img/01.jpg" class="img-fluid rounded" alt="thumbnail">
                    <div class="card-body flex-fill card-bawah">
                        <h5 class="card-title">Nama Acara [Max 2 Baris]</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>            
        </div>
    </div>    
@endsection
   
