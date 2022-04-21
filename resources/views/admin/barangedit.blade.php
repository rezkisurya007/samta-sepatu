@extends('layouts.adminmaster')


@section('title')
    Barangedit | Gumcode Admin
@endsection

@section('content')
<div class= "container">
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Edit Tabel Barang </h4>
        </div>
        <div class="card-body">
        <form action="/update/{{ $barangs->id }} " method="POST">
              {{csrf_field() }}
              {{method_field('PUT')}}

            <div class="modal-body">
                <div class="form-group">
              <label for="recipient-name" class="col-form-label">Nama Barang : </label>
              <input type="text" name="namabarang" class="form-control" value="{{ $barangs->nama_barang }}">
             
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Gambar : </label>
                <input type="text" name="gambar" class="form-control" value="{{ $barangs->gambar }}">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Harga : </label>
                <input type="text" name="harga" class="form-control" value="{{ $barangs->harga }}">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Stok : </label>
                <input type="text" name="stok" class="form-control" value="{{ $barangs->stok }}">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Keterangan : </label>
                <input type="text" name="keterangan" class="form-control" value="{{ $barangs->keterangan }}">
            </div>
        </div>
        <button type="submit" class="btn btn-success"> Update </button>
        <a href="/barang" class="btn btn-danger"> Cancel </a>
        </form>
        </div>
    </div>
  </div>
</div>
</div>

@endsection