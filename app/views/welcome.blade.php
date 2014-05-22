@extends('layouts.index')
@section('content')
    <section class="intro diva">
        <div class="intro-body ">
            <div class="container">
                <div class="row ">
                    <div class="col-md-8 col-md-offset-2">
                        <br class="visible-xs"/><br class="visible-xs"/><br class="visible-xs"/><br class="visible-xs"/>
                        <br class="visible-md"/><br class="visible-md"/><br class="visible-md"/>
                        <img src="img/1.png" class="intro-text col-md-offset-6"/>
                        <!--<h2 class="intro-text col-md-offset-6 lead">...every woman should add 'da diva' to their name!</h2>-->
                        <div class="page-scroll"><br class="hidden-md hidden-sm"/><br class="hidden-md hidden-sm"/><br class="hidden-md hidden-sm"/><br class="hidden-md hidden-sm"/><br class="hidden-md hidden-sm"/><br class="hidden-md hidden-sm"/><br class="hidden-md hidden-sm"/>
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

    <section id="about" class="container content-section text-left">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-0">
                <h2>About Da Diva</h2>
                <p>Starting off as just an intern in 2008 at WBTJ-Richmond 106.5 THE BEAT, Dominique's spunky personality, passion for music & ability to entertain an audience immediately shined through. A native of Richmond, VA Dominique is a graduate of Virginia State University with a B.A in Mass Communications Radio/Television. She is also a lovely lady of Alpha Kappa Alpha Sorority, Incorporated. "Being a 'DIVA' is just an attitude. It's the way a young woman carries herself with respect, confidence and poise. Being a 'DIVA' is about knowing your worth and never settling for less. I think every woman should add 'da diva' to their name!" You can currently check her out right here on 103 JAMZ Monday-Saturday 10a-2p!</p>
            </div>
        </div>
    </section>

    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Gallery</h2>
                    <p> @foreach ($images['data'] as $imgs)
							<img src="{{$imgs['std_res']}}">
		          		@endforeach</p> 
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
                    <li><a href="http://instagram.com/dominiquedadiva" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Instagram</span></a>
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
@stop

