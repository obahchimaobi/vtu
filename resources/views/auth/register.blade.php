@extends('layouts.app')

@section('title')
    Register
@endsection

@section('content')
    <br><br><br>
    <!-- Pills navs -->

    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <form action="" method="post" style="font-family: 'Roboto', sans-serif;">
                    <div class="col-xl-9 bg-white p-4 rounded shadow">
                        <h4 class="text-center mt-3">Register Account</h4>
                        <div class="mt-2">

                            <div class="row">
                                <div class="col-xl-6 mt-2">
                                    <input type="text" class="form-control mt-2 pt-3 pb-3 shadow-none" placeholder="Full Name" style="font-size: 15px;" @required(true)>
                                </div>

                                <div class="col-xl-6 mt-2">
                                    <input type="text" class="form-control mt-2 pt-3 pb-3 shadow-none" placeholder="Username" style="font-size: 15px;" @required(true)>
                                </div>

                                <div class="col-xl-12 mt-2">
                                    <input type="text" class="form-control mt-2 pt-3 pb-3 shadow-none" placeholder="Email" style="font-size: 15px;" @required(true)>
                                </div>

                                <div class="col-xl-6 mt-2">
                                    <input type="text" class="form-control mt-2 pt-3 pb-3 shadow-none" placeholder="Password" style="font-size: 15px;" @required(true)>
                                </div>

                                <div class="col-xl-6 mt-2">
                                    <input type="text" class="form-control mt-2 pt-3 pb-3 shadow-none" placeholder="Confirm Password" style="font-size: 15px;" @required(true)>
                                </div>
                            </div>

                            <div class="d-grid mt-3">
                                <button class="btn btn-primary">Register</button>
                            </div>

                            <div class="mt-4">
                                <h6 class="fw-normal" style="font-size: 15px;">Already have an account? <a href="{{ route('login.page') }}"
                                        class="text-decoration-none">Login</a></h6>
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
