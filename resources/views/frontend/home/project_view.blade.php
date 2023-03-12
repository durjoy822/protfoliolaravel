<style>
    .ftco-navbar-light.scrolled .navbar-toggler {
        border: none;
        color: rgb(236 219 219 / 50%) !important;
        border-color: rgb(226 207 207 / 50%) !important;
        cursor: pointer;
        text-transform: uppercase;
        font-size: 16px;
        letter-spacing: .1em;

}
</style>
<div id="particles-js"> </div>
@include('frontend.include.headerlink')
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand font-italic" href="http://localhost/protfoliolaravel/public">Nr<sub class="text-danger">protfolio</sub></a>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation" style=" color: rgba(225, 201, 201, 0.5) !important">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
                <li class="nav-item"><a href="{{route('pro.home')}}" class="nav-link"><span>Home</span></a></li>
                <li class="nav-item"><a href="{{route('pro.home')}}" class="nav-link"><span>About</span></a></li>
                <li class="nav-item"><a href="{{route('pro.home')}}" class="nav-link"><span>Resume</span></a></li>
                <li class="nav-item"><a href="{{route('pro.home')}}" class="nav-link"><span>Services</span></a></li>
                <li class="nav-item"><a href="{{route('pro.home')}}" class="nav-link"><span>Skills</span></a></li>
                <li class="nav-item"><a href="{{route('pro.home')}}" class="nav-link"><span>Projects</span></a></li>
                {{--                <li class="nav-item"><a href="#blog-section" class="nav-link"><span>My Blog</span></a></li>--}}
                <li class="nav-item"><a href="{{route('pro.home')}}" class="nav-link"><span>Contact</span></a></li>
            </ul>
        </div>
    </div>
</nav>


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
                            <p>{{$project->project_details}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<footer class="ftco-footer ftco-section pb-0">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    @php $infos = \App\Models\About::all(); @endphp
                    <h2 class="ftco-heading-2">About</h2>
                    @foreach($infos as $info )
                        <p>{{substr($info->details,0,100) }}..</p>
                    @endforeach
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="https://github.com/durjoy822"><span ><i class="fa-brands fa-github"></i></span></a></li>
                        <li class="ftco-animate"><a href="https://www.facebook.com/durjoy822"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.linkedin.com/in/md-nayem-hossain-05653b246/"><span ><i class="fa-brands fa-linkedin"></i></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget ml-md-4">
                    <h2 class="ftco-heading-2">Links</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{route('pro.home')}}"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                        <li><a href="{{route('pro.home')}}"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                        <li><a href="{{route('pro.home')}}"><span class="icon-long-arrow-right mr-2"></span>Services</a></li>
                        <li><a href="{{route('pro.home')}}"><span class="icon-long-arrow-right mr-2"></span>Projects</a></li>
                        <li><a href="{{route('pro.home')}}"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Services</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{route('pro.home')}}"><span class="icon-long-arrow-right mr-2"></span>Web Design</a></li>
                        <li><a href="{{route('pro.home')}}"><span class="icon-long-arrow-right mr-2"></span>Web Development</a></li>
                    </ul>
                </div>
            </div>
            @php $infos = \App\Models\About::all(); @endphp
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            @foreach($infos as $info)
                                <li><span class="icon icon-map-marker"></span><span class="text">{{$info->address}}</span></li>
                                <li><a><span class="icon icon-phone"></span><span class="text">{{$info->phone}}</span></a></li>
                                <li><a ><span class="icon icon-envelope"></span><span class="text">{{$info->email}}</span></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p>
                    All rights reserved © 2023 Nrdurjoy
                </p>
            </div>
        </div>
    </div>
</footer>

@include('frontend.include.footerscript')
<style>
    #particles-js {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
    }
</style>
<!-- .section -->
{{--    @endsection--}}

