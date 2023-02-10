@extends('admin.master')
@section('title')
    resume_manage
@endsection
@section('content')
    <section class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <span class="h5">Manage Table</span>
                        <span class="float-right "><a href="{{route('resume.create')}}" class="btn btn-primary">Resume create </a> </span>
                        <span class="d-block m-t-5 text-behance">Resume Mange Table </span>
                    </div>
                    <div class="card-body table-border-style  table-hover ">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>heading </th>
                                    <th>year</th>
                                    <th>department</th>
                                    <th>institute</th>
                                    <th>details</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($resume as $item)
                                    <tr>

                                        <td>{{$item->id}}</td>
                                        <td>{{substr($item->heading,0,20)}}</td>
                                        <td>{{$item->year}}</td>
                                        <td>{{$item->department}}</td>
                                        <td>{{$item->institute}}</td>
                                        <td>{{substr($item->details,0,10) }}</td>
                                        <td>
                                            <a href="{{route('resume.edit',['id'=>$item->id])}}"><button class="btn btn-info">Edit</button></a>

                                            <form action="{{route('resume.delete')}}" method="post" style="display: inline" >@csrf
                                                <input type="hidden" name="id" value="{{$item->id}}">
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


