@extends('layouts.app')

@section('content')
<div class="container-fluid bg-light o-overlaid p-0">
  <div class="o-overlay">
    <div class="container p-4">
      <h1 class="display-4 text-light">LMS</h1>
      <div class="row">
        <div class="col-md-6">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="border-top py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h5 class="card-title display-4 text-success">Local Messaging System</h5>
        <p class="">
          <span class="mr-3">
            Phone
          </span>
          <span class="mr-3 border-left">
            Email
          </span>
          <span class="mr-3 border-left">
            Social Media
          </span>
          <span class="mr-3 border-left">
            Post
          </span>
        </p>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title display-4 text-primary">Signup</h5>
            <p class="card-text">
              Have an account?
            </p>
            <a href="#" class="">Login</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<hr />

<div class="container-fluid py-5">
  <div class="container">
    <button class="btn btn-lg btn-primary">
      Free Demo
    </button>
  </div>
</div>
@endsection
