<html>

@include('layouts.head')

<body>
@section('a6','active')

@include('layouts.header')

<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="Rezervacija"><font face="Bernard MT Condensed" size="6">REZERVACIJA KARATA</font></div><br>
            <div class="logo123">
                <div class="w33-content">
                    <div class="MojSlajder1">
                        <div class="container">
                            <hr>
                            @include('admin.layouts.errors.error')
                        @foreach($matches as $match)
                            <button type="button" class="dugme1" data-toggle="collapse" data-target="#demo{{ $loop->index+1 }}">
                                <div class="col-sm-3 col-sm-offset-1">
                                    <font class="fontf">{{ $match->date }} {{ $match->time }}</font>
                                </div>
                                <div class="col-sm-2">
                                    <img src="{{ asset('uploads/'.$match->imageHome) }}" height="70px" width="70px">
                                </div>
                                <div class="col-sm-4" class="align-middle">
                                    <font class="fontf">{{ $match->nameHome }} VS {{ $match->nameAway }}</font>
                                </div>
                                <div class="col-sm-2">
                                    <img src="{{ asset('uploads/'.$match->imageAway) }}" height="70px" width="70px">
                                </div>
                            </button>
                            <div id="demo{{ $loop->index+1 }}" class="collapse">
                                <div class="col-sm-8">
                                    <div class="grass3">
                                        <div class="col-sm-7 col-sm-offset-5">
                                            <font class="slovo1">{{ $match->date }} {{ $match->time }}</font>
                                        </div>
                                        <div class="col-sm-12" style="text-align: center">
                                            <img src="{{ asset('uploads/'.$match->imageHome) }}" height="135px" width="135px">
                                            <font class="slovo2" class="text-uppercase">{{ $match->nameHome }} VS {{ $match->nameAway }}</font>
                                            <img src="{{ asset('uploads/'.$match->imageAway) }}" height="135px" width="135px">
                                        </div>
                                        <div class="col-sm-11">
                                            <font  type="button" class="dug" data-toggle="collapse" data-target="#dem{{ $loop->index+1 }}" color="white">+Sve informacija o prodaji karata</font>
                                            <div id="dem{{ $loop->index+1 }}" class="collapse">
                                                <div class="grass2"><br>
                                                    <div class="col-lg-12">
                                                        <h3>Cena karata po sektorima</h3>
                                                        @foreach($sectors as $sector)
                                                            @if($match->id == $sector->match_id)
                                                                <div class="col-lg-6">
                                                                    <h4>{{ $sector->name }}: {{ $sector->price }} din</h4>
                                                                    <!-- Task item -->
                                                                    <div class="progress">
                                                                        <div class="progress-bar progress-bar-@if($sector->procent <= 25)info @elseif($sector->procent > 25 && $sector->procent <= 50)success @elseif($sector->procent > 50 && $sector->procent <= 75)warning @elseif($sector->procent > 75)danger @endif" role="progressbar" aria-valuenow="{{ $sector->procent }}" aria-valuemin="0" aria-valuemax="100" style="width:{{ $sector->procent }}%">
                                                                            @if($sector->procent >=100) Sektor je pun @else {{ $sector->procent }}% sektora je rezervisano @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @endif
                                                        @endforeach

                                                        <div class="col-lg-12"> <h4>Informacije o preuzimanju karata</h4>
                                                        <h5>Karte mozete preuzeti na biletarnici stadiona do dana {{ $match->date }} tri sata pre pocetka utakmice. </h5>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="grass4">
                                        <div class="col-sm-12">
                                            <div class="col-sm-9 col-sm-offset-3">
                                                <br><br><font color="white" class="slovo3">Vrsta ulaznice</font>
                                            </div><br><br>
                                            <div class="col-sm-11 col-sm-offset-1">
                                                <form action="{{ route('reservation.store') }}" method="post">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}">
                                                    <input type="hidden" id="match_id" class="form-control" name="match_id" value="{{ $match->id }}">
                                                    <font class="slovo4">Sektor:</font><br>
                                                    <div class="btn-group btn-group-justified" data-toggle="buttons">
                                                        @foreach($sectors as $sector)
                                                            @if($match->id == $sector->match_id)
                                                        <label class="btn btn-info @if($sector->procent >= 100 || $sector->status != 1)disabled @endif">
                                                            <input type="radio" name="sector_id" id="option1" autocomplete="off" value="{{ $sector->id }}" @if($sector->procent >= 100 || $sector->status != 1)disabled @endif>{{ $sector->name }}
                                                        </label>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    <br><font class="slovo4">Broj karata:</font><br>
                                                    <div class="form-group">
                                                        <select class="form-control" id="exampleSelect1" name="tickets">
                                                            @for($i=1;$i<=$match->ticketsForOne;$i++)
                                                                <option value="{{ $i }}">{{ $i }}</option>
                                                            @endfor
                                                        </select>
                                                    </div>
                                                    <br><input type="submit" class="btn btn-danger btn-sm btn-block" value="Kupi kartu">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        @endforeach
                            <!-- Linker -->
                            <div class="col-lg-12">
                                <ul class="pager">
                                    <li class="next">
                                        {{ $matches->links() }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
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