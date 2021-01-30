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
      @can('create', App\Models\Role::class)
      <a href="/admin/roles/create" class="btn btn-primary btn-add">اضافة </a>
      @endcan
    </div>
    <!-- /.card-header -->
    <div class="card-body">
<table class="table">
  <thead class="thead-dark">
  <tr>
      <th scope="col">#</th>
      <th scope="col">الدور</th>
      <th scope="col">الوصف</th>
      <th scope="col">التصاريح</th>
      <th scope="col">الآدوات</th>
    </tr>
  </thead>
  <tbody>
    @if($roles)
      @foreach($roles as $role)
    <tr>
      <th scope="row">{{ $role->id}}</th>
      <td>{{ $role->name}}</td>
      <td>{{ $role->slug}}</td>
      <td>permission</td>
      <td>
      @can('update', $role)
          <a href="{{route('roles.edit',['role' => $role->id])}}" class="btn btn-primary">تعديل</a>
      @endcan    
      @can('delete', $role)
          <form method="post" action="{{ route('roles.destroy',['role' => $role->id])}}" style="display:inline">
            {{ method_field('DELETE')}}
            @csrf
            <button type="submit" class="btn btn-danger">حذف</button>
          </form>
      @endcan    
        </td>
    </tr>
    @endforeach
    <tr><td colspan="5">لايوجد ادوار مضافه</td></tr>
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