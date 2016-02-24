<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>@yield('page-title')</title>
        <link href= {{asset('css/templatemo_style.css') }}  rel="stylesheet" type="text/css" />
        <link href= {{asset('css/font-awesome.min.css') }}  rel="stylesheet" type="text/css" />
        <link href={{asset('css/jquery.ennui.contentslider.css') }} rel="stylesheet" type="text/css" media="screen,projection" />

    </head>

    <body>

        <div id="templatemo_wrapper">
            <div id="templatemo_header">
                <div id="site_title">
                    <h1>
                        <a href="/"><img src={{asset('images/templatemo_logo.png ')}}alt="logo" /><span>60/24/7/30 Our Duty.</span></a>
                    </h1>

                </div> <!-- end of site_title -->
                <div style="float: right">
                    <p><i class="fa fa-phone"></i> : +8801555555</p>
                    <p>Something Hospital, Khulna</p>
                </div>

            </div> <!-- end of header -->

            <div id="templatemo_menu">
                <ul>
                   @yield('menu-bar')
                </ul>
            </div> <!-- end of templatemo_menu -->
            <div id="page-content-all">@yield('page-content')</div>
            <div id="templatemo_main_bottom" ></div> <!-- end of main -->


            <div id="templatemo_footer">

             Copyright © 2015 <a href="#">Remote Health Monitoring.</a> | Designed by <a href="" target="_parent">HCI Thesis group</a>

            </div> <!-- end of templatemo_footer -->
        </div> <!-- end of wrapper -->

    </body>
</html>