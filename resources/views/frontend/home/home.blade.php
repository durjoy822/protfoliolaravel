@extends('frontend.master.master')
@section('title')
    home
@endsection
@section('content')
    <section id="home-section" class="hero">
        @foreach($sliders as $slider)
        <div class="home-slider  owl-carousel">
            <div class="slider-item ">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
                        <div class="one-third js-fullheight order-md-last img" style="background-image:url({{asset($slider->image)}});">
                            <div class="overlay"></div>
                        </div>
                        <div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading">{{$slider->heading}}</span>
                                <h1 class="mb-4 mt-3">{{$slider->content}}</h1>
                                <h2 class="mb-4">{{$slider->details}}</h2>
                                <p><a href="#contact-section" class="btn btn-primary py-3 px-4">Hire me</a> <a href="#projects-section" class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </section>

    <section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 col-lg-5 d-flex">
                    <div class="img-about img d-flex align-items-stretch">
                        <div class="overlay"></div>
                        <div class="img d-flex align-self-stretch align-items-center" style="background-image:url({{asset($slider->image)}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h1 class="big">About</h1>
                            <h2 class="mb-4">About Me</h2>
                            @foreach($abouts as $about)
                            <p>{{$about->details}}</p>

                            <ul class="about-info mt-4 px-md-0 px-2">
                                <li class="d-flex"><span>Name:</span> <span>{{$about->name}}</span></li>
                                <li class="d-flex"><span>Date of birth:</span> <span>{{$about->birth_date}}</span></li>
                                <li class="d-flex"><span>Address:</span> <span>{{$about->address}}</span></li>
                                <li class="d-flex"><span>Zip code:</span> <span>{{$about->zip}}</span></li>
                                <li class="d-flex"><span>Email:</span> <span>{{$about->email}}</span></li>
                                <li class="d-flex"><span>Phone: </span> <span>{{$about->phone}}</span></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="counter-wrap ftco-animate d-flex mt-md-3">
                        <div class="text">
                            <p class="mb-4">
                                <span class="number" data-number="3">0</span>
                                <span>Project complete</span>
                            </p>
                            <p><a href="#" class="btn btn-primary py-3 px-3">Download CV</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb" id="resume-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Resume</h1>
                    <h2 class="mb-4">Resume</h2>
                    @foreach($resume as $item)
                    <p>{{$item->heading}}</p>
                    @endforeach
                </div>
            </div>

            <div class="row">
                @foreach($resume as $item)
                <div class="col-md-6">
                    <div class="resume-wrap ftco-animate">
                        <span class="date">{{$item->year}}</span>
                        <h2>{{$item->department}}</h2>
                        <span class="position">{{$item->institute}}</span>
                        <p class="mt-4">{{$item->details}}</p>
                    </div>
                </div>
                @endforeach
                </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-6 text-center ftco-animate">
                    <p><a href="#" class="btn btn-primary py-4 px-5">Download CV</a></p>
                </div>
            </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" id="services-section">
        <div class="container">
            <div class="row justify-content-center py-5 mt-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Services</h1>
                    <h2 class="mb-4">Services</h2>
                    @foreach($service as $item)
                    <p>{{$item->heading}}</p>
                    @endforeach
                </div>
            </div>
            <div class="row">
                @foreach($service as $item)
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#" class="services-1">
							<span class="icon">
								<i class="{{$item->icone}}"></i>
							</span>
                        <div class="desc">
                            <h3 class="mb-5">{{$item->service}}</h3>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="ftco-section" id="skills-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Skills</h1>
                    <h2 class="mb-4">My Skills</h2>
                    @foreach($skills as $skill)
                    <p>{{$skill->heading}}</p>
                    @endforeach
                </div>
            </div>
            <div class="row">
                @foreach($skills as $skill)
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h3>{{$skill->name}}</h3>
                        <div class="progress">
                            <div class="progress-bar color-1" role="progressbar" aria-valuenow="100"
                                 aria-valuemin="0" aria-valuemax="" style="width:{{$skill->percentage}}%">
                                <span>{{$skill->percentage}}%</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-project" id="projects-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2"> Projects</h1>
                    <h2 class="mb-4">My Projects</h2>
                    @foreach($projects as $project)
                    <p>{{$project->details}}</p>
                    @endforeach
                </div>
            </div>
            <div class="row">
                @foreach($projects as $project)
                <div class="col-md-6">
                    <a href="{{route('project.view',['id'=>$project->id])}}">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url({{asset($project->image)}}">
                     <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3>{{$project->heading}}</h3>
                            <span>{{$project->section}}</span>
                        </div>
                    </div>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </section>


{{--    <section class="ftco-section" id="blog-section">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center mb-5 pb-5">--}}
{{--                <div class="col-md-7 heading-section text-center ftco-animate">--}}
{{--                    <h1 class="big big-2">Blog</h1>--}}
{{--                    <h2 class="mb-4">My Blog</h2>--}}
{{--                    @foreach($blogs as $blog)--}}
{{--                    <p>{{$blog->heading}}</p>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row d-flex">--}}
{{--                @foreach($blogs as $blog)--}}
{{--                <div class="col-md-4 d-flex ftco-animate">--}}
{{--                    <div class="blog-entry justify-content-end">--}}
{{--                        <a href="{{route('blog.view')}}" class="block-20" style="background-image: url('{{asset($blog->photo)}}');">--}}
{{--                        </a>--}}
{{--                        <div class="text mt-3 float-right d-block">--}}
{{--                            <div class="d-flex align-items-center mb-3 meta">--}}
{{--                                <p class="mb-0">--}}
{{--                                    <span class="mr-2">{{$blog->date}}</span>--}}
{{--                                    <a href="#" class="mr-2">Admin</a>--}}
{{--                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                            <h3 class="heading"><a href="{{route('blog.view')}}">{{($blog->content)}}</a></h3>--}}
{{--                            <p>{{$blog->details}}</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Contact</h1>
                    <h2 class="mb-4">Contact Me</h2>
{{--                    <p>{{$about->details}}</p>--}}
                </div>
            </div>

            <div class="row d-flex contact-info mb-5">
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-map-signs"></span>
                        </div>
                        <h3 class="mb-4">Address</h3>
                        <p>{{$about->address}}</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-phone2"></span>
                        </div>
                        <h3 class="mb-4">Contact Number</h3>
                        <p><a href="tel://1234567920">{{$about->phone}}</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-paper-plane"></span>
                        </div>
                        <h3 class="mb-4">Email Address</h3>
                        <p><a href="mailto:info@yoursite.com">{{$about->email}}</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-globe"></span>
                        </div>
                        <h3 class="mb-4">Website</h3>
                        <p><a href="{{$about->web_site}}">protfoliolaravel</a></p>
                    </div>
                </div>
            </div>

            <div class="row no-gutters block-9">
                <div class="col-md-6 order-md-last d-flex">
                    <form action="{{route('message.store')}}" method="post" class="bg-light p-4 p-md-5 contact-form">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Your Email">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>

                <div class="col-md-6 d-flex">
                    <div class="img" style="background-image: url({{asset(asset($slider->image))}}"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
