@extends('template.main')

@section('title', 'Informasi Saldo')
@section('container')

<div class="col-9">
 <div class="tab-content" id="v-pills-tabContent">
  <div class="tab-pane fade show active">
   <h3>Informasi Saldo </h3>
   <div class="alert alert-dark" role="alert">
    @foreach($moneys as $key)
    <b>SISA SALDO ANDA : Rp. {{number_format($key->money)}}</b>
    @endforeach
  </div>
</div>
</div>
</div>
</div>
</div>
@endsection