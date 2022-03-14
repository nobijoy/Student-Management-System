@extends('master.admin.master')

@section('body')

    <div class="row">
        <div class="col-lg-10 mx-auto mt-5">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title mb-4 text-center">All User info</h2>
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mb-0 text-center">

                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td class="">
                                    <a href="{{route('edit-user', ['id' => $user->id])}}" class="btn btn-success btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route('delete-user', ['id' => $user->id])}}" class="btn btn-danger btn-sm ml-4 {{$user->id == 1 ? 'disabled':''}}">
                                        <i class="fa fa-trash"></i>
                                    </a>
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
