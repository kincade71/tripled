@section('content')
     <section class="intro">
        <div class="intro-body ">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        <h1 id="" class="nostyle" style="color:#fff;">Events </h1>
                        <hr class="nostyle"/>
                        <h4 style="color:#fff;"></div>
                    </div>
                        <br><br><br> 
                    </div>
                    <br><br><br>
                    <div class="page-scroll">
                        <a href="#events" class="btn btn-circle">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <section id="events" class="content-section">
        <!-- PORTFOLIO SECTION -->
        <div id="portfolio">
            <div class="container"
                <div class="row mt">
                    <ul class="grid effect-3" id="grid">
                      <?php $i=0 ?>
                      @if (count($events['data'])>0)
                        @foreach ($events['data'] as $imgs)
                          <li style="border:#333 solid 1px;"><a href="{{$imgs['images'][$i]['std_res']}}" title="{{str_replace('#events','',$imgs['text'])}}" data-lightbox="divaapproved">
                            <img src="{{$imgs['images'][$i]['std_res']}}"><p style="color:#333;">{{str_replace('#events','',$imgs['text'])}}</p></a></li>
                        @endforeach
                      @endif
                    </ul>
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- portfolio -->
    </section>
@stop
@section('footer')
<section class="footer"><br/><br/>
<div class="container">    
  <div class="row">
    <div class="col-lg-12 darken">
      <div class="col-md-4 ">
        <h5>Da Diva</h5>
        <span>Being a 'DIVA' is just an attitude. It's the way a young woman carries herself with respect, confidence and poise. Being a 'DIVA' is about knowing your worth and never settling for less. I think every woman should add 'da diva' to their name!"</span>

      </div>
      <div class="col-md-3 col-md-offset-1">
        <h5>Site Links</h5>
        <div class="col-md-6">
          <ul class="list-unstyled">
            <li class="hidden">
                <a href="#page-top"></a>
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
          </ul>
        </div>
        <div class="col-md-6">
          <ul class="list-unstyled">
            <li class="page-scroll">
                {{link_to("/Topic_of_the_Day/",'TotD')}}
            </li>
            <li class="page-scroll">
                {{link_to("/Diva_Approved/",'Diva Approved')}}
            </li>
            <li class="page-scroll">
                {{link_to("/Events/",'Events')}}
            </li>
            <li class="page-scroll">
                {{link_to("/Diva_Wall/",'Diva Wall')}}
            </li>
        </div>
      </div>
      <div class="col-md-3 col-md-offset-1">
        <h5>Follow Diva</h5>
        <ul class="list-unstyled list-inline">
            <li> <a href="https://twitter.com/dominiquedadiva"> <i class="fa fa-twitter fa-5x"></i></a></li>
            <li></li>
            <li><a href="http://instagram.com/dominiquedadiva"><i class="fa fa-instagram fa-5x"></i></a></li>
            <li></li>
            <li><a href="https://www.facebook.com/dominique.dadiva"><i class="fa fa-facebook fa-5x"></i></a></li>
        </ul>
        <hr/>
        <p class="nostyle"><span>Hosting and event inquiries:</span><a href="mailto:email">email</a></p>
      </div>  
    </div>
  </div>
</div>
<hr>
  <div class="row">
    <div class="col-lg-12 darken">
      <div class="col-md-6 pull-left ">
        <p class="muted pull-left">Powered by <img src="img/jamedy.png" height="45"> Media Platform </p>
      </div>
      <div class="col-md-6 pull-right">
        <p class="muted pull-right">Designed by <a href="http://webdmg.com" style="font-weight:bold">WEBDMG</a></p>
      </div>
    </div>
  </div>
</div>
</section>

    <!-- Core JavaScript Files -->
    {{ HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'); }}
    {{ HTML::script('http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js'); }}
    {{ HTML::script('http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'); }}
    {{ HTML::script('lightbox/js/lightbox.min.js'); }}
    <!-- Custom Theme JavaScript -->
    {{ HTML::script('js/grayscale.js'); }}
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
    <script>
    $(document).ready(function(){
    var my_posts = $("[rel=tooltip]");
    for(i=0;i<my_posts.length;i++){
        the_post = $(my_posts[i]);
        if(the_post.hasClass('invert')){
            the_post.tooltip({ placement: 'left'});
            the_post.css("cursor","pointer");
        }else{
            the_post.tooltip({ placement: 'rigt'});
            the_post.css("cursor","pointer");
        }
    }
});
     </script>
@stop

