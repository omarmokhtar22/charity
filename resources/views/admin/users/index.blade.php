@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
            <div class="card">
    <div class="card-header">
      <h3 class="card-title">أدارة المستخدمين</h3>
      @can('create', App\User::class)
      <a href="/admin/users/create" class="btn btn-primary btn-add">اضافة عضو</a>
      @endcan
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    
      <table id="example1" class="table table-bordered table-striped yajra-datatable">
        <thead>
        <tr>
          <th>#</th>
          <th>الآسم</th>
          <th>البريد الالكترونى</th>
          <th>الحاله</th>
          <th>التحكم</th>
        </tr>
        </thead>
        <tbody>
       @if($users)
       @foreach($users as $user)
        <tr>
          <td>{{ $user->id}}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email}}</td>
          <td>@if($user->status == 0) موقوف @else نشط @endif</td>
          <td>
          @can('update', $user)
              <a href="/admin/users/{{$user->id}}/edit" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-edit"></i> تعديل</a> 
          @endcan 
          @can('delete', $user) 
              <form method="post" action="/admin/users/{{$user->id}}" style="display:inline">
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
      {{ $users->links() }}
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