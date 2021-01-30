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
    <table class="table table-bordered">
                  <thead>                  
                    <tr>
                    <th>{{ __('admin.no')}}</th>
                    <th>{{ __('admin.code')}}</th>
                    <th>{{ __('admin.name')}}</th>
                    <th>{{ __('admin.native')}}</th>
                    <th>{{ __('admin.status')}}</th>
                    <th>{{ __('admin.action')}}</th>
                   
                    </tr>
                  </thead>
                  <tbody>
                      @if($languages)
                      @foreach($languages as $language)
                    <tr>
                      <td>{{$language->id}}</td>
                      <td>{{$language->code}}</td>
                      <td>{{$language->name}} </td>
                      <td>{{$language->native}}</td>
                      <td>@if($language->status) {{ __('admin.active')}} @else {{__('admin.disabled')}} @endif</td>
                      <td>
                      <a href="#edit" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a> 
                      <a href="#edit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-edit"></i> delete</a>
                      </td>
                    </tr>
                    @endforeach
                    @endif
                    
                  </tbody>
                </table>

      
    </div>
    <!-- /.card-body -->
    <!-- card-footer -->
    <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                {{ $languages->links() }}
                </ul>
              </div>
        <!-- /. card-footer -->      
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
    
    @endsection