<div class="row">
    <div class="col-md-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-edit"></i> Buttons
                </h3>
            </div>
            <div class="card-body pad table-responsive">
                <a style="width:30%;" href="{{ App\Helpers\RouteBuilder::localeRoute('cms.films.create') }}" class="btn btn-block btn-primary">@lang('messages.addFilm')</a>
            </div>
            <!-- /.card -->
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Быстрые фильтры</h3>
    
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body p-0" >
                  <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="far fa-circle text-danger"></i>
                        Отображать в слайдере
                      </a>
                    </li>
                    <!--<li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="far fa-circle text-warning"></i> Promotions
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="far fa-circle text-primary"></i>
                        Social
                      </a>
                    </li> -->
                  </ul>
                </div>
                <!-- /.card-body -->
              </div>
        </div>
    
    </div>
    <!-- /.col -->
</div>
