{{-- <nav class="container-fluid pt-3 pb-3 border-nav-custom">
    <div class="row text-center justify-content-center">
        <div class="col-12  mb-3">
            <h1 class="display-2 animate__animated animate__jackInTheBox mt-5"> Tooth Specialist <i class="fas fa-tooth"></i></h1>
        </div>
        <div class="col-12 col-sm-3 mb-3 fs-5"><a href="{{route('Benvenuto')}}">Home</a></div>
        <div class="col-12 col-sm-3 mb-3 fs-5"><a href="{{route('chisiamo')}}">Chi Siamo</a></div>
        <div class="col-12 col-sm-3 mb-3 fs-5"><a href="{{route('servizi')}}">Servizi</a></div>
        <div class="col-12 col-sm-3 mb-3 fs-5"><a href="{{route('prenota')}}">prenota una visita</a></div>
    </div>
</nav> --}}

<nav class="navbar navbar-expand-xxxl sticky-top p-0">
    <div class="container-fluid bg-white py-3 d-flex justify-content-center">
        <a class="navbar-brand " href="{{ route('Benvenuto') }}">
            <h1 class="animate__animated animate__jackInTheBox"> The Tooth Specialist <i class="fas fa-tooth"></i></h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-search mt-1"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
                <li class="nav-item fs-5">
                    <a class="nav-link active" aria-current="page" href="{{ route('Benvenuto') }}">Home</a>
                </li>
                <li class="nav-item fs-5">
                    <a class="nav-link" href="{{ route('chisiamo') }}">Chi siamo</a>
                </li>
                <li class="nav-item fs-5">
                    <a class="nav-link" href="{{ route('servizi') }}">Servizi</a>
                </li>
                <li class="nav-item fs-5">
                    <a class="nav-link" href="{{ route('prenota') }}">Prenota una visita</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
