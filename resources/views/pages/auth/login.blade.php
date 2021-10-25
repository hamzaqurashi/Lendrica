@extends('layout.master2')

@section('content')
<div class="page-content d-flex align-items-center justify-content-center">

  <div class="row w-100 mx-0 auth-page">
    <div class="col-md-8 col-xl-6 mx-auto">
      <div class="card">
        <div class="row">
          <div class="col-md-5 pr-md-0">
            <div class="auth-left-wrapper" style="background-image: url({{ asset('/assets/images/Finance.png') }})">

            </div>
          </div>
          <div class="col-md-7 pl-md-0">
            <div class="auth-form-wrapper px-4 py-5">
              <a href="#" class="noble-ui-logo d-block mb-2"><img src="{{ asset('/assets/images/logo.png') }}" alt="logo"> <span>LENDRICA</span></a>
              <h5 class="text-muted font-weight-normal mb-4">Welcome back! Log in to your account.</h5>
              <form class="forms-sample">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" autocomplete="current-password" placeholder="Password">
                </div>
                <!-- <div class="form-check form-check-flat form-check-primary">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Remember me
                  </label>
                </div> -->
                <div class="mt-3">
                  <a href="{{ url('/dashboard') }}" class="btn mr-2 mb-2 mb-md-0" style="background-color:#E69F09; color:white;">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection