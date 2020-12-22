@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex align-item-center justify-content-between">
                  {{ __('Add new user') }}
                  <a href="{{ route('users.index')}}" class="btn btn-primary btn-sm">Back to user list</a>
                </div>
                <div class="card-body">
                  	<form action="{{route('users.update',$userdata->id)}}" method="post">
                  		@method('PUT')
                  		@csrf
					  <div class="form-group">
					    <label for="exampleInputEmail1">Name</label>
					    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Your Name" value="{{ $userdata->name}}">
					    @if ($errors->has('name'))
		                    <span class="text-danger">{{ $errors->first('name') }}</span>
		                @endif
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Email address</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email address" value="{{ $userdata->email}}" name="email">
					    @if ($errors->has('email'))
		                    <span class="text-danger">{{ $errors->first('email') }}</span>
		                @endif
					  </div>
					  
					  <button type="submit" class="btn btn-primary">Save</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
