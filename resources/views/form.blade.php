@extends('layouts.app')
@section('content')

{{-- <form action ="./upload"

                    method="post"
                    enctype="multipart/form-data"> --}}
                    
                   @csrf()
                   
                   <div class="" >
                       
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="{{ url('history/') }}" class="btn btn-primary "><i class="fa fa-arrow-left"></i> Riwayat Pemesanan</a>
                                {{-- <a href="{{ url('home') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a> --}}
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="card">
                                    <div class="card-body">
                                        <h4><i class="fa fa-pencil-alt"></i> Upload Bukti Pembayaran Di Bawah Ini</h4>
                                        
                                        <form method="POST" action="/upload" method="post"
                                        enctype="multipart/form-data">>
                                            @csrf
                                            <div class="form-group">
                                                <br>
                                                <label for="recipient-name" class="col-form-label">kode barang : </label>
                                                <input readonly value="{{$pesanan->kode}}" type="text" name="kode" class="form-control" id="recipient-name" >
                                                <input readonly value="{{$pesanan->id}}" type="hidden" name="pesanan_id" class="form-control"  >
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
                                                    <th>kode barang</th>
                                                    <th>Nama Gambar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                @foreach ($buktis as $bukti)
                <tr>
                  <td>{{ $bukti->user_id }}</td>
                  <td>{{ $bukti->name_user }}</td>
                  <td>{{ $bukti->kode }}</td>
                  <td><img src="/storage/{{ $bukti->name_gambar }}" height="200px" alt=""></td>
        
                 
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


















                    {{-- <input type="file" name="img"  >
                    <br>
                    <button type="submit" class="btn btn-success  " >upload foto</button>
                    <a href="{{ url('history/') }}" class="btn btn-primary "><i class="fa fa-arrow-left"></i> Kembali</a>
                        </div>
                    
                    </form> --}}
                    <div class="col-md-12" >
                        {{session('status')}}
                    </div>
                    @endsection