@extends('layouts.master')
 
@section('content')
<br>
<div class="container-fluid">
        <div class="pull-right">
            <a class="btn btn-login" href="{{url('/backend/navbars')}}"> 
            <i class="fas fa-bookmark"></i> Navbar List</a>
        </div>
        <br>
           @if ($errors->any())

                <div class="alert alert-danger alert-dismissible fade show">
                   <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach
                    </ul>

                </div>

            @endif
        <div class="card">
          <div class="card-header">
                <h3 class="card-title">Edit Navbar</h3>
            </div>
           <div class="card-body">
             <form method="post" action="{{ route('navbars.update', $navbar->id) }}">
                @csrf
 
                 @method('PUT')
                        <div class="form-group row">
                            <label for="name" class="col-md-3">{{ __('Navbar Name') }}</label>

                            <div class="col-md-9">
                                <input id="nav_name" type="text" class="form-control" name="nav_name" value="{{ $navbar->nav_name }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-3">{{ __('Navbar Link') }}</label>

                            <div class="col-md-9">
                                <input id="nav_link" type="text" class="form-control" name="nav_link" value="{{ $navbar->nav_link }}">
                            </div>
                        </div>
                      
                        <div class="form-group row mb-0">
                            <div class="col-md-10 offset-md-3">
                                <button type="submit" class="btn btn-login" >
                                    {{ __('Update') }}
                                </button>
                                <button type="reset" class="btn btn-default"  value="login">
                                    {{ __('Cancel') }}
                                </button>

                            </div>
               
                        </div>
              </form>
           </div>
        </div>
</div>

@endsection