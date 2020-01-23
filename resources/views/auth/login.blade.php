

<link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/components/library/bootstrap/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/admin/module.admin.stylesheet-complete.sidebar_type.discover.min.css')}}"/>

<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<script src="{{asset('assets/components/library/jquery/jquery.min.js?v=v1.0.3-rc2&sv=v0.0.1.1')}}"></script>
<script src="{{asset('assets/components/library/jquery/jquery-migrate.min.js?v=v1.0.3-rc2&sv=v0.0.1.1')}}"></script>
<script src="{{asset('assets/components/library/modernizr/modernizr.js?v=v1.0.3-rc2&sv=v0.0.1.1')}}"></script>
<script src="{{asset('assets/components/plugins/less-js/less.min.js?v=v1.0.3-rc2&sv=v0.0.1.1')}}"></script>
<script src="{{asset('assets/components/modules/admin/charts/flot/assets/lib/excanvas.js?v=v1.0.3-rc2')}}"></script>
<script src="{{asset('assets/components/plugins/browser/ie/ie.prototype.polyfill.js?v=v1.0.3-rc2&sv=v0.0.1.1')}}"></script>
<script>
	if ( /*@cc_on!@*/ false && document.documentMode === 10)
	{
		document.documentElement.className += ' ie ie10';
	}
</script>
<!-- Fonts -->
<link rel="dns-prefetch" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

<!-- Styles -->
<br><br><br>
<div class="container">
    <!-- row-app -->
    <div class="row row-app">
        <!-- col -->
        <!-- col-separator.box -->
        <div class="col-separator col-unscrollable box">
            <!-- col-table -->
            <div class="col-table">
                <h4 class="innerAll margin-none border-bottom text-center"><i class="fa fa-lock"></i> Login to your Account</h4>
                <!-- col-table-row -->
                <div class="col-table-row">
                    <!-- col-app -->
                    <div class="col-app col-unscrollable">
                        <!-- col-app -->
                        <div class="col-app">
                            <div class="login">
                                <div class="placeholder text-center"><i class="fa fa-lock"></i>
                                </div>
                                <div class="panel panel-default col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-4">
                                    <div class="panel-body">
                                        <form role="form" action="{{ route('login') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus id="exampleInputEmail1" placeholder="Enter email">
                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required id="exampleInputPassword1" placeholder="Password">
                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                                            <div class="checkbox">
                                                <label>
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    Remember my details
                                                </label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-sm-offset-4 text-center">
                                    <div class="innerAll">
                                        <a href="{{ url('/register') }}" class="btn btn-info">Create a new account? <i class="fa fa-pencil"></i> </a>
                                        <div class="separator"></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <!-- // END col-app -->
                    </div>
                    <!-- // END col-app.col-unscrollable -->
                </div>
                <!-- // END col-table-row -->
            </div>
            <!-- // END col-table -->
        </div>
        <!-- // END col-separator.box -->
    </div>
</div>
    <!-- // END row-app -->
    <!-- Global -->
    <script data-id="App.Config">
		var App = {};
		var basePath = '',
			commonPath = '../assets/',
			rootPath = '../',
			DEV = false,
			componentsPath = '../assets/components/';
		var primaryColor = '#3695d5',
			dangerColor = '#b55151',
			successColor = '#609450',
			infoColor = '#4a8bc2',
			warningColor = '#ab7a4b',
			inverseColor = '#45484d';
		var themerPrimaryColor = primaryColor;
    </script>
    <script src="{{asset('assets/components/library/bootstrap/js/bootstrap.min.js?v=v1.0.3-rc2&sv=v0.0.1.1')}}"></script>
    <script src="{{asset('assets/components/plugins/nicescroll/jquery.nicescroll.min.js?v=v1.0.3-rc2&sv=v0.0.1.1')}}"></script>
    <script src="{{asset('assets/components/plugins/breakpoints/breakpoints.js?v=v1.0.3-rc2&sv=v0.0.1.1')}}"></script>
    <script src="{{asset('assets/components/plugins/preload/pace/pace.min.js?v=v1.0.3-rc2&sv=v0.0.1.1')}}"></script>
    <script src="{{asset('assets/components/plugins/preload/pace/preload.pace.init.js?v=v1.0.3-rc2&sv=v0.0.1.1')}}"></script>
    <script src="{{asset('assets/components/core/js/animations.init.js?v=v1.0.3-rc2')}}"></script>
    <script src="{{asset('assets/components/core/js/core.init.js?v=v1.0.3-rc2')}}"></script>

    <div class="cr order-md-1 order-2"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="fa fa-heart-o" aria-hidden="true"></i> Chakwizira Sports & Recreation Center
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
</div>