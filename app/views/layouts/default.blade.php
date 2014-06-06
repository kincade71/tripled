<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="msapplication-TileColor" content="#610080">
    <meta name="msapplication-TileImage" content="img/mstile-144x144.png">
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png">
    <link rel="icon" type="image/png" href="img/favicon-196x196.png" sizes="196x196">
    <link rel="icon" type="image/png" href="img/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="img/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32">
    
    <title>Dominique Da Diva - Everyone is a Diva {{ $title }}</title>

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
    {{ HTML::style('lightbox/css/lightbox.css')}}
    {{ HTML::script('js/modernizr.custom.js'); }}
    
</head>

<body >

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/Home">
                   <span class="light" style="color:#610080;"><img src="img/logo.png" height="48px"></span>
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
                        <a href="/Home#about">Bio</a>
                    </li>
                    <li class="page-scroll visible-lg">
                        <a href="/Home#download">Diva Pics</a>
                    </li>
                    <li class="page-scroll">
                        <a href="/Home#contact">Follow Diva</a>
                    </li>
                    <li class="page-scroll {{$Da_Daily_Dirt}}">
                        {{link_to("/Da_Daily_Dirt/",'Da Daily Dirt')}}
                    </li>
                    <li class="page-scroll {{$Topic_of_the_Day}}">
                        {{link_to("/Topic_of_the_Day/",'TotD')}}
                    </li>
                    <li class="page-scroll {{$Diva_Approved}}">
                        {{link_to("/Diva_Approved/",'Diva Approved')}}
                    </li>
                    <li class="page-scroll {{$Events}}">
                        {{link_to("/Events/",'Events')}}
                    </li>
                    <li class="page-scroll">
                        <a href="/dddd" data-toggle="modal" data-target="#myModal">Diva Wall</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
        @yield('content')

        @yield('footer')
    </body>

</html>