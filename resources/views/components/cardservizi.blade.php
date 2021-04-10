@props(['nome', 'img', 'descrizione'])

<div class="col-12 col-lg-6 col-xl-4 text-center">
    <div class="card-custom-2 my-5 py-3"">
    <img src=" {{ $img }}" class=" img-card-custom-2 img-fluid" alt="...">
        <div class="card-body">
            <h5 class="card-title underline-custom">{{ $nome }}</h5>
            @if (Route::currentRouteName()== 'servizi')
                
                <a href="{{route('scopri', ['nome'=>$nome])}}" class="btn btn-custom-2">Scopri di più</a>
                <a href="{{route('prenota')}}" class="btn btn-custom-2">Prenota</a>
            @else
                <a href="{{route('servizi')}}" class="btn btn-custom-2">Torna Indietro</a>
                <a href="{{route('prenota')}}" class="btn btn-custom-2">Prenota</a>
            @endif

        </div>
    </div>
</div>

