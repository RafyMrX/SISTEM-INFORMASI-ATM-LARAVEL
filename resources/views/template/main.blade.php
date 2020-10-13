<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
<div class="container mt-3 alert alert-primary shadow">

	<div class="row">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

      <a class="nav-link" id="v-pills-home-tab"  href="{{url('/')}}" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>

      <a class="nav-link" id="v-pills-profile-tab" href="{{url('/informasi')}}" role="tab" aria-controls="v-pills-profile" aria-selected="false">Infromasi Saldo</a>

      <a class="nav-link" id="v-pills-messages-tab"  href="{{url('/add')}}" role="tab" aria-controls="v-pills-messages" aria-selected="false">Add Saldo</a>

      <a class="nav-link"  href="{{url('/transfer')}}" role="tab" aria-controls="v-pills-settings" aria-selected="false">Transfer</a>
  </div>
  </div>

  @yield('container')

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>