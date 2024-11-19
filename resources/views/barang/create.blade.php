@extends ('layouts.app')
@section ('content')
<main class="flex-shrink-0">
    <div class="container">
        <div class="card" style="margin-top: 100px;">
            <div class="card-header">
                <h5>Tambah Barang</h5>
            </div>
                <div class="card-body">
                    @if ($errors->all())
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                    </ul>
                @endif
                <form action="{{route('barang.store')}}" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="Text" class="form-control" name="nama_barang" value="{{old('nama_barang')}}" id="nama_barang" placeholder="nama">
                        <label for="floatingInputDisabled">Nama Barang</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="harga_barang" id="harga_barang" value="{{old('harga_barang')}}"  >
                        <label for="floatingTextareaDisabled">Harga Barang</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="Text" class="form-control" name="jumlah_barang" id="jumlah_barang" value="{{old('jumlah_barang')}}"  >
                        <label for="floatingTextareaDisabled">Jumlah Barang</label>
                      </div>
                    
                     
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a class="btn btn-danger" href="{{route('barang.index')}}">Kembali</a>
                    </div>
                </form>
                
            </div>
       
    </div>
    </div>

</main>
@endsection