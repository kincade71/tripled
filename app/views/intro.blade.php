@section('content')
    <section style="height:650px;">
        <div class="intro-body ">
            <div class="container">
                <div class="row "> 
                    <div class="col-md-12 ">
                        <video autoplay muted id="bgvid" >
                          <source src="{{$video}}" type="video/mp4">
                        Your browser does not support the video tag.
                        </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{link_to("/Home",'Skip >>>',array('class'=>'btn btn-primary btn-lg pull-right'))}}
   <br/><br/><br/><br/><br/><br/>

@stop
@section('footer')
<section class="footer" style="background-color:#fff;"><br/><br/>
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
      </div>  
    </div>
  </div>
</div>
  <hr>
  <div class="row">
    <div class="col-lg-12">
      <div class="col-md-4 pull-right">
        <p class="muted pull-right">Powered by <img src="img/jamedy.png" height="25"> Media Platform | Designed by <a href="http://webdmg.com" class="btn btn-primary">WEBDMG</a></p>
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

    
   <script type='text/javascript'>
    document.getElementById('bgvid').addEventListener('ended',myHandler,false);
    function myHandler(e) {
        if(!e) { e = window.event; }
        window.location = '\Home';
    }
</script>
@stop

