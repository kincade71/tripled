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
            	<?php $i=0 ?>
              @if (count($diva_approved['data'])>0)
                @foreach ($diva_approved['data'] as $imgs)
                  <li style="border:#333 solid 1px;"><a href="{{$imgs['images'][$i]['std_res']}}" title="{{str_replace('#divaapproved','',$imgs['text'])}}" data-lightbox="divaapproved">
                    <img src="{{$imgs['images'][$i]['std_res']}}"><p style="color:#333;">{{str_replace('#divaapproved','',$imgs['text'])}}</p></a></li>
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
        <p class="nostyle"><span>Hosting and event inquiries:</span><br/><a href="mailto:dominiquedadiva@gmail.com">dominiquedadiva@gmail.com</a></p>
      </div>  
    </div>
  </div>
</div>
<hr>
  <div class="row">
    <div class="col-lg-12 darken">
      <div class="col-md-6 pull-left ">
        <p class="muted pull-left">Powered by <img src="img/jamedy.png" height="45"></p>
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
        <script type='text/javascript' async>
      // For the time now
        $('#onair').hide();
        Date.prototype.timeNow = function () {
             return ((this.getHours() < 10)?"0":"") + this.getHours() +":"+ ((this.getMinutes() < 10)?"0":"") + this.getMinutes() +":"+ ((this.getSeconds() < 10)?"0":"") + this.getSeconds();
        }

        var newDate = new Date();
        var datetime = newDate.timeNow();

        if(datetime >= '10:00:00' && datetime <= '14:00:00'){
          $('#onair').show();
        }
    </script>
@stop

