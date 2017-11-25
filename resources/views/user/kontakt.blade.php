<html>

@include('layouts.head')

<body>
@section('a7','active')
@include('layouts.header')


<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="Istorija"><font face="Bernard MT Condensed" size="6">KONTAKT</font></div><br>
            @include('admin.layouts.errors.error')
            <div class="col-sm-4">
                <div><font face="Bernard MT Condensed" size="5">Osnovni podaci</font></div><br>
                <font face="Arial" size="4">Adresa: Držina, Pirot<br>Mesto: 18300 Pirot<br>Osnovan: 1964<br>Opština: Pirot<br>Okrug: Pirotski okrug<br>Telefon: 010/000-000</font>
            </div>
            <div class="col-sm-4">
                <div><font face="Bernard MT Condensed" size="5">Pišite nam</font></div><br>
                <form role="form" action="{{ route('message') }}" method="post">
                    {{ csrf_field() }}
                    Ime:<input type="text" class="form-control" size="20" name="name" required>
                    E-mail:<input type="email" class="form-control" size="20" name="email" required>
                    Naslov:<input type="text" class="form-control" size="20" name="title" required><br>
                    <textarea name="body" type="text" class="form-control" cols="32" rows="5" required></textarea><br>
                    <input class="btn btn-primary" type="submit" value="Potvrdi">
                    <input class="btn btn-danger" type="reset" value="Obrisi">
                </form>
            </div>
            <div class="col-sm-4">
                <div><font face="Bernard MT Condensed" size="5">Lokacija kluba i stadiona</font></div><br>
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1254.6385616998111!2d22.59310471305639!3d43.14517065899693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2srs!4v1484954005655"></iframe>
                </div>
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