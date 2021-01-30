@extends('layouts.admin')

@section('content')
<section class="content">
  <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
    <div class="row">
            <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">اضافة خبر</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="/admin/news" enctype="multipart/form-data">
              {{ csrf_field()}}
                <div class="card-body">

                  <div class="form-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input"  name="pimage[]" id='pimage' multiple>
                      <label  class="custom-file-label news_img" for="customFile">اختر صوره</label>
                      @error('pimage')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                    <div id="images"></div>
                    <br/>
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
    <style>
      #images{
        border:1px solid #e1dfdf;
        overflow: hidden;
        margin-top: 10px;
      }
      .imgthumb{
        width: 150px;
        height: 150px;
        margin: 5px 5px;
        float: right;
        position: relative;
      }
      .imgthumb img{
          width: 100%;
          height: 100%;
      }
      .trash{
        color: white;
        font-size: 22px;
        position: absolute;
        z-index: 2;
        bottom: 0;
        left: -1px;
        position: absolute;
        bottom: 0;
        left: 10px;
      }
      .imgthumb a:hover{
        color:red;
      }
    </style>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#pimage').change(function(){

               /* var photo = $(this)[0].files[0];
                var formData = new FormData();
                formData.append('photo', photo);*/
                
                var formData = new FormData();
                var totalfiles = document.getElementById('pimage').files.length;
                var img_path = "{{asset('uploads/images')}}";
                  for (var index = 0; index < totalfiles; index++) {
                    formData.append("photo[]", document.getElementById('pimage').files[index]);
                  }
                    $.ajax({
                        url : "{{route('imageupload')}}",
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function (res) {
                            if(!res.success){alert(res.error)}
                            for(let item in res.filename)
                            {
                              console.log(res.filename[item]);
                              //$('#images').html('<img src="'+res.filename[item]+'"/>');
                              $( "#images" ).append( `<div class="imgthumb"><img src="${img_path}/${res.filename[item]}"/>
                              <a id="deleteimg" href="${res.filename[item]}" class="trash"><i class="fas fa-trash-alt"></i></a>
                              <input type="hidden" name="imgname[]" value="${res.filename[item]}"/>
                              </div>` );
                            }
                            ///admin/image/delete/${res.filename[item]};
                        }
                    });
            });
          //////////////////////////////////////////////////////////////////////////////////
              $(document).delegate('#deleteimg', 'click', function(){
                var photo = $(this).attr('href'); 
                $(this).parents('.imgthumb').remove();
                $.ajax({
                        url : "{{route('deleteimage')}}",
                        type: 'POST',
                        data: {'photo' : photo},
                        //processData: false,
                        //contentType: false,
                        success: function (res) {
                            console.log(res);
                        }
                    });
                  return false;
                  
              });
              
        })
    </script>
   
    @endsection