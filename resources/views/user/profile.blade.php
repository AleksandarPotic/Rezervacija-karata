<html>

@include('layouts.head')

<body>

@include('layouts.header')

<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col-lg-12"><font face="Bernard MT Condensed" size="6">PROFIL</font></div>
            <div class="col-lg-2 col-lg-offset-1" style="margin-top: 35px; text-align: center;"><img src="{{ asset('uploads/'.Auth::user()->image) }}" class="img-circle" alt="Cinque Terre" width="200" height="200" style="margin-top: -10px; margin-left: -5px;"></div>
            <div class="col-lg-3" style="margin-top: 35px; margin-left: 45px;">
                <font face="Impact" size="6">{{ Auth::user()->name }} {{ Auth::user()->lastName }}</font>
                <h4>{{ Auth::user()->email }}</h4>
                <div class="circle" style="height: 8px; width: 8px; background-color: rgb(66,183,42); border-radius: 100%;"><h6 style="margin-left: 10px; margin-top: -2px;">Online</h6></div>
                <h4>Postavi novu sliku na profilu</h4>
                <form role="form" action="{{ route('profile.image') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <input type="file" name="image"><br>
                    <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </form>
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