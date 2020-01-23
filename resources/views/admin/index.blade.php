@extends('layouts.sidebar')

@section('content')

    <!-- Content -->

    <!-- // END navbar -->
    <div class="innerLR">
        <h2 class="margin-none">Chakwizira Sports & Recreation Centre Admin Dashboard &nbsp;<i class="fa fa-fw fa-pencil text-muted"></i>
        </h2>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="widget innerAll text-center">
                            <h3 class="innerT">Media</h3>
                            <p class="innerB margin-none text-xlarge text-condensed strong text-primary"><i class="fa fa-fw fa-camera"></i></p>
                            <div class="innerTB">
                                <p><a href="{{'/gallery'}}">View</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="widget innerAll text-center">
                            <h3 class="innerT">Products</h3>
                            <p class="innerB margin-none text-xlarge text-condensed strong text-primary"><i class="fa fa-fw fa-camera"></i></p>
                            <div class="innerTB">
                                <p><a href="{{'/products/index'}}">View</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="widget innerAll text-center">
                            <h3 class="innerT">Settings</h3>
                            <p class="innerB margin-none text-xlarge text-condensed strong text-primary"><i class="fa fa-fw fa-magnet"></i></p>
                            <div class="innerTB">
                                <p><a href="{{'/settings'}}">View</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="widget innerAll text-center">
                            <h3 class="innerT">HomePage Banners</h3>
                            <p class="innerB margin-none text-xlarge text-condensed strong text-primary"><i class="fa fa-fw fa-indent"></i></p>
                            <div class="innerTB">
                                <p><a href="{{'/banners'}}">View</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="widget innerAll text-center">
                            <h3 class="innerT">Users</h3>
                            <p class="innerB margin-none text-xlarge text-condensed strong text-primary"><i class="fa fa-fw fa-user"></i></p>
                            <div class="innerTB">
                                <p><a href="{{'/admin/users'}}">View</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="widget innerAll text-center">
                            <h3 class="innerT">News</h3>
                            <p class="innerB margin-none text-xlarge text-condensed strong text-primary"><i class="fa fa-fw fa-magnet"></i></p>
                            <div class="innerTB">
                                <p><a href="{{'/news'}}">View</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- //Col -->
                </div>
                <!-- //Row -->
            </div>
            <!-- //  End Col -->
            <div class="col-md-4">
                <!-- Widget -->
                <div class="widget widget-body-gray">
                    <div class="widget-body padding-none">
                        <div class="bg-primary innerAll">
                            <h4 class="text-white strong text-medium">Chakwizira Sports & Recreation Centre</h4>
                            <h5 class="text-white margin-none">Today's earnings</h5>
                            <div class="separator bottom"></div>
                            <div class="progress primary progress-mini  margin-none">
                                <div class="progress-bar progress-bar-white	" style="width: 70%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //End Widget -->
            </div>
            <!-- //End Col -->
        </div>
    </div>
    </div>
    <!-- // Content END -->
    <div class="clearfix"></div>


@endsection