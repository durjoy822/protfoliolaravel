@extends('admin.master')
@section('title')
  resume_create
@endsection
@section('content')
    <section class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Resume Create  </h5>
                        </div>
                        <div class="card-body">
                            <form action="{{route('resume.save')}}" method="post" >@csrf
                                <div class="row offset-2">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label for="heading">heading</label>
                                            <textarea class="form-control" name="heading" id="heading" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="floating-label" for="year">Study Year</label>
                                            <input type="text" class="form-control" name="year" id="year" placeholder="Year">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="floating-label" for="department">Department</label>
                                            <input type="text" class="form-control" name="department" id="department" placeholder="Department">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="floating-label" for="institute">Institute</label>
                                            <input type="text" class="form-control" name="institute" id="institute" placeholder="Institute">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="floating-label" for="details">Details</label>
                                            <textarea class="form-control" name="details" id="details" rows="5"></textarea>
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


