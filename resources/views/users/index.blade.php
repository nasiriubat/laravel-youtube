@extends('layout')

@section('content')
<div class="main p-5">
    <div class="d-flex justify-content-between">
        <h2>Users</h2>
        <a href="{{route('users.create')}}" class="btn btn btn-info p-2">Add New</a>
    </div>
    <hr>
    <div class="data-list mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th style="width:10%" scope="col">#</th>
                    <th style="width:35%" scope="col">Name</th>
                    <th style="width:35%" scope="col">Email</th>
                    <th style="width:20%" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <th scope="row">{{$loop->index+1}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <div class="d-flex justify-content-around">
                            <a href="{{route('users.edit',$user)}}" class="btn btn btn-info p-1 px-3    ">Edit</a>
                            <form method="POST" action="{{route('users.destroy',$user)}}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <div class="form-group">
                                    <button class="btn btn-danger delete">Delete</button>
                                </div>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
