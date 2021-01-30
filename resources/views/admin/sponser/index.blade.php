@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
            <div class="card">
    <div class="card-header">
      <h3 class="card-title">ألرعاة</h3>
    
      <a href="/admin/sponsers/create" class="btn btn-primary btn-add">اضافة شريك</a>
    
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
       @if($sponsers)
       @foreach($sponsers as $sponser)
        <tr>
          <td>{{ $sponser->id}}</td>
          <td>{{ $sponser->title }}</td>
          <td>
         
              <a href="/admin/sponsers/{{$sponser->id}}/edit" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-edit"></i> تعديل</a> 
      
        
              <form method="post" action="/admin/sponsers/{{$sponser->id}}" style="display:inline">
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
      {{ $sponsers->links() }}
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