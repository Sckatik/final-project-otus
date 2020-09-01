
@if (!Auth::guest())
    <div id="fakeplayer" class="iframe_video ">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/5qap5aO4i9A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
@else
    <p>Для просмотра фильма авторизуйтесь</p>
    <p><a href="/login">Войти</a> или <a href="/register">Зарегистрироваться</a></p>
@endIf
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