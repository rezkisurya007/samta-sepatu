@extends('layouts.adminmaster')


@section('title')
    Pesanan | Gumcode Admin
@endsection

@section('content')
    
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> bukti </h4>
        </div>
        <div class="card-body">
          <div class="table">
            <table>
              <thead class=" text-primary">
                <th>User ID</th>
                <th>Name</th>
                <th>kode unik</th>
                <th>Nama Gambar</th>
              
                
                
              </thead>
              <tbody>
              @foreach ($buktis as $bukti)
                <tr>
                  <td>{{ $bukti->user_id }}</td>
                  <td>{{ $bukti->name_user }}</td>
                  <td>{{ $bukti->kode }}</td>
                  <td><img src="storage/{{ $bukti->name_gambar }}" height="200px" alt=""></td>
        
                 
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