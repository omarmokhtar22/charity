@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
            <div class="card">
    <div class="card-header">
      <h3 class="card-title">مكتبة الصور</h3>
      @can('create', App\Models\Photo::class)
      <a href="/admin/photos/create" class="btn btn-primary btn-add">اضافة</a>
      @endcan
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <div class="row">
      @if($photos)
      @foreach($photos as $photo)
        <div class="col-md-4">
          <img class="photo-gallary" src="{{ asset('uploads/photos/'.$photo->filename)}}" alt="{{$photo->filename}}" width="300px" height="300px">
         <div style="text-align: center;">
         @can('update', $photo)
          <a href="/admin/photos/{{$photo->id}}/edit" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-edit"></i> تعديل</a>
         @endcan
         @can('delete', $photo)
          <form method="post" action="/admin/photos/{{$photo->id}}" style="display:inline">
                  {{ method_field('DELETE')}}
                  @csrf
                  <button type="submit" class="btn btn-sm btn-danger">حذف</button>
              </form> 
         @endcan     
        </div>
        </div> 
          @endforeach
      @endif
    </div>
      
      {{ $photos->links() }}
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