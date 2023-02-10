@extends('admin.master')
@section('title')
    about_edit
@endsection
@section('content')
    <section class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>About Edit  </h5>
                        </div>
                        <div class="card-body">
                            <form action="{{route('about.update')}}" method="post" >@csrf
                                <input type="hidden" name="id" value="{{$abouts->id}}">
                                <div class="row offset-2">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label for="details">Details</label>
                                            <textarea class="form-control" name="details" id="details" rows="5">{{$abouts->details}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="floating-label" for="name">Name</label>
                                            <input type="text" class="form-control" name="name" value="{{$abouts->name}}" id="name" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="floating-label" for="birth_date">Date of Birth</label>
                                            <input type="date" class="form-control" name="birth_date" value="{{$abouts->birth_date}}" id="birth_date" placeholder="Birth Date">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="floating-label" for="address">Address</label>
                                            <input type="text" class="form-control" name="address" value="{{$abouts->address}}" id="address" placeholder="Address">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="floating-label" for="zipCode">Zip Code</label>
                                            <input type="number" class="form-control" name="zip" value="{{$abouts->zip}}" id="zipCode" placeholder="Address">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="floating-label" for="email">Email</label>
                                            <input type="email" class="form-control" name="email" value="{{$abouts->email}}" id="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="floating-label" for="phone">Phone</label>
                                            <input type="number" class="form-control" name="phone" value="{{$abouts->phone}}" id="phone" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="floating-label" for="web_site">Website Link</label>
                                            <input type="text" class="form-control" name="web_site" value="{{$abouts->web_site}}" id="web_site" placeholder="Phone Number">
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


