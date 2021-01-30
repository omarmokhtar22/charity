@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
            <div class="card">
    <div class="card-header">
      <h3 class="card-title">قالو عنا</h3>
   
      <a href="/admin/reviews/create" class="btn btn-primary btn-add">اضافة مقاله</a>
  
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    
      <table id="example1" class="table table-bordered table-striped yajra-datatable">
        <thead>
        <tr>
          <th>#</th>
          <th>العنوان</th>
          <th>الحاله</th>
          <th>التحكم</th>
        </tr>
        </thead>
        <tbody>
       @if($reviews)
       @foreach($reviews as $post)
        <tr>
          <td>{{ $post->id}}</td>
          <td>{{ $post->title }}</td>
          <td>@if($post->published == 0) غير منشور @else منشور @endif</td>
          <td>
       
              <a href="/admin/reviews/{{$post->id}}/edit" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-edit"></i> تعديل</a> 
          
              <form method="post" action="/admin/reviews/{{$post->id}}" style="display:inline">
                  {{ method_field('DELETE')}}
                  @csrf
                  <button type="submit" class="btn btn-sm btn-danger">حذف</button>
              </form>
            
            </td>
        </tr>
        @endforeach
        @endif
        </tbody>
        
      </table>
      {{ $reviews->links() }}
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