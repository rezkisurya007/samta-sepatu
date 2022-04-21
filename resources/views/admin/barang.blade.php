@extends('layouts.adminmaster')


@section('title')
    Pesanan | Gumcode Admin
@endsection

@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/save-barang" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
      <div class="modal-body">
       
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama barang:</label>
            <input type="text" name="namabarang" class="form-control" id="recipient-name">
          </div>
          
            <label for="recipient-name" class="col-form-label">gambar:</label><br>
            <input type="file" name="gambar" id="recipient-name" >
        
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Harga:</label>
            <input type="text" name="harga" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Stock:</label>
            <input type="text" name="stok" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Keterangan:</label>
            <textarea name="keterangan" class="form-control" id="message-text"></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title"> Barang
        </h4>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >ADD</button> 
        @if (session('status'))

        <div class="alert alert-success" role="alert">
        {{session('status')}}
        </div>

        @endif 
       </div> 
    <div class="card-body">
        <div class="table">
          <table>
            <thead class=" text-primary">
            <th>ID</th>
              <th>Nama Barang</th>
              <th>Gambar</th>
              <th>Harga</th>
              <th>Stok</th>
              <th>Keterangan</th>
              <th>EDIT<th>
              <th>DELETE</th>
            </thead>
            <tbody>
            @foreach ($barangs as $barang)
              <tr>
              <td>{{ $barang->id }}</td>
                <td>{{ $barang->nama_barang }}</td>
                <td>{{ $barang->gambar }}</td>
                <td>{{ $barang->harga }}</td>
                <td>{{ $barang->stok }}</td>
                <td>{{ $barang->keterangan }}</td>
                <td>
                <a href="/edit/{{ $barang->id }}" class="btn btn-success"> EDIT </a>
                </td>
                <td>
                <form action="/deletee/{{ $barang->id }}" method="post">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <button type="submit" class="btn btn-danger"> DELETE </button>
                </form>
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

@endsection

@section('scripts')
    
@endsection