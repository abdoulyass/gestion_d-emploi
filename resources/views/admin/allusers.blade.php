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
        <a class="active" href="#">home</a>
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
      <div class="card-body">
        @if(sizeof($users)==0)
    <p style="font-size: 20px;text-align:center;">
     the liste of employes is empty try to <a href="">add employer!</a>
    </p>
      </div>
    
  
   @else
    <div class="card-header">
      <div style='text-align:center'>
             <h3>condidature</h3>
      </div>
   
    </div>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="card-body">



       <table class="table table-bordered  display " id="myTable">
        <thead>
          <tr>
            <th scope="col">matricule</th>
            <th scope="col">image</th>
            <th scope="col">nom</th>
            <th scope="col">prenom</th>
            <th scope="col">departement</th>
            <th scope="col">action</th>

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
            <td>
              <div class="dropdown "  id="hover-dropdown">
                <a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa-solid fa-ellipsis-vertical"></i>
                </a>
                <div class="dropdown-menu  " aria-labelledby="dropdownMenuLink" style="  LEFT: -200pX;
                top: 18px; ">
                  <form method="POST" action="{{ route('deleteUser', ['id' => $user->id]) }}">
                  @csrf
                    <button type="submit" class="dropdown-item" style="background:none;border:none; font-size:18px;">remove employer</button>
                </form>
              
              <form method="GET" action="{{ url('allUsers/userInformation/'.$user->id) }}">
                @csrf <!-- Protection contre les attaques CSRF -->
                <button type="submit" class="dropdown-item" style="background:none;border:none; font-size:18px;">user information</button>
            </form>

                </div>
            
            </td>
            
          </tr>
          @endforeach
  
        </tbody>
      </table>
    </div>
  </div>

 </div>
  @endif
    
   

<!-- CONTENT -->
@endsection 

@section('footer')
  
 @endsection
 @push('scripts')
 <script  src="{{ asset('js/js.js') }}"></script>
 <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
 <script>
     $(document).ready(function () {
      $('#myTable').DataTable({
            columnDefs: [{
                targets: [5],
                orderable: false
            }]
         });
     });
 </script>
 @endpush
 