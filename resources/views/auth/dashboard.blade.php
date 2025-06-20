<x-layout>
      <div class="container my-5">
            <div class="row justify-content-center">
                  <div class="col-12 col-md-4">
                        <h1 class="text-custom text-center">Dashboard dell'utente:</h1>
                        <p class="text-custom text-center display-5">{{Auth::user()->name}}</p>
                  </div>
            </div>
      </div>
      
      
      <div class="container  container-dashboard my-5">
            <div class="row justify-content-center">
                  <div class="col-12 col-md-10 border rounded justify-content-center align-items-center ">
                        <h3 class="custom-tx-color text-center">Info utente</h3>
                        <p class="text-light p-dashboard text-center display-6"><strong class="custom-tx-color text-center">Nome:</strong>{{Auth::user()->name}}</p>
                        
                        <p class="text-light p-dashboard text-center display-6"><strong class="custom-tx-color text-center">Email:</strong>{{Auth::user()->email}}</p>
                        
                        <p class="text-light p-dashboard text-center display-6"><strong class="custom-tx-color text-center">Giochi inseriti:</strong>{{Auth::user()->games()->count()}}</p>
                        
                  </div>
            </div>
      </div>
      
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