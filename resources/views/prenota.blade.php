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
            <h2 class="text-center pt-5">Dove Siamo</h2>
            <div class="col-12 mt-4 ">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2797.279263988434!2d9.153956915714373!3d45.484320840121285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c1121cffb341%3A0x833f18a30000f295!2sPiazzale%20Damiano%20Chiesa%2C%2020149%20Milano%20MI!5e0!3m2!1sit!2sit!4v1618129506670!5m2!1sit!2sit" width="100%" height="400px" style="border:8px solid #8dc7ee;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>



</x-layout>
