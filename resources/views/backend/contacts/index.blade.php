@extends('layouts.master')
 
@section('content')
<br>
<div class="container-fluid">
    <div class="pull-right">
       <a class="btn btn-login" href="{{ route('contacts.create') }}"> <i class="fas fa-plus"></i> Add New</a>
    </div><br>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
                <p>{{ $message }}</p>
            </div>
        @endif
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Contact List</h3>
              </div>
            @if(count($contacts)>0)
              <!-- /.card-header -->
              <div class="card-body">
                   <table class="table table-bordered inlinetb">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Address</th>
                    <th>PhoneNo</th>
                    <th>Email</th>
                    <th>Website</th>
                    <th><i class="fas fa-edit"></i> Edit</th>
                    <th><i class="fas  fa-trash"></i> Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($contacts as $c)
                      <tr>
                          <td>{{++$i}}</td>
                          <td>{{$c->address}}</td>
                          <td>{{$c->phoneNo}}</td>
                          <td>{{$c->email}}</td>
                          <td>{{$c->website}}</td>
                         
                          <td> <a href="{{ route('contacts.edit',$c->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a></td>
                          <td>
                              <form action="{{ route('contacts.destroy', $c->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit"> <i class="fas  fa-trash"></i> Delete</button>
                              </form>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
                </table><br>
                    {!! $contacts->links() !!}
              </div>
              @else
               <div>
                <h3 style="text-align:center;">Contact List empty!Please add new exchange category.</h3>
               </div>
            @endif
          </div>
</div>

@endsection