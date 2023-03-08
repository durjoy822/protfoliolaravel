@extends('admin.master')
@section('title')
    slider_create
@endsection
@section('content')
    <section class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>project Create  </h5>
                        </div>
                        <div class="card-body">
                            <form action="{{route('project.save')}}" method="post" enctype="multipart/form-data">@csrf
                                <div class="row offset-2">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label for="details">Details</label>
                                            <textarea class="form-control" name="details" id="details" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="floating-label" for="heading">Heading</label>
                                            <input type="text" class="form-control" id="heading" name="heading" aria-describedby="emailHelp"placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="floating-label" for="section">Section</label>
                                            <input type="text" class="form-control" id="section" name="section" aria-describedby="emailHelp"placeholder="section">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="floating-label" for="technoloy">Technology</label>
                                            <input type="text" class="form-control" id="technology" name="technology" aria-describedby="emailHelp"placeholder="technology">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="floating-label" for="technoloy">Project details</label>
                                            <input type="text" class="form-control" id="technology" name="project_details" aria-describedby="emailHelp"placeholder="project details">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="floating-label" for="link">Github Link</label>
                                            <input type="text" class="form-control" id="link" name="github_link" aria-describedby="emailHelp"placeholder="section">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="floating-label" for="link">Server link</label>
                                            <input type="text" class="form-control" id="link" name="server_link" aria-describedby="emailHelp"placeholder="section">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="floating-label" for="image">Image</label>
                                            <input type="file" class="form-control" name="image" id="image" >
                                        </div>

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

