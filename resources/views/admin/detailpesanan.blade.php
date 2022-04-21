@extends('layouts.adminmaster')


@section('title')
    Pesanan | Gumcode Admin
@endsection

@section('content')
    
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">DETAIL PESANAN</h4>
        </div>
        <div class="card-body">
          <div class="table">
            <table>
              <thead class=" text-primary">
              <th>ID Barang</th>
              <th>Nama Barang</th>
              <th>ID Pesanan</th>
                <th>Jumlah</th>
                <th>Jumlah harga</th>
                
                
              </thead>
              <tbody>
              @foreach ($pesanan_details as $pesanan)
                <tr>
                <td>{{ $pesanan->barang_id }}</td>
                <td>{{ $pesanan->barang->nama_barang }}</td>
                <td>{{ $pesanan->pesanan_id }}</td>
                  <td>{{ $pesanan->jumlah }}</td>
                  <td>{{ $pesanan->jumlah_harga }}</td>
                 
                 
                </tr>
                @endforeach
                 </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('scripts')
    
@endsection