@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
            <div class="card">
    <div class="card-header">
      <h3 class="card-title">عرض</h3>
      @can('create', App\Models\Permission::class)
      <a href="/admin/permissions/create" class="btn btn-primary btn-add">اضافة </a>
      @endcan
    </div>
    <!-- /.card-header -->
    <div class="card-body">
<table class="table">
  <thead class="thead-dark">
  <tr>
      <th scope="col">#</th>
      <th scope="col">التصريح</th>
      <th scope="col">الوصف</th>
      <th scope="col">الآدوات</th>
    </tr>
  </thead>
  <tbody>
    @if($permissions)
      @foreach($permissions as $permission)
    <tr>
      <th scope="row">{{ $permission->id}}</th>
      <td>{{ $permission->name}}</td>
      <td>{{ $permission->slug}}</td>
      <td>
      @can('update', $permission)
          <a href="{{route('permissions.edit',['permission' => $permission->id])}}" class="btn btn-primary">تعديل</a>
      @endcan
      @can('delete', $permission)   
          <form method="post" action="{{ route('permissions.destroy',['permission' => $permission->id])}}" style="display:inline">
            {{ method_field('DELETE')}}
            @csrf
            <button type="submit" class="btn btn-danger">حذف</button>
          </form>
      @endcan    
        </td>
    </tr>
    @endforeach
    <tr><td colspan="5">لايوجد صلاحيات مضافه</td></tr>
    @endif
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
    
    @endsection