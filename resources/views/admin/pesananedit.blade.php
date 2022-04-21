@extends('layouts.adminmaster')


@section('title')
   pesananedit | Gumcode Admin
@endsection

@section('content')
<div class= "container">
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Edit Status Pesanan </h4>
        </div>
        <div class="card-body">
        <form action="{{url ('pesanan/update').'/'.$pesanans->id}}" method="POST">
              {{csrf_field() }}
              {{method_field('PUT')}}

            <div class="modal-body">
                <div class="form-group">
              <label for="recipient-name" class="col-form-label">Status Pembayaran: </label>
              
             <select name="status" class="form-control"  >
               <option {{$pesanans->status==1?'selected':''}} value="1">belum dibayar</option>
               <option {{$pesanans->status==2?'selected':''}} value="2">menunggu konfirmasi admin</option>
               <option {{$pesanans->status==3?'selected':''}} value="3">sudah dibayar</option>
             </select>
              <label for="recipient-name" class="col-form-label">Status Pengiriman: </label>
              
              <select name="kirim" class="form-control">
                <option {{$pesanans->kirim==0?'selected':''}} value="0">belum dikirim</option>
                <option {{$pesanans->kirim==1?'selected':''}} value="1">sudah dikirim</option>
              </select>
            </div>
        </div>
        <button type="submit" class="btn btn-success"> Update </button>
        <a href="/pesanan" class="btn btn-danger"> Cancel </a>
        </form>
        </div>
    </div>
  </div>
</div>
</div>

@endsection