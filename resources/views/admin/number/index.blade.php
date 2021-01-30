@extends('layouts.admin')

@section('content')
<section class="content">
  <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
    <div class="row">
            <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">الآرقام</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="/admin/numbers/save" enctype="multipart/form-data">
              {{ csrf_field()}}
                <div class="card-body">

                  <div class="form-group">
                    <label for="code">اسم الحقل</label>
                    <input type="text" class="form-control @error('field_1') is-invalid @enderror" id="field_1" placeholder="ادخل الاسم" name="field_1" value="{{ $number->field_1 }}">
                    @error('field_1')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="code">القيمة</label>
                    <input type="text" class="form-control @error('value_1') is-invalid @enderror" id="value_1"  name="value_1" value="{{ $number->value_1 }}">
                    @error('value_1')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="code">اسم الحقل</label>
                    <input type="text" class="form-control @error('field_2') is-invalid @enderror" id="field_2" placeholder="ادخل الاسم" name="field_2" value="{{ $number->field_2 }}">
                    @error('field_2')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="code">القيمة</label>
                    <input type="text" class="form-control @error('value_2') is-invalid @enderror" id="value_2"  name="value_2" value="{{ $number->value_2 }}">
                    @error('value_2')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="code">اسم الحقل</label>
                    <input type="text" class="form-control @error('field_3') is-invalid @enderror" id="field_3" placeholder="ادخل الاسم" name="field_3" value="{{ $number->field_3 }}">
                    @error('field_3')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="code">القيمة</label>
                    <input type="text" class="form-control @error('value_3') is-invalid @enderror" id="value_3"  name="value_3" value="{{ $number->value_3 }}">
                    @error('value_3')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="code">اسم الحقل</label>
                    <input type="text" class="form-control @error('field_4') is-invalid @enderror" id="field_4" placeholder="ادخل الاسم" name="field_4" value="{{ $number->field_4 }}">
                    @error('field_4')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="code">القيمة</label>
                    <input type="text" class="form-control @error('value_4') is-invalid @enderror" id="value_4"  name="value_4" value="{{ $number->value_4 }}">
                    @error('value_4')
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
    <script src="http://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
CKEDITOR.replace( 'summary-ckeditor', {
    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});
</script>
   
    @endsection