@extends('admin.master')
@section('title')
    slider_edit
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
                            <form action="{{route('slider.update')}}" method="post" enctype="multipart/form-data">@csrf
                                <input type="hidden" name="id" value="{{$sliders->id}}">
                                <div class="row offset-2">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="floating-label" for="heading">Heading</label>
                                            <input type="text" class="form-control" value="{{$sliders->heading}}" id="heading" name="heading" aria-describedby="emailHelp"placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label for="content">Content</label>
                                            <textarea class="form-control"  name="content" id="content" rows="5">{{$sliders->content}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label for="details">Details</label>
                                            <textarea class="form-control" name="details" id="details" rows="5">{{$sliders->details}}</textarea>
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
                                            <label class="floating-label" for="image">Old Image</label>
                                            <img style="width: 70px;" src="{{asset($sliders->image)}}">
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


