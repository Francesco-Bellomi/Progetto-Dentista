<x-layout>

    <header class="masthead-2">
        <div class="container-fluid h-100 blur">
            <div class="row h-100 align-items-center  justify-content-center">
                <div class="col-12 bg-white-1 my-5">
                    <h1 class="font-weight-light text-center ">{{$servizio['nome']}}</h1>
                    <p class="lead">{{$servizio['descrizione']}}</p>
                    <h4 class="text-center">Contatta il numero 3948439201 Per ulteriori informazioni</h4>
                </div>
                <x-cardservizi 
                nome="{{ $servizio['nome'] }}" 
                img="{{ $servizio['img'] }}"
                descrizione="{{ $servizio['descrizione'] }}"
                />
            </div>
        </div>
    </header>

</x-layout>