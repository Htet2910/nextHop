@extends('layouts.master')
 
@section('content')
<br>
<div class="container-fluid">
   <div class="pull-right">
            <a class="btn btn-login" href="{{url('/backend/services')}}">
              <i class="fas fa-bookmark"></i> Service List</a>
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
                      <h3 class="card-title">Add Service</h3>
                  </div>

                <div class="card-body">
                    <form method="post" action="{{ route('services.store') }}" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group row">
                            
                              <label for="name" class="col-md-3">{{ __('Title') }}</label>
                              <div class="col-md-9">
                                <input id="title" type="text" class="form-control" name="title" placeholder="Title">
                            </div>
                           
                          </div>
                          <div class="form-group row">
                            
                            <label for="name" class="col-md-3">{{ __('Body') }}</label>
                              <div class="col-md-9">
                                 <textarea id="summernote" class="form-control" 
                                    name="body"></textarea> 
                             </div>
                           
                          </div>
                           <div class="form-group row">
                            
                            <label for="name" class="col-md-3">{{ __('Photo') }}</label>
                              <div class="col-md-9">
                                 <input type="file" name="image"> 
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
     <!-- DataTables  & Plugins -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset('/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ asset('/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<!-- jQuery -->
<script src="{{ asset('/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/dist/js/adminlte.min.js')}}"></script>


<!-- Select2 -->
<script src="{{ asset('/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{ asset('/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
<!-- InputMask -->
<script src="{{ asset('/plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('/plugins/inputmask/jquery.inputmask.min.js')}}"></script>
<!-- date-range-picker -->
<script src="{{ asset('/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap color picker -->
<script src="{{ asset('/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Bootstrap Switch -->
<script src="{{ asset('/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
<!-- BS-Stepper -->
<script src="{{ asset('/plugins/bs-stepper/js/bs-stepper.min.js')}}"></script>
<!-- dropzonejs -->
<script src="{{ asset('/plugins/dropzone/min/dropzone.min.js')}}"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Date and time picker
    // $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });
    $('#reservationdatetime').datetimepicker({ format: 'YYYY-MM-DD hh:mm:ss' });
    // $('#reservationdatetime1 > .form-control').prop('disabled', true);
    $('#reservationyear').datetimepicker({ format: 'YYYY-MM-DD' });
   

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

   

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
</script>
<!-- jQuery -->
<script src="{{ asset('/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/dist/js/adminlte.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- CodeMirror -->
<script src="{{ asset('./plugins/codemirror/codemirror.js')}}"></script>
<script src="{{ asset('./plugins/codemirror/mode/css/css.js')}}"></script>
<script src="{{ asset('/plugins/codemirror/mode/xml/xml.js')}}"></script>
<script src="{{ asset('/plugins/codemirror/mode/htmlmixed/htmlmixed.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('/dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()
    

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>

@endsection