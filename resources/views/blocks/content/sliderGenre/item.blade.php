<article id="post-{{$film["id"]}}" class="item movies slider-main-page">
        <div class="poster">
                <img src="https://sckatik.ru/wp-content/uploads/2020/05/x1000-1-185x278.jpg" alt="фильм">
                <div class="rating">
                    <i class="icon-star2 color-yellow"></i>
                    7.79
                </div>
                <div class="mepo">
                </div>
                <a href="{{ $film['slug'] }}">
                    <div class="see"></div>
                </a>
            </div>
            <div class="data">
                <h3>
                    <a href="{{ $film['slug'] }}">{{$film["title"]}}</a>
                </h3>
                <span>2010</span>
            </div>
</article>