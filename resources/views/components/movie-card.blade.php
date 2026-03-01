@props(['film', 'imagePath'])

<div class="movie-card">
    <div class="film-image">
        @if($imagePath)
            <img src="{{ asset('images/films/' . $imagePath) }}" alt="{{ $film['name'] }}">
        @else
            <img src="{{ asset('images/films/no-image.png') }}" alt="{{ $film['name'] }}">
        @endif
    </div>
    <div class="film-content">
        <h4 class="film-name">{{ $film['name'] }}</h4>
        <div class="film-badges">
            @foreach($film['badges'] as $badge)
                <span class="badge">{{ $badge }}</span>
            @endforeach
        </div>
        <div class="film-data">
            <div class="film-sessions">
                @foreach($film['sessions'] as $session)
                    <div class="session-col">
                        <div class="session-time-col">
                            <span class="session-time">{{ $session['time'] }}</span>
                            <div class="session-col session-format-price-col">
                                <span>{{ $session['format'] }}</span>
                                <span>{{ $session['price'] }}</span>
                            </div>
                        </div>
                        
                        <div class="session-hall-col">
                            <span >{{ $session['hall'] }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
