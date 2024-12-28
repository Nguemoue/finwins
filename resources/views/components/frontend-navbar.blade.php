
<header id="header" class="header-section">
    <div class="top-header">
        <div class="container">
            <div class="top-content-wrap row">
                <div class="col-sm-8">
                    <ul class="left-info">
                        <li><a href="#"><i class="ti-email"></i><span>{{config('projects.footer.email')}}</span></a>
                        </li>
                        <li><a href="#"><i class="ti-mobile"></i>{{config('projects.footer.phone_number')}}</a></li>
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
    <div class="bottom-header" >
        <div class="container">
            <div class="bottom-content-wrap row">
                <div class="col-sm-4">
                    <div class="site-branding">
                        <a href="#"><img style="background-color: #660000" class="img-thumbnail" src="{{asset('assets/img/logo.png')}}" alt="Brand"></a>
                    </div>
                </div>
                <div class="col-sm-8 text-right">
                    <ul id="mainmenu" class="nav navbar-nav nav-menu">
                        <li @class(['active'=>request()->routeIs('frontend.home')])><a @class(['active'=>request()->routeIs('frontend.home')]) href="{{route('frontend.home')}}"><i class="fa fa-home"></i> Home</a></li>
                        <li @class(['active'=>request()->routeIs('frontend.members')])><a @class(['active'=>request()->routeIs('frontend.members')]) href="{{route('frontend.members')}}"><i class="fa fa-users"></i> Membres</a></li>
                        {{--<li @class(['active'=>request()->routeIs('frontend.about')])><a @class(['active'=>request()->routeIs('frontend.about')]) href="{{route('frontend.about')}}"> <i class="fa fa-map-marker"></i> About</a></li>--}}
                        <li @class(['active'=>request()->routeIs('frontend.portraits')])><a @class(['active'=>request()->routeIs('frontend.portraits')]) href="{{route('frontend.portraits')}}"> <i class="fa fa-photo"></i> Portraits</a></li>
                        <li @class(['active'=>request()->routeIs('frontend.presentation')])><a @class(['active'=>request()->routeIs('frontend.presentation')]) href="{{route('frontend.presentation')}}"> <i class="fa fa-hand-paper-o"></i> Presentation</a></li>
                        <li @class(['active'=>request()->routeIs('frontend.agenda')])><a @class(['active'=>request()->routeIs('frontend.agenda')]) href="{{route('frontend.agenda')}}"> <i class="fa fa-calendar"></i> Agenda</a></li>
                        <li @class(['active'=>request()->routeIs('frontend.media.*')])>
                            <a @class(['active'=>request()->routeIs('frontend.media.*')]) href="#"> <i class="fa fa-film"></i> Media</a>
                            <ul>
                                {{-- for dynamic--}}
                                @foreach($mediaTypes as $mediaType)
                                    <li><a @class(['active'=>request()->routeIs('frontend.media.index') && ((int)request()->route('mediaTypeId') === $mediaType->id) ]) href="{{route('frontend.media.index',['mediaTypeId' => $mediaType->id])}}">{{__($mediaType->name)}}</a></li>
                                @endforeach
                                {{-- for static --}}
                                <li><a @class(['active'=>request()->routeIs('frontend.media.dossierPresse')]) href="{{route('frontend.media.dossierPresse')}}">Dossier de presse</a></li>
                                <li><a @class(['active'=>request()->routeIs('frontend.media.echoPresse')]) href="{{route('frontend.media.echoPresse')}}">Echos de presse</a></li>
                            </ul>
                        </li>
                        <li @class(['active'=>request()->routeIs('frontend.contact')])><a @class(['active'=>request()->routeIs('frontend.contact')]) href="{{route('frontend.contact')}}"><i class="fa fa-phone"></i> Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
