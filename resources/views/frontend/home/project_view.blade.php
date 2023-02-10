@extends('frontend.master.master')
@section('content')
@section('title')
    project-view
@endsection
        <section class="ftco-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 ftco-animate">
                        <p>
                            <a href="{{url($project->server_link)}}"><img src="{{asset($project->image)}}" alt="" style="height: 400px" class="img-fluid"></a>
                        </p>

                    </div> <!-- .col-md-8 -->
                    <div class="col-lg-5 sidebar ftco-animate">
                        <div class="sidebar-box ftco-animate">
                            <h3 class="heading-sidebar">Technology use </h3>
                            {{$project->technology}}
                        </div>
                       <a href="{{url($project->server_link)}}"> <span class="btn btn-info mt-2">view project online</span>
                      <a href="{{url($project->github_link)}}"> <span class="btn btn-warning mt-2"> Github source code </span></a>

                        <div class="sidebar-box ftco-animate">
                            <h3 class="heading-sidebar">About project</h3>
                            <p>{{$project->details}}</p>
                        </div>
                    </div>

                </div>
            </div>
        </section> <!-- .section -->
    @endsection

