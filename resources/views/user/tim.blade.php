<html>

@include('layouts.head')

<body>
@section('a5','active')

@include('layouts.header')

<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="Istorija"><font face="Bernard MT Condensed" size="6">PRVI TIM</font></div><br>
            <div class="col-md-2"><font class="timfont">Golmani</font><br></div>
            <div class="col-md-2">
                <img src="images\Tim\1.jpg" class="img-fluid" alt="Responsive image"    width="350px" height="400px"><p class="Ime" style="margin-left:10px">Danilo Kostic<p></div>
            <div class="col-md-2">
                <img src="images\Tim\2.jpg" class="img-fluid" alt="Responsive image"    width="350px" height="400px"><p style="margin-left:10px">Milan Bulajic<p></div>
        </div>
        <div class="row">
            <div class="col-md-2"><font class="timfont">Odbrana</font><br></div>
            <div class="col-md-2">
                <img src="images\Tim\3.jpg" class="img-fluid" alt="Responsive image"    width="350px" height="400px"><p style="margin-left:10px">Nenad Manic<p></div>
            <div class="col-md-2">
                <img src="images\Tim\4.jpg" class="img-fluid" alt="Responsive image"    width="350px" height="400px"><p style="margin-left:10px">Milos Potic<p></div>
            <div class="col-md-2">
                <img src="images\Tim\5.jpg" class="img-fluid" alt="Responsive image"    width="350px" height="400px"><p style="margin-left:10px">Nikola Simic<p></div>
            <div class="col-md-2">
                <img src="images\Tim\6.jpg" class="img-fluid" alt="Responsive image"    width="350px" height="400px"><p style="margin-left:10px">Nenad Manic<p></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-2">
                <img src="images\Tim\7.jpg" class="img-fluid" alt="Responsive image"    width="350px" height="400px"><p style="margin-left:10px">Milan Antic<p></div>
            <div class="col-md-2">
                <img src="images\Tim\8.jpg" class="img-fluid" alt="Responsive image"    width="350px" height="400px"><p style="margin-left:10px">Dusan Jovic<p></div>
            <div class="col-md-2">
                <img src="images\Tim\9.jpg" class="img-fluid" alt="Responsive image"    width="350px" height="400px"><p style="margin-left:10px">Nemanja Milic<p></div>
        </div>
        <div class="row">
            <div class="col-md-2"><font class="timfont">Sredina</font><br></div>
            <div class="col-md-2">
                <img src="images\Tim\10.jpg" class="img-fluid" alt="Responsive image"  width="350px" height="400px"><p style="margin-left:10px">Ivan Jovic<p></div>
            <div class="col-md-2">
                <img src="images\Tim\11.jpg" class="img-fluid" alt="Responsive image"    width="350px" height="400px"><p style="margin-left:10px">Bojan Veljic<p></div>
            <div class="col-md-2">
                <img src="images\Tim\12.jpg" class="img-fluid" alt="Responsive image"    width="350px" height="400px"><p style="margin-left:10px">Milan Cenic<p></div>
            <div class="col-md-2">
                <img src="images\Tim\13.jpg" class="img-fluid" alt="Responsive image"  width="350px" height="400px"><p style="margin-left:10px">Darko Panic<p></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-2">
                <img src="images\Tim\14.jpg" class="img-fluid" alt="Responsive image"  width="350px" height="400px"><p style="margin-left:10px">Vuk Tosic<p></div>
            <div class="col-md-2">
                <img src="images\Tim\15.jpg" class="img-fluid" alt="Responsive image"  width="350px" height="400px"><p style="margin-left:10px">Milos Tosic<p></div>
        </div>
        <div class="row">
            <div class="col-md-2"><font class="timfont">Napad</font><br></div>
            <div class="col-md-2">
                <img src="images\Tim\21.jpg" class="img-fluid" alt="Responsive image"  width="350px" height="400px"><p style="margin-left:10px">Vuk Tomic<p></div>
            <div class="col-md-2">
                <img src="images\Tim\17.jpg" class="img-fluid" alt="Responsive image"  width="350px" height="400px"><p style="margin-left:10px">Uros Djuric<p></div>
            <div class="col-md-2">
                <img src="images\Tim\18.jpg" class="img-fluid" alt="Responsive image"   width="350px" height="400px"><p style="margin-left:10px">Denis Ristov<p></div>
            <div class="col-md-2">
                <img src="images\Tim\19.jpg" class="img-fluid" alt="Responsive image"   width="350px" height="400px"><p style="margin-left:10px">Vuk Tomic<p></div>
        </div>
        <font face="Bernard MT Condensed" size="6">STRUCNI STAB</font>
        <div class="row">
            <div class="col-md-2"><br><font class="timfont">Predsednik kluba</font><br></div>
            <div class="col-md-2">
                <img src="images\Tim\22.jpg" class="img-fluid" alt="Responsive image"  width="350px" height="400px"><p style="margin-left:10px">Nenad Joncic<p></div>
        </div>
        <div class="row">
            <div class="col-md-2"><br><font class="timfont">Trener</font><br></div>
            <div class="col-md-2">
                <img src="images\Tim\23.jpg" class="img-fluid" alt="Responsive image"  width="350px" height="400px"><p style="margin-left:10px">Goran Petric<p></div>
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