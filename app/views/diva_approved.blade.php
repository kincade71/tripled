@extends('layouts.default')
@section('content')
     <section class="intro">
        <div class="intro-body ">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        <h1 id="" class="nostyle" style="color:#fff;">Diva Approved<sup><img src="img/kiss.png" id="fadein5" class="" height="45px"></sup></h1><hr class="nostyle"/>
                        <h4 style="color:#fff;">Sealed with a Kiss</div>
                    </div>
                                        <br><br><br>
                    <div class="page-scroll">
                        <a href="#da" class="btn btn-circle">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="da" class="content-section">
    <!-- PORTFOLIO SECTION -->
    <div id="portfolio">
        <div class="container"
            <div class="row mt">
                <ul class="grid effect-2" id="grid">
                    <li><a href="singleproject.html"><img src="img/portfolio/1.jpg"></a></li>
                    <li><a href="singleproject.html"><img src="img/portfolio/3.jpg"></a></li>
                    <li><a href="singleproject.html"><img src="img/portfolio/4.jpg"></a></li>
                    <li><a href="singleproject.html"><img src="img/portfolio/12.png"></a></li>
                    <li><a href="singleproject.html"><img src="img/portfolio/13.png"></a></li>
                    <li><a href="singleproject.html"><img src="img/portfolio/10.png"></a></li>
                    <li><a href="singleproject.html"><img src="img/portfolio/9.jpg"></a></li>
                    <li><a href="singleproject.html"><img src="img/portfolio/2.jpg"></a></li>
                    <li><a href="singleproject.html"><img src="img/portfolio/14.png"></a></li>
                    <li><a href="singleproject.html"><img src="img/portfolio/5.jpg"></a></li>
                    <li><a href="singleproject.html"><img src="img/portfolio/6.jpg"></a></li>
                    <li><a href="singleproject.html"><img src="img/portfolio/7.jpg"></a></li>
                    <li><a href="singleproject.html"><img src="img/portfolio/6.jpg"></a></li>
                    <li><a href="singleproject.html"><img src="img/portfolio/9.jpg"></a></li>
                    <li><a href="singleproject.html"><img src="img/portfolio/11.png"></a></li>
                </ul>
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- portfolio -->
    </section>
@stop
@section('footer')
 <section class="content-section footer">
            <div class="row">
            <div class="col-lg-8">
               
            </div>
        </div>
</section>

    <!-- Core JavaScript Files -->
    {{ HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'); }}
    {{ HTML::script('http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js'); }}
    {{ HTML::script('http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'); }}

    <!-- Custom Theme JavaScript -->
    {{ HTML::script('js/grayscale.js'); }}
        <!-- Custom Theme JavaScript -->
    {{ HTML::script('js/grayscale.js'); }}
    {{ HTML::script('js/main.js'); }}
    {{ HTML::script('js/masonry.pkgd.min.js'); }}
    {{ HTML::script('js/imagesloaded.js'); }}
    {{ HTML::script('js/classie.js'); }}
    {{ HTML::script('js/AnimOnScroll.js'); }}
    <script>
        new AnimOnScroll( document.getElementById( 'grid' ), {
            minDuration : 0.4,
            maxDuration : 0.7,
            viewportFactor : 0.2
        } );
    </script>
@stop

