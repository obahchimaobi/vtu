@extends('layouts.app')

@section('content')
    {{-- BANNER --}}
    <div id="home" style="background: linear-gradient(135deg, #1e3c72 0%, #2a5298 50%, #8e44ad 100%);" class="pb-5">
        <br><br><br><br><br><br>
        <div class="container mt-5">
            {{-- <div class="row d-flex align-items-center text-center text-xl-start">
                

                <div class="col-xl-6">
                    <img src="{{ asset('assets/images/slider.png') }}" alt="" class="w-100 img-fluid">
                </div>
            </div> --}}

            <div class="text-center">
                <h1 style="font-family: 'Roboto', sans-serif; font-weight: normal; letter-spacing: 1px;"
                    class="text-light display-4">Welcome To
                    <span
                        style="background: linear-gradient(135deg, #FF7E5F, #FEB47B); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">EasyPayHub</span>
                </h1>

                <p style="font-size: 17px; font-family: 'Roboto', sans-serif;" class="text-light mt-4">Your one-stop solution
                    for all your top-up and payment needs. Experience seamless transactions, quick top-ups, and reliable
                    payment services with just a few clicks. Whether it's airtime, data services, or other payments, we've
                    got you covered with convenience and efficiency.</p>

                <div class="mt-5">
                    <a href="" class="btn btn-dark me-1 ps-3 pe-3 btn-lg" style="font-size: 18px;">Register</a>
                    <a href="" class="btn btn-dark me-3 ps-4 pe-4 btn-lg" style="font-size: 18px;">Login</a>
                </div>
            </div>
        </div>
    </div>

    <div id="about">
        <br><br><br><br>
        <div class="container">
            <div class="mt-5">
                <h2 class="text-center" style="font-family: 'Roboto', sans-serif; font-weight: 400">About Us</h2>
            </div>

            <div class="mt-5 pt-3">
                <div class="row">
                    <div class="col-xl-6">
                        <img src="{{ asset('assets/images/about.png') }}" alt="">
                    </div>

                    <div class="col-xl-6">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="services">
        <br><br><br><br>
        <div class="container mt-5">
            <div class="text-center">
                <h2 style="font-family: 'Roboto', sans-serif; font-weight: 400">Virtual Top Up</h2>
                <h6 style="font-weight: normal;">Electronic vending of Airtime and data</h6>
            </div>

            <div class="rounded m-auto mt-3"
                style="height: 2px; background: linear-gradient(135deg, #1e3c72 0%, #2a5298 50%, #8e44ad 100%); width: 50px;">
            </div>

            <div class="mt-5">
                <div class="row">

                    <div class="col-xl-3 d-flex">
                        <div class="card pt-5 ps-3 pb-5 pe-3 text-center border-0 shadow hover-card"
                            style="width: 18rem; border-radius: 20px;">
                            <img src="{{ asset('assets/images/data.jpg') }}"
                                class="card-img-top img-fluid w-75 rounded-0 m-auto" alt="...">
                            <div class="card-body mt-3">
                                <p class="card-text" style="font-size: 15px;">Buy cheap mobile data at an affordable rate.
                                </p>
                                <a href="#" class="btn btn-outline-primary">Buy Data</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 d-flex">
                        <div class="card pt-5 ps-3 pb-5 pe-3 text-center border-0 shadow hover-card"
                            style="width: 18rem; border-radius: 20px;">
                            <img src="{{ asset('assets/images/airtime.jpg') }}"
                                class="card-img-top img-fluid w-75 rounded-0 m-auto" alt="...">
                            <div class="card-body mt-3">
                                <p class="card-text" style="font-size: 15px;"> Get up to 5% discount instantly when you
                                    purchase airtime.
                                </p>
                                <a href="#" class="btn btn-outline-primary">Buy Airtime</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 d-flex">
                        <div class="card pt-5 ps-3 pb-5 pe-3 text-center border-0 shadow hover-card"
                            style="width: 18rem; border-radius: 20px;">
                            <img src="{{ asset('assets/images/bulksms.jpg') }}"
                                class="card-img-top img-fluid w-75 rounded-0 m-auto" alt="...">
                            <div class="card-body mt-3">
                                <p class="card-text" style="font-size: 15px;">Send BulkSMS to any DND number. Fast and
                                    instant delivery.
                                </p>
                                <a href="#" class="btn btn-outline-primary">Bulk SMS</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 d-flex">
                        <div class="card pt-5 ps-3 pb-5 pe-3 text-center border-0 shadow hover-card"
                            style="width: 18rem; border-radius: 20px;">
                            <img src="{{ asset('assets/images/paybills.jpg') }}"
                                class="card-img-top img-fluid w-75 rounded-0 m-auto" alt="...">
                            <div class="card-body mt-3">
                                <p class="card-text" style="font-size: 15px;">Pay Cable TV bills at home and make
                                    commission.
                                </p>
                                <a href="#" class="btn btn-outline-primary">Cable Subscription</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="pricing">
        <br><br><br>
        <div class="container mt-5">
            <h2 class="text-center mb-5" style="font-family: 'Roboto', sans-serif; font-weight: 400">Pricing</h2>
            <div class="row pricing-table justify-content-center">

                {{-- MTN PRICING TABLE --}}
                <div class="col-md-4">
                    <div class="card pricing-card">
                        <div class="card-body mb-3">
                            <h4 class="card-title text-center mt-3">MTN PRICE</h4>
                            <table class="table mt-4 text-center" style="font-size: 13px;">
                                <tbody>
                                    <tr>
                                        <td>0.5GB</td>
                                        <td>₦130</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>1GB</td>
                                        <td>₦232</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>2GB</td>
                                        <td>₦522</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>3GB</td>
                                        <td>₦770</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>5GB</td>
                                        <td>₦1320</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>10GB</td>
                                        <td>₦2550</td>
                                        <td>30 DAYS</td>
                                    </tr>

                                    {{-- COPERATE DATA --}}
                                    <tr>
                                        <td>0.5GB</td>
                                        <td>₦135</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>1GB</td>
                                        <td>₦242</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>2GB</td>
                                        <td>₦552</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>3GB</td>
                                        <td>₦785</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>5GB</td>
                                        <td>₦1420</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>10GB</td>
                                        <td>₦2650</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="m-auto text-center mt-4">
                                <button class="btn btn-outline-primary ps-4 pe-4 pt-2 pb-2">Buy now</button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- AIRTEL PRICING TABLE --}}
                <div class="col-md-4">
                    <div class="card pricing-card">
                        <div class="card-body mb-3">
                            <h4 class="card-title text-center mt-3">AIRTEL PRICE</h4>
                            <table class="table mt-4 text-center" style="font-size: 13px;">
                                <tbody>
                                    <tr>
                                        <td>0.5GB</td>
                                        <td>₦130</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>1GB</td>
                                        <td>₦232</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>2GB</td>
                                        <td>₦522</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>3GB</td>
                                        <td>₦770</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>5GB</td>
                                        <td>₦1320</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>10GB</td>
                                        <td>₦2550</td>
                                        <td>30 DAYS</td>
                                    </tr>

                                    {{-- COPERATE DATA --}}
                                    <tr>
                                        <td>0.5GB</td>
                                        <td>₦135</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>1GB</td>
                                        <td>₦242</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>2GB</td>
                                        <td>₦552</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>3GB</td>
                                        <td>₦785</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>5GB</td>
                                        <td>₦1420</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>10GB</td>
                                        <td>₦2650</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="m-auto text-center mt-4">
                                <button class="btn btn-outline-primary ps-4 pe-4 pt-2 pb-2">Buy now</button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- GLO PRICE --}}
                <div class="col-md-4">
                    <div class="card pricing-card">
                        <div class="card-body mb-3">
                            <h4 class="card-title text-center mt-3">GLO PRICE</h4>
                            <table class="table mt-4 text-center" style="font-size: 13px;">
                                <tbody>
                                    <tr>
                                        <td>0.5GB</td>
                                        <td>₦130</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>1GB</td>
                                        <td>₦232</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>2GB</td>
                                        <td>₦522</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>3GB</td>
                                        <td>₦770</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>5GB</td>
                                        <td>₦1320</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>10GB</td>
                                        <td>₦2550</td>
                                        <td>30 DAYS</td>
                                    </tr>

                                    {{-- COPERATE DATA --}}
                                    <tr>
                                        <td>0.5GB</td>
                                        <td>₦135</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>1GB</td>
                                        <td>₦242</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>2GB</td>
                                        <td>₦552</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>3GB</td>
                                        <td>₦785</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>5GB</td>
                                        <td>₦1420</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>10GB</td>
                                        <td>₦2650</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="m-auto text-center mt-4">
                                <button class="btn btn-outline-primary ps-4 pe-4 pt-2 pb-2">Buy now</button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 9MOBILE PRICE --}}
                <div class="col-md-4 mt-5">
                    <div class="card pricing-card">
                        <div class="card-body mb-3">
                            <h4 class="card-title text-center mt-3">9MOBILE PRICE</h4>
                            <table class="table mt-4 text-center" style="font-size: 13px;">
                                <tbody>
                                    <tr>
                                        <td>0.5GB</td>
                                        <td>₦130</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>1GB</td>
                                        <td>₦232</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>2GB</td>
                                        <td>₦522</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>3GB</td>
                                        <td>₦770</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>5GB</td>
                                        <td>₦1320</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>10GB</td>
                                        <td>₦2550</td>
                                        <td>30 DAYS</td>
                                    </tr>

                                    {{-- COPERATE DATA --}}
                                    <tr>
                                        <td>0.5GB</td>
                                        <td>₦135</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>1GB</td>
                                        <td>₦242</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>2GB</td>
                                        <td>₦552</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>3GB</td>
                                        <td>₦785</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>5GB</td>
                                        <td>₦1420</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                    <tr>
                                        <td>10GB</td>
                                        <td>₦2650</td>
                                        <td>30 DAYS</td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="m-auto text-center mt-4">
                                <button class="btn btn-outline-primary ps-4 pe-4 pt-2 pb-2">Buy now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="faq" x>
        <br><br><br><br>
        <div class="container mt-5">
            <div class="text-center">
                <h2>FAQ</h2>

                <div class="row mt-5">
                    <div class="col-xl-6">
                        <img src="{{ asset('assets/images/faq.png') }}" alt="" class="img-fluid">
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Accordion Item #1
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body" style="font-family: 'Roboto', sans-serif;">
                                        <strong>This is the first item's accordion body.</strong> It is shown by default,
                                        until the collapse plugin adds the appropriate classes that we use to style each
                                        element. These classes control the overall appearance, as well as the showing and
                                        hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                        our default variables. It's also worth noting that just about any HTML can go within
                                        the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Accordion Item #2
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                        until the collapse plugin adds the appropriate classes that we use to style each
                                        element. These classes control the overall appearance, as well as the showing and
                                        hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                        our default variables. It's also worth noting that just about any HTML can go within
                                        the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Accordion Item #3
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by default,
                                        until the collapse plugin adds the appropriate classes that we use to style each
                                        element. These classes control the overall appearance, as well as the showing and
                                        hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                        our default variables. It's also worth noting that just about any HTML can go within
                                        the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
