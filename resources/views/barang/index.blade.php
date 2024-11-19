@extends('layouts.app')
@section('content')
<main class="flex-shrink-0">
    <div class="container">
        <div class="card" style="margin-top: 100px;">
            <div class="card-header">
        <h5>Data Barang</h5>
        </div>
        <div class="card-body">
            @if (session('error'))
            {{  session('error') }}
        @endif
    
        @if (session('success'))
            {{  session('success') }}
        @endif

        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">ID</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
                <th scope="col">Opsi</th>
              </tr>
            </thead>
            <tbody>
                @php
                $no = 1;
            @endphp
             @forelse ($barang as $dt)
              <tr>
                <th scope="row">{{$no++}}</th>
                <td>{{$dt->id_barang}}</td>
                <td>{{$dt->nama_barang}}</td>
                <td>{{$dt->harga_barang}}</td>
                <td>{{$dt->jumlah_barang}}</td>
                <td>
                    <form onsubmit="return confirm('Hapus?');" action="{{ route('barang.destroy', $dt->id_barang ) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('transaksi.beli', $dt->id_barang) }}">Beli</a> 
                        <a class="btn btn-warning" href="{{ route('barang.show', $dt->id_barang) }}">Detail</a>
                        <a class="btn btn-success" href="{{ route('barang.edit', $dt->id_barang) }}">Edit</a> 
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Hapus</button>
                    </form>
                </td>
              </tr>
              <tr>
                @empty
                <td colspan="6" class="text-center">Data Barang Kosong</td>
              </tr>
            @endforelse
            </tbody>
          </table>
        </div>
        <div class="card-footer">
            <a href="{{route('barang.create')}}" class="btn btn-primary">Tambah Barang</a>
            <a href="{{route('transaksi.index')}}" class="btn btn-success">Riwayat Transaksi</a>
        </div>
        </div>
    </div>


</main>
@endsection