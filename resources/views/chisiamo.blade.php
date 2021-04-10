<x-layout>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center py-5 ">
                <h1 class="bg-custom">Vi presentiamo la nostra Famiglia</h1>
            </div>
                @foreach ($dentisti as $dentista)
                    <x-carddentisti
                        nome="{{$dentista['nome']}}"
                        ruolo="{{$dentista['ruolo']}}"
                        storia="{{$dentista['storia']}}"
                        img="{{$dentista['img']}}"
                    />
                @endforeach
        </div>
    </div>

</x-layout>