<html>

@include('layouts.head')

<body>
@section('a3','active')
@include('layouts.header')

<!--History-->
<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="Istorija"><font face="Bernard MT Condensed" size="6">ISTORIJA</font></div><br>
            <div class="col-sm-6">
                <font face="Arial" size="3">Priča Fudbalskog kluba “Pobeda“ započinje u proleće 1964… Dok se svet spremao za rat romantičarski zaneseni novosadski učenici Srpske pravoslavne gimnazije, jureći za loptom na poljančetu kod „Četiri krajcare“ (na kraju sadašnje 'Velikotrnavske' ulice) odlučili su da osnuju fudbalsko društvo kao pandam FK „NAK“ i FK „UTK“ koji su, pre svega, okupljali mađarsku, pomađarenojevrejsku i nemačku omladinu.

                    rat je (u)činio svoje… Godinu nakon njegovog završetka, piroćanci su ponovo počeli da se okupljaju u Ljubojevićevoj kafani i štrikerskoj radionici Save Šijakova, čiji je sin Milenko postao prvi sekretar, Živko Bajazetov izabran za prvog predsenika kluba.

                    S obzirom na to da je većina prvotimaca studirala u glavnom gradu Čehoslovačke, iz Praga je doneta prva garnitura crveno-belih dresova Slavije po kojim je 'Pobeda' prepoznatljiva i dan danas.

                    Želeći da ojača, da se uključi u redovno takmičenje 'Pobeda' se fuzionisala sa FK „Omladinac“, koji je u svojim redovima okupljao uglavnom trgovačku omladinu, pa je novi klub dobio ime Omladinski sport klub Pobeda.</font>
            </div>
            <div class="col-sm-6">
                <img src="images\historypic1.jpg" class="img-fluid" alt="Responsive image" height="300px" width="500px">
            </div>
        </div><br>
        <div class="row">
            <div class="col-sm-12">
                <font face="Arial" size="3">U tri navrata 1975/76., 1976/77. i 1995/96. Pobeda je bio na domak plasmana u Prvu saveznu ligu. U tim sezonama Pobeda je osvajala treće mesto u prvenstvu, a u elitu su ispred njega odlazili Vardar Skoplje, Priština i Napredak Kruševac. U najmasovnijem takmičenju, Kupu Jugoslavije, 1975/76. stigli su do četvrtfinala gde su poraženi od Dinama iz Zagreba. Pre toga u osmini finala „beli“ su pobedili veliku Crvenu zvezdu rezultatom 4:2. U sezoni 2004/05. Pobeda je stigla do četvrtfinala Kupa Srbije i Crne Gore, kada je u Pirotu poražena od beogradskog Rada sa 1:0.</font>
            </div>
        </div><br>
        <div class="row">
            <div class="col-sm-6">
                <img src="images\historypic2.jpg"  class="img-fluid" alt="Responsive image"  height="300px" width="500px">
            </div>
            <div class="col-sm-6">
                <font face="Arial" size="3">Ono što je možda i značajnije je da su boje kluba nosili mnogi sjajni pojedinci. Dres sa državnim grbom oblačili su: Jovan Anđelković, Jovan Stanković i Radivoje Manić. U dresu Pobede najviše je pružio Miroljub Đorđević, koji je za svoj tim odigrao 408 zvaničnih utakmica i postigao 150 golova, taj njegov rekord još dugo neće biti dostignut. 1995. godine povodom proslave pedesetogodišnjice kluba proglašen je za najboljeg igrača „Pobede“ svih vremena. Takođe je mnogo velikih asova koji su sa strane dolazili u Pirot i ovde započinjali sjajne karijere poput: Slobodana Janjuša, Ljube Stevanovića, Milana Radovića, Mateje Kežmana, Nenada Jestrovića, Milijana Tupajića, Vladimira Petkovića, Ivana Gvozdenovića.</font>
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