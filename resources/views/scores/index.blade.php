@foreach($scores as $score) 
                    <div>
                      <a href="/scorehub2.0/public/scores/{{ $score->id }}"> {{ $score->id }} </a>
                    </div>
                  @endforeach