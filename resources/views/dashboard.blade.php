@extends('layouts.generics')
@section('navbar')
    @include('layouts.parts.navbar')
@endsection
@section('content')   
    <!-- SEARCH, CAPAIAN BELAJAR, dan NOTIFIKASI-->
    <br><br>
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

    <!-- JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="assets/js/"></script>
    <script src="assets/js/autocomplete.js"></script>
</body>
</html>
