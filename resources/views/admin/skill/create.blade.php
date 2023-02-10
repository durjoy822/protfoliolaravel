@extends('admin.master')
@section('title')
    Skill_create
@endsection
@section('content')
    <section class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Skill Create  </h5>
                            <div class="d-block m-t-5 text-behance text-center text-white bg-primary h-4 " >{{Session::get('skill')}} </div>
                        </div>
                        <div class="card-body">
                            <form action="{{route('skill.save')}}" method="post" >@csrf
                                <div class="row offset-2">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label for="heading">heading</label>
                                            <textarea class="form-control" name="heading" id="heading" placeholder="heading" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="floating-label" for="percentage">percentage </label>
                                            <input type="text" class="form-control" name="percentage" id="percentage" placeholder="your percentage (%)">
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

