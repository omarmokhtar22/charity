@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
            <div class="card">
    <div class="card-header">
      <h3 class="card-title">تعديل</h3>

    </div>
    <!-- /.card-header -->
    <div class="card-body">
  <form method="POST" action="{{ route('photos.update',['photo' => $photo->id]) }}" enctype="multipart/form-data">
  {{ method_field('put') }}
      @csrf 
      <div class="form-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input"  name="photo" >
                      <label  class="custom-file-label news_img" for="customFile">اختر صوره</label>
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