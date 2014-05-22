<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dominique Da Diva - Everyone is a Diva - Topic of the Day</title>

    <!-- Bootstrap Core CSS -->
    {{ HTML::style('http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css'); }}

    <!-- Fonts css -->
    {{ HTML::style('http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css'); }}
    {{ HTML::style('http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic'); }}
    {{ HTML::style('http://fonts.googleapis.com/css?family=Montserrat:400,700'); }}

    <!-- Custom Theme CSS -->
    {{ HTML::style('css/main.css'); }}
    {{ HTML::style('css/grayscale.css'); }}
    {{ HTML::style('css/timeline.css'); }} 
    {{ HTML::style('css/jmp.css'); }}
    {{ HTML::script('js/modernizr.custom.js'); }}
    
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/">
                    <!--<i style="color:#610080;" class="fa fa-play-circle"></i>--><span class="light" style="color:#610080;"><img src="img/logo.png" height="48px"></span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="/"></a>
                    </li>
                    <li class="page-scroll visible-lg">
                        <a href="/#about">Bio</a>
                    </li>
                    <li class="page-scroll visible-lg">
                        <a href="/#download">Diva Pics</a>
                    </li>
                    <li class="page-scroll">
                        <a href="/#contact">Follow Diva</a>
                    </li>
                    <li class="page-scroll">
                        {{link_to("/Da_Daily_Dirt/",'Da Daily Dirt')}}
                    </li>
                    <li class="page-scroll">
                        {{link_to("/Topic_of_the_Day/",'TotD')}}
                    </li>
                    <li class="page-scroll">
                        {{link_to("/Diva_Approved/",'Diva Approved')}}
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
        @yield('content')

        @yield('footer')
    </body>

</html>