@extends('admin.master')
@section('title')
    service_manage
@endsection
@section('content')
    <section class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <span class="h5">Manage Table</span>
                        <span class="float-right "><a href="{{route('service.create')}}" class="btn btn-primary">service create </a> </span>
                        <span class="d-block m-t-5 text-behance">Resume Mange Table </span>
                    </div>
                    <div class="card-body table-border-style  table-hover ">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Heading </th>
                                    <th>Service</th>
                                    <th>Icone</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($services as $service)
                                    <tr>

                                        <td>{{$service->id}}</td>
                                        <td>{{substr($service->heading,0,20) }}</td>
                                        <td>{{$service->service}}</td>
                                        <td>{{$service->icone}}</td>
                                        <td>
                                            <a href="{{route('service.edit',['id'=>$service->id])}}"><button class="btn btn-info">Edit</button></a>

                                            <form action="{{route('service.delete')}}" method="post" style="display: inline" >@csrf
                                                <input type="hidden" name="id" value="{{$service->id}}">
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





