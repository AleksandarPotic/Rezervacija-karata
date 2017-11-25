<html>

@include('layouts.head')

<body>
@include('layouts.header')

<!--History-->
<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col-lg-3"><font face="Bernard MT Condensed" size="6">ZAHTEVI</font></div>
            <div class="col-lg-12">@include('admin.layouts.errors.error')
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr class="active">
                            <th>#</th>
                            <th>Utakmica</th>
                            <th>Sektor</th>
                            <th>Broj karata</th>
                            <th>Poništi zahtev</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($requirements as $requirement)
                            @if($requirement->user_id == Auth::user()->id)
                                <tr class="info">
                                    <td scope="row">{{ $loop->index+1 }}</td>
                                    <td>
                                        @foreach($sectors as $sector)
                                            @if($sector->id == $requirement->sector_id)
                                                @foreach($matches as $match)
                                                    @if($match->id == $sector->match_id)
                                                        {{ $match->nameHome }} : {{ $match->nameAway }}
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach($sectors as $sector)
                                            @if($sector->id == $requirement->sector_id)
                                                {{ $sector->name }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>{{ $requirement->tickets }}</td>
                                    <td>
                                        <form id="delete-form-{{ $requirement->id }}" method="post" action="{{ route('req.destroy',$requirement->id) }}" style="display: none;">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                        </form>
                                        <a href="" onclick="if(confirm('Da li ste sigurni da zelite da izbrisete rezervaciju?')){
                                                event.preventDefault();
                                                document.getElementById('delete-form-{{ $requirement->id }}').submit();
                                                }else{
                                                event.preventDefault();
                                                }"><div class="glyphicon glyphicon-trash" style="color: black; font-size: 18px;">Poništi</div></a>
                                    </td>
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
                            <th>Poništi zahtev</th>
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