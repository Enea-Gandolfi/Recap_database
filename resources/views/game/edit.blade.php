<x-layout>
      <section>
            <div class="container">
                  <div class="row">
                        <div class="col-12">
                              <h1 class="custom-tx-color">Modifica le specifiche dei giochi</h1>
                        </div>
                  </div>
            </div>
      </section>
      
      <section>
            <div class="container">
                  <div class="row">
                        <div class="col-12 col-md-6">
                              <form action="{{route('game.update',$game)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                          <label for="title" class="form-label custom-tx-color">Titolo</label>
                                          <input type="text" class="form-control  @error('title') is-invalid @enderror" id="title" name="title" value="{{$game->title}}">
                                          @error('title')
                                          <span class="text-danger">{{$message}}</span>
                                          @enderror
                                          
                                    </div>
                                    <div class="mb-3">
                                          <label for="publisher" class="form-label custom-tx-color">Casa di sviluppo</label>
                                          <input type="text" class="form-control @error('publisher') is-invalid @enderror" id="publisher" name="publisher" value="{{$game->publisher}}">
                                          @error('publisher')
                                          <span class="text-danger">{{$message}}</span>
                                          @enderror
                                          
                                    </div>
                                    <div class="mb-3">
                                          <label for="year" class="form-label custom-tx-color">Anno di uscita</label>
                                          <input type="number" class="form-control @error('year') is-invalid @enderror" id="year" name="year" value="{{$game->year}}">
                                          @error('year')
                                          <span class="text-danger">{{$message}}</span>
                                          @enderror
                                          
                                    </div>
                                    <div class="mb-3">
                                          <label for="plot" class="form-label custom-tx-color">Trama</label>
                                          <textarea name="plot" id="plot" class="form-control @error('plot') is-invalid @enderror" cols="20" rows="5">{{$game->plot}}</textarea>
                                          @error('plot')
                                          <span class="text-danger">{{$message}}</span>
                                          @enderror
                                          
                                    </div>
                                    <div class="mb-3 d-flex flex-column">
                                          <label for="">Immagine attuale</label>
                                          <img class="img-fluid img-edit" src="{{Storage::url($game->cover)}}" alt="copertina del gioco {{$game->title}}">
                                    </div>
                                    <div class="mb-3">
                                          <label for="cover" class="form-label custom-tx-color">Immagine di copertina</label>
                                          <input type="file" class="form-control @error('cover') is-invalid @enderror" id="cover" name="cover">
                                          @error('cover')
                                          <span class="text-danger">{{$message}}</span>
                                          @enderror
                                          
                                    </div>
                                    <button type="submit" class="btn btn-dark custom-tx-color">Modifica</button>
                              </form>
                        </div>
                  </div>
            </div>
      </section>
</x-layout>
