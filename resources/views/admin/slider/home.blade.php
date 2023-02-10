@extends('admin.master')
@section('title')
    slider_manage
@endsection
@section('content')
    <section class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <span class="h5">Manage Table</span>
                        <span class="float-right "><a href="{{route('slider.create')}}" class="btn btn-primary">Slider create </a> </span>
                        <span class="d-block m-t-5 text-behance">Slider Manage Table </span>
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
                                    <th>Image</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                             @foreach($sliders as $slider)
                                    <tr>
                                        <td>{{$slider->id}}</td>
                                        <td>{{$slider->heading}}</td>
                                        <td>{{$slider->content}}</td>
                                        <td>{{$slider->details}}</td>
                                        <td><img class="img-fluid " style="width: 70px" src="{{asset($slider->image)}}"> </td>
                                        <td>
                                            <a href="{{route('slider.edit',['id'=>$slider->id])}}"><button class="btn btn-info">Edit</button></a>

                                            <form action="{{route('slider.delete')}}" method="post" style="display: inline" >@csrf
                                                <input type="hidden" name="id" value="{{$slider->id}}">
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

