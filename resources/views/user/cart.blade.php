<html>

@include('layouts.head')

<body>
@include('layouts.header')

<!--History-->
<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col-lg-3"><font face="Bernard MT Condensed" size="6">KORPA</font></div>
                <div class="col-lg-12">@include('admin.layouts.errors.error')
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr class="active">
                                <th>#</th>
                                <th>Utakmica</th>
                                <th>Sektor</th>
                                <th>Broj karata</th>
                                <th>Ukupna cena</th>
                                <th>Sigurnosni kod</th>
                                <th>Status rezervacije</th>
                                <th>Poništi rezervaciju</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($reservations as $reservation)
                                @if($reservation->user_id == Auth::user()->id)
                            <tr class="info">
                                <td scope="row">{{ $loop->index+1 }}</td>
                                @foreach($sectors as $sector)
                                    @if($reservation->sector_id == $sector->id)
                                        @foreach($matches as $match)
                                            @if($match->id == $sector->match_id)
                                                <td>{{ $match->nameHome }} - {{ $match->nameAway }}</td>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                                @foreach($sectors as $sector)
                                    @if($reservation->sector_id == $sector->id)
                                        <td>{{ $sector->name }}</td>
                                    @endif
                                @endforeach
                                <td>{{ $reservation->tickets }}</td>
                                <td>{{ $reservation->totalPrice }} din</td>
                                <td><b>{{ $reservation->securityCode }}</b></td>
                                <td>{{ $reservation->status }}</td>
                                @if($reservation->status == 'Rezervisano')
                                    <td>
                                        <form id="delete-form-{{ $reservation->id }}" method="post" action="{{ route('destroy',$reservation->id) }}" style="display: none;">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                        </form>
                                        <a href="" onclick="if(confirm('Da li ste sigurni da zelite da izbrisete rezervaciju?')){
                                                event.preventDefault();
                                                document.getElementById('delete-form-{{ $reservation->id }}').submit();
                                                }else{
                                                event.preventDefault();
                                                }"><div class="glyphicon glyphicon-trash" style="color: black; font-size: 18px;">Poništi</div></a>
                                    </td>
                                @elseif ($reservation->status == 'Poslato')
                                    <td>
                                        <div class="glyphicon glyphicon-envelope" style="color: black; font-size: 18px;">Poslato</div>
                                    </td>
                                @else
                                    <td>
                                        <div class="glyphicon glyphicon-ok" style="color: black; font-size: 18px;">Preuzeto</div>
                                    </td>
                                @endif
                            </tr>
                                @endif
                            @endforeach
                            </tbody>
                            <tfoot>
                                <tr class="active">
                                    <th>#</th>
                                    <th>Utakmica</th>
                                    <th>Sektor</th>
                                    <th>Broj karata</th>
                                    <th>Ukupna cena</th>
                                    <th>Sigurnosni kod</th>
                                    <th>Status rezervacije</th>
                                    <th>Poništi rezervaciju</th>
                                </tr>
                            </tfoot>
                        </table>
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