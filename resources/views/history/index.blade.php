@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('home') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Riwayat Pemesanan</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3><i class="fa fa-history"></i> Riwayat Pemesanan</h3>
                    <div class = " table-responsive ">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Status Pembayaran</th>
                                <th>Status Pengiriman</th>
                                <th>Jumlah Harga</th>
                                <th>Aksi</th>
                                <th>konfirmasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($pesanans as $pesanan)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $pesanan->tanggal }}</td>
                                <td>
                                    @if($pesanan->status == 1)
                                    Belum dibayar
                                    @elseif($pesanan->status == 2)
                                    menunggu konfirmasi admin
                                    @elseif($pesanan->status == 3)
                                    sudah dibayar
                                    @endif
                                </td>
                                <td>
                                    @if($pesanan->kirim == 0)
                                    belum dikirim
                                    @else
                                    sudah dikirim 
                                    @endif
                                </td>
                                <td>Rp. {{ number_format($pesanan->jumlah_harga) }}</td>
                                <td>
                                    <a href="{{ url('history') }}/{{ $pesanan->id }}" class="btn btn-primary"><i class="fa fa-info"></i> Detail</a>

                                </td>
                                <td>
                                   
                                        @if($pesanan->terima=='belum diterima'&& $pesanan->status == 3 && $pesanan->kirim == 1)

                                        <a href="/konfirmasi/{{$pesanan->id}}" class="btn btn-success">Barang Sudah Diterima</a>
                                        @elseif($pesanan->terima=='barang sudah sampai')
                                        Barang sudah sampai
                                        @else
                                        barang belum dikirim
                                        @endif
                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection