@extends('layouts.master')
 
@section('content')
<br>
<div class="container-fluid">
   <div class="pull-right">
            <a class="btn btn-login" href="{{url('/backend/contacts')}}">
              <i class="fas fa-bookmark"></i> Contact List</a>
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
                      <h3 class="card-title">Add Contact</h3>
                  </div>

                <div class="card-body">
                    <form method="post" action="{{ route('contacts.store') }}">
                         @csrf
                          <div class="form-group row">
                              <label for="name" class="col-md-3">{{ __('Address') }}</label>
                              <div class="col-md-9">
                                <input id="address" type="text" class="form-control" name="address" placeholder="Address">
                            </div>
                           
                          </div>
                            <div class="form-group row">
                              <label for="name" class="col-md-3">{{ __('PhoneNo') }}</label>
                              <div class="col-md-9">
                                <input id="phoneNo" type="text" class="form-control" name="phoneNo" placeholder="PhoneNo">
                            </div>
                           
                          </div>
                          <div class="form-group row">
                              <label for="name" class="col-md-3">{{ __('Email') }}</label>
                              <div class="col-md-9">
                                <input id="email" type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                           
                          </div>
                          <div class="form-group row">
                              <label for="name" class="col-md-3">{{ __('Website') }}</label>
                              <div class="col-md-9">
                                <input id="website" type="text" class="form-control" name="website" placeholder="Website">
                            </div>
                           
                          </div>
            
                           <div class="form-group row">
                                  <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-login">
                                            {{ __('Save') }}
                                        </button>
                                        <button type="reset" class="btn btn-default">
                                            {{ __('Cancel') }}
                                        </button>
                                    </div>
                                    <div class="col-md-3"></div>
                            </div>
                          
                    </form>
                    
                </div>
            </div>
</div>

@endsection