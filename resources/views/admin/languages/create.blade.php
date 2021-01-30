@extends('layouts.admin')

@section('content')
<section class="content">
  <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
    <div class="row">
            <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">{{ __('admin.add-lang')}}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ LaravelLocalization::localizeUrl('/admin/languages') }}">
                <div class="card-body">
                  <div class="form-group">
                    {{ csrf_field()}}
                    <label for="code">{{ __('admin.code')}}</label>
                    <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" placeholder="{{ __('admin.enter')}} {{ __('admin.code')}}" name="code" value="{{Request::old('code')}}">
                    @error('code')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="name">{{ __('admin.name')}}</label>
                    <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name" placeholder="{{ __('admin.enter')}} {{ __('admin.name')}}" name="name">
                    @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">{{ __('admin.native')}}</label>
                    <input type="text" class="form-control" id="native" placeholder="{{ __('admin.enter')}} {{ __('admin.native')}}" name="native">
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="status" name="status" value="1">
                    <label class="form-check-label" for="status">{{ __('admin.active')}}</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">{{__('admin.submit')}}</button>
                </div>
              </form>
            </div>
       <!-- /.card-body -->
        </div>
      <!-- /.card -->
    </div>    
          <!-- ./col -->    
 </div>
        <!-- /.row -->

    </div><!-- /.container-fluid -->
</section>
    @endsection
    @section('javascript')
    @include('admin.includes.datatable')
    <script type="text/javascript">
  $(function () {
    
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('languages.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'code', name: 'code'},
            {data: 'name', name: 'name'},
            {data: 'direction', name: 'direction'},
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ],
        "oLanguage": 
        {
          "sLengthMenu": "{{ __('admin.display')}} _MENU_ {{__('admin.records')}}",
          "sSearch": "{{ __('admin.search') }} :",
          "sEmptyTable": "{{ __('admin.empty-table')}}" ,
          "info": "Show page _PAGE_ of _PAGES_",
          "oPaginate": 
          {
            "sFirst": "First page", // This is the link to the first page
            "sPrevious": "{{ __('admin.previous')}}", // This is the link to the previous page
            "sNext": "{{ __('admin.next')}}", // This is the link to the next page
            "sLast": "Last page" // This is the link to the last page
          }
        }
    });
    
  });
</script>
    @endsection