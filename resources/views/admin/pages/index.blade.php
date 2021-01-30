@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
            <div class="card">
    <div class="card-header">
      <h3 class="card-title">أدارة الصفحات</h3>
      @can('create', App\Models\Page::class)
      <a href="/admin/pages/create" class="btn btn-primary btn-add">اضافة صفحه</a>
      @endcan
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    
      <table id="example1" class="table table-bordered table-striped yajra-datatable">
        <thead>
        <tr>
          <th>#</th>
          <th>العنوان</th>
          <th>الحاله</th>
          <th>التحكم</th>
        </tr>
        </thead>
        <tbody>
       @if($pages)
       @foreach($pages as $page)
        <tr>
          <td>{{ $page->id}}</td>
          <td>{{ $page->title }}</td>
          <td>@if($page->published == 0) غير منشور @else منشور @endif</td>
          <td>
          @can('update', $page)
              <a href="/admin/pages/{{$page->id}}/edit" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-edit"></i> تعديل</a> 
          @endcan 
          @can('delete', $page) 
              <form method="post" action="/admin/pages/{{$page->id}}" style="display:inline">
                  {{ method_field('DELETE')}}
                  @csrf
                  <button type="submit" class="btn btn-sm btn-danger">حذف</button>
              </form>
          @endcan    
            </td>
        </tr>
        @endforeach
        @endif
        </tbody>
        
      </table>
      {{ $pages->links() }}
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
    
    @endsection