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
                <h3 class="card-title">Edit Contact</h3>
            </div>
           <div class="card-body">
             <form method="post" action="{{ route('contacts.update', $contact->id) }}">
                @csrf
 
                 @method('PUT')
                 <div class="form-group row">
                            <label for="name" class="col-md-3">{{ __('Address') }}</label>

                            <div class="col-md-9">
                                <input id="contact_address" type="text" class="form-control" 
                                name="address" value="{{ $contact->address }}">
                            </div>
                </div>
                <div class="form-group row">
                            <label for="name" class="col-md-3">{{ __('PhoneNo') }}</label>

                            <div class="col-md-9">
                                <input id="contact_phoneNo" type="text" class="form-control" name="phoneNo" value="{{ $contact->phoneNo }}">
                            </div>
                </div>
                <div class="form-group row">
                            <label for="name" class="col-md-3">{{ __('Email') }}</label>

                            <div class="col-md-9">
                                <input id="contact_email" type="email" class="form-control" name="email" value="{{ $contact->email }}">
                            </div>
                </div>
                <div class="form-group row">
                            <label for="name" class="col-md-3">{{ __('Website') }}</label>

                            <div class="col-md-9">
                                <input id="contact_website" type="text" class="form-control" name="website" value="{{ $contact->website }}">
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