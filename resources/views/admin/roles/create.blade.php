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
    </div>
    <!-- /.card-header -->
    <div class="card-body">
  <form method="POST" action="{{ route('roles.store') }}">
      @csrf 
      <div class="form-group">
          <label for="exampleInputEmail1">الاسم</label>
          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="ادخل الاسم">
          @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
      </div>

      <div class="form-group">
          <label for="exampleInputEmail1">الوصف</label>
          <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" placeholder="ادخل الوصف">
          @error('slug')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
      </div>

      <div class="form-group">
          <label for="exampleInputEmail1">التصاريح</label>
          <div class="row">
          @if($permissions)
            @foreach($permissions as $permission)
            <div class="col-lg-4">
              <input type="checkbox" class="form-check-input" name="permissions[]"  value="{{$permission->id}}">
              <label class="form-check-label" for="exampleCheck1">{{$permission->name}}</label>
            </div>
            @endforeach
          @endif
          </div>
      </div>
  
  <button type="submit" class="btn btn-primary">حفظ</button>                     
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
    
    @endsection