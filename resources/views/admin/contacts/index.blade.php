@extends('layouts.admin')

@section('content')
<section class="content">
  <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
    <div class="row">
            <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">التواصل</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="/admin/contacts/save" enctype="multipart/form-data">
              {{ csrf_field()}}
                <div class="card-body">

                  <div class="form-group">
                    <label for="code">الهاتف</label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="field_1" placeholder="ادخل الاسم" name="phone" value="{{ $contact->phone }}">
                    @error('phone')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="code">العنوان</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="value_1"  name="address" value="{{ $contact->address }}">
                    @error('address')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="code">البريد</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="field_2" placeholder="ادخل الاسم" name="email" value="{{ $contact->email }}">
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="code">whats app</label>
                    <input type="text" class="form-control @error('whatsapp') is-invalid @enderror" id="field_4"  name="whatsapp" value="{{ $contact->whatsapp }}">
                    @error('whatsapp')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="code">telegram</label>
                    <input type="text" class="form-control @error('telegram') is-invalid @enderror" id="field_2" placeholder="telegram" name="telegram" value="{{ $contact->telegram }}">
                    @error('telegram')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="code">youtube</label>
                    <input type="text" class="form-control @error('youtube') is-invalid @enderror" id="field_2" placeholder="youtube" name="youtube" value="{{ $contact->youtube }}">
                    @error('youtube')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="code">twitter</label>
                    <input type="text" class="form-control @error('twitter') is-invalid @enderror" id="field_2" placeholder="twitter" name="twitter" value="{{ $contact->twitter }}">
                    @error('twitter')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="code">facebook</label>
                    <input type="text" class="form-control @error('facebook') is-invalid @enderror" id="field_2" placeholder="facebook" name="facebook" value="{{ $contact->facebook }}">
                    @error('facebook')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="code">map</label>
                    <input type="text" class="form-control @error('map') is-invalid @enderror" id="field_2" placeholder="map" name="map" value="{{ $contact->map }}">
                    @error('map')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  
                  <div class="form-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input"  name="pimage" >
                      <label  class="custom-file-label news_img" for="customFile">اختر صوره</label>
                      @error('pimage')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
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
    @section('javascript')
    <script src="http://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
CKEDITOR.replace( 'summary-ckeditor', {
    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});
</script>
   
    @endsection