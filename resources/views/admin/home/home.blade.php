@extends('admin.master')
@section('title')
    admin_home
@endsection
@section('content')
    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Dashboard Analytics</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Dashboard Analytics</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- table card-1 start -->
                <div class="col-md-12 col-xl-4">
                    <div class="card flat-card">
                        <div class="row-table">
                            <div class="col-sm-6 card-body br">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="icon feather icon-eye text-c-green mb-1 d-block"></i>
                                    </div>
                                    <div class="col-sm-8 text-md-center">
                                        <h5>10k</h5>
                                        <span>Visitors</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="icon feather icon-music text-c-red mb-1 d-block"></i>
                                    </div>
                                    <div class="col-sm-8 text-md-center">
                                        <h5>100%</h5>
                                        <span>Volume</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-table">
                            <div class="col-sm-6 card-body br">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="icon feather icon-file-text text-c-blue mb-1 d-block"></i>
                                    </div>
                                    <div class="col-sm-8 text-md-center">
                                        <h5>2000 +</h5>
                                        <span>Files</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="icon feather icon-mail text-c-yellow mb-1 d-block"></i>
                                    </div>
                                    <div class="col-sm-8 text-md-center">
                                        <h5>120</h5>
                                        <span>Mails</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- widget primary card start -->
                    <div class="card flat-card widget-primary-card">
                        <div class="row-table">
                            <div class="col-sm-3 card-body">
                                <i class="feather icon-star-on"></i>
                            </div>
                            <div class="col-sm-9">
                                <h4>4000 +</h4>
                                <h6>Ratings Received</h6>
                            </div>
                        </div>
                    </div>
                    <!-- widget primary card end -->
                </div>
                <!-- table card-1 end -->
                <!-- table card-2 start -->
                <div class="col-md-12 col-xl-4">
                    <div class="card flat-card">
                        <div class="row-table">
                            <div class="col-sm-6 card-body br">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="icon feather icon-share-2 text-c-blue mb-1 d-block"></i>
                                    </div>
                                    <div class="col-sm-8 text-md-center">
                                        <h5>1000</h5>
                                        <span>Shares</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="icon feather icon-wifi text-c-blue mb-1 d-block"></i>
                                    </div>
                                    <div class="col-sm-8 text-md-center">
                                        <h5>600</h5>
                                        <span>Network</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-table">
                            <div class="col-sm-6 card-body br">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="icon feather icon-rotate-ccw text-c-blue mb-1 d-block"></i>
                                    </div>
                                    <div class="col-sm-8 text-md-center">
                                        <h5>3550</h5>
                                        <span>Returns</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="icon feather icon-shopping-cart text-c-blue mb-1 d-blockz"></i>
                                    </div>
                                    <div class="col-sm-8 text-md-center">
                                        <h5>100%</h5>
                                        <span>Order</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- widget-success-card start -->
                    <div class="card flat-card widget-purple-card">
                        <div class="row-table">
                            <div class="col-sm-3 card-body">
                                <i class="fas fa-trophy"></i>
                            </div>
                            <div class="col-sm-9">
                                <h4>17</h4>
                                <h6>Achievements</h6>
                            </div>
                        </div>
                    </div>
                    <!-- widget-success-card end -->
                </div>
                <!-- table card-2 end -->
                <!-- Widget primary-success card start -->
                <div class="col-md-12 col-xl-4">
                    <div class="card support-bar overflow-hidden">
                        <div class="card-body pb-0">
                            <h2 class="m-0">350</h2>
                            <span class="text-c-blue">Support Requests</span>
                            <p class="mb-3 mt-3">Total number of support requests that come in.</p>
                        </div>
                        <div id="support-chart"></div>
                        <div class="card-footer bg-primary text-white">
                            <div class="row text-center">
                                <div class="col">
                                    <h4 class="m-0 text-white">10</h4>
                                    <span>Open</span>
                                </div>
                                <div class="col">
                                    <h4 class="m-0 text-white">5</h4>
                                    <span>Running</span>
                                </div>
                                <div class="col">
                                    <h4 class="m-0 text-white">3</h4>
                                    <span>Solved</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Widget primary-success card end -->
                <table class="table table-striped table-bordered">
                    <thead>
                    <h4>Message</h4>

                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Message</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($messages))
                    @foreach($messages as $message)
                    <tr>
                        <td>{{$message->name}}</td>
                        <td>{{$message->email}}</td>
                        <td>{{$message->subject}}</td>
                        <td>{{$message->message}}</td>
                        <td>
                            <form action="{{route('message.delete')}}" method="post" style="display: inline" >@csrf
                                <input type="hidden" name="id" value="{{ $message->id}}">
                                <input type="submit" value="Delete" class="btn  btn-danger">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <td colspan="5">No Message for you!</td>
                      @endif
                    </tbody>
                </table>
                <!-- seo start -->
                <div class="col-xl-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h3>$16,756</h3>
                                    <h6 class="text-muted m-b-0">Visits<i class="fa fa-caret-down text-c-red m-l-10"></i></h6>
                                </div>
                                <div class="col-6">
                                    <div id="seo-chart1" class="d-flex align-items-end"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h3>49.54%</h3>
                                    <h6 class="text-muted m-b-0">Bounce Rate<i class="fa fa-caret-up text-c-green m-l-10"></i></h6>
                                </div>
                                <div class="col-6">
                                    <div id="seo-chart2" class="d-flex align-items-end"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h3>1,62,564</h3>
                                    <h6 class="text-muted m-b-0">Products<i class="fa fa-caret-down text-c-red m-l-10"></i></h6>
                                </div>
                                <div class="col-6">
                                    <div id="seo-chart3" class="d-flex align-items-end"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- seo end -->

                <!-- Latest Customers start -->
                <div class="col-lg-8 col-md-12">
                    <div class="card table-card review-card">
                        <div class="card-header borderless ">
                            <h5>Customer Reviews</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                        <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                        <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                        <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pb-0">
                            <div class="review-block">
                                <div class="row">
                                    <div class="col-sm-auto p-r-0">
                                        <img src="{{asset('adminAssets')}}/assets/images/user/avatar-2.jpg" alt="user image" class="img-radius profile-img cust-img m-b-15">
                                    </div>
                                    <div class="col">
                                        <h6 class="m-b-15">John Deo <span class="float-right f-13 text-muted"> a week ago</span></h6>
                                        <a href="#!"><i class="feather icon-star-on f-18 text-c-yellow"></i></a>
                                        <a href="#!"><i class="feather icon-star-on f-18 text-c-yellow"></i></a>
                                        <a href="#!"><i class="feather icon-star-on f-18 text-c-yellow"></i></a>
                                        <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                                        <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                                        <p class="m-t-15 m-b-15 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                        <a href="#!" class="m-r-30 text-muted"><i class="feather icon-thumbs-up m-r-15"></i>Helpful?</a>
                                        <a href="#!"><i class="feather icon-heart-on text-c-red m-r-15"></i></a>
                                        <a href="#!"><i class="feather icon-edit text-muted"></i></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-auto p-r-0">
                                        <img src="{{asset('adminAssets')}}/assets/images/user/avatar-4.jpg" alt="user image" class="img-radius profile-img cust-img m-b-15">
                                    </div>
                                    <div class="col">
                                        <h6 class="m-b-15">Allina D’croze <span class="float-right f-13 text-muted"> a week ago</span></h6>
                                        <a href="#!"><i class="feather icon-star-on f-18 text-c-yellow"></i></a>
                                        <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                                        <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                                        <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                                        <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                                        <p class="m-t-15 m-b-15 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                        <a href="#!" class="m-r-30 text-muted"><i class="feather icon-thumbs-up m-r-15"></i>Helpful?</a>
                                        <a href="#!"><i class="feather icon-heart-on text-c-red m-r-15"></i></a>
                                        <a href="#!"><i class="feather icon-edit text-muted"></i></a>
                                        <blockquote class="blockquote m-t-15 m-b-0">
                                            <h6>Allina D’croze</h6>
                                            <p class="m-b-0 text-muted">Lorem Ipsum is simply dummy text of the industry.</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card chat-card">
                        <div class="card-header">
                            <h5>Chat</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                        <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                        <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                        <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row m-b-20 received-chat">
                                <div class="col-auto p-r-0">
                                    <img src="{{asset('adminAssets')}}/assets/images/user/avatar-2.jpg" alt="user image" class="img-radius wid-40">
                                </div>
                                <div class="col">
                                    <div class="msg">
                                        <p class="m-b-0">Nice to meet you!</p>
                                    </div>
                                    <p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>10:20am</p>
                                </div>
                            </div>
                            <div class="row m-b-20 send-chat">
                                <div class="col">
                                    <div class="msg">
                                        <p class="m-b-0">Nice to meet you!</p>
                                    </div>
                                    <p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>10:20am</p>
                                </div>
                                <div class="col-auto p-l-0">
                                    <img src="{{asset('adminAssets')}}/assets/images/user/avatar-3.jpg" alt="user image" class="img-radius wid-40">
                                </div>
                            </div>
                            <div class="row m-b-20 received-chat">
                                <div class="col-auto p-r-0">
                                    <img src="{{asset('adminAssets')}}/assets/images/user/avatar-2.jpg" alt="user image" class="img-radius wid-40">
                                </div>
                                <div class="col">
                                    <div class="msg">
                                        <p class="m-b-0">Nice to meet you!</p>
                                        <img src="{{asset('adminAssets')}}/assets/images/widget/dashborad-1.jpg" alt="">
                                        <img src="{{asset('adminAssets')}}/assets/images/widget/dashborad-3.jpg" alt="">
                                    </div>
                                    <p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>10:20am</p>
                                </div>
                            </div>
                            <div class="input-group m-t-15">
                                <input type="text" name="task-insert" class="form-control" id="Project" placeholder="Send message">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">
                                        <i class="feather icon-message-circle"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Latest Customers end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade
        <br/>to any of the following web browsers to access this website.
    </p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="{{asset('adminAssets')}}/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="{{asset('adminAssets')}}/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="{{asset('adminAssets')}}/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="{{asset('adminAssets')}}/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="{{asset('adminAssets')}}/assets/images/browser/ie.png" alt="">
                    <div>IE (11 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
@endsection
