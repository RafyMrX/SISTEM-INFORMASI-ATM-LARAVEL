    @extends('template.main')

    @section('title', 'Add Saldo')
    @section('container')
    <div class="col-9">
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active">
        	<h3>Add Saldo</h3>

          @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
          @endif
          
          <form action="{{url('/add/tmbh')}}" method="POST">
            @csrf
            <input type="hidden" name="id" value="1">
            <input class="form-control" type="text" name="uang" placeholder="Masukkan Jumlah Rupiah, Ex: 100000">
            <button type="submit" class="btn btn-success mt-2">Tambah</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  @endsection