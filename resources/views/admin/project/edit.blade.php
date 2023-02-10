@extends('admin.master')
@section('title')
    project edit
@endsection
@section('content')
    <section class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>project Edit  </h5>
                            <div class="d-block m-t-5 text-behance text-center text-white bg-primary h-4" >{{Session::get('project')}} </div>

                        </div>
                        <div class="card-body">
                            <form action="{{route('project.update')}}" method="post" enctype="multipart/form-data">@csrf
                                <input type="hidden" value="{{$project->id}}" name="id">
                                <div class="row offset-2">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label for="details">Details</label>
                                            <textarea class="form-control" name="details" id="details" rows="5">{{$project->details}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="floating-label" for="heading">Heading</label>
                                            <input type="text" class="form-control" id="heading" value="{{$project->heading}}" name="heading" aria-describedby="emailHelp"placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="floating-label" for="section">Section</label>
                                            <input type="text" class="form-control" id="section" value="{{$project->section}}" name="section" aria-describedby="emailHelp"placeholder="section">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="floating-label" for="technoloy">Technology</label>
                                            <input type="text" class="form-control" value="{{$project->technology}}" id="technology" name="technology" aria-describedby="emailHelp"placeholder="technology">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="floating-label" for="link">Github Link</label>
                                            <input type="text" class="form-control" value="{{$project->github_link}}" id="link" name="github_link" aria-describedby="emailHelp"placeholder="section">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="floating-label" for="link">Server link</label>
                                            <input type="text" class="form-control" value="{{$project->server_link}}" id="link" name="server_link" aria-describedby="emailHelp"placeholder="section">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="floating-label" for="image">Image</label>
                                            <input type="file" class="form-control" name="image" id="image" >
                                        </div>
                                        Old Image: <img  style="width: 70px" src="{{asset($project->image)}}">
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <input type="submit"  class="btn btn-info">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection


