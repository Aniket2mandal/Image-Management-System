@extends('layouts.main')

@section('content1')
{{-- <link rel="stylesheet" href="/css/user/dashboard.css"> --}}
<h1>This is main page of Image management system</h1>
<div class="success">
    @if(session('success'))
    <div class='container alert alert-success'>{{session('success')}}</div>
   @endif
  </div>
<a href="{{route('imageform')}}"class=" btn-success">Upload Image</a>
<a href="{{route('imageview')}}"class=" btn-success">View Images</a>
@endsection
