@section('content')
     <section class="intro">
        <div class="intro-body ">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        <img id="fadein10" src="img/1400060543_bubble_48h.png">
                        <img id="fadein5" src="img/1400060543_bubble_48.png">
                        <img id="fadein10" src="img/1400060543_bubble_48h.png">
                        <img id="fadein2" src="img/1400060543_bubble_48h.png">
                        <img id="fadein10" src="img/1400060543_bubble_48.png">
                        <img id="fadein5" src="img/1400060543_bubble_48.png">
                        <h1 class="nostyle" style="color:#fff;">Topic of the day</h1>
                        <hr>
                        <h4 id="fadein15" style="color:#fff;" >Join the Conversation</div>
                    </div>
                    <br><br><br>
                    <div class="page-scroll">
                        <a href="#totd" class="btn btn-circle">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <section id="totd" class="content-section ">
<div class="container">
  <div class="row text-center">
    @if(strrchr($totd,'.') == '.jpg')
        <img src="{{$totd}}"/>
    @else
        @if(strrchr($totd,'.') == '.mp4')
            <video width="640" height="640" controls >
            <source src="{{$totd}}" type="video/mp4">
            Your browser does not support the video tag.
            </video>
        @endif
    @endif
  </div>
    <div class="page-header text-center">
        <h1 id="timeline">Topic of the day comment timeline</h1>
    </div>
    
    <ul class="timeline" style="color:#333;">
      <?php $i = 0;?>
      @if(count($comments)>0)
          @foreach($comments as $comment)
            <li <?= ($i % 2)?'class="timeline-inverted"':NULL?>>
              <div class="timeline-badge primary"><a>
                <i class="glyphicon glyphicon-record <?= ($i % 2)?'invert"':NULL?>" rel="tooltip" title="via {{$comment['user']['type']}}" id=""></i></a></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <img class="img-responsive pull-left" src="{{$comment['user']['profile_picture']}}" />
                  <span class="pull-left" style="padding:15px; font-size:16px;">{{$comment['user']['username']}} said:<br/>{{$comment['text']}}</span>
                </div>
                <div class="timeline-body">
                  
                  
                </div>
                
                <!--<div class="timeline-footer">
                    <a><i class="glyphicon glyphicon-thumbs-up"></i></a>
                    <a><i class="glyphicon glyphicon-share"></i></a>
                    <a href="<?= ($comment['user']['type'])?>" class="pull-right">Continuar Lendo</a>
                </div>-->
              </div>
            </li>
            <?php $i++?>
            @endforeach
        @endif
    </ul>
</div>
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
    {{ HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'); }}
    {{ HTML::script('http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js'); }}
    {{ HTML::script('http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'); }}

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

