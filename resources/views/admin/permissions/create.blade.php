@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
            <div class="card">
    <div class="card-header">
      <h3 class="card-title">اضافة تصريح</h3>
   
    </div>
    <!-- /.card-header -->
    <div class="card-body">
  <form method="POST" action="{{ route('permissions.store') }}">
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