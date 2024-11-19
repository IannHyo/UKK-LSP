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
              
              </tr>
            </thead>
            <tbody>
                @php
                $no = 1;
            @endphp
            
              <tr>
                <th scope="row">{{$no++}}</th>
                <td>{{$barang->id_barang}}</td>
                <td>{{$barang->nama_barang}}</td>
                <td>{{$barang->harga_barang}}</td>
                <td>{{$barang->jumlah_barang}}</td>
               
              </tr>
             
            </tbody>
          </table>
        </div>
        <div class="card-footer">
            
            <a href="{{route('barang.index')}}" class="btn btn-success">Kembali</a>
        </div>
        </div>
    </div>


</main>
@endsection