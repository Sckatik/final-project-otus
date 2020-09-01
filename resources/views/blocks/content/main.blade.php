
<div id="slider-movies-tvshows" class="animation-1 slider">
    @each('blocks.content.sliderMain.item', $filmsInSlider, 'film')
   <!-- <article class="item" id="post-1">
        <div class="image">
            <a href="#">
                <img src="https://sckatik.ru/wp-content/uploads/2020/05/Wonder_Woman_hero_Wonder_Woman_2017_film_Gal_529948_3840x2400-300x188.jpg" />
            </a>
            <a href="#">
                <div class="data">
                    <h3 class="title">
                        Название фильма
                    </h3>
                    <span>
                       2020</span>
                </div>
            </a>
            <span class="item_type">Фильм</span>
        </div>
    </article>
    <article class="item" id="post-1">
        <div class="image">
            <a href="#">
                <img src="https://sckatik.ru/wp-content/uploads/2020/05/Wonder_Woman_hero_Wonder_Woman_2017_film_Gal_529948_3840x2400-300x188.jpg" />
            </a>
            <a href="#">
                <div class="data">
                    <h3 class="title">
                        Название фильма
                    </h3>
                    <span>
                       2020</span>
                </div>
            </a>
            <span class="item_type">Фильм</span>
        </div>
    </article>
    <article class="item" id="post-1">
        <div class="image">
            <a href="#">
                <img src="https://sckatik.ru/wp-content/uploads/2020/05/Wonder_Woman_hero_Wonder_Woman_2017_film_Gal_529948_3840x2400-300x188.jpg" />
            </a>
            <a href="#">
                <div class="data">
                    <h3 class="title">
                        Название фильма
                    </h3>
                    <span>
                       2020</span>
                </div>
            </a>
            <span class="item_type">Фильм</span>
        </div>
    </article>-->
</div>

<header>
    <h2>{{ $filmByGenreKomediya['genre']}}</h2>
    <div class="nav_items_module dt-boeviki">
        <a class="btn prev3">
            <i class="icon-caret-left"></i>
        </a>
        <a class="btn next3">
            <i class="icon-caret-right"></i>
        </a>
    </div>
    <span>{{count($filmByGenreKomediya['items'])}}<a href="/category/{{ $filmByGenreKomediya["slug"] }}/" class="see-all">Посмотреть все</a>
    </span>
</header>
<div id="dt-boeviki" class="items owl-carousel owl-theme" >
    @each('blocks.content.sliderGenre.item', $filmByGenreKomediya['items'], 'film' )
</div>

<header>
    <h2>{{ $filmByGenreDrama['genre']}}</h2>
    <div class="nav_items_module dt-komedi">
            <a class="btn prev3">
                <i class="icon-caret-left"></i>
            </a>
            <a class="btn next3">
                <i class="icon-caret-right"></i>
            </a>
    </div>
    <span>{{count($filmByGenreDrama['items'])}}<a href="/category/{{ $filmByGenreDrama["slug"] }}/" class="see-all">Посмотреть все</a>
    </span>
</header>
<div id="dt-komedi" class="items owl-carousel owl-theme" >
    @each('blocks.content.sliderGenre.item', $filmByGenreDrama['items'], 'film' )
</div>
