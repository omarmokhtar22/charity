@extends('layouts.admin')

@section('content')
<style type="text/css">

    
  </style>
<section class="content">
  <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
    <div class="row">
            <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">اضافة صور</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('images.upload') }}" method="post" enctype="multipart/form-data">

<div class="card-body">
      
                {{ csrf_field() }}

<input type="file" id="uploadFile" name="uploadFile[]" multiple/>

<input type="submit" class="btn btn-success" name='submitImage' value="Upload Image"/>




      
                 
                </div>
                <!-- /.card-body -->

              
              </form>
              <br/>

<div id="image_preview"></div>
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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="{{ asset('themes/admin') }}/jquery.form.min.js"></script>
<script>

$(document).ready(function(){
    $("#uploadFile").change(function(){

$('#image_preview').html("");

var total_file=document.getElementById("uploadFile").files.length;

for(var i=0;i<total_file;i++)

{
     console.log(i);
 $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'>");

}

});



$('form').ajaxForm(function() 

{

alert("Uploaded SuccessFully");

}); 
});
</script>
   
    @endsection