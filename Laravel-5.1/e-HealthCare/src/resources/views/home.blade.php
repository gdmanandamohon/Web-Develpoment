@extends('app')

@section('page-title')
Welcome to E-Health monitoring
@stop

@section('menu-bar')
            <li><a href="/" class="current">Home</a></li>
            <li><a href="/services">Services</a></li>
            <li><a href="/patient-info">News Of Patient</a></li>
            <li><a href="/admin">Admin</a></li>
            <li><a href="/contact-us">Contact</a></li>
@stop


@section('page-content')
          <div id="templatemo_banner">
                        <span class="nav_bg"></span>
                        <div id="one" class="contentslider">
                            <div class="cs_wrapper">
                                <div class="cs_slider">
                                    <div class="cs_article">
                                        <div class="slider_content_wrapper">
                                            <div class="right">
                                                <h2>60 Minute In a Hour </h2>
                                                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam ac elit nec turpis vehicula posuere. Integer accumsan sagittis nisl in hendrerit. Aliquam pulvinar sodales lobortis.</p>
                                                <div class="button"><a href="#">More...</a></div>
                                            </div>
                                          <div class="left">
                                           <a href=""><img src={{asset('images/slider/templatemo_slide01.jpg')}} alt="Image01" /></a>
                                            </div>
                                        </div>
                                    </div><!-- End cs_article -->

                                    <div class="cs_article">

                                    <div class="slider_content_wrapper">
                                        <div class="right">
                                            <h2>24 Hour in a Day</h2>
                                            <p>Vivamus lacus magna, fermentum vel vestibulum non, consequat at augue. Nam et neque dolor, et pharetra metus. Mauris molestie purus et velit egestas id semper ante luctus. Nullam ut nunc ac sem venenatis facilisis.</p>
                                            <div class="button"><a href="#">More...</a></div>
                                        </div>
                                      <div class="left">
                                        <a href=""><img src={{asset('images/slider/templatemo_slide02.jpg')}} alt="Image02" /></a>
                                        </div>
                                        </div>
                                    </div><!-- End cs_article -->

                                    <div class="cs_article">
                                        <div class="slider_content_wrapper">
                                            <div class="right">
                                                <h2>7 Days in a Week</h2>
                                                <p>Integer sed nisi sapien, ut gravida mauris. Nam et tellus libero. Cras purus libero, dapibus nec rutrum in, dapibus nec risus. Ut interdum mi sit amet magna feugiat auctor. Sed sed fermentum tellus.</p>

                                                <div class="button"><a href="#">More...</a></div>
                                            </div>
                                              <div class="left">
                                                <a href="http://www.templatemo.com/page/3"><img src={{asset('images/slider/templatemo_slide03.jpg')}} alt="Image03" /></a>
                                              </div>

                                        </div>
                                    </div><!-- End cs_article -->


                                    <div class="cs_article">
                                        <div class="slider_content_wrapper">

                                             <div class="right">
                                                <h2>30 Days In a Month</h2>
                                                <p>Mauris laoreet malesuada nisi. Aliquam erat volutpat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque ultricies turpis sed arcu tincidunt elementum.</p>

                                                <div class="button"><a href="#">More...</a></div>
                                            </div>
                                            <div class="left">
                                                <a href=""><img src={{asset('images/slider/templatemo_slide04.jpg')}} alt="Image04" /></a>
                                            </div>
                                        </div>
                                    </div><!-- End cs_article -->
                                </div><!-- End cs_slider -->
                            </div><!-- End cs_wrapper -->
                        </div><!-- End contentslider -->

                        <!-- Site JavaScript -->
                        <script type="text/javascript" src={{asset('js/jquery-1.3.1.min.js')}}  ></script>
                        <script type="text/javascript" src={{ asset('js/jquery.easing.1.3.js') }}></script>
                        <script type="text/javascript" src={{ asset('js/jquery.ennui.contentslider.js') }}></script>
                        <script type="text/javascript">
                            $(function() {
                            $('#one').ContentSlider({
                            width : '970px',
                            height : '240px',
                            speed : 400,
                            easing : 'easeOutSine'
                            });
                            });
                        </script>
                        <script src={{asset('js/jquery.chili-2.2.js" type="text/javascript')}}></script>
                        <script src={{ asset('js/chili/recipes.js" type="text/javascript')}}></script>
                        <div class="cleaner"></div>

                </div>
             <div id="templatemo_main"><span class="main_top"></span>

                    <p class="welcome_text">&quot;If a guardian gets information about his patient, doesn't it reduce some mental stress in his/her mind?&quot;</p>

                    <div class="col_w420 float_l">

                              <h2>Welcome to E-Health Care</h2>

                              <div class="fl_img"><img src={{ asset('images/bargraph.png')}} alt="Ourservices" /></div>
                              <p><em>Proin luctus sem ut lorem placerat pretium. Maecenas et tortor ut est pellentesque pretium in in turpis. Vivamus justo erat, mollis iaculis hendrerit eu, mollis ac justo.</em></p>

                              <div class="cleaner"></div>
                                <ul class="templatemo_list">
                                  <li>Morbi sed nulla ac est cursus suscipit eu ac lectus.</li>
                                  <li>Curabitur ullamcorper nibh nisi, sed eleifend dolor.</li>
                                  <li>Pellentesque adipiscing sollicitudin sapien nec aliquet.</li>
                                  <li>Cras rutrum ullamcorper metus, vitae consectetur dolor.</li>

                      </ul>

                              <div class="button float_r"><a href="services.html">More...</a></div>

                   </div>
                           <div class="col_w420 float_r">
                              <h2>Latest  News</h2>
                             <div class="image_wrapper fl_img"><img src={{ asset('images/templatemo_image_01.jpg')}} alt="Ournews" /></div>
                            <p><a href="" target="_parent">templatemo</a> provides a lot of high quality <a href="" target="_parent">free css templates</a> for your personal or commercial websites. Credits go to <a href="http://www.photovaco.com/" target="_blank">Free Photos</a> for photos and <a href="http://www.smashingmagazine.com/" target="_blank">Smashing Magazine</a> for icons. <a href="#">More...</a></p>

                             <div class="button float_r"><a href="news.html">All News</a></div>

                               <div class="cleaner_h30"></div>
                               <h2>Testimonial</h2>
                                  <blockquote>
                                      <p>In ac libero urna. Suspendisse sed odio ut mi auctor blandit. Duis luctus nulla metus. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>

                                      <cite>Paul - <span>Senior Designer</span></cite>
                                  </blockquote>
             </div>
              <div class="cleaner"></div>
            </div> <!-- end of main -->

 @stop