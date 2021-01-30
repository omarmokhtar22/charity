@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
            <div class="card">
    <div class="card-header">
      <h3 class="card-title">{{__('admin.languages')}}</h3>
      <a href="{{ LaravelLocalization::localizeUrl('/admin/languages/create') }}" class="btn btn-primary btn-add">{{ __('admin.add')}}</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    
      <table id="example1" class="table table-bordered table-striped yajra-datatable">
        <thead>
        <tr>
          <th>{{ __('admin.no')}}</th>
          <th>{{ __('admin.code')}}</th>
          <th>{{ __('admin.name')}}</th>
          <th>{{ __('admin.native')}}</th>
          <th>{{ __('admin.action')}}</th>
          <th>{{ __('admin.status')}}</th>
        </tr>
        </thead>
        <tbody>
       
        <tr>
          <td>Other browsers</td>
          <td>All others</td>
          <td>-</td>
          <td>-</td>
          <td>U</td>
          <td>U</td>
        </tr>
        </tbody>
        
      </table>
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
            //{data: 'DT_RowIndex', name: 'DT_RowIndex'}, show ordered number
            {data: 'id', name: 'DT_RowIndex'}, //show id from table
            {data: 'code', name: 'code'},
            {data: 'name', name: 'name'},
            {data: 'direction', name: 'direction'},
            {data: 'status', name: 'status'},
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