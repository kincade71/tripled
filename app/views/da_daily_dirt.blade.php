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
		
        @foreach ($DDD['data'] as $posts)
            <div class="col-md-12 ddd ">
            <h2 class="dddlead ">{{$posts['title']}}</h2>
            <p>{{$posts['text']}}</p>
            <span class="badge pull-right">Posted {{$posts['pubDate']}}</span>
        </div>
        @endforeach
     </div>
    </section>

@stop
@section('footer')
 <section class="footer"><br/><br/>
<div class="container">    
  <div class="row">
    <div class="col-lg-12">
      <div class="col-md-3">
        <ul class="list-unstyled">
        </ul>
      </div>
      <div class="col-md-3">
        <h5>Follow Diva</h5>
        <ul class="list-unstyled">

      </div>
      <div class="col-md-3">
        <h5>Follow Diva</h5>
        <ul class="list-unstyled">

      </div>
      <div class="col-md-3">
        <h5>Follow Diva</h5>
        <ul class="list-unstyled list-inline">
            <li> <a href="https://twitter.com/dominiquedadiva"> <i class="fa fa-twitter fa-5x"></i></a></li>
            <li></li>
            <li><a href="http://instagram.com/dominiquedadiva"><i class="fa fa-instagram fa-5x"></i></a></li>
            <li></li>
            <li><a href="https://www.facebook.com/dominique.dadiva"><i class="fa fa-facebook fa-5x"></i></a></li>
        </ul>
      </div>  
    </div>
  </div>
</div>
  <hr>
  <div class="row">
    <div class="col-lg-12">
      <div class="col-md-8">
     <!--   <a href="#">Terms of Service</a>    
        <a href="#">Privacy</a>    
        <a href="#">Security</a>-->
      </div>
      <div class="col-md-4">
        <p class="muted pull-right">Powered by Jamedy Media Platform | Designed by <a href="http://webdmg.com" class="btn btn-primary">WEBDMG</a></p>
      </div>
    </div>
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

