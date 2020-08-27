
@include('films.blocks.list.header', ['genreFilm' => $genreFilm])
<div class="items">
    @each('films.blocks.list.item', $genreFilm->films, 'film')
</div>
{{ $genreFilm->films()->paginate()->links() }}
