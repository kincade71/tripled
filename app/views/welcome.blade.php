@section('content')
    <section class="intro diva">
        <div class="intro-body ">
            <div class="container">
                <div class="row "> 
                    <div class="col-md-8 col-md-offset-2 divaquotes">
                        <br class="visible-xs"/><br class="visible-xs"/><br class="visible-xs"/><br class="visible-xs"/>
                        <br class="visible-md"/><br class="visible-md"/><br class="visible-md"/>
                        <!--<img src="img/1.png" class="intro-text col-md-offset-6"/>-->
                        <h2 class="intro-text col-md-offset-6 divaquote">&nbsp;&nbsp;...every &nbsp;&nbsp;woman &nbsp;&nbsp;should &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;add<br/><span class="dadiva">'da diva'</span><br/> &nbsp;&nbsp;&nbsp;to their &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;name!</h2>
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

    <section id="about" class="intro container content-section text-left">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-0 ">
                    <h2>About <span class="dadiva" style="color:#610080;">Da Diva</span></h2>
                    <p>Starting off as just an intern in 2008 at WBTJ-Richmond 106.5 THE BEAT, Dominique's spunky personality, passion for music & ability to entertain an audience immediately shined through. A native of Richmond, VA Dominique is a graduate of Virginia State University with a B.A in Mass Communications Radio/Television. She is also a lovely lady of Alpha Kappa Alpha Sorority, Incorporated. "Being a 'DIVA' is just an attitude. It's the way a young woman carries herself with respect, confidence and poise. Being a 'DIVA' is about knowing your worth and never settling for less. I think every woman should add 'da diva' to their name!" You can currently check her out right here on 103 JAMZ Monday-Saturday 10a-2p!</p>
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
                    @foreach ($images['data'] as $imgs)
						<div><a href="{{$imgs['std_res']}}" data-lightbox="gallery"><img src="{{$imgs['std_res']}}" class="img-thumbnail img-responsive" alt="Responsive image"></a></div>
		          	@endforeach
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
        autoplay: true
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true
      }
    }
  ]
            });
        });
    </script>
    {{ HTML::script('lightbox/js/lightbox.min.js'); }}
@stop

