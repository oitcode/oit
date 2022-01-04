@extends('layouts.app')

@section('content')
<div class="container-fluid bg-light o-overlaid p-0">
  <div class="o-overlay">
    <div class="container py-4">
      <h1 class="display-4 text-light">OIT</h1>
      <div class="row">
        <div class="col-md-6">
          <hr class="my-4 bg-light">
          <p class="mr-3">
            <span class="lead text-light">
              IT Services for your business
            </span>
          </p>
          @if (false)
          <a class="btn btn-danger btn-lg" href="#" role="button">Learn more</a>
          @endif
        </div>
        <div class="col-md-6">
          @if (false)
          <img src="{{ asset('img/hero-1.jpg') }}" alt="Card image foo" class="img-fluid">
          @endif
        </div>
      </div>
    </div>
  </div>
</div>

<div class="border-top py-3">
  <div class="container">
    <h2>Services</h2>
    <div class="row py-3">
      <div class="col-md-4">
        <div class="card border-0" style="width: 18rem;">


          <img src="{{ asset('img/web_1.jpg') }}" alt="Card image foo" class="card-img-top-rm" style="height: 200px !important;">
          <div class="card-body">
            <h5 class="card-title">Software development</h5>
            <p class="card-text">Enterprise software development.</p>
            <a href="{{ route('contact') }}" class="btn btn-outline-primary">See more</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-0" style="width: 18rem;">
          <img src="{{ asset('img/sms_2.jpg') }}" alt="Card image foo" class="card-img-top-rm"  style="height: 200px !important;">
          <div class="card-body">
            <h5 class="card-title">Phone Messaging</h5>
            <p class="card-text">Phone messaging system.</p>
            <a href="{{ route('contact') }}" class="btn btn-outline-primary">See more</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-0" style="width: 18rem;">
          <img src="{{ asset('img/hardware_1.jpg') }}" alt="Card image foo" class="card-img-top-rm" style="height: 200px !important;">
          <div class="card-body">
            <h5 class="card-title">Enterprise IT setup</h5>
            <p class="card-text">Enterprise office IT setup</p>
            <a href="{{ route('contact') }}" class="btn btn-outline-primary">See more</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
