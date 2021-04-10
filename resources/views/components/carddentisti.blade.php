@props(['nome','ruolo','storia','img'])


<div class="col-12 col-md-6 col-xl-4 text-center">
    <div class="card-custom my-5 py-3">
        <img src="{{$img}}" class="img-card-custom" alt="...">
        <div class="card-body">
            <h5 class="card-title underline-custom">{{$nome}}</h5>
            <p class="card-text">{{$ruolo}}</p>
            <p class="card-text">{{$storia}}</p>
        </div>
    </div>
</div>