@extends('layouts.adminmaster')


@section('title')
    contact us edit | Gumcode Admin
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> contact us - edit data </h4>

        <form action="{{ url('contactus-submit/'.$contactus->id) }}" method="POST">
              {{csrf_field() }}
              {{method_field('PUT')}}

            <div class="modal-body">
                <div class="form-group">
              <label for="recipient-name" class="col-form-label">Title : </label>
              <input type="text" name="title" class="form-control" value="{{ $contactus->title }}">
             
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Subtitle : </label>
                <input type="text" name="subtitle" class="form-control" value="{{ $contactus->subtitle }}">
            </div>
            <div class="form-group form-check">
                <label for="recipient-name" class="col-form-label">Description : </label>
                <input type="text" name="description" class="form-control" value="{{ $contactus->description }}">
            </div>
        </div>
        <div calss="modal-footer">
        <a href="{{ url('contacts')}}" class= "btn btn-secondary">BACk</a>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

        </div>
    </div>
  </div>
</div>

@endsection