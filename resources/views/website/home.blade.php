@extends('website.layouts.master')
@section('css')
@section('title')

@stop

@section('content')

<!-- Main Slider Three -->
<section class="main-slider-three">
    <div class="banner-carousel">
        <!-- Swiper -->
        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <div class="auto-container">
                    <div class="row clearfix">

                        <!-- Content Column -->
                        <div class="content-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <h2>{{trans('website/main_sidebar.your_must')}}</h2>
                                <div class="text">{{trans('website/main_sidebar.we_offer_free')}}</div>
                                <div class="btn-box">
                                    <a href="contact.html" class="theme-btn appointment-btn"><span class="txt">{{trans('website/main_sidebar.Appointment')}}</span></a>
                                    <a href="services.html" class="theme-btn services-btn">{{trans('website/main_sidebar.Services')}}</a>
                                </div>
                            </div>
                        </div>

                        <!-- Image Column -->
                        <div class="image-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="image">
                                    <img src="{{asset('Site/images/main-slider/aaa.jpg')}}" alt="" />
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>


            <div class="swiper-slide slide">
                <div class="auto-container">
                    <div class="row clearfix">

                        <!-- Content Column -->
                        <div class="content-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <h2>{{trans('website/main_sidebar.your_must')}}</h2>
                                <div class="text">{{trans('website/main_sidebar.we_offer_free')}}</div>
                                <div class="btn-box">
                                    <a href="contact.html" class="theme-btn appointment-btn"><span class="txt">{{trans('website/main_sidebar.Appointment')}}</span></a>
                                    <a href="services.html" class="theme-btn services-btn">{{trans('website/main_sidebar.Services')}}</a>
                                </div>
                            </div>
                        </div>

                        <!-- Image Column -->
                        <div class="image-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="image">
                                    <img src="{{asset('Site/images/main-slider/two.jpg')}}" alt="" />
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>



            <div class="swiper-slide slide">
                <div class="auto-container">
                    <div class="row clearfix">

                        <!-- Content Column -->
                        <div class="content-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <h2>{{trans('website/main_sidebar.your_must')}}</h2>
                                <div class="text">{{trans('website/main_sidebar.we_offer_free')}}</div>
                                <div class="btn-box">
                                    <a href="contact.html" class="theme-btn appointment-btn"><span class="txt">{{trans('website/main_sidebar.Appointment')}}</span></a>
                                    <a href="services.html" class="theme-btn services-btn">{{trans('website/main_sidebar.Services')}}</a>
                                </div>
                            </div>
                        </div>

                        <!-- Image Column -->
                        <div class="image-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="image">
                                    <img src="{{asset('Site/images/main-slider/threee.jpg')}}" alt="" />
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>


        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
<!-- End Main Slider -->

<!-- Health Section -->
<section class="health-section">
    <div class="auto-container">
        <div class="inner-container">

            <div class="row clearfix">

                <!-- Content Column -->
                <div class="content-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="border-line"></div>
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <h2>{{trans('website/health.Who_We_Are')}}<br> {{trans('website/health.Pioneering_in_Health')}}</h2>
                            <div class="separator"></div>
                        </div>
                        <div class="text">{{trans('website/health.Where_you_are')}}</div>
                        <a href="about.html" class="theme-btn btn-style-one"><span class="txt">{{trans('website/health.More_About_Us')}}</span></a>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{asset('Site/images/resource/ad.jpg')}}" alt="" />
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
<!-- End Health Section -->

<!-- Featured Section -->
<section class="featured-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Feature Block -->
            <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="upper-box">
                        <div class="icon flaticon-doctor-stethoscope"></div>
                        <h3><a href="#">{{trans('website/featured.Medical_Treatment')}}</a></h3>
                    </div>
                    <div class="text">{{trans('website/featured.Whether')}}</div>
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
                    <div class="upper-box">
                        <div class="icon flaticon-ambulance-side-view"></div>
                        <h3><a href="#">{{trans('website/featured.Emergency_Help')}}</a></h3>
                    </div>
                    <div class="text">{{trans('website/featured.Whethers_Emergency')}}</div>
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                    <div class="upper-box">
                        <div class="icon fas fa-user-md"></div>
                        <h3><a href="#">{{trans('website/featured.Qualified_Doctors')}}</a></h3>
                    </div>
                    <div class="text">{{trans('website/featured.Whethers_doctors')}}</div>
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="750ms" data-wow-duration="1500ms">
                    <div class="upper-box">
                        <div class="icon fas fa-briefcase-medical"></div>
                        <h3><a href="#">{{trans('website/featured.Medical_Professionals')}}</a></h3>
                    </div>
                    <div class="text">{{trans('website/featured.Whethers_Professionals')}}</div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Featured Section -->

<!-- Department Section Three -->
<section class="department-section-three">
    <div class="image-layer" style="background-image:url(Site/images/background/6.jpg)"></div>
    <div class="auto-container">
        <!-- Department Tabs-->
        <div class="department-tabs tabs-box">
            <div class="row clearfix">
                <!--Column-->
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <!-- Sec Title -->
                    <div class="sec-title light">

                        <h2> {{ __('website/home.health') }} <br> {{ __('website/home.department') }}</h2>

                        <div class="separator"></div>
                    </div>
                    <!--Tab Btns-->
                    <ul class="tab-btns tab-buttons clearfix">
                        <li data-tab="#tab-urology" class="tab-btn">{{ __('website/home.urology') }}</li>
                        <li data-tab="#tab-department" class="tab-btn active-btn">{{ __('website/home.neurology') }}</li>
                        <li data-tab="#tab-gastrology" class="tab-btn">{{ __('website/home.gastrology') }}</li>
                        <li data-tab="#tab-cardiology" class="tab-btn">{{ __('website/home.cardiology') }}</li>
                        <li data-tab="#tab-eye" class="tab-btn">{{ __('website/home.eye') }}</li>
                    </ul>
                </div>
                <!--Column-->
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <!--Tabs Container-->
                    <div class="tabs-content">

                        <!-- Tab -->
                        <div class="tab" id="tab-urology">
                            <div class="content">
                                <h2>{{ __('website/home.urology') }}</h2>
                                <div class="title">{{ __('website/home.health_department') }}</div>
                                <div class="text">
                                    <p>{{ __('website/home.urology_content') }}</p>
                                </div>
                                <div class="two-column row clearfix">
                                    <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <h3>01 - {{ __('website/home.urology_service1') }}</h3>
                                        <div class="column-text">{{ __('website/home.urology_service1c') }}</div>
                                    </div>
                                    <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <h3>02 - {{ __('website/home.urology_service2') }}</h3>
                                        <div class="column-text">{{ __('website/home.urology_service2c') }}</div>
                                    </div>
                                </div>
                                <a href="doctors-detail.html" class="theme-btn btn-style-two"><span class="txt">{{ __('website/home.see_more') }}</span></a>
                            </div>
                        </div>

                        <!-- Tab -->
                        <div class="tab active-tab" id="tab-department">
                            <div class="content">
                                <h2>{{ __('website/home.neurology') }}</h2>
                                <div class="title">{{ __('website/home.health_department') }}</div>
                                <div class="text">
                                    <p>{{ __('website/home.neurology_content') }}</p>
                                </div>
                                <div class="two-column row clearfix">
                                    <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <h3>01 - {{ __('website/home.neuro_service1') }}</h3>
                                        <div class="column-text">{{ __('website/home.neuro_service1c') }}</div>
                                    </div>
                                    <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <h3>02 - {{ __('website/home.neuro_service2') }}</h3>
                                        <div class="column-text">{{ __('website/home.neuro_service2c') }}</div>
                                    </div>
                                </div>
                                <a href="doctors-detail.html" class="theme-btn btn-style-two"><span class="txt">{{ __('website/home.see_more') }}</span></a>
                            </div>
                        </div>

                        <!-- Tab -->
                        <div class="tab" id="tab-gastrology">
                            <div class="content">
                                <h2>{{ __('website/home.gastrology') }}</h2>
                                <div class="title">{{ __('website/home.health_department') }}</div>
                                <div class="text">
                                    <p>{{ __('website/home.gastrology_content') }}</p>
                                </div>
                                <div class="two-column row clearfix">
                                    <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <h3>01 - {{ __('website/home.gastrology_service1') }}</h3>
                                        <div class="column-text">{{ __('website/home.gastrology_service1c') }}</div>
                                    </div>
                                    <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <h3>02 - {{ __('website/home.gastrology_service2') }}</h3>
                                        <div class="column-text">{{ __('website/home.gastrology_service2c') }}</div>
                                    </div>
                                </div>
                                <a href="doctors-detail.html" class="theme-btn btn-style-two"><span class="txt">{{ __('website/home.see_more') }}</span></a>
                            </div>
                        </div>

                        <!-- Tab -->
                        <div class="tab" id="tab-cardiology">
                            <div class="content">
                                <h2>{{ __('website/home.cardiology') }}</h2>
                                <div class="title">{{ __('website/home.health_department') }}</div>
                                <div class="text">
                                    <p>{{ __('website/home.cardiology_content') }}</p>
                                </div>
                                <div class="two-column row clearfix">
                                    <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <h3>01 - {{ __('website/home.cardiology_service1') }}</h3>
                                        <div class="column-text">{{ __('website/home.cardiology_service1c') }}</div>
                                    </div>
                                    <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <h3>02 - {{ __('website/home.cardiology_service2') }}</h3>
                                        <div class="column-text">{{ __('website/home.cardiology_service2c') }}</div>

                                    </div>
                                </div>
                                <a href="doctors-detail.html" class="theme-btn btn-style-two"><span class="txt">{{ __('website/home.see_more') }}</span></a>
                            </div>
                        </div>

                        <!-- Tab -->
                        <div class="tab" id="tab-eye">
                            <div class="content">
                                <h2>{{ __('website/home.eye') }}</h2>

                                <div class="title">{{ __('website/home.health_department') }}</div>
                                <div class="text">
                                    <p>{{ __('website/home.eye_content') }}</p>
                                </div>
                                <div class="two-column row clearfix">
                                    <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <h3>01 - {{ __('website/home.eye_service1') }}</h3>
                                        <div class="column-text">{{ __('website/home.eye_service1c') }}</div>
                                    </div>
                                    <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <h3>02 - {{ __('website/home.eye_service2') }}</h3>
                                        <div class="column-text">{{ __('website/home.eye_service2c') }}</div>

                                    </div>
                                </div>
                                <a href="doctors-detail.html" class="theme-btn btn-style-two"><span class="txt">{{ __('website/home.see_more') }}</span></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Department Section -->

<!-- Team Section -->
<section class="team-section">
    <div class="auto-container">

        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2>{{ __('website/home.specialists') }}</h2>
            <div class="separator"></div>
        </div>

        <div class="row clearfix">

            <!-- Team Block -->
            <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="{{asset('Site/images/doctor/1.jpg')}}" alt="" style="height:350px" />
                        <div class="overlay-box">
                            <ul class="social-icons">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-google"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                            </ul>
                            <a href="#" class="appointment">{{ __('website/home.make_appointment') }}</a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h3><a href="#">{{ __('website/home.dr_1') }}</a></h3>
                        <div class="designation">{{ __('website/home.dr_1j') }}</div>
                    </div>
                </div>
            </div>

            <!-- Team Block -->
            <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="{{asset('Site/images/doctor/5.jpg')}}" alt="" style="height:350px" />
                        <div class="overlay-box">
                            <ul class="social-icons">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-google"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                            </ul>
                            <a href="#" class="appointment">{{ __('website/home.make_appointment') }}</a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h3><a href="#">{{ __('website/home.dr_2') }}</a></h3>
                        <div class="designation">{{ __('website/home.dr_2j') }}</div>
                    </div>
                </div>
            </div>

            <!-- Team Block -->
            <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="{{asset('Site/images/doctor/3.jpg')}}" alt="" style="height:350px" />
                        <div class="overlay-box">
                            <ul class="social-icons">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-google"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                            </ul>
                            <a href="#" class="appointment">{{ __('website/home.make_appointment') }}</a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h3><a href="#">{{ __('website/home.dr_3') }}</a></h3>
                        <div class="designation">{{ __('website/home.dr_3j') }}</div>
                    </div>
                </div>
            </div>

            <!-- Team Block -->
            <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="750ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="{{asset('Site/images/doctor/4.jpg')}}" alt="" style="height:350px" />
                        <div class="overlay-box">
                            <ul class="social-icons">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-google"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                            </ul>
                            <a href="#" class="appointment">{{ __('website/home.make_appointment') }}</a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h3><a href="#">{{ __('website/home.dr_4') }}</a></h3>
                        <div class="designation">{{ __('website/home.dr_4j') }}</div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- End Team Section -->

<!-- Video Section -->
<section class="video-section" style="background-image:url(images/background/5.jpg)">
    <div class="auto-container">
        <div class="content">
            <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image play-box"><span class="flaticon-play-button"><i class="ripple"></i></span></a>
            <div class="text">{{ __('website/home.video_title') }}</div>
            <h2>{{ __('website/home.video_subtitle') }}</h2>
        </div>
    </div>
</section>
<!-- End Video Section -->

  <!-- Appointment Section Two -->
  <section class="appointment-section-two">
      <div class="auto-container">
          <div class="inner-container">
              <div class="row clearfix">

                  <!-- Image Column -->
                  <div class="image-column col-lg-6 col-md-12 col-sm-12">
                      <div class="inner-column wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                          <div class="image">
                              <img src="{{asset('Site/images/resource/doctor1.jpg')}}" alt="Appointment Form" />
                          </div>
                      </div>
                  </div>

                  <!-- Form Column -->
                  <div class="form-column col-lg-6 col-md-12 col-sm-12">
                      <div class="inner-column">
                          <!-- Sec Title -->
                          <div class="sec-title">
                              <h2>{{trans('website/appointment.Appointment-Form')}}</h2>
                              <div class="separator"></div>
                          </div>

                          <!-- Appointment Form -->
                          <div class="appointment-form">
                              <form method="post" action="appointment.html">
                                  <div class="row clearfix">
                                      <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                          <input type="text" name="username" placeholder="{{trans('website/appointment.Name')}}" required="">
                                          <span class="icon fa fa-user"></span>
                                      </div>

                                      <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                          <input type="email" name="email" placeholder="{{trans('website/appointment.Email')}}" required="">
                                          <span class="icon fa fa-envelope"></span>
                                      </div>

                                      <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                          <input type="tel" name="phone" placeholder="{{trans('website/appointment.Phone-No')}}" required="">
                                          <span class="icon fas fa-phone"></span>
                                      </div>

                                      <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                          <input type="text" name="department" placeholder="{{trans('website/appointment.Department')}}" required="">
                                          <span class="icon fas fa-home"></span>
                                      </div>

                                      <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                          <input type="text" name="day" placeholder="{{trans('website/appointment.Day')}}">
                                          <span class="icon fa fa-calendar"></span>
                                      </div>

                                      <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                          <input type="text" name="time" placeholder="{{trans('website/appointment.Time')}}" class="">
                                          <span class="icon far fa-clock"></span>
                                      </div>

                                      <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                          <textarea name="message" placeholder="{{trans('website/appointment.Message')}}"></textarea>
                                      </div>

                                      <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                          <button class="theme-btn btn-style-two" type="submit" name="submit-form"><span class="txt">{{trans('website/appointment.Book_Appointment')}}</span></button>
                                      </div>
                                  </div>
                              </form>
                          </div>

                      </div>
                  </div>

              </div>
          </div>
      </div>
  </section>

  <!-- Testimonial Section Two -->
  <section class="testimonial-section-two">
      <div class="auto-container">
          <!-- Sec Title -->
          <div class="sec-title centered">
              <h2>{{trans('website/testimonial.What-Patients-Saying')}}</h2>
              <div class="separator"></div>
          </div>
          <div class="testimonial-carousel owl-carousel owl-theme">

              <!-- Tesimonial Block Two -->
              <div class="testimonial-block-two">
                  <div class="inner-box">
                      <div class="image">
                          <img src="{{asset('Site/images/resource/author4.jpg')}}" alt="" />
                      </div>
                      <div class="text">{{trans('website/testimonial.Patients-notes')}} </div>
                      <div class="lower-box">
                          <div class="clearfix">

                              <div class="pull-left">
                                  <div class="quote-icon flaticon-quote"></div>
                              </div>
                              <div class="pull-right">
                                  <div class="author-info">
                                      <h3> {{trans('website/testimonial.name')}}</h3>
                                      <div class="author">{{trans('website/testimonial.Patients-status')}}</div>
                                  </div>
                              </div>

                          </div>
                      </div>
                  </div>
              </div>

              <!-- Tesimonial Block Two -->
              <div class="testimonial-block-two">
                  <div class="inner-box">
                      <div class="image">
                          <img src="{{asset('Site/images/resource/author5.jpg')}}" alt="" />
                      </div>
                      <div class="text">
                          {{trans('website/testimonial.Patients-notes2')}}
                      </div>
                      <div class="lower-box">
                          <div class="clearfix">

                              <div class="pull-left">
                                  <div class="quote-icon flaticon-quote"></div>
                              </div>
                              <div class="pull-right">
                                  <div class="author-info">
                                      <h3>{{trans('website/testimonial.name2')}}</h3>
                                      <div class="author">{{trans('website/testimonial.Patients-status2')}}</div>
                                  </div>
                              </div>

                          </div>
                      </div>
                  </div>
              </div>

              <!-- Tesimonial Block Two -->
              <div class="testimonial-block-two">
                  <div class="inner-box">
                      <div class="image">
                          <img src="{{asset('Site/images/resource/author6.jpg')}}" alt="" />
                      </div>
                      <div class="text">
                          {{trans('website/testimonial.Patients-notes3')}}

                      </div>
                      <div class="lower-box">
                          <div class="clearfix">

                              <div class="pull-left">
                                  <div class="quote-icon flaticon-quote"></div>
                              </div>
                              <div class="pull-right">
                                  <div class="author-info">
                                      <h3>{{trans('website/testimonial.name3')}}</h3>
                                      <div class="author">{{trans('website/testimonial.Patients-status3')}}</div>
                                  </div>
                              </div>

                          </div>
                      </div>
                  </div>
              </div>

              <!-- Tesimonial Block Two -->
              <div class="testimonial-block-two">
                  <div class="inner-box">
                      <div class="image">
                          <img src="{{asset('Site/images/resource/author7.jpg')}}" alt="" />
                      </div>
                      <div class="text">Medical Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!</div>
                      <div class="lower-box">
                          <div class="clearfix">

                              <div class="pull-left">
                                  <div class="quote-icon flaticon-quote"></div>
                              </div>
                              <div class="pull-right">
                                  <div class="author-info">
                                      <h3>Jack Monita</h3>
                                      <div class="author">Kidny Patient</div>
                                  </div>
                              </div>

                          </div>
                      </div>
                  </div>
              </div>

          </div>
      </div>
  </section>
  <!-- End Testimonial Section Two -->

<!-- Counter Section -->
<section class="counter-section style-two" style="background-image: url(images/background/pattern-3.png)">
    <div class="auto-container">

        <!-- Fact Counter -->
        <div class="fact-counter style-two">
            <div class="row clearfix">

                <!--Column-->
                <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="content">
                            <div class="icon flaticon-logout"></div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="2500" data-stop="2350">0</span>
                            </div>
                            <h4 class="counter-title">{{ trans('website/main_header_trans.Satisfied_Patients') }}</h4>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="content">
                            <div class="icon flaticon-logout"></div>
                            <div class="count-outer count-box alternate">
                                +<span class="count-text" data-speed="3000" data-stop="350">0</span>
                            </div>
                            <h4 class="counter-title">{{ trans('website/main_header_trans.Doctor’s_Team') }}</h4>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="content">
                            <div class="icon flaticon-logout"></div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="3000" data-stop="2150">0</span>
                            </div>
                            <h4 class="counter-title">{{ trans('website/main_header_trans.Success_Mission') }}</h4>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                        <div class="content">
                            <div class="icon flaticon-logout"></div>
                            <div class="count-outer count-box">
                                +<span class="count-text" data-speed="2500" data-stop="225">0</span>
                            </div>
                            <h4 class="counter-title">{{ trans('website/main_header_trans.Successfull_Surgeries') }}</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- End Counter Section -->

<!-- Doctor Info Section -->
<section class="doctor-info-section">
    <div class="auto-container">
        <div class="inner-container">
            <div class="row clearfix">

                <!-- Doctor Block -->
                <div class="doctor-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <h3>{{ trans('website/main_header_trans.Working_Hours') }}</h3>
                        <ul class="doctor-time-list">
                            <li>{{ trans('website/main_header_trans.Mon–Fri') }} <span>8:00 {{ trans('website/main_header_trans.am') }} 7:00 {{ trans('website/main_header_trans.pm') }}</span></li>
                            <li>{{ trans('website/main_header_trans.Saturday') }}<span>9:00 {{ trans('website/main_header_trans.am') }} 5:00 {{ trans('website/main_header_trans.pm') }}</span></li>
                            <li>{{ trans('website/main_header_trans.Sunday') }} <span>9:00 {{ trans('website/main_header_trans.am') }} 3:00 {{ trans('website/main_header_trans.pm') }}</span></li>
                        </ul>
                        <h4>{{ trans('website/main_header_trans.Emergency_Cases') }}</h4>
                        <div class="phone">{{ trans('website/main_header_trans.Call_us') }}! <strong>+20111289180</strong></div>
                    </div>
                </div>

                <!-- Doctor Block -->
                <div class="doctor-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <h3>{{ trans('website/main_header_trans.Doctors_Timetable') }}</h3>
                        <div class="text">{{ trans('website/main_header_trans.appointment') }}</div>
                        <a href="#" class="detail">{{ trans('website/main_header_trans.More_Detail') }}</a>
                    </div>
                </div>

                <!-- Doctor Block -->
                <div class="doctor-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <h3>{{ trans('website/main_header_trans.Health') }}</h3>
                        <div class="text">{{ trans('website/main_header_trans.communication') }}</div>
                        <a href="#" class="detail">{{ trans('website/main_header_trans.Contact_Now') }}</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End Doctor Info Section -->

<!-- News Section Two -->
<section class="news-section-two">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2>{{trans('website/news-section-two.Latest_News')}}</h2>
            <div class="separator style-three"></div>
        </div>
        <div class="row clearfix">

            <!-- News Block Two -->
            <div class="news-block-two col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="image">
                        <a href="#"><img src="{{asset('Site/images/resource/news-4.jpg')}}" alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <div class="content">
                            <ul class="post-info">
                                <li><span class="icon flaticon-chat-comment-oval-speech-bubble-with-text-lines"></span> 02</li>
                                <li><span class="icon flaticon-heart"></span> 126</li>
                            </ul>
                            <ul class="post-meta">
                                <li>{{trans('website/news-section-two.June_21')}}</li>
                                <li>{{trans('website/news-section-two.Post_Admin')}}</li>
                            </ul>
                            <h3><a href="#">{{trans('website/news-section-two.Diagnostic')}}</a></h3>
                            <div class="text">{{trans('website/news-section-two.associated')}} </div>
                            <a href="#" class="theme-btn btn-style-five"><span class="txt">{{trans('website/news-section-two.read')}}</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- News Block Two -->
            <div class="news-block-two col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="image">
                        <a href="blog-detail.html"><img src="{{asset('Site/images/resource/news-5.jpg')}}" alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <div class="content">
                            <ul class="post-info">
                                <li><span class="icon flaticon-chat-comment-oval-speech-bubble-with-text-lines"></span> 02</li>
                                <li><span class="icon flaticon-heart"></span> 126</li>
                            </ul>
                            <ul class="post-meta">
                                <li>{{trans('website/news-section-two.June_21')}}</li>
                                <li>{{trans('website/news-section-two.Post_Admin')}}</li>
                            </ul>
                            <h3><a href="blog-detail.html">{{trans('website/news-section-two.Heart')}}</a></h3>
                            <div class="text">{{trans('website/news-section-two.associated')}} </div>
                            <a href="#" class="theme-btn btn-style-five"><span class="txt">{{trans('website/news-section-two.read')}}</span></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!--Clients Section-->
<section class="clients-section">
    <div class="outer-container">

        <div class="sponsors-outer">
            <!--Sponsors Carousel-->
            <ul class="sponsors-carousel owl-carousel owl-theme">
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="{{asset('Site/images/clients/1.png')}}" alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="{{asset('Site/images/clients/2.png')}}" alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="{{asset('Site/images/clients/3.png')}}" alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="{{asset('Site/images/clients/4.png')}}" alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="{{asset('Site/images/clients/5.png')}}" alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="{{asset('Site/images/clients/1.png')}}" alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="{{asset('Site/images/clients/2.png')}}" alt=""></a></figure>
                </li>
            </ul>
        </div>

    </div>
</section>
<!--End Clients Section-->

@endsection

@section('js')
@endsection