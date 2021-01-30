@extends('layouts.admin')

@section('content')
<section class="content">
  <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
    <div class="row">
            <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">تعديل عضو</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="/admin/users/{{$user->id}}">
              {{ method_field('PUT') }}
                <div class="card-body">
                  <div class="form-group">
                    {{ csrf_field()}}
                    <label for="code">الآسم</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="code" placeholder="ادخل اسم المستخدم" name="name" value="{{$user->name}}">
                    @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="name">البريد الآلكترونى</label>
                    <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" placeholder="أدخل البريد الآلكتروني" name="email" value="{{$user->email}}">
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="name">كلمة المرور</label>
                    <input type="password" class="form-control  @error('password') is-invalid @enderror" id="password" placeholder="ادخل كلمة المرور" name="password">
                    @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>


                  <div class="form-group">
                      <label for="exampleInputEmail1">الأدوار</label>
                      <div class="row">
                      @if($roles)
                        @foreach($roles as $role)

                        <div class="col-lg-4">
                          <input type="checkbox" class="form-check-input" name="roles[]" 
                          value="{{$role->id}}" @if(in_array($role->id , $user_roles))  checked  @endif>
                          <label class="form-check-label" for="exampleCheck1">{{$role->name}}</label>
                        </div>
                        @endforeach
                      @endif
                      </div>
                  </div>


                  <div class="form-group">
                      <label for="exampleInputEmail1">الحاله</label>
                      <div class="row">
                      <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="status" name="status" value="1"  @if($user->status) checked @endif>
                    <label class="form-check-label" for="status">نشط</label>
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
    @include('admin.includes.datatable')
   
    @endsection