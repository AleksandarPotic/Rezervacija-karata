<html>

@include('layouts.head')

<body>
@section('a2','active')

@include('layouts.header')

<!-- News -->
<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col-lg-2"><font face="Bernard MT Condensed" size="6">VESTI</font></div>
            @foreach($posts as $post)
                <div class="col-lg-12">
                    <a href="{{ route('post',$post->slug) }}" style="text-decoration: none">
                        <div class="col-lg-2"><font size="3" class="font22" color="gray">{{ $post->date }}</font></div>
                        <div class="col-lg-8"><font class="font23" size="5">{{ $post->title }}</font></div>
                        <div class="col-lg-4 col-lg-offset-2"><img src="{{ asset('uploads/'.$post->image) }}" width="100%" height="auto"></div>
                        <div class="col-lg-4"><font size="4" color="#696969">{{ $post->subtitle }}</font> </div>
                    </a>
                </div>
            @endforeach
            <div class="col-lg-12">
                <ul class="pager">
                    <li class="next">
                        {{ $posts->links() }}
                    </li>
                </ul>
            </div>
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