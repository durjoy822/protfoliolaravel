@extends('admin.master')
@section('title')
    Skill_Edit
@endsection
@section('content')
    <section class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Skill Edit  </h5>
                        </div>
                        <div class="card-body">
                            <form action="{{route('skill.update')}}" method="post" >@csrf
                                <input type="hidden" name="id" value="{{$skills->id}}">
                                <div class="row offset-2">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label for="heading">Heading</label>
                                            <textarea class="form-control" name="heading" id="heading"  rows="5">{{$skills->heading}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" value="{{$skills->name}}" name="name" id="name"  rows="5">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="floating-label" for="percentage">percentage </label>
                                            <input type="text" class="form-control" name="percentage" value="{{$skills->percentage}}" id="html" placeholder="your percentage (%)">
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

