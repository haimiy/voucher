@extends ('layouts.main')

@section('title','home')

@livewireStyles
@livewireScripts

@section('content')
 <div class="page-title">
              <div class="title_left">
                <h3>Users: <small>View all table</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>       

 @livewire('posts')
         
@endsection