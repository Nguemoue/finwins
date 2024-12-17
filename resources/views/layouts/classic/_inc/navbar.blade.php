
<header id="header" class="header-section">
    <div class="top-header">
        <div class="container">
            <div class="top-content-wrap row">
                <div class="col-sm-8">
                    <ul class="left-info">
                        <li><a href="#"><i class="ti-email"></i><span>[email&#160;protected]</span></a>
                        </li>
                        <li><a href="#"><i class="ti-mobile"></i>+(333) 052 39876</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 d-none d-md-block">
                    <ul class="right-info">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-header">
        <div class="container">
            <div class="bottom-content-wrap row">
                <div class="col-sm-4">
                    <div class="site-branding">
                        <a href="#"><img src="{{asset('assets/img/logo.png')}}" alt="Brand"></a>
                    </div>
                </div>
                <div class="col-sm-8 text-right">
                    <ul id="mainmenu" class="nav navbar-nav nav-menu">
                        <li class="active"><a href="{{route('frontend.home')}}"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="about.html"> <i class="fa fa-map-marker"></i> About</a></li>
                        <li @class(['active'=>request()->routeIs('frontend.members')])><a  href="{{route('frontend.members')}}"><i class="fa fa-users"></i> Membres</a></li>
                        <li class="active"><a href="{{route('frontend.portraits')}}"> <i class="fa fa-photo"></i> Portraits</a></li>
                        <li class="active nav-link"><a class="active" href="{{route('frontend.presentation')}}"> <i class="fa fa-hand-paper-o"></i> Presentation</a></li>
                        <li><a href="{{route('frontend.agenda')}}"> <i class="fa fa-calendar"></i> Agenda</a></li>
                        <li><a href="contact.html"><i class="fa fa-phone"></i> Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
