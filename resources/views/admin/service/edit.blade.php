@extends('admin.master')
@section('title')
    service_edit
@endsection
@section('content')
    <section class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Service edit  </h5>
                        </div>
                        <div class="card-body">
                            <form action="{{route('service.update')}}" method="post" >@csrf
                                <input type="hidden" name="id" value="{{$servie->id}}">
                                <div class="row offset-2">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label for="heading">heading</label>
                                            <textarea class="form-control"  name="heading" id="heading" rows="5">{{$servie->heading}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="floating-label" for="service">Service </label>
                                            <input type="text" class="form-control" name="service" value="{{$servie->service}}" id="service" placeholder="Your service">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="floating-label" for="icone">icone</label>
                                            <input type="text" class="form-control" name="icone" value="{{$servie->icone}}" id="icone" placeholder="Icone">
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

