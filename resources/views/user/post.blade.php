<html>

@include('layouts.head')

<body>

@include('layouts.header')
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10&appId=2178400052386818";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-2"><font size="3" class="font22" color="gray">Created at<br>{{ $post->created_at->diffForHumans() }}</font></div>
            <div class="col-md-9"><font class="font23" size="9">{{ $post->title }}</font><br></div>
            <div class="col-lg-9 col-lg-offset-2"><font size="4">{{ $post->subtitle }}</font></div>
            <div class="col-lg-9 col-lg-offset-2"><img src="{{ asset('uploads/'.$post->image) }}" width="100%" height="auto"></div>
            <div class="col-lg-9 col-lg-offset-2">{!!  htmlspecialchars_decode($post->body) !!}</div>
            <div class="col-lg-8 col-lg-offset-3"><div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="5"></div></div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // create the back to top button
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