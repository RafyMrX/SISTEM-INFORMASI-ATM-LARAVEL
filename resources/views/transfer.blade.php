 @extends('template.main')

 @section('title', 'Transfer')
 @section('container')

 <div class="col-9">
  <div class="tab-content" id="v-pills-tabContent">
    <div class="tab-pane fade show active">
     <h3>Transfer</h3>
     @if (session('status'))
     <div class="alert alert-success">
      {{ session('status') }}
    </div>
    @endif
    <form action = "{{url('/transfer/tf')}}" method = "POST">
      @csrf
      <div class="form-group">
        <input type="hidden" name="id" value="1">
        <input class="form-control" type="text" name="uang" placeholder="Masukkan Jumlah Rupiah, Ex: 100000">
      </div>
      <button type="submit" class="btn btn-success">Transfer</button>
    </form>
  </div>
</div>
</div>
</div>
</div>
@endsection
