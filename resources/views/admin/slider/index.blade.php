@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
            <div class="card">
    <div class="card-header">
      <h3 class="card-title">أدارة البانرات</h3>
      @can('create', App\Models\Slider::class)
      <a href="/admin/slider/create" class="btn btn-primary btn-add">اضافة بنر</a>
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
       @if($sliders)
       @foreach($sliders as $slider)
        <tr>
          <td>{{ $slider->id}}</td>
          <td>{{ $slider->title }}</td>
          <td>@if($slider->published == 0) غير منشور @else منشور @endif</td>
          <td>
          @can('update', $slider)
              <a href="/admin/slider/{{$slider->id}}/edit" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-edit"></i> تعديل</a> 
          @endcan 
          @can('delete', $slider) 
              <form method="post" action="/admin/slider/{{$slider->id}}" style="display:inline">
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
      {{ $sliders->links() }}
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