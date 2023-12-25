@extends('layouts.generics')
@section('navbar')
    @include('layouts.parts.navbar')
@endsection
@section('banner')
    <section>
        <div class="banner container-flex" style="background-image: url({{ asset('assets/img/event-banner2.png') }});">
            <div class="row">
                <div class="col-4" id="header-thumbnail">
                    <img src="{{ asset('assets/img/beasiswa-logo.svg') }}" alt="" class="img-fluid mt-5">
                </div>
                <div class="col-7 mt-5">
                    <h2 class="text-wrap" id="title-thumbnail">Temukan berbagai peluang untuk menggapai impianmu.</h2>
                    <h6 class="text-wrap text-white fw-normal mt-2">Dapatkan kesempatan untuk belajar gratis di dalam maupun luar negeri.</h6>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('content')
    <section class="second-navbar pt-3 pb-3">
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Semua</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Swasta</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pemerintah</a>
        </li>
      </ul>
    </section>
    <center>
    <div class="col-6">
      <div class="mt-5 search-bar">
        <input type="text" name="search" class="form-control ms-4" placeholder="Cari acara disini" value="{{request('search')}}" >
        <button type="submit" class="btn btn-custom1 ms-4 ps-3 pe-3">Search!</button>
      </div>
    </div>
    </center>
    @foreach ($data as $item)
    <div class="card mb-4 mt-5" style="text-decoration: none"> <!-- <div id="output"> -->
      <div class="row pt-4 pb-4">
        <div class="col-2" style="text-align: right">
          <h5 style="font-size: 17px">Due date</h5>
          <h1 style="font-size: 70px; margin-bottom: -10px; margin-top: -10px">{{Str::substr($item->due_date_beasiswa,8,2)}}</h1>
          <h5 style="font-size: 17px">{{ \Carbon\Carbon::parse($item->due_date_beasiswa)->format('M Y') }}</h5>
        </div>
        <div class="col-7">
          <h2>{{$item->nama_beasiswa}}</h2>
          <div class="mb-4">
            <img src="assets/img/pembatas.png" class="mb-1" />
            <span style="font-style: italic; font-size: 19px; margin-left: 3px">{{$item->jenis_beasiswa}}</span>
          </div>
          <h6>{{Str::substr($item->deskripsi_beasiswa,0,240)}}...</h6>
          <a class="btn btn-dark" style="border-radius: 3px" href="{{ url('/beasiswa/' . $item->id)}}">Info Selengkapnya</a>
        </div>
        <div class="col-3">
          <img src="{{ asset('/storage/' . $item->beasiswa_img) }}" style="height: 200px" />
        </div>
      </div>
</div>
    @endforeach
    <!-- JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- <script src="assets/js/"></script>
    <script src="assets/js/bea_script.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="assets/js/"></script>
    <script src="assets/js/autocomplete.js"></script>
@endsection
