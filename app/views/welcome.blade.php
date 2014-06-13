@section('content')
    <section class="intro diva">
        <div class="intro-body ">
            <div class="container">
                <div class="row "> 
                    <div class="col-md-8 col-md-offset-2 divaquotes">
                        <br class="visible-xs"/><br class="visible-xs"/><br class="visible-xs"/><br class="visible-xs"/>
                        <br class="visible-md"/><br class="visible-md"/><br class="visible-md"/>
                        <!--<img src="img/1.png" class="intro-text col-md-offset-6"/>-->
                        <h2 class="intro-text col-md-offset-5 divaquote">&nbsp;&nbsp;...every &nbsp;&nbsp;woman &nbsp;&nbsp;should &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;add<br/><span class="dadiva">'da diva'</span><br/> &nbsp;&nbsp;&nbsp;to their &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;name!</h2>
                        <div class="page-scroll">
                            <a href="#about" class="btn btn-circle">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                            <br/>
                            <br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="intro container content-section text-left about ">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-0 ">
                    <h2>About <span class="dadiva " style="color:#610080;">Da Diva</span></h2>
                    <p class="darken">Starting off as just an intern in 2008 at WBTJ-Richmond 106.5 THE BEAT, Dominique's spunky personality, passion for music & ability to entertain an audience immediately shined through. A native of Richmond, VA Dominique is a graduate of Virginia State University with a B.A in Mass Communications Radio/Television. She is also a lovely lady of Alpha Kappa Alpha Sorority, Incorporated. "Being a 'DIVA' is just an attitude. It's the way a young woman carries herself with respect, confidence and poise. Being a 'DIVA' is about knowing your worth and never settling for less. I think every woman should add 'da diva' to their name!" You can currently check her out right here on 103 JAMZ Monday-Saturday 10a-2p!</p>
                </div>
            </div>
        </div>
    </section>

    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-12">
                    <div class="Gallery">
                    <h2>Gallery</h2>
                    @if (isset($images['data']))
                      @foreach ($images['data'] as $imgs)
  						          <div><a href="{{$imgs['std_res']}}" data-lightbox="pics"><img src="{{$imgs['std_res']}}" class="img-thumbnail img-responsive" alt="Responsive image"></a></div>
  		          	    @endforeach
                    @endif
                  </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Follow Da Diva</h2>
                <p></p>
                <ul class="list-inline banner-social-buttons">
                    <li><a href="https://twitter.com/dominiquedadiva" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li><a href="http://instagram.com/dominiquedadiva" class="btn btn-default btn-lg"><i class="fa fa-instagram fa-fw"></i> <span class="network-name">Instagram</span></a>
                    </li>
                    <li><a href="https://www.facebook.com/dominique.dadiva" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
<br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
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
                <a href="#about">Bio</a>
            </li>
            <li class="page-scroll visible-lg">
                <a href="#download">Diva Pics</a>
            </li>
            <li class="page-scroll">
                <a href="#contact">Follow Diva</a>
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
          <p class="nostyle"><span>Hosting and event inquiries:</span><a href="mailto:dominiquedadiva@gmail.com">dominiquedadiva@gmail.com</a></p>
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
    {{ HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'); }}
    {{ HTML::script('lightbox/js/lightbox.min.js'); }}
    {{ HTML::script('http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js'); }}
    {{ HTML::script('http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'); }}

    <!-- Custom Theme JavaScript -->
    {{ HTML::script('js/grayscale.js'); }}
    
    <!-- slick -->
    {{ HTML::script('slick/slick.min.js'); }}
    <script type="text/javascript">
        $(document).ready(function(){
            $('.Gallery').slick({

  autoplay: true,
  autoplaySpeed: 2000,
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  infinite: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true,
        autoplay: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        autoplay: true,
        infinite: true
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        infinite: true
      }
    }
  ]
            });
        });
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

