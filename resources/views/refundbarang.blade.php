@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('home') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <div class="card">
                <div class="card-body">
                    <h4><i class="fa fa-pencil-alt"></i> Refund Barang</h4>
                    <h5>Persyaratan</h5>
                    <h5>- Barang tidak sesuai dengan yang dipesan</h5>
                    <h5>- Barang Rusak parah</h5>
                    <form method="POST" action="./refund" method="post"
                    enctype="multipart/form-data">>
                        @csrf
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Permasalahan : </label>
                            <input type="text" name="Permasalahan" class="form-control" id="recipient-name" >
                            <label for="recipient-name" class="col-form-label">Pembelian pada tanggal : </label>
                            <input type="date" name="tanggal" class="form-control" id="recipient-name" >
                            <label for="recipient-name" class="col-form-label">kode barang : </label>
                            <input type="text" name="kode" class="form-control" id="recipient-name" >
                            <br>
                            <input type="file" name="img"  >
                       <br>     
                    <br>
                    <button type="submit" class="btn btn-success  ">Submit</button>
                           
                          </div>
                    </form>
                </div>
                <div class = " table-responsive ">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>User ID</th>
                        <th>Name</th>
                        <th>Permasalahan</th>
                        <th>tanggal</th>
                        <th>kode</th>
                        <th>Gambar</th>
                        <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($refunds as $refund)
                            <tr>
                                <td>{{ $refund->user_id }}</td>
                        <td>{{ $refund->name_user }}</td>
                      <td>{{ $refund->Permasalahan }}</td>
                      <td>{{ $refund->tanggal }}</td>
                      <td>{{ $refund->kode }}</td>
                      <td> <img src="storage/{{ $refund->name_gambar }}" height="200px" alt=""></td>
                      <td>{{ $refund->status }}</td>
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