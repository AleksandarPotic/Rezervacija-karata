<html>

@include('layouts.head')

<body>
@section('a1','active')
@include('layouts.header')

<!-- jumbotron -->
<div class="container">
    <div class="jumbotron">
        <div class="jumbotron1">
            <!-- slider -->
            <div class="container">
                <div id="main_area">
                    <div class="row">
                        <div class="col-xs-12" id="slider">
                            <div class="row">
                                <div class="col-sm-8" id="carousel-bounding-box">
                                    <div class="carousel slide" id="myCarousel">
                                        <div class="carousel-inner">
                                                <p class="hidden">{{ $nesto1 = $posts[0]->image }}</p>
                                                <p class="hidden">{{ $nesto2 = $posts[1]->image }}</p>
                                                <p class="hidden">{{ $nesto3 = $posts[2]->image }}</p>
                                                <p class="hidden">{{ $nesto4 = $posts[3]->image }}</p>
                                                <p class="hidden">{{ $nesto5 = $posts[4]->image }}</p>
                                                <p class="hidden">{{ $nesto6 = $posts[5]->image }}</p>
                                            <div class="active item" data-slide-number="0">
                                                <img src="{{ asset('uploads/'.$nesto1) }}" width="1920px" height="1080px"></div>

                                            <div class="item" data-slide-number="1">
                                                <img src="{{ asset('uploads/'.$nesto2) }}" width="1920px" height="1080px"></div>

                                            <div class="item" data-slide-number="2">
                                                <img src="{{ asset('uploads/'.$nesto3) }}" width="1920px" height="1080px"></div>

                                            <div class="item" data-slide-number="3">
                                                <img src="{{ asset('uploads/'.$nesto4) }}" width="1920px" height="1080px"></div>

                                            <div class="item" data-slide-number="4">
                                                <img src="{{ asset('uploads/'.$nesto5) }}" width="1920px" height="1080px"></div>

                                            <div class="item" data-slide-number="5">
                                                <img src="{{ asset('uploads/'.$nesto6) }}" width="1920px" height="1080px"></div>
                                        </div>
                                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                        </a>
                                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-sm-4" id="carousel-text"></div>

                                <div id="slide-content" style="display: none;">
                                    @foreach($posts as $post)
                                    <div id="slide-content-{{ $loop->index }}">
                                        <a href="{{ asset('post/'.$post->slug) }}"><font class="text5">{{ $post->title }}</font><br>
                                            <font class="text6" size="4">{{ $post->subtitle }}</font>
                                            <p class="sub-text">{{ $post->date }}</p></a>
                                    </div>
                                        @endforeach
                                </div>
                            </div>
                        </div>
                    </div><!--/Slider-->

                    <div class="row hidden-xs" id="slider-thumbs">
                        <!-- Bottom switcher of slider -->
                        <ul class="hide-bullets">
                            @foreach($posts as $post)
                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-{{ $loop->index }}"><img src="{{ asset('uploads/'.$post->image) }}"></a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- News -->
            <div class="col-lg-12">
                <div class="vesti0"><font face="Impact" size="6">VESTI</font></div>
                <div class="col-md-6">
                @foreach($posts as $post)
                    <a href="post/{{ $post->slug }}" style="text-decoration: none"><font size="3" class="font2" color="gray">{{ $post->date }}</font>
                            <font class="font3" size="5">{{ $post->title }}</font>
                            <br><font size="3" class="font1">{{ $post->subtitle }}</font></a><br>
                @endforeach
                </div>
                <!-- Image slider on click button -->
                <div class="col-md-6">
                    <div class="logo123">
                        <div class="w3-3">
                            <button class="w3" onclick="currentDiv(1)">SLEDECI MEC</button>
                            <button class="w3" onclick="currentDiv(2)">TABELA</button>
                            <button class="w3" onclick="currentDiv(3)">PREDHODNI MEC</button>
                        </div>

                        <div class="w3-content">
                            <a href="Vest1.php"><img class="MojSlajder" src="{{ asset('user/images\sledecimec.jpg') }}"></a>
                            <a href="Rezultati.php"><img class="MojSlajder" src="{{ asset('user/images\tabela1.jpg') }}"></a>
                            <a href="Vest1.php"><img class="MojSlajder" src="{{ asset('user/images\predhodnimec.jpg') }}"></a>
                        </div>

                        <script>
                            var slideIndex = 1;
                            showDivs(slideIndex);

                            function plusDivs(n) {
                                showDivs(slideIndex += n);
                            }

                            function currentDiv(n) {
                                showDivs(slideIndex = n);
                            }

                            function showDivs(n) {
                                var i;
                                var x = document.getElementsByClassName("MojSlajder");
                                var dots = document.getElementsByClassName("demo");
                                if (n > x.length) {slideIndex = 1}
                                if (n < 1) {slideIndex = x.length}
                                for (i = 0; i < x.length; i++) {
                                    x[i].style.display = "none";
                                }
                                for (i = 0; i < dots.length; i++) {
                                    dots[i].className = dots[i].className.replace(" w3-red", "");
                                }
                                x[slideIndex-1].style.display = "block";
                                dots[slideIndex-1].className += " w3-red";
                            }
                        </script>
                    </div>
                    <!--Social-->
                    <div class="social-icon">
                        <a href="https://www.facebook.com/fkpobeda1964" target="_blank"><img src="{{ asset('user/images/social-logo/fb.png') }}" class="social" width="70px" height="70px"></a>
                        <a href="#instagra"><img src="{{ asset('user/images/social-logo/in.png') }}" class="social" width="70px" height="70px"></a>
                        <a href="#G-mail"><img src="{{ asset('user/images/social-logo/gm.png') }}" class="social" width="70px" height="70px"></a>
                        <a href="#YouTube"><img src="{{ asset('user/images/social-logo/ytube.png') }}" class="social" width="70px" height="70px"></a>
                        <a href="#Whatsapp"><img src="{{ asset('user/images/social-logo/wu.png') }}" class="social" width="70px" height="70px"></a>
                    </div>
                    <font class="fontprati">Pratite FK Pobeda</font>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    jQuery(document).ready(function($) {

        $('#myCarousel').carousel({
            interval: 5000
        });

        $('#carousel-text').html($('#slide-content-0').html());

        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click( function(){
            var id = this.id.substr(this.id.lastIndexOf("-") + 1);
            var id = parseInt(id);
            $('#myCarousel').carousel(id);
        });


        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
            var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-'+id).html());
        });
    });
</script>

<!-- Create the back to top button -->
<script type="text/javascript">

    $('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');

    var amountScrolled = 300;

    $(window).scroll(function() {
        if ( $(window).scrollTop() > amountScrolled ) {
            $('a.back-to-top').fadeIn('slow');
        } else {
            $('a.back-to-top').fadeOut('slow');
        }
    });

    $('a.back-to-top, a.simple-back-to-top').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 700);
        return false;
    });
</script>

@include('layouts.footer')

</body>
</html>