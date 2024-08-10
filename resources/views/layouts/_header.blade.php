@if (!Request::is('login') && !Request::is('register') && !Request::is('reset-password'))
<nav class="navbar navbar-expand-sm z-3 position-fixed w-100 pt-3 pb-4"
style="background: linear-gradient(135deg, #1e3c72 0%, #2a5298 50%, #8e44ad 100%);">
<div class="container">
    <a class="navbar-brand text-light fw-bold" href="{{ route('home') }}"
        style="background: linear-gradient(135deg, #FF7E5F, #FEB47B); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">EasyPayHub</a>

    <button class="navbar-toggler d-lg-none rounded-0 shadow-none" type="button" data-bs-toggle="collapse"
        data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fa-solid fa-bars"></i>

    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav ms-auto mt-2 mt-lg-0" style="font-size: 14px;">
            <li class="nav-item">
                <a class="nav-link me-4 text-light mt-3 mt-xl-0" href="#home" aria-current="page">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link me-4 text-light mt-3 mt-xl-0" href="#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link me-4 text-light mt-3 mt-xl-0" href="#services">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link me-4 text-light mt-3 mt-xl-0" href="#pricing">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light mt-3 mt-xl-0" href="#faq">FAQ</a>
            </li>
        </ul>
    </div>
</div>
</nav>
@endif
