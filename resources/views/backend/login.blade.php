@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            @if($message =Session::get('error'))
            <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>{{$message}}</strong>
          </div>
        @endif
         @if(count($errors)>0)
          <div class="alert alert-danger alert-dismissible fade show"><button type="button" class="close" data-dismiss="alert">&times;</button>
             <ul style="list-style-type: none;">
                @foreach($errors->all() as $error)
                 <li>{{$error}}</li>
                @endforeach
             </ul>
          </div>
        @endif
            <div class="card">
                <div class="card-header" style="background-color: #1b1b1b;color: #fff;">{{ __('LOGIN TO ') }}
                    <a style="color:#fe6614;font-size: 25px;">{{ __('NextHop') }}</a>
                </div>
                
                <div class="card-body">
                    <form method="POST" action="{{url('/backend/checklogin')}}">
                        @csrf
                        <div class="form-group row">
                            <label for="login_name" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="login_name" type="text" class="form-control" name="login_name">
                            </div>
                        </div>
                       <!--  <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="email" class="form-control" name="email">
                            </div>
                        </div> -->

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control " name="password">
                            </div>
                        </div>
                       <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-login" name="login" value="login">
                                    {{ __('Login') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection