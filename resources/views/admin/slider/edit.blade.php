@extends('layouts.admin')

@section('content')
<section class="content">
  <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
    <div class="row">
            <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">تعديل بانر</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="/admin/slider/{{$slider->id}}" enctype="multipart/form-data">
              {{ method_field('PUT') }}
                <div class="card-body">
                <div class="form-group">
                    {{ csrf_field()}}
                    <label for="code">العنوان</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"  name="title" value="{{$slider->title}}">
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
                    <label for="name">الوصف</label>
                    <textarea class="form-control" name="body">{{ $slider->body}}</textarea>
                  </div>


                  <div class="form-group">
                      <label for="exampleInputEmail1">الحاله</label>
                      <div class="row">
                      <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="status" name="published" value="1"  @if($slider->published) checked @endif>
                    <label class="form-check-label" for="status">منشور</label>
                  </div>
                      </div>
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
   