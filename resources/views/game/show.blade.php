<x-layout>
      <section>
            <div class="container">
                  <div class="row">
                        <div class="col-12">
                              <h1 class="custom-tx-color">Dettaglio del gioco:{{$game->title}}</h1>
                              
                        </div>
                  </div>
            </div>
      </section>

      <section>
            <div class="container">
                  <div class="row">
                        <div class="col-12 col-md-10">
                              <h2 class="display-4 custom-tx-color">{{$game->title}}</h2>
                              <img src="{{Storage::url($game->cover)}}" class="img-fluid img-edit-show" alt="locandina del gioco {{$game->title}}">
                              <h3 class="display-5 custom-tx-color">Casa di sviluppo:
                                    <p class="text-light">
                                          {{$game->publisher}}
                                    </p>
                              </h3>

                              <h3 class="display-5 custom-tx-color">Anno di rilascio del gioco:
                                    <p class="text-light">
                                          {{$game->year}}
                                    </p>
                              </h3>

                              <h3 class="display-5 custom-tx-color">Trama:
                                    <p class="text-light">
                                          {{$game->plot}}
                                    </p>
                              </h3>

                              <a href="{{ route('game.edit',$game) }}" class="btn btn-dark shadow custom-tx-color m-2">Modifica</a>
                              <form action="{{route('game.delete',$game)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                              <button type="submit" href="{{ route('game.delete',$game) }}" class="btn btn-dark shadow text-danger m-2">Elimina</button>

                              </form>
                        </div>
                  </div>
            </div>
      </section>
</x-layout>