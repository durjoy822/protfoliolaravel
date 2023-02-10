@extends('admin.master')
@section('title')
    user_manage
@endsection
@section('content')
    <section class="pcoded-main-container">
        <div class="pcoded-content">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <span class="h5">Manage Table</span>
                <span class="float-right "><a href="{{route('admin.user')}}" class="btn btn-primary">User create </a> </span>
                <span class="d-block m-t-5 text-behance">User Manage Table </span>
            </div>
            <div class="card-body table-border-style  table-hover ">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Image</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <img class="img-fluid" style="width: 70px;" src="{{asset($user->image)}}">
                            </td>
                            <td>
                                <a href="{{route('admin.edit',['id'=>$user->id])}}"><button class="btn btn-info">Edit</button></a>

                                <form action="{{route('user.delete')}}" method="post" style="display: inline" >@csrf
                                    <input type="hidden" name="id" value="{{$user->id}}">
                                    <input type="submit" value="Delete" class="btn  btn-danger">
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
    </section>
@endsection
