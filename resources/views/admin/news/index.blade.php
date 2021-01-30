@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
            <div class="card">
    <div class="card-header">
      <h3 class="card-title">أدارة الاخبار</h3>
      @can('create', App\Models\Post::class)
      <a href="/admin/news/create" class="btn btn-primary btn-add">اضافة خبر</a>
      @endcan
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
       @if($posts)
       @foreach($posts as $post)
        <tr>
          <td>{{ $post->id}}</td>
          <td>{{ $post->title }}</td>
          <td>@if($post->published == 0) غير منشور @else منشور @endif</td>
          <td>
          @can('update', $post)
              <a href="/admin/news/{{$post->id}}/edit" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-edit"></i> تعديل</a> 
          @endcan 
          @can('delete', $post) 
              <form method="post" action="/admin/news/{{$post->id}}" style="display:inline">
                  {{ method_field('DELETE')}}
                  @csrf
                  <button type="submit" class="btn btn-sm btn-danger">حذف</button>
              </form>
          @endcan    
            </td>
        </tr>
        @endforeach
        @endif
        </tbody>
        
      </table>
      {{ $posts->links() }}
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