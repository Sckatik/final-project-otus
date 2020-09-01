<article class="item" id="post-1">
    <div class="image">
        <a href="{{ $film["slug"] }}">
            <img src="/storage/{{ $film["image"]}}" />
        </a>
        <a href="{{ $film["slug"] }}">
            <div class="data">
                <h3 class="title">
                  {{ $film["title"] }}
                </h3>
                <span>
                   2020</span>
            </div>
        </a>
        <span class="item_type">{{ $film["type"] }}</span>
    </div>
</article>