@extends('layouts.adminmaster')


@section('title')
    Pesanan | Gumcode Admin
@endsection

@section('content')
    
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Tabel Pesanan</h4>
        </div>
        <div class="card-body">
          <div class="table">
            <table>
              <thead class=" text-primary">
              <th> ID </th>
              <th>User ID</th>
                <th>Tanggal</th>
                <th>Status Pembayaran</th>
                <th>Status Pengiriman</th>
                <th>kode</th>
                <th>Jumlah Harga</th>
                <th>konfirmasi</th>
                <th>Verifikasi Status</th>
                
              </thead>
              <tbody>
              @foreach ($pesanans as $pesanan)
                <tr>
                <td>{{ $pesanan->id }}</td>
                <td>{{ $pesanan->user_id }}</td>
                  <td>{{ $pesanan->tanggal }}</td>
                  <td>
                    @if($pesanan->status == 1)
                    Belum dibayar
                    @elseif($pesanan->status == 2)
                    menunggu konfirmasi admin
                    @elseif($pesanan->status == 3)
                    sudah dibayar
                   
                    @endif</td>
                  <td>
                     @if($pesanan->kirim == 0)
                    belum dikirim
                    @else
                    sudah dikirim 
                    @endif
                  </td>
                  <td>{{ $pesanan->kode }}</td>
                  <td>{{ $pesanan->jumlah_harga }}</td>
                  <td>{{ $pesanan->terima }}</td>
                 
                  <td>
                  <a href="pesanan/edit/{{ $pesanan->id }}" class="btn btn-success"> Verifikasi Status </a>
                  </td>
                  <td>
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