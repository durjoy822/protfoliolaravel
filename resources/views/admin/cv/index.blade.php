@extends('admin.master')
@section('title')
    Cv
@endsection
@section('content')
    <section class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <span class="h5">Cv </span>
                        <span class="float-right">
                            <form action="{{route('cv.upload')}}" method="post" class="d-inline" enctype="multipart/form-data">@csrf
                                <label class="text-bold">Upload Cv</label>
                                <input type="file" name="cv" >
                                <button type="submit" class="btn btn-info">Save</button>
                            </form>
                            </span>
                    </div>
                    <div class="card-body table-border-style  table-hover ">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Cv</th>
                                    <th>download</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cvs as $cv)
                                    <tr>
                                        <td>{{$cv->id}}</td>
                                        <td>{{$cv->cv}}</td>
                                        <td>
                                            <form action="{{route('cv.download',['id'=>$cv->id])}}" method="post" style="display: inline" >@csrf
                                                <input type="hidden" name="id" value="{{$cv->cv}}">
                                                <input type="submit" value="Download" class="btn  btn-danger">
                                            </form>
{{--                                            <a href="{{route('cv.download',['cv'=>$cv->cv])}}"><button class="btn btn-info">Download</button></a>--}}
                                        </td>
                                        <td>
                                            <form action="{{route('cv.delete')}}" method="post" style="display: inline" >@csrf
                                                <input type="hidden" name="id" value="{{$cv->id}}">
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




