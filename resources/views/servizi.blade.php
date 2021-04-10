<x-layout>

    <header class="masthead-2">
        <div class="container-fluid h-100 blur">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center bg-white-1 my-5">
                    <h1 class="font-weight-light ">I nostri servizi</h1>
                    <p class="lead">Da Tooth Specialist troverete i migliori servizi a prezzi agevolati</p>
                </div>

                @foreach ($servizi as $servizio)

                    <x-cardservizi nome="{{ $servizio['nome'] }}" img="{{ $servizio['img'] }}"
                        descrizione="{{ $servizio['descrizione'] }}" />

                @endforeach

            </div>
        </div>
    </header>



</x-layout>
