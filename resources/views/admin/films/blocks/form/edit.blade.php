@include('admin.films.blocks.form.errors')
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">General</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body">
                {{ Form::model($film, ['url' => App\Helpers\RouteBuilder::localeRoute('cms.films.update', ['film' => $film]), 'method' => 'PUT', 'files'=>true]) }}
                    @include('admin.films.blocks.form.fields')
                    <div class="form-group">
                        {{ Form::submit(trans('messages.filmEdit'), array('class' => 'btn btn-success')) }}
                    </div>
                {{ Form::close() }}
            </div>
        </div>

    </div>
</div>
