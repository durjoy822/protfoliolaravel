<footer class="ftco-footer ftco-section">
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
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Links</h2>
                    <ul class="list-unstyled">
                        <li><a href="#home-section"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                        <li><a href="#about-section"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                        <li><a href="#services-section"><span class="icon-long-arrow-right mr-2"></span>Services</a></li>
                        <li><a href="#project-section"><span class="icon-long-arrow-right mr-2"></span>Projects</a></li>
                        <li><a href="#contact-section"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Services</h2>
                    <ul class="list-unstyled">
                        <li><a href="#services-section"><span class="icon-long-arrow-right mr-2"></span>Web Design</a></li>
                        <li><a href="#services-section"><span class="icon-long-arrow-right mr-2"></span>Web Development</a></li>
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
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">{{$info->phone}}</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">{{$info->email}}</span></a></li>
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
