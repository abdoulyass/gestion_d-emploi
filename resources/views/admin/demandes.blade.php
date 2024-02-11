@extends('layouts.adminDefault')

@section('main')
<div class="head-title">
  <div class="left">
    <h1>Dashboard</h1>
    <ul class="breadcrumb">
      <li>
        <a href="#">Dashboard</a>
      </li>
      <li><i class='fas fa-chevron-right'></i></li>
      <li>
        <a class="active" href="#">home</a>
      </li>
    </ul>
  </div>
</div>
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
  

 
@endsection 
     
@section('footer')

 @endsection
