@extends('front.quran.layout')
@section('content')
<div class="row">
{{ $page->title}}
<br/>
{!! $page->content !!}
</div>
@endsection