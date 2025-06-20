<x-layout>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if (session('denied'))
        
    <div class="alert alert-danger">
        {{session('denied')}}
    </div>
        
    @endif 



    <section>
        <div class="container my-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="custom-tx-color mt-5">
                        L'ultima aggiunta alla nostra Libreria
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                @forelse ($games as $game)
                    <div class="d-flex my-5 col-12 col-md-12 align-items-center justify-content-center">
                        <x-card :game="$game"/>
                    </div>
                @empty
                    <div class="col-12 mt-5 text-center">
                        <h3>Questa sezione non è ancora stata aggiornata</h3>
                        <a href="{{ route('game.create') }}" class="btn btn-dark custom-tx-color mt-3">Aggiungi</a>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
</x-layout>
