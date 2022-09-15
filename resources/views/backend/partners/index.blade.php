@extends('layouts.master')
 
@section('content')
<br>
<div class="container-fluid">
    <div class="pull-right">
       <a class="btn btn-login" href="{{ route('partners.create') }}"> <i class="fas fa-plus"></i> Add New</a>
    </div><br>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
                <p>{{ $message }}</p>
            </div>
        @endif
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Partner List</h3>
              </div>
            @if(count($partners)>0)
              <!-- /.card-header -->
              <div class="card-body">
                   <table class="table table-bordered inlinetb">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Photo</th>
                    <th><i class="fas fa-edit"></i> Edit</th>
                    <th><i class="fas  fa-trash"></i> Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($partners as $p)
                      <tr>
                          <td>{{++$i}}</td>
                          <td><img src="{{ URL::to('/') }}/uploadImg/partners/{{ $p->image }}" width="100px" height="70px"></td>
                          <td> <a href="{{ route('partners.edit',$p->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a></td>
                          <td>
                              <form action="{{ route('partners.destroy', $p->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit"> <i class="fas  fa-trash"></i> Delete</button>
                              </form>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
                </table><br>
                    {!! $partners->links() !!}
              </div>
              @else
               <div>
                <h3 style="text-align:center;">Partner List empty!Please add new partner.</h3>
               </div>
            @endif
          </div>
</div>

@endsection