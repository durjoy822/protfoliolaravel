@extends('admin.master')
@section('title')
  user_edit
@endsection
@section('content')
    <section class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Admin Edit page  </h5>
                        </div>
                        <div class="card-body">
                            <form action="{{route('user.update')}}" method="post" enctype="multipart/form-data">@csrf
                                <input type="hidden" value="{{$users->id}}" name="id">
                                <div class="row offset-2">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="floating-label" for="name">Name</label>
                                            <input type="text" value="{{$users->name}}" class="form-control" id="name" name="name" aria-describedby="emailHelp"placeholder="User Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="floating-label" for="email">Email</label>
                                            <input type="email" class="form-control" value="{{$users->email}}" id="email" name="email" placeholder="email">
                                        </div>
                                    </div>

                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label class="floating-label" for="image">Image</label>
                                            <input type="file" class="form-control" name="image" id="image" >
                                        </div>

                                        <div class="mb-2">
                                        old image:
                                        <img class="img-fluid" style="width: 70px;" src="{{asset($users->image)}}">
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

