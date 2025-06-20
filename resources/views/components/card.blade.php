<a href="{{route('game.show',$game)}}" class="text-decoration-none">
      <div class="card mb-3">
            <div class="row g-0">
                  <div class="col-md-4 col-4">
                        <img src="{{ Storage::url($game->cover) }}" class="m-1 img-fluid rounded-start img-card"
                        alt="copertina del gioco {{ $game->title }}">
                  </div>
                  <div class="col-7 col-md-7">
                        <div class="card-body">
                              <h5 class="card-title">{{ $game->title }}</h5>
                              <p class="card-text">
                                    {{ Str::limit($game->plot, 100) }}
                                    
                              </p>
                              <p class="card-text">{{ $game->year }}</p>
                              <p class="card-text"><small class="text-light">{{ $game->publisher }}</small></p>
                        </div>
                  </div>
            </div>
      </div>
</a>
