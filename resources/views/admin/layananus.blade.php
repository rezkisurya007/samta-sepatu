@extends('layouts.adminmaster')


@section('title')
layanan us | Gumcode Admin
@endsection

@section('content')
    
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Recipient:</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Message:</label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Send message</button>
        </div>
      </div>
    </div>
  </div>


<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> layanan
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >ADD</button> 

          </h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table>
              <thead class=" text-primary">
                <th>id  </th>
                <th>title </th>
                <th>  subtitle </th>
                <th>  description  </th>
                <th>  edit  </th>
                <th>  delete  </th>
              </thead>
              <tbody>
                @foreach ($layananus as $data)
                <tr>
                                                         
                  <td> {{$data->id}} </td>
                  <td> {{$data->title}} </td>
                  <td>{{$data->subtitle}} </td>
                  <td > {{$data->description}}  </td>
                  <td >

                  <a href="{{ url ('layanan-us/'.$data->id)}}" class= "btn btn-success"> edit</a>
                  </td>
                  <td >
                  <form action="{{url('layanan-us-delete/'.$data->id) }}" method="POST"> 

                        {{csrf_field() }}
                        {{ method_field('DELETE')}}

                        <button type="submit" class="btn btn-danger">Delete

                        </button>
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