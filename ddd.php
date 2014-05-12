<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dominique Da Diva - Everyone is a Diva - Diva Approved</title>

    <!-- Bootstrap Core CSS -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Custom Theme CSS -->
    

    <link href="css/grayscale.css" rel="stylesheet">
    <link href="css/jmp.css" rel="stylesheet">
    <script src="js/modernizr.custom.js"></script>

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom" style="background-color:#e2e2e2">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">
                    <!--<i style="color:#610080;" class="fa fa-play-circle"></i>--><span class="light" style="color:#610080;"><img src="img/logo.png" height="48px"></span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="index.html#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.html#about">Bio</a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.html#download">Diva Pics</a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.html#contact">Follow Da Diva</a>
                    </li>
                    <li class="page-scroll">
                        <a href="ddd.html">Da Daily Dirt</a>
                    </li>
                    <li class="page-scroll">
                        <a href="tod.html">Topic of the Day</a>
                    </li>
                    <li class="page-scroll">
                        <a href="divaapproved.html">Diva Certified</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <section class="intro">
        <div class="intro-body ">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        <h1 class="" style="color:#fff;">The Daily Dirt</h1><hr>
                        <h4 class="" >news you care about</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<div class="container" style="color:#333;">
    <div class="row">
        <div class="col-md-12">&nbsp;</div>
    </div>
    <?php
    $mypix = simplexml_load_file('http://www.103jamz.com/rss/onair-45166/');
    foreach ($mypix->item as $pixinfo){
        echo '<div class="col-md-12 ddd">';
        echo '<h2 class="lead">'.$pixinfo->title.'</h2>';
        echo '<p>'.$pixinfo->description.'</p>';
        echo '<span class="badge pull-right">'.$pixinfo->pubDate.'</span>';
        echo '</div>';
        }   
?>

 
                    
<div class="col-md-12">
    <h1>Alice in Wonderland, part dos</h1>
    <p>'You ought to be ashamed of yourself for asking such a simple question,' added the Gryphon; and then they both sat silent and looked at poor Alice, who felt ready to sink into the earth. At last the Gryphon said to the Mock Turtle, 'Drive on, old fellow! Don't be all day about it!' and he went on in these words:
    'Yes, we went to school in the sea, though you mayn't believe it—'
    'I never said I didn't!' interrupted Alice.
    'You did,' said the Mock Turtle.</p>
    <div>
<span class="badge pull-right">Posted 2012-08-02 20:47:04</span></div>         
     </div>
    <hr>
    
</div>

    
 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/imagesloaded.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/AnimOnScroll.js"></script>
    <script>
        new AnimOnScroll( document.getElementById( 'grid' ), {
            minDuration : 0.4,
            maxDuration : 0.7,
            viewportFactor : 0.2
        } );
    </script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>
</body>
</html>