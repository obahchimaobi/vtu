@extends('layouts.app')

@section('title')
    Login
@endsection

@section('content')
    <br><br><br>
    <!-- Pills navs -->

    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <form action="" method="post" style="font-family: 'Roboto', sans-serif;">
                    <div class="col-xl-9 bg-white p-4 rounded shadow">
                        <h4 class="text-center mt-3">Login to Your Account</h4>
                        <div class="mt-5">
                            <input type="text" class="form-control mt-3 pt-3 pb-3 shadow-none" placeholder="Email" @required(true) style="font-size: 15px;">

                            <input type="text" class="form-control mt-3 pt-3 pb-3 shadow-none" placeholder="Password" @required(true) style="font-size: 15px;">

                            <div class="form-check mt-3">
                                <input class="form-check-input shadow-none" type="checkbox" value="" id="" checked />
                                <label class="form-check-label" for="" style="font-size: 15px;"> Remember me </label>
                            </div>

                            <div class="d-grid mt-3">
                                <button class="btn btn-primary">Login</button>
                            </div>

                            <div class="mt-4">
                                <h6 class="fw-normal" style="font-size: 14px; font-family: 'Roboto', sans-serif;">Don't have an account? <a href="{{ route('register.page') }}" class="text-decoration-none">Create one</a></h6>

                                <h6 class="fw-normal" style="font-size: 14px; font-family: 'Roboto', sans-serif;">Forgot Password? <a href="{{ route('reset-password.page') }}" class="text-decoration-none">Reset it</a></h6>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-xl-6">
                <img src="{{ asset('assets/images/about.png') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
@endsection
