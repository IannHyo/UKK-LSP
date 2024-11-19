@extends ('layouts.app')
@section('content')
<main class="flex-shrink-0">
    <div class="container">
        <div class="card" style="margin-top: 100px;">
            <div class="card-header">
                <h5>Edit Barang</h5>
            </div>
                <div class="card-body">
                    
                  
                        @if ($errors->all())
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li> {{ $error }} </li>
                        @endforeach
                        </ul>
                    @endif

                    <form action="{{route('barang.update',$barang->id_barang)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-floating mb-3">
                            <div class="form-floating mb-3">
                                <input type="Text" class="form-control" name="nama_barang" value="{{old('nama_barang',$barang->nama_barang)}}" >
                                <label for="floatingInputDisabled">Nama Barang</label>
                              </div>
                              <div class="form-floating mb-3">
                                <input type="number" class="form-control" name="harga_barang"  value="{{old('harga_barang',$barang->harga_barang)}}"  >
                                <label for="floatingTextareaDisabled">Harga Barang</label>
                              </div>
                              <div class="form-floating mb-3">
                                <input type="Text" class="form-control" name="jumlah_barang"  value="{{old('jumlah_barang',$barang->jumlah_barang)}}"  >
                                <label for="floatingTextareaDisabled">Jumlah Barang</label>
                              </div>
                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a class="btn btn-primary" href="{{route('barang.index')}}">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
   
</main>
@endsection