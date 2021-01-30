@extends('layouts.admin')

@section('content')
<section class="content">
  <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
    <div class="row">
            <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">تعديل </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="/admin/sponsers/{{$sponser->id}}" enctype="multipart/form-data">
              {{ method_field('PUT') }}
                <div class="card-body">
                <div class="form-group">
                    {{ csrf_field()}}
                    <label for="code">العنوان</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"  name="title" value="{{$sponser->title}}">
                    @error('title')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  

                  


                  <div class="form-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input"  name="pimage" >
                      <label  class="custom-file-label news_img" for="customFile">اختر صوره</label>
                    </div>
                  </div>

          
                  <div class="form-group">
                    <label for="name">الرابط</label>
                    <input type="text" class="form-control @error('url') is-invalid @enderror" id="title" placeholder="ادخل الرابط " name="url" value="{{ $sponser->url}}">
                    @error('url')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">حفظ</button>
                </div>
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
    <script src="http://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
CKEDITOR.replace( 'summary-ckeditor', {
    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});
</script>
    @endsection