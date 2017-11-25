<html>

@include('layouts.head')

<body>
@section('a4','active')

@include('layouts.header')

<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="Istorija"><font face="Bernard MT Condensed" size="6">REZULTATI I RASPORED</font></div><br>
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <font face="Bernard MT Condensed" size="5">Izaberite kolo</font>
                <Select id="koloselector">
                    <option value="kolo1">1.kolo</option>
                    <option value="kolo2">2.kolo</option>
                    <option value="kolo3">3.kolo</option>
                    <option value="kolo4">4.kolo</option>
                    <option value="kolo5">5.kolo</option>
                    <option value="kolo6">6.kolo</option>
                    <option value="kolo7">7.kolo</option>
                    <option value="kolo8">8.kolo</option>
                    <option value="kolo9">9.kolo</option>
                    <option value="kolo10">10.kolo</option>
                    <option value="kolo11">11.kolo</option>
                    <option value="kolo12">12.kolo</option>
                    <option value="kolo13">13.kolo</option>
                    <option value="kolo14" selected>14.kolo</option>
                    <option value="kolo15">15.kolo</option>
                    <option value="kolo16">16.kolo</option>
                    <option value="kolo17">17.kolo</option>
                    <option value="kolo18">18.kolo</option>
                    <option value="kolo19">19.kolo</option>
                    <option value="kolo20">20.kolo</option>
                    <option value="kolo21">21.kolo</option>
                    <option value="kolo22">22.kolo</option>
                    <option value="kolo23">23.kolo</option>
                    <option value="kolo24">24.kolo</option>
                    <option value="kolo25">25.kolo</option>
                    <option value="kolo26">26.kolo</option>
                </Select>
                <div id="kolo1" class="tabela" style="display:none"><img src="images\tabela\kolo1.png" class="img-fluid" alt="Responsive image">
                    <img src="images\tabela\koloo1.png" class="img-fluid" alt="Responsive image"></div>
                <div id="kolo2" class="tabela" style="display:none"><img src="images\tabela\kolo2.png" class="img-fluid" alt="Responsive image">
                    <img src="images\tabela\koloo2.png" class="img-fluid" alt="Responsive image"></div>
                <div id="kolo3" class="tabela" style="display:none"><img src="images\tabela\kolo2.png" class="img-fluid" alt="Responsive image">
                    <img src="images\tabela\koloo3.png" class="img-fluid" alt="Responsive image"></div>
                <div id="kolo4" class="tabela" style="display:none"><img src="images\tabela\kolo3.png" class="img-fluid" alt="Responsive image">
                    <img src="images\tabela\koloo4.png" class="img-fluid" alt="Responsive image"></div>
                <div id="kolo5" class="tabela" style="display:none"><img src="images\tabela\kolo4.png" class="img-fluid" alt="Responsive image">
                    <img src="images\tabela\koloo5.png" class="img-fluid" alt="Responsive image"></div>
                <div id="kolo6" class="tabela" style="display:none"><img src="images\tabela\kolo5.png" class="img-fluid" alt="Responsive image">
                    <img src="images\tabela\koloo6.png" class="img-fluid" alt="Responsive image"></div>
                <div id="kolo7" class="tabela" style="display:none"><img src="images\tabela\kolo6.png" class="img-fluid" alt="Responsive image">
                    <img src="images\tabela\koloo7.png" class="img-fluid" alt="Responsive image"></div>
                <div id="kolo8" class="tabela" style="display:none"><img src="images\tabela\kolo7.png" class="img-fluid" alt="Responsive image">
                    <img src="images\tabela\koloo8.png" class="img-fluid" alt="Responsive image"></div>
                <div id="kolo9" class="tabela" style="display:none"><img src="images\tabela\kolo8.png" class="img-fluid" alt="Responsive image">
                    <img src="images\tabela\koloo9.png" class="img-fluid" alt="Responsive image"></div>
                <div id="kolo10" class="tabela" style="display:none"><img src="images\tabela\kolo9.png" class="img-fluid" alt="Responsive image">
                    <img src="images\tabela\koloo10.png" class="img-fluid" alt="Responsive image"></div>
                <div id="kolo11" class="tabela" style="display:none"><img src="images\tabela\kolo10.png" class="img-fluid" alt="Responsive image">
                    <img src="images\tabela\koloo11.png" class="img-fluid" alt="Responsive image"></div>
                <div id="kolo12" class="tabela" style="display:none"><img src="images\tabela\kolo11.png" class="img-fluid" alt="Responsive image">
                    <img src="images\tabela\koloo12.png" class="img-fluid" alt="Responsive image"></div>
                <div id="kolo13" class="tabela" style="display:none"><img src="images\tabela\kolo12.png" class="img-fluid" alt="Responsive image">
                    <img src="images\tabela\koloo13.png" class="img-fluid" alt="Responsive image"></div>
                <div id="kolo14" class="tabela"><img src="images\tabela\kolo13.png" class="img-fluid" alt="Responsive image">
                    <img src="images\tabela\koloo14.png" class="img-fluid" alt="Responsive image"></div>
                <div id="kolo15" class="tabela" style="display:none"><img src="images\tabela\kolo13.png" class="img-fluid" alt="Responsive image">
                    <img src="images\tabela\koloo15.png" class="img-fluid" alt="Responsive image"></div>
                <div id="kolo16" class="tabela" style="display:none"><img src="images\tabela\kolo13.png" class="img-fluid" alt="Responsive image">
                    <img src="images\tabela\koloo16.png" class="img-fluid" alt="Responsive image"></div>
                <div id="kolo17" class="tabela" style="display:none"><img src="images\tabela\kolo13.png" class="img-fluid" alt="Responsive image">
                    <img src="images\tabela\koloo17.png" class="img-fluid" alt="Responsive image"></div>
                <div id="kolo18" class="tabela" style="display:none"><img src="images\tabela\kolo13.png" class="img-fluid" alt="Responsive image">
                    <img src="images\tabela\koloo18.png" class="img-fluid" alt="Responsive image"></div>
                <div id="kolo19" class="tabela" style="display:none"><img src="images\tabela\kolo13.png" class="img-fluid" alt="Responsive image">
                    <img src="images\tabela\koloo19.png" class="img-fluid" alt="Responsive image"></div>
                <div id="kolo20" class="tabela" style="display:none"><img src="images\tabela\kolo13.png" class="img-fluid" alt="Responsive image">
                    <img src="images\tabela\koloo20.png" class="img-fluid" alt="Responsive image"></div>
                <div id="kolo21" class="tabela" style="display:none"><img src="images\tabela\kolo13.png" class="img-fluid" alt="Responsive image">
                    <img src="images\tabela\koloo21.png" class="img-fluid" alt="Responsive image"></div>
                <div id="kolo22" class="tabela" style="display:none"><img src="images\tabela\kolo13.png" class="img-fluid" alt="Responsive image">
                    <img src="images\tabela\koloo22.png" class="img-fluid" alt="Responsive image"></div>
                <div id="kolo23" class="tabela" style="display:none"><img src="images\tabela\kolo13.png" class="img-fluid" alt="Responsive image">
                    <img src="images\tabela\koloo23.png" class="img-fluid" alt="Responsive image"></div>
                <div id="kolo24" class="tabela" style="display:none"><img src="images\tabela\kolo13.png" class="img-fluid" alt="Responsive image">
                    <img src="images\tabela\koloo24.png" class="img-fluid" alt="Responsive image"></div>
                <div id="kolo25" class="tabela" style="display:none"><img src="images\tabela\kolo13.png" class="img-fluid" alt="Responsive image">
                    <img src="images\tabela\koloo25.png" class="img-fluid" alt="Responsive image"></div>
                <div id="kolo26" class="tabela" style="display:none"><img src="images\tabela\kolo13.png" class="img-fluid" alt="Responsive image">
                    <img src="images\tabela\koloo26.png" class="img-fluid" alt="Responsive image"></div>
                <script>
                    $(function() {
                        $('#koloselector').change(function(){
                            $('.tabela').hide();
                            $('#' + $(this).val()).show();
                        });
                    });
                </script>
            </div>
            <div class="col-md-2">
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