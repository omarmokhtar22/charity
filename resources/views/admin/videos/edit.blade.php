@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
            <div class="card">
    <div class="card-header">
      <h3 class="card-title">تعديل فيديو</h3>

    </div>
    <!-- /.card-header -->
    <div class="card-body">
  <form method="POST" action="{{ route('videos.update',['video' => $video->id]) }}">
  {{ method_field('put') }}
      @csrf 
      <div class="form-group">
          <label for="exampleInputEmail1">العنوان</label>
          <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{$video->title}}">
          @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
      </div>

      <div class="form-group">
          <label for="exampleInputEmail1">الكود</label>
          <input type="text" name="code" class="form-control @error('code') is-invalid @enderror" value="{{$video->code}}">
          @error('code')
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