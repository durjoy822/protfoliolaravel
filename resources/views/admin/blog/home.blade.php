@extends('admin.master')
@section('title')
    Blog_manage
@endsection
@section('content')
    <section class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <span class="h5">Manage Table</span>
                        <span class="float-right "><a href="{{route('blog.create')}}" class="btn btn-primary">Blog create </a> </span>
                        <span class="d-block m-t-5 text-behance">Blog Manage Table </span>
                    </div>
                    <div class="card-body table-border-style  table-hover ">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Heading </th>
                                    <th>Content</th>
                                    <th>Details</th>
                                    <th>Date</th>
                                    <th>Image</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{$blog->id}}</td>
                                        <td>{{$blog->heading}}</td>
                                        <td> {{substr($blog->content,0,20) }}</td>
                                        <td>{{substr($blog->details,0,20)}}</td>
                                        <td>{{$blog->date}}</td>
                                        <td>
                                            <img class="img-fluid " style="width: 70px" src="{{asset($blog->photo)}}">
                                        </td>
                                        <td>
                                            <a href="{{route('blog.Edit',['id'=>$blog->id])}}"><button class="btn btn-info">Edit</button></a>

                                            <form action="{{route('blog.delete')}}" method="post" style="display: inline" >@csrf
                                                <input type="hidden" name="id" value="{{$blog->id}}">
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



