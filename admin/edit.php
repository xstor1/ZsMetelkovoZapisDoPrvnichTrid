<?php
require_once './restricted.php';
session_regenerate_id();
require_once '../Database/Database.php';
require_once '../Database/ZakRepository.php';
require_once '../Database/CasyRepository.php';
$db = new Database();
$zr = new ZakRepository($db);
$cr = new CasyRepository(db);
if (isset($_GET['id']) && !isset($_POST['jmeno'])) {

    $zak = $zr->getZak($_GET['id']);
} else if (isset($_POST['jmeno']) && isset($_POST['prijmeni']) && isset($_POST['pohlavi']) && isset($_POST['datumnar'])
    && isset($_POST['ulice']) && isset($_POST['obec']) && isset($_POST['psc']) &&
    isset($_POST['jmenoz']) && isset($_POST['prijmeniz']) && isset($_POST['ulicez']) && isset($_POST['obecz']) && isset($_POST['pscz']) &&
    isset($_POST['telefon'])) {

   $tmppocet = $cr->getCasyById($idCas)['Pocet'];
    $tmplidi = $zr->getCountOfZakyByIdCas($idCas)['count'];
    $vysledek = (int)$tmppocet - (int)$tmplidi;
    if ($vysledek < 1) {
        header('Location: error.php');
    }

    $idCas = " ";
    $roknow = " ";
    $roknext = " ";
    $prijmeni = " ";
    $jmeno = " ";
    $datumnar = " ";
    $obec = " ";
    $ulice = " ";
    $psc = " ";
    $spadovazs = " ";
    $pohlaví = " ";
    $jmenoz = " ";
    $prijmeniz = " ";
    $obecz = " ";
    $ulicez = " ";
    $pscz = " ";
    $telefon = " ";
    $email = " ";
    $obeczdor = " ";
    $ulicezdor = " ";
    $psczdor = " ";
    $jmenoz2 = " ";
    $prijmeniz2 = " ";
    $obecz2 = " ";
    $ulicez2 = " ";
    $pscz2 = " ";
    $telefonz2 = " ";
    $emailz2 = " ";
    $obecz2dor = " ";
    $ulicez2dor = " ";
    $pscz2dor = " ";
    $typz = " ";
    $typz2 = " ";


    $idCas = $_POST['idCas'];
    $roknow = date("Y");
    $roknext = ((int)date("Y")) + 1;
    $prijmeni = $_POST['prijmeni'];
    $jmeno = $_POST['jmeno'];
    $datumnar = new DateTime($_POST['datumnar']);
    $datumnar = $datumnar->format('d.m.Y');
    $obec = $_POST['obec'];
    $ulice = $_POST['ulice'];
    $psc = $_POST['psc'];
    $spadovazs = $_POST['spadovazs'];
    $pohlavi = $_POST['pohlavi'];
    $jmenoz = $_POST['jmenoz'];
    $prijmeniz = $_POST['prijmeniz'];
    $obecz = $_POST['obecz'];
    $ulicez = $_POST['ulicez'];
    $pscz = $_POST['pscz'];
    $telefon = $_POST['telefon'];
    $email = $_POST['email'];
    $obeczdor = $_POST['obeczdor'];
    $ulicezdor = $_POST['ulicezdor'];
    $psczdor = $_POST['psczdor'];
    $jmenoz2 = $_POST['jmenoz2'];
    $prijmeniz2 = $_POST['prijmeniz2'];
    $obecz2 = $_POST['obecz2'];
    $ulicez2 = $_POST['ulicez2'];
    $pscz2 = $_POST['pscz2'];
    $typz = $_POST['typz'];
    $typz2 = $_POST['typz2'];
    $telefonz2 = $_POST['telefonz2'];
    $emailz2 = $_POST['emailz2'];
    $obecz2dor = $_POST['obecz2dor'];
    $ulicez2dor = $_POST['ulicez2dor'];
    $pscz2dor = $_POST['pscz2dor'];
    $datetime = new DateTime($cr->getCasyById($idCas)['Datum']);
    $cas = $datetime->format("d.m.Y H:i");
    

        $zr->updateZak($_GET['id'], $idCas, $jmeno, $prijmeni, $pohlavi, $datumnar, $ulice, $obec, $psc, $spadovazs, $typz, $jmenoz, $prijmeniz, $ulicez, $obecz, $pscz, $telefon, $email, $obeczdor, $ulicezdor, $psczdor, $typz2, $jmenoz2, $prijmeniz2, $ulicez2, $obecz2, $pscz2, $telefonz2, $emailz2, $obecz2dor, $ulicez2dor, $pscz2dor);
        header('Location: view.php');

} else if (!isset($_GET['id']) && !isset($_POST['jmeno'])) {
    header('Location: view.php');// put your code here}
} else {
    header('Location: Erorr.php');
}
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="../css/style.css" rel="stylesheet" type="text/css"/>
    <link href="../css/checkbox.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans" rel="stylesheet">
    <title>Příhláška</title>
    <style>

    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12"
             style="color: white; border-top: 4px solid #E65100; border-bottom: 4px solid #E65100; background-color: #E65100">
            <h1 class="mt-4 mb-4" style="text-align: center">Přihláška k zápisu do první třídy</h1>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div style="font-size:12px " class="alert alert-danger" role="alert">
                <strong>UPOZORNĚNÍ!</strong> K vyplňování formuláře používejte moderní a aktualizovaný webový prohlížeč
                –
                například
                Mozilla Firefox,
                Google Chrome, Microsoft Edge, Opera, nebo Safari. <strong>Zásadně nepoužívejte Internet
                    Explorer!</strong>
                Internet Explorer nepodporuje některé funkce aplikace a způsobuje problémy s odesláním formuláře.
            </div>
        </div>
    </div>

    <form method="POST">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-12 col-md-8 col-lg-8 offset-md-2 offset-lg-2"
                     style="border-top: 4px solid #E65100; border-bottom: 4px solid #E65100; background-color: #FFF3E0">
                    <div class="form-group">
                        <div class="row  offset-lg-1">
                            <div class="col-md-5 col-lg-3 m-2 mt-4">
                                <h3 class="h3"> Žák</h3>
                            </div>
                        </div>
                        <div class="row  offset-lg-1">

                            <div class="col-md-5 col-lg-5 m-2  ">
                                <label for="jmeno"><strong>Jméno</strong></label>
                                <input class="form-control" type="text" name="jmeno" id="jmeno"
                                       placeholder="Např.: František"
                                       required>
                            </div>
                            <div class="col-md-5 col-lg-5  m-2">
                                <label for="prijmeni"><strong>Přijmení</strong></label>
                                <input class="form-control" type="text" name="prijmeni" id="prijmeni"
                                       placeholder="Např.: Novák"
                                       required>
                            </div>

                        </div>
                    </div>

                    <div class="row  offset-lg-1">
                        <div class="col-md-5 col-lg-5  m-2">
                            <label for="datumnar"><strong>Datum narození</strong></label>
                            <input class="form-control" type="date" name="datumnar" id="datumnar"
                                   required>
                        </div>
                        <div class="col-md-6 col-lg-5  m-2">
                            <label><strong>Pohlaví</strong></label>
                            <div class="row ">
                                <div class="col-md-4 col-lg-5 col-xl-3 m-2">
                                    <label class="container">Dívka
                                        <input style="background-colorcolor: white" type="radio" name="pohlavi"
                                               value="Dívka"
                                               required>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-md-1 col-lg-5 col-xl-3 m-2">
                                    <label class="container">Chlapec
                                        <input style="background-color: white" type="radio" name="pohlavi"
                                               value="Chlapec"
                                               required>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-10 col-lg-8  m-2">
                            <label for="spadovazs"><strong>Spádová ZŠ dle místa trvalého bydliště</strong></label>
                            <select required class="form-control" name="spadovazs" id="spadovazs">
                                <option value="ZŠ Bílá cesta, Verdunská">ZŠ Bílá cesta, Verdunská</option>
                                <option value="ZŠ Plynárenská  (Prosetice)">ZŠ Plynárenská (Prosetice)</option>
                                <option value="ZŠ U Nových lázní">ZŠ U Nových lázní</option>
                                <option value="ZŠ Koperníkova">ZŠ Koperníkova</option>
                                <option value="ZŠ Edisonova">ZŠ Edisonova</option>
                                <option value="ZŠ Maršovská">ZŠ Maršovská</option>
                                <option value="ZŠ Na Stínadlech">ZŠ Na Stínadlech</option>
                                <option value="ZŠ Maxe Švabinského">ZŠ Maxe Švabinského</option>
                                <option value="ZŠ Buzulucká">ZŠ Buzulucká</option>
                                <option value="ZŠ Metelkovo nám.">ZŠ Metelkovo nám.</option>
                            </select>
                            <small id="spadovazs" class="form-text text-muted">(Obecně závazná vyhláška Statutárního
                                města
                                Teplice č. 1/2016)
                            </small>
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-10  col-lg-8  m-2">
                            <div class="form-group">
                                <label for="route"><strong>Ulice a č.p.</strong></label>
                                <input class="form-control" type="text" name="ulice" id="route"
                                       placeholder="Např.: Revoluční 452"
                                       required>
                            </div>
                        </div>
                    </div>
                    <div class="row  offset-lg-1 mb-4">
                        <div class="col-md-5  col-lg-5   m-2">
                            <label for="locality"><strong>Obec</strong></label>
                            <input class="form-control" type="text" name="obec" id="locality" required
                                   placeholder="Např.: Libochovice">
                        </div>
                        <div class="col-md-4 col-lg-3  m-2">
                            <label for="postal_code"><strong>PSČ</strong></label>
                            <input class="form-control" type="text" name="psc" id="postal_code"
                                   placeholder="Např.: 41117"
                                   required>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-12 col-md-8 col-lg-8 offset-md-2 offset-lg-2"
                     style=" border-bottom: 4px solid #E65100; background-color:  #FFF3E0">
                    <div class="row ">
                        <div class="col-md-12 col-lg-12 col-xl-12 mb-2 mt-4" style=" border-bottom: 4px solid #E65100; background-color:  #FFF3E0">
                            <p style="text-align: center">Pokud má dítě v rodném listě uvedeny dva (v současné době žijící) zákonné zástupce a nebylo-li soudně rozhodnuto jinak, musí být uvedeni oba.</p>
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-5 col-lg-6 col-xl-4 ml-2 mt-1" style="color: grey">
                            <div class="h5"> První zákonný zástupce</div>
                        </div>
                    </div>

                    <div class="row  offset-lg-1">
                        <div class="col-md-5 col-lg-6 col-xl-4 ml-2 mb-2 mt-2">
                            <h3 class="h3"> Zákonný zástupce je</h3>
                        </div>
                        <div class="col-md-5 col-lg-4 col-xl-2 mr-2  m-b mt-2">
                            <select required class="form-control" name="typz" id="typz">
                                <option disabled selected value>Vyberte</option>
                                <option value="Matka">Matka</option>
                                <option value="Otec">Otec</option>
                                <option value="Jiný">Jiný</option>
                            </select>
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-5 col-lg-5  m-2 ">
                            <label for="jmenoz"><strong>Jméno</strong></label>
                            <input class="form-control" type="text" name="jmenoz" id="jmenoz"
                                   placeholder="Např.: Františka"
                                   required>
                        </div>
                        <div class="col-md-5 col-lg-5 m-2 ">

                            <label for="prijmeniz"><strong>Příjmení</strong></label>
                            <input class="form-control" type="text" name="prijmeniz" id="prijmeniz"
                                   placeholder="Např.: Nováková"
                                   required>
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-10 col-lg-8  m-2">
                            <label for="ulicez"><strong>Ulice a č.p.</strong></label>
                            <input class="form-control" type="text" name="ulicez" id="ulicez"
                                   placeholder="Např.: Revoluční 452"
                                   required>
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-5 col-lg-5  m-2">
                            <label for="obecz"><strong>Obec</strong></label>
                            <input class="form-control" type="text" name="obecz" id="obecz"
                                   placeholder="Např.: Libochovice"
                                   required>
                        </div>
                        <div class="col-md-4 col-lg-3  m-2">

                            <label for="pscz"><strong>PSČ</strong></label>
                            <input class="form-control" type="text" name="pscz" id="pscz" placeholder="Např.: 41117"
                                   required>
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-4 col-lg-5  m-2">
                            <label for="telefon"><strong>Telefon</strong></label>

                            <input class="form-control" type="text" name="telefon" id="telefon"
                                   placeholder="Např.: +420 702 197 480"
                                   required>
                        </div>
                        <div class="col-md-6 col-lg-6 m-2">

                            <label for="email"><strong>Email</strong></label>
                            <input class="form-control" type="email" name="email" id="email"
                                   placeholder="Např.: vojtech.stor@larvasystems.cz">
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-10 col-lg-10 m-2 mt-4">
                            <div class="h5">Doručovací adresa (Vyplňte, pokud se liší od adresy trvalého bydliště)</div>
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-10 col-lg-8  m-2">
                            <label for="ulicezdor"><strong>Ulice a č.p.</strong> </label>
                            <input class="form-control" type="text" name="ulicezdor" id="ulicezdor"
                                   placeholder="Např.: Revoluční 452">
                        </div>
                    </div>
                    <div class="row  offset-lg-1 mb-4">
                        <div class="col-md-5 col-lg-5  m-2">
                            <label for="obeczdor"><strong>Obec</strong></label>
                            <input class="form-control" type="text" name="obeczdor" id="obeczdor"
                                   placeholder="Např.: Libochovice">
                        </div>
                        <div class="col-md-4 col-lg-3  m-2">
                            <label for="psczdor"><strong>PSČ</strong></label>
                            <input class="form-control" type="text" name="psczdor" id="psczdor"
                                   placeholder="Např.: 41117">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-8 col-sm-12 col-lg-8  offset-md-2 offset-lg-2"
                     style=" border-bottom: 4px solid #E65100; background-color:  #FFF3E0">
                    <div class="row  offset-lg-1">
                        <div class="col-md-5 col-lg-6 col-xl-4 ml-2 mt-2" style="color: grey">
                            <div class="h5"> Druhý zákonný zástupce</div>
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-5 col-lg-6 col-xl-4 ml-2 mb-2 mt-2">
                            <h3 class="h3">Zákonný zástupce je</h3>
                        </div>
                        <div class="col-md-5 col-lg-4  col-xl-2 mb-2 mr-2 mt-2">
                            <select class="form-control" name="typz2" id="typz2">
                                <option selected value>Vyberte</option>
                                <option value="Matka">Matka</option>
                                <option value="Otec">Otec</option>
                                <option value="Jiný">Jiný</option>
                            </select>
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-5 col-lg-5  m-2 ">
                            <label for="jmenoz2"><strong>Jméno</strong> </label>
                            <input class="form-control" type="text" name="jmenoz2" id="jmenoz2"
                                   placeholder="Např.: František">
                        </div>
                        <div class="col-md-5 col-lg-5  m-2 ">

                            <label for="prijmeniz2"><strong>Příjmení</strong> </label>
                            <input class="form-control" type="text" name="prijmeniz2" id="prijmeniz2"
                                   placeholder="Např.: Novák">
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-10 col-lg-8  m-2">
                            <label for="ulicez2"><strong>Ulice a č.p.</strong> </label>
                            <input class="form-control" type="text" name="ulicez2" id="ulicez2"
                                   placeholder="Např.: Revoluční 452">
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-5 col-lg-5 m-2">
                            <label for="obecz2"><strong>Obec</strong> </label>
                            <input class="form-control" type="text" name="obecz2" id="obecz2"
                                   placeholder="Např.: Libochovice">
                        </div>
                        <div class="col-md-4 col-lg-3  m-2">

                            <label for="pscz2"><strong>PSČ</strong></label>
                            <input class="form-control" type="text" name="pscz2" id="pscz2" placeholder="Např.: 41117">
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-5 col-lg-5  m-2">
                            <label for="telefonz2"><strong>Telefon</strong> </label>
                            <input class="form-control" type="text" name="telefonz2" id="telefonz2"
                                   placeholder="Např.: +420 702 197 480">
                        </div>
                        <div class="col-md-6 col-lg-6  m-2">

                            <label for="emailz2"><strong>Email</strong></label>
                            <input class="form-control" type="text" name="emailz2" id="emailz2"
                                   placeholder="Např.: vojtech.stor@larvasystems.cz">
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-10 col-lg-10 m-2 mt-4">
                            <div class="h5">Doručovací adresa (Vyplňte, pokud se liší od adresy trvalého bydliště)</div>
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-10 col-lg-8  m-2">
                            <label for="ulicez2dor"><strong>Ulice a č.p.</strong> </label>
                            <input class="form-control" type="text" name="ulicez2dor" id="ulicez2dor"
                                   placeholder="Např.: Revoluční 452">
                        </div>
                    </div>
                    <div class="row  offset-lg-1 mb-4">
                        <div class="col-md-6 col-lg-5 col-lg-3 m-2">
                            <label for="obecz2dor"><strong>Obec</strong> </label>
                            <input class="form-control" type="text" name="obecz2dor" id="obecz2dor"
                                   placeholder="Např.: Libochovice">
                        </div>
                        <div class="col-md-4 col-lg-3 m-2">

                            <label for="pscz2dor"><strong>PSČ</strong></label>
                            <input class="form-control" type="text" name="pscz2dor" id="pscz2dor"
                                   placeholder="Např.: 41117">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-8 col-sm-12 col-lg-8  offset-md-2 offset-lg-2"
                     style=" border-bottom: 4px solid #E65100; background-color:  #FFF3E0">
                    <div class="row  offset-lg-1">
                        <div class="col-md-5 col-lg-8 ml-2 col-xl-5 mb-4 mt-4">
                            <h3 class="h3"><strong>Výběr termínu a času</strong></h3>
                            <label for="idCas">Vyberte termín a čas, kdy chcete přijít k zápisu</label>
                            <select id="idCas" name="idCas" required class="form-control">
                                <?php
                                $casy = $cr->getCasy();
                                foreach ($casy as $key => $value) {
                                    $count = $zr->getCountOfZakyByIdCas($value['Id']);
                                    $volno = (int)$value['Pocet'] - (int)$count['count'];
                                    $datetime = new DateTime($value['Datum']);
                                    if ($volno == 0) {

                                    } else {
                                        echo "<option value=\"" . $value['Id'] . "\">" . $datetime->format("d.m.Y H:i") . " volných míst: " . $volno . "</option>";
                                    }
                                }
                                ?>

                            </select>
                        </div>
                    </div>

                    <span id="zprava"></span>
                    <div class="row  offset-lg-1">
                        <div class="col-md-11 col-lg-10 m-2">
                            <p>
                                Stisknutím tlačítka „Odeslat a vygenerovat dokumenty“ se přihláška odešle a zároveň vám
                                bude okamžitě vygenerována žádost s informacemi.
                                Žádost je třeba vytisknout, podepsat zákonnými zástupci a odevzdat při zápisu.

                            </p>
                        </div>
                    </div>

                    <div class="row  offset-lg-1">

                        <div class="col-md-10 col-lg-8 col-xl-5 m-2">
                            <button style="background-color: #FF6D00" onclick="CheckTime();" name="type" id="btn1"
                                    value="prijeti"
                                    class=" mb-4 btn btn-primary form-control">
                                Odeslat a vygenerovat dokumenty
                            </button>
                        </div>
                        <div class="col-md-10 col-lg-8 col-xl-5 m-2">
                            <h1 id="invis" style="visibility: hidden; color: green">Vše proběhlo úspěšně</h1>
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-10 col-lg-8 ml-2 mb-4">
                            <small class="form-text text-muted">Ve formuláři uvedené údaje poskytuje subjekt údajů škole
                                pro účely plnění právní povinnosti dle
                                zákona 561/2004
                                Sb. školský zákon a souvisejících právních předpisů a pro plnění úkolů ve veřejném zájmu
                                ve
                                smyslu
                                článku 6
                                odstavce 1. písmene e) nařízení EP a Rady EU 2016/679 Obecné nařízení o ochraně osobních
                                údajů.
                                Poskytnuté údaje
                                může škola použít pouze pro vedení školní dokumentace, organizaci školních či
                                mimoškolních akcí
                                a
                                pro jiné účely
                                související s běžným provozem školy.
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</form>
<div class="container-fluid">
    <div class="row ">
        <div class="col-sm-12 col-md-12 col-lg-12"
             style="border-top: 4px solid #E65100; border-bottom: 4px solid #E65100; background-color:  #E65100">
            <div class="m-2" style="color: white; text-align: center">Powered by <a style="color: wheat;"
                                                                                    href="https://www.larvasystems.cz/">LarvaSystems</a>
            </div>
            <small style="color:white; text-align: center" class="form-text  mb-2">
                Všechna práva vyhrazena © 2019
            </small>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../js/bootstrap.js" type="text/javascript"></script>
<script src="../js/submitform.js"></script>

<script src="../js/Validate.js" type="text/javascript"></script>

</body>
</html>
