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
                <form action="{{ route('transaksi.proses') }}" method="POST">
                    @csrf
                    <h4>Beli Barang</h4>
                    <p>Barang yang dibeli:<br> <b>{{ $barang->id_barang }}</b></p>
                    <input type="hidden" name="beli_id" value="{{ $barang->id_barang }}">
                    <p>Harga Satuan:<br> <b>{{ $barang->harga_barang }}</b></p>
                    <input type="hidden" name="beli_harga" value="{{ $barang->harga_barang }}">
                    <p>Stok tersedia:<br> <b>{{ $barang->jumlah_barang }}</b></p>
                    <input type="hidden" name="beli_stok" value="{{ $barang->jumlah_barang }}">
                    <p>Kuantitas beli:<br>
                        <input type="text" name="beli_kuantitas">
                    </p>
                    <button class="btn btn-primary" type="submit">Pesan</button>
                    <a class="btn btn-danger" href="{{route('barang.index')}}">Kembali</a>
                </form>
                
            </div>
       
    </div>
    </div>

</main>
@endsection