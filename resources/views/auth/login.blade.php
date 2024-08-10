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

                            <label for="email">Email<span class="text-danger">*</span></label>
                            <input type="text" class="form-control mt-2 shadow-none" @required(true)>

                            <label for="email" class="mt-3">Password<span class="text-danger">*</span></label>
                            <input type="text" class="form-control mt-2 shadow-none" @required(true)>

                            <div class="form-check mt-3">
                                <input class="form-check-input shadow-none" type="checkbox" value="" id="" checked />
                                <label class="form-check-label" for="" style="font-size: 15px;"> Remember me </label>
                            </div>

                            <div class="d-grid mt-3">
                                <button class="btn btn-primary">Login</button>
                            </div>

                            <div class="mt-4">
                                <h6 class="fw-normal" style="font-size: 15px;">Don't have an account? <a href="{{ route('register.page') }}" class="text-decoration-none">Create one</a></h6>
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
