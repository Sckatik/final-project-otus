<ul class="tab-content">
    <li class="sbox">
        <p>&nbsp;</p>
        {!! $film->content !!}
        @if(!empty($film->kinopoisk_raiting))
            <div class="custom_fields"> 
                <b class="variante">Кинопоиск рейтинг</b>
                <span class="valor">
                    <strong>{{ $film->kinopoisk_raiting }}</strong>1,059 голосов							
                </span>
            </div>
        @endif
        @if(!empty($film->imdb_raiting))
            <div class="custom_fields"> 
                <b class="variante">IMDb Рейтинг</b>
                <span class="valor">
                    <strong>{{ $film->imdb_raiting }}</strong>1,059 голосов							
                </span>
            </div>
        @endif
    </li>
    <li class="sbox">
        <p>&nbsp;</p>
        <p>Список актеров (в разработке)</p>
    </li>
</ul>