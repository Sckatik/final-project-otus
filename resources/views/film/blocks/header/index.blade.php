<div class="sheader">
    <div class="poster"> 
        <img src="https://sckatik.ru/wp-content/uploads/2020/08/300x450.jpg">
    </div>
    <div class="data">
            <h1>{{ $film->title }}</h1>
        <div class="extra">
            <span class="tagline"></span><span class="date">{{ $film->year }}</span>
            <span class="country">  Корея Южная</span><span class="runtime">96 мин. / 01:36</span>				</div>
        
        <div class="starstruck-ptype" style=""></div>
        <div class="sgeneros">   
            <ul class="post-categories">
            <li>
                @each('film.blocks.header.list.genre', $film->genres, 'genre')</li>
            </ul>
        </div>
    </div>
</div>