@extends('layouts.adminDefault')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
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
        <a class="active" href="#">departemnts</a>
      </li>
    </ul>
  </div>
  <a href="#" class="btn-download" style="display: none">
    <i class='fas fa-cloud-download-alt'></i>
    <span class="text">fichier standard</span>
  </a>
</div>
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
   
<ul class="box-info">
    @foreach ($Depts as $Dept)
        
  
    <li>
      <i class='far fa-calendar-check'></i>
      <span class="text">
        <h3></h3>
        <p>{{$Dept->deptName}}</p>
      </span>
    </li>
    @endforeach
    <li>
        <i class="fa-solid fa-plus"></i>
        <span class="text">
          <h3></h3>
          <p>add new departement</p>
        </span>
      </li>
  </ul>
<!-- CONTENT -->
@endsection 

@section('footer')
  
 @endsection
 @push('scripts')
 <script  src="{{ asset('js/js.js') }}"></script>
 <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
 <script>
     $(document).ready(function () {
         $('#myTable').DataTable();
     });
 </script>
 @endpush
 