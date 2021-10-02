@extends('layouts.app')

@section('content')
<div class="container-fluid bg-light p-4 nb-bg1-rm">
    <div class="container">
      <h1 class="display-4">Gadgets</h1>
      <div class="row">
        <div class="col-md-6">
        </div>
      </div>
    </div>
</div>

<div class="border-top py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
          <img src="{{ asset('img/acer-aspire-1.jpg') }}" alt="Card image foo" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Acer Aspire</h5>
            <p class="card-text">
              16 GB RAM
              <br />
              2 GB Nvidia Graphics
              <br />
              i7 11 Gen
              <br />
              Genuine OS
            </p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
          <img src="{{ asset('img/hp-envy-1.jpg') }}" alt="Card image foo" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">HP Envy i7</h5>
            <p class="card-text">
              16 GB RAM
              <br />
              2 GB Nvidia Graphics
              <br />
              i7 11 Gen
              <br />
              Genuine OS
            </p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
          <img src="{{ asset('img/dell-1.jpg') }}" alt="Card image foo" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Dell i7</h5>
            <p class="card-text">
              16 GB RAM
              <br />
              2 GB Nvidia Graphics
              <br />
              i7 11 Gen
              <br />
              Genuine OS
            </p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<hr />

<div class="container-fluid py-5">
  <div class="container">
    <button class="btn btn-primary">
      Sell All Laptops
    </button>
  </div>
</div>
@endsection
