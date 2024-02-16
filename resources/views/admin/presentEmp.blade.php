@extends('layouts.adminDefault')
@section('css')

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
        <a class="active" href="#">present employer</a>
      </li>
    </ul>
  </div>
  <a href="#" class="btn-download" style="display: none">
    <i class='fas fa-cloud-download-alt'></i>
    <span class="text">fichier standard</span>
  </a>
</div>
  <div class="container ">
   <div class="card">
    <div class="card-header">
      <div style='text-align:center'>
             <h3>employes</h3>
      </div>
   
    </div>
    <div class="card-body">
      <table class="table table-bordered  display " id="myTable">
        <thead>
          <tr>
            <th scope="col">matricule</th>
            <th scope="col">image</th>
            <th scope="col">nom</th>
            <th scope="col">prenom</th>
            <th scope="col">departement</th>
            <th scope="col">time</th>
          </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
          <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->firstName}}</td>
            <td>{{$user->adress}}</td>
            <td>{{$user->adress}}</td>
          </tr>
          @endforeach
  
        </tbody>
      </table>
    </div>
   </div>

  </div>

<!-- CONTENT -->
@endsection 

@section('footer')
  
 @endsection
 @push('scripts')
 <script  src="{{ asset('js/js.js') }}"></script>
 <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.js') }}"></script>
 <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script>
  
     $(document).ready(function () {
         $('#myTable').DataTable();
     });
     
 </script>
 @endpush
 