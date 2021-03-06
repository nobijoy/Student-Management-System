@extends('master.admin.master')

@section('body')


    <div class="row">
        <div class="col-lg-12 mx-auto mt-5">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title mb-4 text-center">Manage Teacher Course</h2>
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered text-center mb-0">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Course Title</th>
                                <th>Course Fee</th>
                                <th>Trainer Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($subjects as $subject)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$subject->title}}</td>
                                    <td>{{$subject->fee}}</td>
                                    <td>{{$subject->teacher->name}}</td>
                                    <td>{{$subject->status == 1 ? 'Active':'Inactive'}}</td>
                                    <td>
                                        <a href="{{route('view-detail',['id'=>$subject->id])}}" class="btn btn-success btn-sm">
                                            <i class="fa fa-book-open"></i>
                                        </a>
                                        <a href="{{route('update-status',['id'=>$subject->id])}}" class="btn {{$subject->status == 1 ? 'btn-info': 'btn-warning'}} btn-sm">
                                            <i class="fa {{$subject->status == 1 ? 'fa fa-arrow-up': 'fa fa-arrow-down'}}"></i>
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
