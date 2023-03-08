@extends('admin.master')
@section('title')
    Message_manage
@endsection
@section('content')
    <section class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <span class="h5">Message Table</span>
                    </div>
                    <div class="card-body table-border-style  table-hover ">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Name </th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($messages as $message)
                                    <tr>
                                        <td>{{ $message->id}}</td>
                                        <td>{{ $message->name}}</td>
                                        <td>{{ $message->email}}</td>
                                        <td> {{ $message->subject}}</td>
                                        <td>{{ $message->message}}</td>
                                        <td>
                                            <form action="{{route('message.delete')}}" method="post" style="display: inline" >@csrf
                                                <input type="hidden" name="id" value="{{ $message->id}}">
                                                <input type="submit" value="Delete" class="btn  btn-danger">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection




