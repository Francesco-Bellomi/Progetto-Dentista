<x-layout>

    <div class="bg-grey">
        <div class="container-fluid py-5 blur ">
            <div class="row justify-content-center">
                <div class="col-12 text-center my-5">
                    <h1>Mandaci una Mail per prenotare una visita</h1>
                    <h4>I tuoi denti sono importanti per noi <i class="fas fa-tooth tc-white"></i></h4>
                </div>
                <div class="col-12 col-md-4 text-center d-flex justify-content-center">
                    <form method="POST" action="{{ route('prenota.submit')}}">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label"><i class="fas fa-tooth tc-white"></i> Nome e Cognome <i class="fas fa-tooth tc-white"></i></label>
                            <input type="text" name="user" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label"><i class="fas fa-tooth tc-white"></i> Email address <i class="fas fa-tooth tc-white"></i></label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <label for="exampleInputPassword1" class="form-label"><i class="fas fa-tooth tc-white"></i> Inserisci la tua richiesta <i class="fas fa-tooth tc-white"></i></label>
                        <div class="mb-3">
                            <textarea name="message" id="exampleInputPassword1" type="text" cols="37" rows="4"></textarea>
                        </div>
                        <button type="submit" class="btn btn-custom-2"> Invia Richiesta</button>
                    </form>
                </div>
                <p class="text-center mt-3"><i class="fas fa-tooth tc-white"></i> ricordiamo che la prima visita è gratuita! <i class="fas fa-tooth tc-white"></i></p>
            </div>
        </div>
    </div>



</x-layout>
