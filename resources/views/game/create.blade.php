<x-layout>
      <section>
            <div class="container">
                  <div class="row">
                        <div class="col-12">
                              <h1 class="custom-tx-color">Aggiungi giochi</h1>
                        </div>
                  </div>
            </div>
      </section>
      
      <section>
            <div class="container">
                  <div class="row">
                        <div class="col-12 col-md-6">
                              <form action="{{route('game.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                          <label for="title" class="form-label custom-tx-color">Titolo</label>
                                          <input type="text" class="form-control  @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}">
                                          @error('title')
                                          <span class="text-danger">{{$message}}</span>
                                          @enderror
                                          
                                    </div>
                                    <div class="mb-3">
                                          <label for="publisher" class="form-label custom-tx-color">Casa di sviluppo</label>
                                          <input type="text" class="form-control @error('publisher') is-invalid @enderror" id="publisher" name="publisher" value="{{old('publisher')}}">
                                          @error('publisher')
                                          <span class="text-danger">{{$message}}</span>
                                          @enderror
                                          
                                    </div>
                                    <div class="mb-3">
                                          <label for="year" class="form-label custom-tx-color">Anno di uscita</label>
                                          <input type="number" class="form-control @error('year') is-invalid @enderror" id="year" name="year" value="{{old('title')}}">
                                          @error('year')
                                          <span class="text-danger">{{$message}}</span>
                                          @enderror
                                          
                                    </div>
                                    <div class="mb-3">
                                          <label for="plot" class="form-label custom-tx-color">Trama</label>
                                          <textarea name="plot" id="plot" class="form-control @error('plot') is-invalid @enderror" cols="20" rows="5">{{old('plot')}}</textarea>
                                          @error('plot')
                                          <span class="text-danger">{{$message}}</span>
                                          @enderror
                                          
                                    </div>
                                    
                                    <div class="mb-3">
                                          <label class="form-label custom-tx-color">Generi</label>
                                          <div>
                                                @foreach ($genres as $genre)
                                                <div class="form-check">
                                                      <input class="form-check-input @error('genres') is-invalid @enderror" type="checkbox" name="genres[]" value="{{$genre->id}}" id="genre{{$genre->id}}">
                                                      <label class="form-check-label" for="genre{{$genre->id}}" >
                                                            {{$genre->name}}
                                                      </label>
                                                </div>
                                                @endforeach
                                          </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    <div class="mb-3">
                                          <label for="cover" class="form-label custom-tx-color">Immagine di copertina</label>
                                          <input type="file" class="form-control @error('cover') is-invalid @enderror" id="cover" name="cover">
                                          @error('cover')
                                          <span class="text-danger">{{$message}}</span>
                                          @enderror
                                          
                                    </div>
                                    <button type="submit" class="btn btn-dark custom-tx-color">Conferma</button>
                              </form>
                        </div>
                  </div>
            </div>
      </section>
      
</x-layout>