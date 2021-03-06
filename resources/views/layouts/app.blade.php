<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="We are redefining real estate in the 21st century, creating a transparent peer to peer platform for home buyers and sellers.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="/images/favicon.ico" type="image/ico">

    <!-- appcss -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- main style -->
    <!--link href="{{ asset('/../css/main.css?ver=4.5') }}" rel="stylesheet">-->

    <!-- bootstrap social -->
    <link href="{{ asset('/../css/bootstrap-social.css') }}" rel="stylesheet">

    <!-- jquery ui style -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- fontawesome style -->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <!-- datetimepicker style -->
    <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

    <!-- animate -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css" rel=stylesheet>

    <!-- magnific-popup style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">

    <!-- toastr style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />

    <link rel="stylesheet" href="{{ asset('/../css/sweetalert.css')}}" />
    <!-- fontawesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/v4-shims.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113127234-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-113127234-1');
    </script>

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/jquery-ui.min.js"></script>

    <!-- moment -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>

    <!-- toastr js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!-- googlemap js -->
    <script src="{{ mix('js/googlemap.js')}}" ></script>

    <!-- combobox -->
    <script src="{{ asset('/../js/combobox.js?ver=1.0')}}"></script>

    <!-- sweetalert -->
    <script src="{{ asset('/../js/sweetalert.min.js')}}"></script>
</head>

<!-- Start of Async Drift Code
<script>
!function() {
  var t;
  if (t = window.driftt = window.drift = window.driftt || [], !t.init) return t.invoked ? void (window.console && console.error && console.error("Drift snippet included twice.")) : (t.invoked = !0,
  t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],
  t.factory = function(e) {
    return function() {
      var n;
      return n = Array.prototype.slice.call(arguments), n.unshift(e), t.push(n), t;
    };
  }, t.methods.forEach(function(e) {
    t[e] = t.factory(e);
  }), t.load = function(t) {
    var e, n, o, i;
    e = 3e5, i = Math.ceil(new Date() / e) * e, o = document.createElement("script"),
    o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + i + "/" + t + ".js",
    n = document.getElementsByTagName("script")[0], n.parentNode.insertBefore(o, n);
  });
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('3zb8wvvu7pby');
</script>
 End of Async Drift Code -->
<!-- start of fbsdk -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=1648163565245679&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- end of fbsdk -->
<!-- loader >
<div class="wrap">
  <div class="loading">
    <div class="bounceball"></div>
    <div class="text">NOW LOADING</div>
  </div>
</div>
 end loader -->
<body>
    <div id="app">
        <nav id="main-nav" class="navbar navbar-default navbar-static-top stickynav">
            <div class="container-fluid">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Branding Image -->
                    <a id="appname" class="navbar-brand" href="{{ url('/') }}">
                        <img style="display: inline-block" src="/images/logo.png" alt="logo" width="40px" height="40px"></img><strong>{{ config('app.name', 'Laravel') }}</strong>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->

                    <ul class="nav navbar-nav">
                      <!--<div class="navbar-header">
                          <a class="navbar-brand" href="{{ URL::to('properties') }}">Listings</a>
                      </div>-->

                        <!--<li class="active"><a href="#">Home</a></li>-->
                        <li><a class="navbar-brand" href="{{ URL::to('properties') }}">Properties</a></li>
                        <li><a class="navbar-brand" href="{{ URL::to('/how-it-works') }}">How it Works</a></li>
                        <li><a class="navbar-brand" href="{{ URL::to('properties/create') }}">List Your Home</a></li>

                        <!--li id="resources-menu" class="dropdown">
                          <a href="#" class="dropdown-toggle navbar-brand" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            Resources<span class="caret"></span>
                          </a>
                          <ul class="dropdown-menu">
                            <li>
                              <a href="{{ URL::to('about') }}">About Us</a>
                              <a href="{{ URL::to('contact-us') }}">Contact Us</a>
                              <a href="{{ URL::to('blogs') }}">Blog Posts</a>
                            </li>
                            <li>
                            </li>
                            <li>
                              <a href="{{ URL::to('questions') }}">Support/FAQs</a>
                              <a href="{{ URL::to('privacy') }}">Privacy</a>
                              <a href="{{ URL::to('terms-and-conditions') }}">Terms of Use</a>
                            </li>
                            <li>
                              <a href="{{ URL::to('service') }}">Service Providers</a>
                              <a href="{{ URL::to('home-owner') }}">Resources for Home Owners</a>
                              <a href="{{ URL::to('home-buyer') }}">Resources for Home Buyers</a>
                            </li>
                          </ul>
                        </li>-->
                    </ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">

                        <!-- Authentication Links -->
                        @guest
                            <!-- <li id="logroute"><a href="{{ route('login') }}">Login</a></li> -->
                            <!-- <li id="regroute"><a href="{{ route('register') }}">Register</a></li> -->
                            <!--li><button id="create_propbtn" class="btn btn-info btn-lg" onclick="window.location.href='{{ URL::to('/properties/create') }}'">List Your Home</button></li>-->
                            <li><button type="button" id="login-btn" class="btn btn-info btn-lg" data-toggle="modal" data-target="#mylogin">Login</button></li>
                            <!--li><button type="button" id="reg-btn" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myreg">Sign Up</button></li>-->

                            <!-- Modal -->
                            <div class="modal fade" id="mylogin" role="dialog">
                              <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Login</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="panel-body">
                                      <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                        {{ csrf_field() }}
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                          <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                                          <div class="col-md-6">
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                            @if ($errors->has('email'))
                                              <span class="help-block">
                                                  <strong>{{ $errors->first('email') }}</strong>
                                              </span>
                                            @endif
                                          </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="password" class="col-md-4 control-label">Password</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control" name="password" required>

                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-4">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-8 col-md-offset-4">
                                                <button type="submit" class="btn btn-primary">
                                                    Login
                                                </button>

                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    Forgot Your Password?
                                                </a>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-4">
                                              <a href="{{url('/redirect')}}" class="btn btn-block btn-social btn-facebook">
                                                 <span class="fab fa-facebook-f" style="margin:5px;"></span>Sign in with Facebook
                                              </a>
                                            </div>
                                        </div>
                                    </form>

                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>

                          <!-- Modal -->
                          <div class="modal fade" id="myreg" role="dialog">
                            <div class="modal-dialog">

                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Register</h4>
                                </div>
                                <div class="modal-body">
                                  <div class="panel-body">
                                      <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                          {{ csrf_field() }}

                                          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                              <label for="name" class="col-md-4 control-label">Name</label>

                                              <div class="col-md-6">
                                                  <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                                  @if ($errors->has('name'))
                                                      <span class="help-block">
                                                          <strong>{{ $errors->first('name') }}</strong>
                                                      </span>
                                                  @endif
                                              </div>
                                          </div>

                                          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                              <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                              <div class="col-md-6">
                                                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                                  @if ($errors->has('email'))
                                                      <span class="help-block">
                                                          <strong>{{ $errors->first('email') }}</strong>
                                                      </span>
                                                  @endif
                                              </div>
                                          </div>

                                          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                              <label for="password" class="col-md-4 control-label">Password</label>

                                              <div class="col-md-6">
                                                  <input id="password" type="password" class="form-control" name="password" required>

                                                  @if ($errors->has('password'))
                                                      <span class="help-block">
                                                          <strong>{{ $errors->first('password') }}</strong>
                                                      </span>
                                                  @endif
                                              </div>
                                          </div>

                                          <div class="form-group">
                                              <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                              <div class="col-md-6">
                                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                              </div>
                                          </div>

                                          <div class="form-group">
                                              <div class="col-md-6 col-md-offset-4">
                                                  <button type="submit" class="btn btn-primary">
                                                      Register
                                                  </button>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <div class="col-md-6 col-md-offset-4">
                                                <a href="{{url('/redirect')}}" class="btn btn-block btn-social btn-facebook">
                                                  <span class="fab fa-facebook-f" style="margin:5px;"></span> Sign in with Facebook
                                                </a>
                                              </div>
                                          </div>
                                      </form>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>

                        @else
                        <!-- erase this, admin check -->
                        @auth('admin')
                          @if (Auth::guard('admin')->check() == true )
                            <!--h1><strong>You are an admin!</strong></h1>-->
                          @endif
                        @endauth
                        <!-- -->
                            <li><a class="navbar-brand" href="{{ asset('/../properties/create') }}" >Create Free Listing</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle navbar-brand" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                      <a href="{{ url('my-profile') }}">
                                        My Profile
                                      </a>
                                    </li>
                                    <li>
                                      <a href="{{ url('my-profile/savesearch') }}">
                                        Saved Searches
                                      </a>
                                    </li>
                                    <li>
                                      <a href="{{ url('my-profile/properties') }}">
                                        My Properties
                                      </a>
                                    </li>
                                    <li>
                                      <a href="/messages">Messages @include('messenger.unread-count')</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @if (session('maxAttempts'))
          <div class="alert alert-danger loginattempt">
            <h3>{{ session('maxAttempts') }}</h3>
          </div>
        @endif
        @yield('advsearchbar')
        @yield('content')
    </div>

    <!-- Scripts that require appjs and main -->
    <!-- app js -->
    <script src="{{ mix('js/app.js') }}"></script>
    <!-- main js -->
    <script src="{{ mix('js/main.js') }}"></script>
    <!-- datetimepicker js -->
    <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
    <!-- jquery countdown time -->
    <script src="{{ asset('/../js/jquery.countdown.min.js') }}"></script>
    @yield('script')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCMiNb2ZO_OOM16aU9xTwC3m0fa0Xq6NY&libraries=places&callback=initialize" async defer></script>

    <!-- magnific-popup js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script>
    $.extend(true, $.magnificPopup.defaults, {
      tClose: 'Close (Esc)', // Alt text on close button
      tLoading: 'Loading...', // Text that is displayed during loading. Can contain %curr% and %total% keys
      gallery: {
        tPrev: 'Previous (Left arrow key)', // Alt text on left arrow
        tNext: 'Next (Right arrow key)', // Alt text on right arrow
        tCounter: '%curr% of %total%' // Markup for "1 of 7" counter
      },
      image: {
        tError: '<a href="%url%">The image</a> could not be loaded.' // Error message when image could not be loaded
      },
      ajax: {
        tError: '<a href="%url%">The content</a> could not be loaded.' // Error message when ajax request failed
      }
    });
    </script>

    <!-- ratehub -->
    <script type="text/javascript" src="https://www.ratehub.ca/assets/js/widget-loader.js">
      $.noConflict();
    </script>

    <!-- price range script -->
    <script type="text/javascript">
      if(document.forms['propsearch']){
        createEditableSelect(document.forms['propsearch'].price_left);
        createEditableSelect(document.forms['propsearch'].price_right);
        createEditableSelect(document.forms['propsearch'].area_left);
        createEditableSelect(document.forms['propsearch'].area_right);
      }
    </script>

<!-- pusher -->
     @if(Auth::check())
     <!-- check if pusher is allowed -->
         @if(config('chatmessenger.use_pusher')) {
             <script src="https://cdnjs.cloudflare.com/ajax/libs/pusher/4.2.1/pusher.min.js"></script>

             <script type="text/javascript">
                 $(document).ready(function() {

                     $('form').submit(function(e) {
                         e.preventDefault();

                         var data = $(this).serialize();
                         var url = $(this).attr('action');
                         var method = $(this).attr('method');

                         // clear textarea/ reset form
                         $(this).trigger('reset');

                         $.ajax({
                             method: method,
                             data: data,
                             url: url,
                             success: function(response) {
                                 var thread = $('#thread_' + response.message.thread_id);

                                 $('body').find(thread).append(response.html);
                             },
                             error: function(error) {
                                 console.log(error);
                             }
                         });
                     });

                     var pusher = new Pusher('{{ config('pusher.connections.main.auth_key') }}', {
                         cluster: '{{ config('pusher.connections.main.options.cluster') }}',
                         encrypted: true
                     });



                     var channel = pusher.subscribe('for_user_{{ Auth::id() }}');

                     channel.bind('new_message', function(data) {
                         // console.log(data);
                         var thread = $('#' + data.div_id);
                         var thread_id = data.thread_id;
                         var thread_plain_text = data.text;
                         var thread_subject = data.thread_subject;


                         if (thread.length) {
                             // thread opened

                             // append message to thread
                             thread.append(data.html);

                             // make sure the thread is set to read
                             $.ajax({
                                 url: "/messages/" + thread_id + "/read"
                             });
                         } else {
                             // thread not currently opened

                             // create message
                             var message = '<strong>' + data.sender_name + ': </strong>' + data.text + '<br/><a href="' + data.thread_url + '" class="text-right">View Message</a>';

                             // notify the user
                             toastr.success(thread_subject + '<br/>' + message);

                             // set unread count
                             let url = "{{ route('messages.unread') }}";
                             console.log(url);
                             $.ajax({
                                 method: 'GET',
                                 url: url,
                                 success: function(data) {
                                     console.log('data from fetch: ', data);
                                     var div = $('#unread_messages');

                                     var count = data.msg_count;
                                     if (count == 0) {
                                         $(div).addClass('hidden');
                                     } else {
                                         $(div).text(count).removeClass('hidden');

                                         // if on messages.index - add alert class and update latest message
                                         $('#thread_list_' + thread_id).addClass('alert-info');
                                         $('#thread_list_' + thread_id + '_text').html(thread_plain_text);
                                     }
                                 }
                             });
                         }
                     });
                 });
             </script>
         @endif
     @endif
</body>
<!-- end body -->
<!-- footer -->
@yield('footer')
</html>
