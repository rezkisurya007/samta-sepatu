@extends('layouts.adminmaster')


@section('title')
    Refund | Gumcode Admin
@endsection

@section('content')
    
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Refund Barang </h4>
        </div>
        <div class="card-body">
          <div class="table">
            <table>
              <thead class=" text-primary">
                <th>User ID</th>
                <th>Name</th>
                <th>Permasalahan</th>
                <th>tanggal</th>
                <th>kode</th>
                <th>Gambar</th>
                <th>Status</th>
                <th>verifikasi</th>
              
              </thead>
              <tbody>
              @foreach ($refunds as $refund)
                <tr>
                  <td>{{ $refund->user_id }}</td>
                  <td>{{ $refund->name_user }}</td>
                  <td>{{ $refund->Permasalahan }}</td>
                  <td>{{ $refund->tanggal }}</td>
                  <td>{{ $refund->kode }}</td>
                  <td> <img src="storage/{{ $refund->name_gambar }}" height="200px" alt=""></td>
                  <td>{{ $refund->status }}</td>
                  
                 
                  <td>
                    @if($refund->status=='pending')
                    <a href="/terima/{{ $refund->id }}" class="btn btn-success"> Terima</a>
                    <a href="/tolak/{{ $refund->id }}" class="btn btn-danger"> tolak</a>
                    @endif
                </td>

                 
                  <td>
                  
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