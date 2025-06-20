<x-layout>
      <section>
            <div class="container">
                  <div class="row">
                        <div class="col-12">
                              <h1 class="custom-tx-color">Libreria di giochi</h1>
                        </div>
                  </div>
            </div>
      </section>
      @if (session('message'))
      <div class="alert alert-success">
            {{ session('message') }}
      </div>
      @endif
      <section>
            <div class="container">
                  <div class="row">
                        @forelse ($games as $game)
                        <div class="col-12 col-md-6 my-2">
                              <x-card :game="$game" />
                        </div>
                        @empty
                        <div class="col-12">
                              <h3>Questa sezione non è ancora stata aggiornata</h3>
                              <a href="{{ route('game.create') }}" class="btn btn-dark custom-tx-color">Aggiungi</a>
                        </div>
                        @endforelse
                  </div>
            </div>
      </section>
</x-layout>
