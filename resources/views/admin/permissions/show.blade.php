@extends('layouts.admin')
@section('content')
<div class="row">
  <table class="table">
    <tr>
      <td>الاسم</td>
      <td>{{$role->name}}</td>
    </tr>
    <tr>
      <td>المسمى</td>
      <td>{{$role->slug}}</td>
    </tr>
    <tr>
      <td>الصلاحيات</td>
      <td>Permission</td>
    </tr>
  </table>
</div>
@endsection