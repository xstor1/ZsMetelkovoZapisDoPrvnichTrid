<?php
require_once './restricted.php';
session_regenerate_id();
require_once '../Database/Database.php';
require_once '../Database/ZakRepository.php';
$db = new Database();
$zr = new ZakRepository($db);
if (isset($_GET['id']) && !isset($_POST['jmeno'])) {

    $zak = $zr->getZak($_GET['id']);
} else if (isset($_POST['jmeno']) && isset($_POST['prijmeni']) && isset($_POST['pohlavi']) && isset($_POST['rodne']) && isset($_POST['mistonar']) &&
    isset($_POST['zdravpojistovna']) && isset($_POST['ulice']) && isset($_POST['obec']) && isset($_POST['okres']) && isset($_POST['psc']) &&
    isset($_POST['obcanstvi']) && isset($_POST['kvalifikator']) && isset($_POST['zapis']) && isset($_POST['rec']) &&
    isset($_POST['sluch']) && isset($_POST['zrak']) && isset($_POST['odklad']) && isset($_POST['druzina']) && isset($_POST['jidelna']) &&
    isset($_POST['jmenoz']) && isset($_POST['prijmeniz']) && isset($_POST['ulicez']) && isset($_POST['obecz']) && isset($_POST['pscz']) &&
    isset($_POST['telefon'])) {
    if ($_POST['kvalifikator'] != 'Občan ČR') {
        $zr->updateZak($_GET['id'], $_POST['jmeno'], $_POST['prijmeni'], $_POST['pohlavi'], $_POST['rodne'], $_POST['mistonar'], $_POST['zdravpojistovna'],
            $_POST['ulice'], $_POST['obec'], $_POST['okres'], $_POST['psc'], $_POST['obcanstvi'], $_POST['kvalifikator'], 'Ano', $_POST['zapis'], $_POST['rec'], $_POST['sluch'], $_POST['zrak'],
            $_POST['odklad'], $_POST['druzina'], $_POST['jidelna'], $_POST['jmenoz'], $_POST['prijmeniz'], $_POST['ulicez'], $_POST['obecz'], $_POST['pscz'], $_POST['telefon'], $_POST['datschranka'], $_POST['jmenoz2'],
            $_POST['prijmeniz2'], $_POST['ulicez2'], $_POST['obecz2'], $_POST['pscz2'], $_POST['telefon2'], $_POST['datschranka2']);
        header('Location: view.php');
    } else {
        $zr->updateZak($_GET['id'], $_POST['jmeno'], $_POST['prijmeni'], $_POST['pohlavi'], $_POST['rodne'], $_POST['mistonar'], $_POST['zdravpojistovna'],
            $_POST['ulice'], $_POST['obec'], $_POST['okres'], $_POST['psc'], $_POST['obcanstvi'], $_POST['kvalifikator'], 'Ne', $_POST['zapis'], $_POST['rec'], $_POST['sluch'], $_POST['zrak'],
            $_POST['odklad'], $_POST['druzina'], $_POST['jidelna'], $_POST['jmenoz'], $_POST['prijmeniz'], $_POST['ulicez'], $_POST['obecz'], $_POST['pscz'], $_POST['telefon'], $_POST['datschranka'], $_POST['jmenoz2'],
            $_POST['prijmeniz2'], $_POST['ulicez2'], $_POST['obecz2'], $_POST['pscz2'], $_POST['telefon2'], $_POST['datschranka2']);
        header('Location: view.php');
    }
} else if (!isset($_GET['id']) && !isset($_POST['jmeno'])) {
    header('Location: view.php');// put your code here}
} else {
    header('Location: Erorr.php');
}
?>
<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <title>Příhláška</title>
    <style>
        /* The container */
        .container {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 1rem;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* Hide the browser's default radio button */
        .container input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        /* Create a custom radio button */
        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: #eee;
            border-radius: 50%;
        }

        /* On mouse-over, add a grey background color */
        .container:hover input ~ .checkmark {
            background-color: #ccc;
        }

        /* When the radio button is checked, add a blue background */
        .container input:checked ~ .checkmark {
            background-color: #2196F3;
        }

        /* Create the indicator (the dot/circle - hidden when not checked) */
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the indicator (dot/circle) when checked */
        .container input:checked ~ .checkmark:after {
            display: block;
        }

        /* Style the indicator (dot/circle) */
        .container .checkmark:after {
            top: 9px;
            left: 9px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: white;
        }
    </style>

</head>
<body>
<div class="alert alert-danger" role="alert">
    UPOZORNĚNÍ! K vyplňování formuláře používejte moderní a aktualizovaný webový prohlížeč – například Mozilla Firefox,
    Google Chrome, Microsoft Edge, Opera, nebo Safari. <strong>Zásadně nepoužívejte Internet Explorer!!!</strong>
    Internet Explorer nepodporuje některé funkce aplikace a způsobuje problémy s odesláním formuláře.
</div>
<h1 style="text-align: center">Zápisní lístek</h1>
<form method="POST"  >
    <div class="form-row">
        <div class="col">

            <h3 class="h3">Žák</h3>
            <div class="form-group">
                <label for="jmeno">Jméno</label>
                <input class="form-control" type="text" name="jmeno" id="jmeno" placeholder="Např.: František" required>
                <label for="prijmeni">Příjmení</label>
                <input class="form-control" type="text" name="prijmeni" id="prijmeni" placeholder="Např.: Novák"
                       required>
                <label>Pohlaví</label>
                <label class="container">Dívka
                    <input type="radio" name="pohlavi" value="Dívka" required>
                    <span class="checkmark"></span>
                </label>
                <label class="container">Chlapec
                    <input type="radio" name="pohlavi" value="Chlapec" required>
                    <span class="checkmark"></span>
                </label>
                <label for="datumnar">Datum narození</label>
                <input class="form-control" type="date" name="datumnar" id="datumnar"
                       required>
                <label for="spadovazs">Spádová ZŠ dle místa trvalého bydliště (Obecně závazná vyhláška Statutárního města Teplice č. 1/2016):</label>
                <select required class="form-control" name="spadovazs" id="spadovazs">
                    <option value="ZŠ Bílá cesta, Verdunská">ZŠ Bílá cesta, Verdunská</option>
                    <option value="ZŠ Plynárenská  (Prosetice)">ZŠ Plynárenská  (Prosetice)</option>
                    <option value="ZŠ U Nových lázní">ZŠ U Nových lázní</option>
                    <option value="ZŠ Koperníkova">ZŠ Koperníkova</option>
                    <option value="ZŠ Edisonova">ZŠ Edisonova</option>
                    <option value="ZŠ Maršovská">ZŠ Maršovská</option>
                    <option value="ZŠ Na Stínadlech">ZŠ Na Stínadlech</option>
                    <option value="ZŠ Maxe Švabinského">ZŠ Maxe Švabinského</option>
                    <option value="ZŠ Buzulucká">ZŠ Buzulucká</option>
                    <option value="ZŠ Metelkovo nám.">ZŠ Metelkovo nám.</option>
                </select>
            </div>
            <div class="form-group">
                <label for="route">Ulice a č.p.</label>
                <input class="form-control" type="text" name="ulice" id="route" placeholder="Např.: Revoluční 452"
                       required>
                <label for="locality">Obec</label>
                <input class="form-control" type="text" name="obec" id="locality" required
                       placeholder="Např.: Libochovice">
                <label for="postal_code">PSČ</label>
                <input class="form-control" type="text" name="psc" id="postal_code" placeholder="Např.: 41117" required>
            </div>
            <h3 class="h3"> Zákonný zástupce 1</h3>
            <label for="jmenoz">Jméno</label>
            <input class="form-control" type="text" name="jmenoz" id="jmenoz" placeholder="Např.: František" required>
            <label for="prijmeniz">Příjmení</label>
            <input class="form-control" type="text" name="prijmeniz" id="prijmeniz" placeholder="Např.: Novák" required>
            <label for="ulicez">Ulice a č.p.</label>
            <input class="form-control" type="text" name="ulicez" id="ulicez" placeholder="Např.: Revoluční 452"
                   required>
            <label for="obecz">Obec</label>
            <input class="form-control" type="text" name="obecz" id="obecz" placeholder="Např.: Libochovice" required>
            <label for="pscz">PSČ</label>
            <input class="form-control" type="text" name="pscz" id="pscz" placeholder="Např.: 41117" required>
            <label for="telefon">Telefon</label>
            <input class="form-control" type="text" name="telefon" id="telefon" placeholder="Např.: +420 702 197 480"
                   required>
            <label for="email">Email (Nepovinné)</label>
            <input class="form-control" type="email" name="email" id="email" placeholder="Např.: vojtech.stor@larvasystems.cz">
        </div>
        <div class="col">

            <h5 class="h5"> Doručovací adresa (Vyplňovat pokud není shodná s místem trvalého bydliště)</h5>
            <label for="ulicezdor">Ulice a č.p. </label>
            <input class="form-control" type="text" name="ulicezdor" id="ulicezdor"  placeholder="Např.: Revoluční 452">
            <label for="obeczdor">Obec </label>
            <input class="form-control" type="text" name="obeczdor" id="obeczdor"  placeholder="Např.: Libochovice">
            <label for="psczdor">PSČ </label>
            <input class="form-control" type="text" name="psczdor" id="psczdor"  placeholder="Např.: 41117">
            <!-- novy zakony zastupce-->
            <h3 class="h3"> Zákonný zástupce 2</h3>
            <label for="jmenoz2">Jméno </label>
            <input class="form-control" type="text" name="jmenoz2" id="jmenoz2" required placeholder="Např.: František">
            <label for="prijmeniz2">Příjmení </label>
            <input class="form-control" type="text" name="prijmeniz2" id="prijmeniz2" required placeholder="Např.: Novák">
            <label for="ulicez2">Ulice a č.p. </label>
            <input class="form-control" type="text" name="ulicez2" id="ulicez2" required placeholder="Např.: Revoluční 452">
            <label for="obecz2">Obec </label>
            <input class="form-control" type="text" name="obecz2" id="obecz2" required placeholder="Např.: Libochovice">
            <label for="pscz2">PSČ </label>
            <input class="form-control" type="text" name="pscz2" id="pscz2" required placeholder="Např.: 41117">
            <label for="telefonz2">Telefon </label>
            <input class="form-control" type="text" name="telefonz2" id="telefonz2" required placeholder="Např.: +420 702 197 480">
            <label for="emailz2">Email (Nepovinné)</label>
            <input class="form-control" type="text" name="emailz2" id="emailz2" placeholder="Např.: vojtech.stor@larvasystems.cz">
            <h5 class="h5"> Doručovací adresa (Vyplňovat pokud není shodná s místem trvalého bydliště)</h5>
            <label for="ulicez2dor">Ulice a č.p. </label>
            <input class="form-control" type="text" name="ulicez2dor" id="ulicez2dor"  placeholder="Např.: Revoluční 452">
            <label for="obecz2dor">Obec </label>
            <input class="form-control" type="text" name="obecz2dor" id="obecz2dor"  placeholder="Např.: Libochovice">
            <label for="pscz2dor">PSČ </label>
            <input class="form-control" type="text" name="pscz2dor" id="pscz2dor"  placeholder="Např.: 41117">

            <div class="mt-2">
                <h3 class="h3"> Výber času</h3>
                <label for="idCas">Vyberte čas kdy chcete přijít</label>
                <select id="idCas" name="idCas" required class="form-control">
                    <?php
                        $casy = $cr ->getCasy();
                        foreach ($casy as $key => $value)
                        {
                            $count =$zr->getCountOfZakyByIdCas ($value['Id']);
                            $volno=(int)$value['Pocet']-(int)$count['count'];
                            $datetime = new DateTime($value['Datum']);
                            if($volno==0)
                            {
                            
                            }
                            else {
                                echo "<option value=\"" . $value['Id'] . "\">" . $datetime->format ("d.m.Y H:i") . " volných míst: " . $volno . "</option>";
                            }
                        }
                    ?>

                </select>
                <span id="zprava"></span>
            </div>
        </div>

    </div>
    <p>Ve formuláři uvedené údaje poskytuje subjekt údajů škole pro účely plnění právní povinnosti dle zákona 561/2004
        Sb. školský zákon a souvisejících právních předpisů a pro plnění úkolů ve veřejném zájmu ve smyslu článku 6
        odstavce 1. písmene e) nařízení EP a Rady EU 2016/679 Obecné nařízení o ochraně osobních údajů. Poskytnuté údaje
        může škola použít pouze pro vedení školní dokumentace, organizaci školních či mimoškolních akcí a pro jiné účely
        související s běžným provozem školy.</p>

    <div class="">
        <button onclick="CheckTime();" name="type" id="btn1" value="prijeti" class=" mb-4 btn btn-primary form-control">Odeslat zápisní lístek
            a vygenerovat doukenty
        </button>
    </div>
    <h3 id="invis" style="color:green; visibility: hidden;">Vše proběhlo úspěšně.</h3>

</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/submitform.js"></script>

<script src="js/Validate.js" type="text/javascript"></script>


</body>
</html>
