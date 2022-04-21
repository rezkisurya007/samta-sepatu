@extends('layouts.adminmaster')


@section('title')
    Pesanan | Gumcode Admin
@endsection

@section('content')
    
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> USER </h4>
        </div>
        <div class="card-body">
          <div class="table">
            <table>
              <thead class=" text-primary">
                <th>Name</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>No Handphone</th>
                
                <th>DELETE</th>
              </thead>
              <tbody>
              @foreach ($users as $user)
                <tr>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->alamat }}</td>
                  <td>{{ $user->nohp }}</td>
                 
                  <td>
                  <form action="user/delete/{{ $user->id }}" method="post">
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