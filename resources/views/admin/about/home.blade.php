@extends('admin.master')
@section('title')
    about_manage
@endsection
@section('content')
    <section class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <span class="h5">Manage Table</span>
                        <span class="float-right "><a href="{{route('about.create')}}" class="btn btn-primary">About create </a> </span>
                        <span class="d-block m-t-5 text-behance">About Mange Table </span>
                    </div>
                    <div class="card-body table-border-style  table-hover ">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Details </th>
                                    <th>Name</th>
                                    <th>Birth_date</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Web_site</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                               @foreach($abouts as $about)
                                    <tr>
                                        <td>{{$about->id}}</td>
                                        <td>{{substr($about->details,0,20) }}</td>
                                        <td>{{$about->name}}</td>
                                        <td>{{$about->birth_date}}</td>
                                        <td>{{$about->address}}</td>
                                        <td>{{$about->email}}</td>
                                        <td>{{$about->phone}}</td>
                                        <td>{{ substr($about->web_site,0,10)}}</td>
                                        <td>
                                            <a href="{{route('about.edit',['id'=>$about->id])}}"><button class="btn btn-info">Edit</button></a>

                                            <form action="{{route('about.delete')}}" method="post" style="display: inline" >@csrf
                                                <input type="hidden" name="id" value="{{$about->id}}">
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


