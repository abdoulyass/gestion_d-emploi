@extends('layouts.adminDefault')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
@section('main')
<div class="head-title">
  <div class="left">
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
  <a href="#" class="btn-download">
    <i class='fas fa-cloud-download-alt'></i>
    <span class="text">fichier standard</span>
  </a>
</div>

<ul class="box-info">
  <li>
    <i class='far fa-calendar-check'></i>
    <span class="text">
    
     
      <h3>{{ $totalUsers }}</h3>
      <p>employer</p>
    </span>
  </li>
  <li>
    <i class='fas fa-users'></i>
    <span class="text">
      <h3>{{ $totalUsers }}</h3>
      <p>departement</p>
    </span>
  </li>
  <li>
    <i class='fas fa-money-bill-wave'></i>
    <span class="text">
      <h3>{{ $totalUsers }}</h3>
      <p>demande de travail</p>
    </span>
  </li>
</ul>

<div class="table-data">
  <div class="order">
    <div class="head" style="border-bottom:solid 1px:">
    <div class="dernier-pointage">
      <h3>dernier pointage</h3>
    </div>
    
    </div>
    <table class="table table-bordered"> 
      <thead>
        <tr>
          <th>User</th>
          <th>depatement</th>
          <th>temps</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
     
        <tr>
          <td>{{ $user->name }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->name }}</td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>
</main>
<!-- MAIN -->
</section>
<!-- CONTENT -->
@endsection

@push('scripts')
<script  src="{{ asset('js/js.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
</script>
@endpush
