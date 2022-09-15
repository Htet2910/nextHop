@extends('layouts.master')
 
@section('content')
<br>
<div class="container-fluid">
    <div class="pull-right">
       <a class="btn btn-login" href="{{ route('navbars.create') }}"> <i class="fas fa-plus"></i> Add New</a>
    </div><br>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
                <p>{{ $message }}</p>
            </div>
        @endif
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Navbar</h3>
              </div>
            @if(count($navbars)>0)
              <!-- /.card-header -->
              <div class="card-body">
                   <table class="table table-bordered inlinetb">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Navbar Name</th>
                    <th>Navbar Link</th>
                    <th><i class="fas fa-edit"></i> Edit</th>
                    <th><i class="fas  fa-trash"></i> Delete</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($navbars as $n)
                      <tr>
                          <td>{{++$i}}</td>
                          <td>{{$n->nav_name}}</td>
                          <td>{{$n->nav_link}}</td>
                         
                          <td> <a href="{{ route('navbars.edit',$n->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a></td>
                          <td>
                              <form action="{{ route('navbars.destroy', $n->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit"> <i class="fas  fa-trash"></i> Delete</button>
                              </form>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>
                <br>
                    {!! $navbars->links() !!}
              </div>
              @else
               <div>
                <h3 style="text-align:center;">Navbar List empty!Please add new navbar.</h3>
               </div>
            @endif
          </div>
</div>

@endsection