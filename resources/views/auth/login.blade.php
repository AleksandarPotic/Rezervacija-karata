<html>

@include('layouts.head')

<body>
@include('layouts.header')

<!-- Registracija -->
<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="Registracija"><font face="Bernard MT Condensed" size="6">PRIJAVA</font></div><br>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="col-md-10 col-md-offset-2">
                    @if(session('status'))
                            <p class="alert alert-success">{{ session('status') }}</p>
                        @endif
                        @if(session('done'))
                            <p class="alert alert-success">{{ session('done') }}</p>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail adresa</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>Email i šifra koju ste uneli nisu validne. Pokušajte ponovo.</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Sifra</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>Email i šifra koju ste uneli nisu validne. Pokušajte ponovo.</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Zapamti me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary btn-block">
                                Prijavi se
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Zaboravio si sifru?
                            </a>
                        </div>
                    </div>
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
<script type="text/javascript">
    function preventBack() { window.history.forward(); }

    setTimeout("preventBack()", 0);

    window.onunload = function() { null };

</script>

@include('layouts.footer')

</body>

</html>