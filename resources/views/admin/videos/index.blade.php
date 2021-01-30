@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
            <div class="card">
    <div class="card-header">
      <h3 class="card-title">عرض</h3>
      @can('create', App\Models\Video::class)
      <a href="/admin/videos/create" class="btn btn-primary btn-add">اضافة </a>
      @endcan
    </div>
    <!-- /.card-header -->
    <div class="card-body">
<table class="table">
  <thead class="thead-dark">
  <tr>
      <th scope="col">#</th>
      <th scope="col">العنوان</th>
      <th scope="col">الآدوات</th>
    </tr>
  </thead>
  <tbody>
    @if($videos)
      @foreach($videos as $video)
    <tr>
      <th scope="row">{{ $video->id}}</th>
      <td>{{ $video->title}}</td>
      <td>
      @can('update', $video)
          <a href="{{route('videos.edit',['video' => $video->id])}}" class="btn btn-primary">تعديل</a>
      @endcan
      @can('delete', $video)   
          <form method="post" action="{{ route('videos.destroy',['video' => $video->id])}}" style="display:inline">
            {{ method_field('DELETE')}}
            @csrf
            <button type="submit" class="btn btn-danger">حذف</button>
          </form>
      @endcan    
        </td>
    </tr>
    @endforeach
    @else
    <tr><td colspan="5">لايوجد صلاحيات مضافه</td></tr>
    @endif
  </tbody>
</table>
{{ $videos->links() }}
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