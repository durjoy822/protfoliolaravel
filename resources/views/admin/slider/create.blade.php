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
                            <h5>Slider Create  </h5>
                        </div>
                        <div class="card-body">
                            <form action="{{route('slider.save')}}" method="post" enctype="multipart/form-data">@csrf
                                <div class="row offset-2">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="floating-label" for="heading">Heading</label>
                                            <input type="text" class="form-control" id="heading" name="heading" aria-describedby="emailHelp"placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label for="content">Content</label>
                                            <textarea class="form-control" name="content" id="textarea" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label for="details">Details</label>
                                            <textarea class="form-control" name="details" id="textarea" rows="5"></textarea>
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

