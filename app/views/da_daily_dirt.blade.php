@extends('layouts.default')
@section('content')
<section class="intro dddintro ">
        <div class="intro-body ">
            <div class="container">
                <div class="row "><br/><br/><br/><br><br>
                    <div class="col-md-12">
                        <h1 id="fadein5" class="nostyle dddtitle" style="color:#fff;">The Daily Dirt</h1><hr class="nostyle">
                        <h4 id="fadein15" class="" >news you care about</div>
                    </div>
                    <br><br><br>
                    <div class="page-scroll">
                        <a href="#ddd" class="btn btn-circle">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-section">
     <div id="ddd" class="container" style="color:#333;">
        <div class="row">
            <div class="col-md-12">&nbsp;</div>
        </div>

        @foreach ($DDD as $posts)
            <div class="col-md-12 ddd ">
            <h2 class="dddlead ">{{$posts['title']}}</h2>
            <p></p>
            <span class="badge pull-right">Posted </span>
        </div>
        @endforeach
     </div>
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

