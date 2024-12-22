<section class="widget-section padding">
    <div class="container">
        <div class="widget-wrap row">
            <div class="col-md-4 xs-padding">
                <div class="widget-content">
                    <img src="{{asset('assets/img/logo.png')}}" alt="logo">
                    <p>{{config('projects.footer.description')}}</p>
                    <ul class="social-icon">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 xs-padding">
                <div class="widget-content">
                    <h3>Recent Campaigns</h3>
                    <ul class="widget-link">
                        <li><a href="#">First charity activity of this summer. <span>-1 Year Ago</span></a></li>
                        <li><a href="#">Big charity: build school for poor children. <span>-2 Year Ago</span></a></li>
                        <li><a href="#">Clean-water system for rural poor. <span>-2 Year Ago</span></a></li>
                        <li><a href="#">Nepal earthqueak donation campaigns. <span>-3 Year Ago</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 xs-padding">
                <div class="widget-content">
                    <h3>{{config('app.name')}}</h3>
                    <ul class="address">
                        <li><i class="ti-email"></i> <a>{{config('projects.footer.email')}}</a></li>
                        <li><i class="ti-mobile"></i> {{config('projects.footer.phone_number')}}</li>
                        <li><i class="ti-world"></i> {{config('projects.footer.company_link')}}</li>
                        <li><i class="ti-location-pin"></i> {{config('projects.footer.address')}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 sm-padding">
                <div class="copyright">&copy; {{date('Y')}} {{config('app.name')}} Powered by <a href="{{config('projects.developer_infos.name')}}" target="_blank">{{config('projects.developer_infos.name')}}</a></div>
            </div>
            <div class="col-md-6 sm-padding">
                <ul class="footer-social">
                    <li><a href="#">Orders</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Report Problem</a></li>
                    <li><a href="{{url('/admin')}}">Admin</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
