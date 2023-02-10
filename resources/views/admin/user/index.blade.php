@extends('admin.master')
@section('title')
    user_create
@endsection
@section('content')
    <section class="pcoded-main-container">
        <div class="pcoded-content">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Admin User Create </h5>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.userSave')}}" method="post" enctype="multipart/form-data">@csrf
                        <div class="row offset-2">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label class="floating-label" for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp"placeholder="User Name">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label class="floating-label" for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="email">
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
