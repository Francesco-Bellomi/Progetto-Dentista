<x-layout>


    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif


    <header class="masthead bg-nav">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center bg-white-1 mt-5 pt-5">
                    <h1 class="font-weight-light">Il Miglior Dentista in Città</h1>
                    <p class="lead fs-4">Prenota subito la tua prima <a href="{{route('prenota')}}" class="fs-3">visita gratuita </a><i
                            class="far fa-hand-point-left"></i></p>
                </div>
            </div>
        </div>
    </header>






</x-layout>
