@extends('admin.master')
@section('title')
    Project_manage
@endsection
@section('content')
    <section class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <span class="h5">Manage Table</span>
                        <span class="float-right "><a href="{{route('project.create')}}" class="btn btn-primary">project create </a> </span>
                        <span class="d-block m-t-5 text-behance">Project Mange Table </span>
                        <div class="d-block m-t-5 text-behance text-center text-white bg-primary h-4" > </div>
                        <div class="d-block m-t-5 text-behance text-center text-white bg-primary h-4" >{{Session::get('project')}} </div>

                    </div>
                    <div class="card-body table-border-style  table-hover ">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>details</th>
                                    <th>heading</th>
                                    <th>section</th>
                                    <th>image</th>
                                    <th>technology</th>
                                    <th>github_link</th>
                                    <th>Server link</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($projects  as $project)
                                    <tr>
                                        <td>{{$project->id}}</td>
                                        <td>{{substr($project->details,0,20) }}</td>
                                        <td>{{$project->heading}}</td>
                                        <td>{{$project->section}}</td>
                                        <td>
                                            <img style="width: 70px" src="{{asset($project->image)}}">
                                        </td>
                                        <td>{{$project->technology}}</td>
                                        <td>{{$project->github_link}}</td>
                                        <td>{{$project->server_link}}</td>
                                        <td>
                                            <a href="{{route('project.edit',['id'=>$project->id])}}"><button class="btn btn-info">Edit</button></a>

                                            <form action="{{route('project.delete')}}" method="post" style="display: inline" >@csrf
                                                <input type="hidden" name="id" value="{{$project->id}}">
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







