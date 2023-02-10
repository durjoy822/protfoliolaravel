@extends('admin.master')
@section('title')
    Skill_manage
@endsection
@section('content')
    <section class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <span class="h5">Manage Table</span>
                        <span class="float-right "><a href="{{route('skill.create')}}" class="btn btn-primary">Skill create </a> </span>
                        <span class="d-block m-t-5 text-behance">skill Mange Table </span>
                        <div class="d-block m-t-5 text-behance text-center text-white bg-primary h-4" >{{Session::get('skill')}} </div>
                    </div>
                    <div class="card-body table-border-style  table-hover ">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Heading</th>
                                    <th>Name</th>
                                    <th>Percentage</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($skills as $skill)
                                    <tr>
                                        <td>{{$skill->id}}</td>
                                        <td>{{substr($skill->heading ,0,20) }}</td>
                                        <td>{{$skill->name}}</td>
                                        <td>{{$skill->percentage}}%</td>
                                        <td>
                                            <a href="{{route('skill.edit',['id'=>$skill->id])}}"><button class="btn btn-info">Edit</button></a>

                                            <form action="{{route('skill.delete')}}" method="post" style="display: inline" >@csrf
                                                <input type="hidden" name="id" value="{{$skill->id}}">
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






