<!--Main Footer-->
<footer class="main-footer" style="background-image: url({{asset('Site/images/background/2.jpg')}})">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!--big column-->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">
                        <!--Footer Column-->

                        <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <div class="logo">
                                    <a href=""><img src="{{asset('Site/images/footer-logo.png')}}" alt="" /></a>
                                </div>
                                <div class="text-dark">{{trans('website/footer.Meditech')}}</div>
                                <ul class="social-icons">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <div class="footer-title  clearfix">
                                    <h2>{{trans('website/footer.Departments')}}</h2>
                                    <div class="separator"></div>
                                </div>
                                <ul class="footer-list text-dark">
                                    <li><a href="#">{{trans('website/footer.Surgery_Radiology')}}</a></li>
                                    <li><a href="#">{{trans('website/footer.Family_Medicine')}}</a></li>
                                    <li><a href="#">{{trans('website/footer.Women_Health')}}</a></li>
                                    <li><a href="#">{{trans('website/footer.Optician')}}</a></li>
                                    <li><a href="#">{{trans('website/footer.Pediatrics')}}</a></li>
                                    <li><a href="#">{{trans('website/footer.Dermatology')}}</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <!--big column-->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget news-widget">
                                <div class="footer-title  clearfix">
                                    <h2>{{trans('website/footer.Update')}}</h2>
                                    <div class="separator"></div>
                                </div>

                                <!--News Widget Block-->
                                <div class="news-widget-block">
                                    <div class="widget-inner">
                                        <div class="image">
                                            <img src="{{asset('Site/images/resource/news-image-1.jpg')}}" alt="" />
                                        </div>
                                        <h3><a href="blog-detail.html">{{trans('website/footer.Integrative')}}</a></h3>
                                        <div class="post-date">{{trans('website/footer.July')}}</div>
                                    </div>
                                </div>

                                <!--News Widget Block-->
                                <div class="news-widget-block">
                                    <div class="widget-inner">
                                        <div class="image">
                                            <img src="{{asset('Site/images/resource/news-image-2.jpg')}}" alt="" />
                                        </div>
                                        <h3><a href="blog-detail.html">{{trans('website/footer.Achieving')}}</a></h3>
                                        <div class="post-date">{{trans('website/footer.July')}}</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget contact-widget">
                                <div class="footer-title  clearfix">
                                    <h2>{{trans('website/footer.Contact')}}</h2>
                                    <div class="separator"></div>
                                </div>

                                <ul class="contact-list">
                                    <li><span class="icon flaticon-placeholder"></span>{{trans('website/footer.Address')}} <br>Eg / 2011129180 Gz</li>
                                    <li><span class="icon flaticon-call"></span>{{trans('website/footer.Mon_to_Fri')}} : 08:30 - 18:00 <br> <a href="tel:+20111289180">+20111289180</a></li>
                                    <li><span class="icon flaticon-message"></span>{{trans('website/footer.Question')}}<a href="mailto:info@ahmedhamda.com">info@ahmedhamda.com</a></li>
                                </ul>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="copyright">MediTech Helth Care &copy; All Rights Reserved By Expertthemes</div>
        </div>

    </div>

</footer>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!--Search Popup-->
<div id="search-popup" class="search-popup">
    <div class="close-search theme-btn"><span class="fas fa-window-close"></span></div>
    <div class="popup-inner">
        <div class="overlay-layer"></div>
        <div class="search-form">
            <form method="post" action="index.html">
                <div class="form-group">
                    <fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required>
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>

            <br>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="#">Business</a></li>
                <li><a href="#">Web Development</a></li>
                <li><a href="#">SEO</a></li>
                <li><a href="#">Logistics</a></li>
                <li><a href="#">Freedom</a></li>
            </ul>

        </div>

    </div>
</div>