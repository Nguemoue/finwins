@extends('layouts.classic.classic')
@section('content')
    <main>
        <div class="pager-header">
            <div class="container">
                <div class="page-content">
                    <h2>About Us</h2>
                    <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('frontend.home')}}">Home</a></li>
                        <li class="breadcrumb-item active">About Us</li>
                    </ol>
                </div>
            </div>
        </div>
        <section class="about-section bg-grey bd-bottom padding">
            <div class="container">
                <div class="row about-wrap">
                    <div class="col-md-6 xs-padding">
                        <div class="about-image">
                            <img src="{{asset('assets/img/about.jpg')}}" alt="about image">
                        </div>
                    </div>
                    <div class="col-md-6 xs-padding">
                        <div class="about-content">
                            <h2>You are definitely intrigued to <br> discover who we are.</h2>
                            <p>The secret to happiness lies in helping others. Never underestimate the difference YOU
                                can make
                                in the lives of the poor, the abused and the helpless.</p>
                            <a href="#" class="default-btn">More About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="team-section bg-grey bd-bottom circle shape padding">
            <div class="container">
                <div class="section-heading text-center mb-40">
                    <h2>Meet Out Volunteers</h2>
                    <span class="heading-border"></span>
                    <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
                </div>
                <div class="team-wrapper row">
                    <div class="col-lg-6 sm-padding">
                        <div class="team-wrap row">
                            <div class="col-md-6">
                                <div class="team-details">
                                    <img src="{{asset('assets/img/team-1.jpg')}}" alt="team">
                                    <div class="hover">
                                        <h3>Jonathan Smith <span>Communicator</span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="team-details">
                                    <img src="{{asset('assets/img/team-2.jpg')}}" alt="team">
                                    <div class="hover">
                                        <h3>Angelina Rose <span>Certified Reader</span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="team-details">
                                    <img src="{{asset('assets/img/team-3.jpg')}}" alt="team">
                                    <div class="hover">
                                        <h3>Taylor Swift <span>Event Creator</span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="team-details">
                                    <img src="{{asset('assets/img/team-4.jpg')}}" alt="team">
                                    <div class="hover">
                                        <h3>Michel Brown <span>Internet Specialist</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 sm-padding">
                        <div class="team-content">
                            <h2>Become a Volunteer?</h2>
                            <h3>Join your hand with us for a better life and beautiful future.</h3>
                            <p>The secret to happiness lies in helping others. Never underestimate the difference YOU
                                can make
                                in the lives of the poor, the abused and the helpless.</p>
                            <ul class="check-list">
                                <li><i class="fa fa-check"></i>We are friendly to each other.</li>
                                <li><i class="fa fa-check"></i>If you join with us,We will give you free training.</li>
                                <li><i class="fa fa-check"></i>Its an opportunity to help poor children.</li>
                                <li><i class="fa fa-check"></i>No goal requirements.</li>
                                <li><i class="fa fa-check"></i>Joining is tottaly free. We dont need any money from you.
                                </li>
                            </ul>
                            <a href="#" class="default-btn">Join With Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="counter" class="counter-section">
            <div class="container">
                <ul class="row counters">
                    <li class="col-md-3 col-sm-6 sm-padding">
                        <div class="counter-content">
                            <i class="ti-money"></i>
                            <h3 class="counter">85389</h3>
                            <h4 class="text-white">Money Donated</h4>
                        </div>
                    </li>
                    <li class="col-md-3 col-sm-6 sm-padding">
                        <div class="counter-content">
                            <i class="ti-face-smile"></i>
                            <h3 class="counter">10693</h3>
                            <h4 class="text-white">Volunteer Around The World</h4>
                        </div>
                    </li>
                    <li class="col-md-3 col-sm-6 sm-padding">
                        <div class="counter-content">
                            <i class="ti-user"></i>
                            <h3 class="counter">50177</h3>
                            <h4 class="text-white">People Impacted</h4>
                        </div>
                    </li>
                    <li class="col-md-3 col-sm-6 sm-padding">
                        <div class="counter-content">
                            <i class="ti-comments"></i>
                            <h3 class="counter">669</h3>
                            <h4 class="text-white">Positive Feedbacks</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <div class="sponsor-section bd-bottom">
            <div class="container">
                <ul id="sponsor-carousel" class="sponsor-items owl-carousel">
                    <li class="sponsor-item">
                        <img src="{{asset('assets/img/sponsor-1.png')}}" alt="sponsor-image">
                    </li>
                    <li class="sponsor-item">
                        <img src="{{asset('assets/img/sponsor-2.png')}}" alt="sponsor-image">
                    </li>
                    <li class="sponsor-item">
                        <img src="{{asset('assets/img/sponsor-3.png')}}" alt="sponsor-image">
                    </li>
                    <li class="sponsor-item">
                        <img src="{{asset('assets/img/sponsor-4.png')}}" alt="sponsor-image">
                    </li>
                    <li class="sponsor-item">
                        <img src="{{asset('assets/img/sponsor-5.png')}}" alt="sponsor-image">
                    </li>
                    <li class="sponsor-item">
                        <img src="{{asset('assets/img/sponsor-6.png')}}" alt="sponsor-image">
                    </li>
                    <li class="sponsor-item">
                        <img src="{{asset('assets/img/sponsor-7.png')}}" alt="sponsor-image">
                    </li>
                    <li class="sponsor-item">
                        <img src="{{asset('assets/img/sponsor-8.png')}}" alt="sponsor-image">
                    </li>
                </ul>
            </div>
        </div>
    </main>

@endsection
