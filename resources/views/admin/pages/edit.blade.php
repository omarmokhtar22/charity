@extends('layouts.admin')

@section('content')
<section class="content">
  <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
    <div class="row">
            <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">تعديل</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="/admin/pages/{{$page->id}}" enctype="multipart/form-data">
              {{ method_field('PUT') }}  
              <div class="card-body">
                  <div class="form-group">
                    {{ csrf_field()}}
                    <label for="code">العنوان</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $page->title}}">
                    @error('title')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="name">المحتوى</label>
                    <textarea class="form-control" id="summary-ckeditor" name="content">{{ $page->content}}</textarea>
                  </div>



                  
                  <div class="form-group">
                      <label for="exampleInputEmail1">الحاله</label>
                      <div class="row">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="status" name="published" value="1" @if($page->published) checked @endif>
                          <label class="form-check-label" for="status">نشط</label>
                        </div>
                      </div>
                  </div>

                  <div class="form-group">
                      <label for="exampleInputEmail1">يوفر رابط قائمة</label>
                      <div class="row">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="menu" name="menu" value="1" @if($page->menu) checked @endif>
                          <label class="form-check-label" for="status">نشط</label>
                        </div>
                      </div>
                  </div>


                  <div class="form-group">
                      <label for="exampleInputEmail1">رابط ام</label>
                      <div class="row">
                        <div class="form-control">
                          <select name="parent_menu" id="">
                            <option value="0">رئيسى</option>
                            @foreach ($pages as $pagemenu)
                              <option value="{{ $pagemenu->id }}" @if($pagemenu->id == $page->parent_id) selected @endif>-{{ $pagemenu->title }} </option>
                                @foreach ($pagemenu->childrenpages as $childpage)
                                  @include('child_menu_edit', ['child_category' => $childpage])
                                @endforeach
                            @endforeach
                          </select>
                        </div>
                      </div>
                  </div>

                  
                  <div class="form-group">
                      <label for="exampleInputEmail1">الترتيب</label>
                      <div class="row">
                        <div class="form-control">
                          <select name="order" id="order">
                            @for ($i=0;$i<=50;$i++)
                              <option value="{{$i}}" @if($page->order == $i) selected @endif>{{ $i }}</option>
                            @endfor
                          </select>
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
    @section('javascript')
    <script src="http://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
CKEDITOR.replace( 'summary-ckeditor', {
    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});
</script>
   
    @endsection