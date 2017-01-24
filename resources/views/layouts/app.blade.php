<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        

        <title>Velonic - Responsive Admin Dashboard Template</title>

        <script src="//code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.13/js/dataTables.material.min.js"></script>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.material.min.css">

        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css">
        <!-- Bootstrap core CSS -->
        {{ Html::style('global-assets/css/bootstrap.min.css') }}
         {{ Html::style('global-assets/css/bootstrap-reset.css') }}

        <!--Animation css-->
         {{ Html::style('global-assets/css/animate.css') }}

        <!--Icon-fonts css-->
         {{ Html::style('global-assets/assets/font-awesome/css/font-awesome.css') }}
         {{ Html::style('global-assets/assets/ionicon/css/ionicons.min.css') }}

        <!--Morris Chart CSS -->
         {{ Html::style('global-assets/assets/morris/morris.css') }}

        <!-- sweet alerts -->
         {{ Html::style('global-assets/assets/sweet-alert/sweet-alert.min.css') }}

        <!-- Custom styles for this template -->
         {{ Html::style('global-assets/css/style.css') }}
         {{ Html::style('global-assets/css/helper.css') }}
        

  


        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->


    </head>


    <body>

        @if (Auth::guest())
            <div class="col-md-10 col-md-offset-2">
                @yield('content')
            </div>
        @else
        <!-- Aside Start-->
        @include('layouts.sidebar')
        <!-- Aside Ends-->


        <!--Main Content Start -->
        <section class="content">
            
            <!-- Header -->
            <!-- Header Ends -->
            @include('layouts.header')

            <!-- Page Content Start -->
            <!-- ================== -->

            <div class="wraper container-fluid">
                @yield('content')
            </div>
            <!-- Page Content Ends -->
            <!-- ================== -->

            <!-- Footer Start -->
            <footer class="footer">
                Powered by Glosbe
            </footer>
            <!-- Footer Ends -->


        @endif
        </section>
        
        <!-- Main Content Ends -->
        
    

        <!-- js placed at the end of the document so the pages load faster -->
        {{ Html::script('global-assets/js/jquery.js') }}
        {{ Html::script('global-assets/js/bootstrap.min.js') }}
        {{ Html::script('global-assets/js/modernizr.min.js') }}
        {{ Html::script('global-assets/js/pace.min.js') }}
        {{ Html::script('global-assets/js/wow.min.js') }}
        {{ Html::script('global-assets/js/jquery.scrollTo.min.js') }}
        {{ Html::script('global-assets/js/jquery.nicescroll.js') }}

        <!-- Counter-up -->
        {{ Html::script('global-assets/js/waypoints.min.js') }}
        {{ Html::script('global-assets/js/jquery.counterup.min.js') }}

         <!-- sparkline --> 
        {{ Html::script('global-assets/assets/sparkline-chart/jquery.sparkline.min.js') }}
        {{ Html::script('global-assets/assets/sparkline-chart/chart-sparkline.js') }}

        <!-- skycons -->
        {{ Html::script('global-assets/js/skycons.min.js') }}
    
        <!--Morris Chart-->
        {{ Html::script('global-assets/assets/morris/morris.min.js') }}
        {{ Html::script('global-assets/assets/morris/raphael.min.js') }}


        {{ Html::script('global-assets/js/jquery.app.js') }}
        
        <!-- Dashboard -->
        {{ Html::script('global-assets/js/jquery.dashboard.js') }}




        <script type="text/javascript">
            jQuery(document).ready(function($) {
                /* Counter Up */
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
            /* BEGIN SVG WEATHER ICON */
            if (typeof Skycons !== 'undefined'){
            var icons = new Skycons(
                {"color": "#fff"},
                {"resizeClear": true}
                ),
                    list  = [
                        "clear-day", "clear-night", "partly-cloudy-day",
                        "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                        "fog"
                    ],
                    i;

                for(i = list.length; i--; )
                icons.set(list[i], list[i]);
                icons.play();
            };
        </script>

    

    </body>
</html>
