@extends('layout')

@section('content')
<div class="main p-5">
    <div class="d-flex justify-content-between">
        <h2>Users</h2>
        <a href="{{url()->previous()}}" class="btn btn btn-info p-2">Back</a>
    </div>
    <hr>
    <div class="data-list mt-4">
        <form action="{{route('users.update',$user)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-6 mb-3">
                    <div class="form-group">
                        <label for="name">Name</label><span class="text-danger">*</span>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name',$user->name)}}" id="name" placeholder="Enter Name">
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-6 mb-3">
                    <div class="form-group">
                        <label for="email">Email address</label><span class="text-danger">*</span>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email',$user->email)}}" id="email" placeholder="Enter email">
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-6 mb-3">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="" id="password" placeholder="Password">
                        @error('password')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>


            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>
    </div>
</div>
@endsection