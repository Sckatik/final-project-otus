<div class="form-group">
    {{ Form::label('title', trans('messages.filmTitle')) }}
    {{ Form::text('title', null, array('class'=>'form-control')) }}
</div>
<div class="form-group">
    {{ Form::label('meta_title', trans('messages.filmMetaTitle')) }}
    {{ Form::text('meta_title', null, array('class'=>'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('meta_description', trans('messages.filmMetaDescription')) }}
    {{ Form::text('meta_description', null, array('class'=>'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('keywords', trans('messages.filmKeyword')) }}
    {{ Form::text('keywords', null, array('class'=>'form-control')) }}
</div>
<div class="form-group">
    {{ Form::label('genre', trans('messages.filmGenre')) }}
    <select style="width:100%;" name="genres[]" class="select2-purple" multiple="multiple">
        @foreach($genres as $item)
            @if($item['select'])
                <option selected value="{{ $item['id'] }}">{{ $item['name'] }}</option>
            @else
                <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
            @endIf
        @endforeach
    </select>
</div>

<!--<div class="col-12 col-sm-6" data-select2-id="41">
        <div class="form-group" data-select2-id="40">
          <label>Multiple (.select2-purple)</label>
          <div class="select2-purple" data-select2-id="39">
            <select class="select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" data-dropdown-css-class="select2-purple" style="width: 100%;" data-select2-id="15" tabindex="-1" aria-hidden="true">
              <option data-select2-id="29">Alabama</option>
              <option data-select2-id="30">Alaska</option>
              <option data-select2-id="31">California</option>
              <option data-select2-id="32">Delaware</option>
              <option data-select2-id="33">Tennessee</option>
              <option data-select2-id="34">Texas</option>
              <option data-select2-id="35">Washington</option>
            </select><span class="select2 select2-container select2-container--default select2-container--below select2-container--focus select2-container--open" dir="ltr" data-select2-id="16" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="true" tabindex="-1" aria-disabled="false" aria-owns="select2-y154-results" aria-activedescendant="select2-y154-result-kkt6-Alaska"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="Alaska" data-select2-id="55"><span class="select2-selection__choice__remove" role="presentation">×</span>Alaska</li><li class="select2-selection__choice" title="California" data-select2-id="56"><span class="select2-selection__choice__remove" role="presentation">×</span>California</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;" aria-controls="select2-y154-results" aria-activedescendant="select2-y154-result-kkt6-Alaska"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
          </div>
        </div>
</div>-->
<div class="form-group">
<select class="form-control yearsSelect" name="type" style="width: 100%;" tabindex="-1" aria-hidden="true">
    <?//dump($typeFilms); ?>
    @foreach($typeFilms as $item)
        @if($item['select'])
            <option selected value="{{ $item['id'] }}">{{ $item['name'] }}</option>
        @else
            <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
        @endIf
    @endforeach
  </select>
</div>
<div class="form-group">
    {{ Form::label('display_in_slider', trans('messages.displayInSlider')) }}
    {{ Form::select('display_in_slider', [ 1 =>trans('messages.displayInSliderYes'),
    0 => trans('messages.displayInSliderNo')]) }}
</div>
<div class="form-group">
    {{ Form::label('slug', trans('messages.filmSlug')) }}
    {{ Form::text('slug', null, array('class'=>'form-control')) }}
</div>
<div class="form-group">
    {{ Form::label('year', trans('messages.filmYear')) }}
    {{ Form::text('year', null, array('class'=>'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('status', trans('messages.filmStatus')) }}
    @if (isset($moderator) && $moderator == true)
        {{ Form::select('status', [
        0 => trans('messages.filmStatusNotPublished')]) }}
    @else
        {{ Form::select('status', [ 1 =>trans('messages.filmStatusPublished'),
        0 => trans('messages.filmStatusNotPublished')]) }}
    @endif

</div>
<div class="form-group">
    {{ Form::label('content', trans('messages.filmContent')) }}
    {{ Form::textarea('content', null, array('class'=>'form-control')) }}
</div>
