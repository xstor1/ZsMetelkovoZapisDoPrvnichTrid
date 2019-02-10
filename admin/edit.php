<?php
    require_once './restricted.php';
    session_regenerate_id ();
    require_once '../Database/Database.php';
    require_once '../Database/ZakRepository.php';
    require_once '../Database/CasyRepository.php';
    $db = new Database();
    $zr = new ZakRepository($db);
    $cr = new CasyRepository($db);
    if (isset($_GET['id']) && !isset($_POST['jmeno'])) {
        $zak = $zr->getZak ($_GET['id']);
        
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
        $pohlavi = " ";
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
    
    
        $idCas = $zak['IdCas'];
        $roknow = date ("Y");
        $roknext = ((int)date ("Y")) + 1;
        $prijmeni = $zak['prijmeni'];
        $jmeno = $zak['jmeno'];
        $datumnar = $zak['datumnar'];
        $obec = $zak['obec'];
        $ulice = $zak['ulice'];
        $psc = $zak['psc'];
        $spadovazs = $zak['spadovazs'];
        $pohlavi = $zak['pohlavi'];
        $jmenoz = $zak['jmenoz'];
        $prijmeniz = $zak['prijmeniz'];
        $obecz = $zak['obecz'];
        $ulicez = $zak['ulicez'];
        $pscz = $zak['pscz'];
        $telefon = $zak['telefon'];
        $email = $zak['email'];
        $obeczdor = $zak['obeczdor'];
        $ulicezdor = $zak['ulicezdor'];
        $psczdor = $zak['psczdor'];
        $jmenoz2 = $zak['jmenoz2'];
        $prijmeniz2 = $zak['prijmeniz2'];
        $obecz2 = $zak['obecz2'];
        $ulicez2 = $zak['ulicez2'];
        $pscz2 = $zak['pscz2'];
        $typz = $zak['typz'];
        $typz2 = $zak['typz2'];
        $telefonz2 = $zak['telefonz2'];
        $emailz2 = $zak['emailz2'];
        $obecz2dor = $zak['obecz2dor'];
        $ulicez2dor = $zak['ulicez2dor'];
        $pscz2dor = $zak['pscz2dor'];
        $datetime = new DateTime($cr->getCasyById ($idCas)['Datum']);
        $cas = $datetime->format ("d.m.Y H:i");
        
        
    } else if (isset($_POST['jmeno']) && isset($_POST['prijmeni']) && isset($_POST['pohlavi']) && isset($_POST['datumnar'])
        && isset($_POST['ulice']) && isset($_POST['obec']) && isset($_POST['psc']) &&
        isset($_POST['jmenoz']) && isset($_POST['prijmeniz']) && isset($_POST['ulicez']) && isset($_POST['obecz']) && isset($_POST['pscz']) &&
        isset($_POST['telefon'])) {
        
       
        
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
        $pohlavi = " ";
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
        $roknow = date ("Y");
        $roknext = ((int)date ("Y")) + 1;
        $prijmeni = $_POST['prijmeni'];
        $jmeno = $_POST['jmeno'];
        $datumnar = $_POST['datumnar'];
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
        $datetime = new DateTime($cr->getCasyById ($idCas)['Datum']);
        $cas = $datetime->format ("d.m.Y H:i");
    
        $tmppocet = $cr->getCasyById ($idCas)['Pocet'];
        $tmplidi = $zr->getCountOfZakyByIdCas ($idCas)['count'];
        $vysledek = (int)$tmppocet - (int)$tmplidi;
        if ($vysledek < 1) {
            header ('Location: error.php');
        }
        
        $zr->updateZak ($_GET['id'], $idCas, $jmeno, $prijmeni, $pohlavi, $datumnar, $ulice, $obec, $psc, $spadovazs, $typz, $jmenoz, $prijmeniz, $ulicez, $obecz, $pscz, $telefon, $email, $obeczdor, $ulicezdor, $psczdor, $typz2, $jmenoz2, $prijmeniz2, $ulicez2, $obecz2, $pscz2, $telefonz2, $emailz2, $obecz2dor, $ulicez2dor, $pscz2dor);
        header ('Location: view.php');
        
    } else if (!isset($_GET['id']) && !isset($_POST['jmeno'])) {
        header ('Location: view.php');// put your code here}
    } else {
        header ('Location: Erorr.php');
    }
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="../css/style.css" rel="stylesheet" type="text/css"/>
    <link href="../css/checkbox_edit.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Editace žáka</title>
    <style>
        #myBtn {
            display: none; /* Hidden by default */
            position: fixed; /* Fixed/sticky position */
            bottom: 20px; /* Place the button at the bottom of the page */
            right: 30px; /* Place the button 30px from the right */
            z-index: 99; /* Make sure it does not overlap */
            border: none; /* Remove borders */
            outline: none; /* Remove outline */
            background-color: white; /* Set a background color */
            border: 1px solid grey;
            color: white; /* Text color */
            cursor: pointer; /* Add a mouse pointer on hover */
            border-radius: 5px;
            padding: 10px; /* Some padding */
            font-size: 18px; /* Increase font size */
        }

        #myBtn:hover {
            background-color:#BDBDBD; /* Add a dark-grey background on hover */
        }
    </style>
</head>
<body>

<header>
    <nav class="navbar navbar-dark navbar-expand-lg" style="background-color:#212529 ">
        <a style="color: white" class="navbar-brand"> <strong>Zápis do prvních tříd</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a style="color: white" class="nav-link" href="view.php">Administrace zápisu </a>
                </li>
                <li class="nav-item ">
                    <a style="color: white" class="nav-link" href="reservation.php">Rezervace časů</a>
                </li>
                <li class="nav-item">
                    <a style="color: white" class="nav-link" href="../index.php" target="_blank">Nový zápis </a>
                </li>

            </ul>
            <span class="navbar-text">
      <a href="logout.php">Odhlásit se</a>
    </span>
        </div>
    </nav>

   
</header>

<div class="h1 m-4" style="text-align: center">Editace žáka</div>

    <form method="POST">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-8 offset-md-2 offset-lg-2"
                     style="border-top: 4px solid #01579B; border-bottom: 4px solid #01579B; background-color: #E1F5FE">
                    <div class="form-group">
                        <div class="row  offset-lg-1">
                            <div class="col-md-5 col-lg-3 m-2 mt-4">
                                <h3 class="h3"> Žák</h3>
                            </div>
                        </div>
                        <div class="row  offset-lg-1">

                            <div class="col-md-5 col-lg-5 m-2  ">
                                <label for="jmeno"><strong>Jméno</strong></label>
                                <input class="form-control" type="text" value="<?php echo "$jmeno" ?>" name="jmeno"
                                       id="jmeno"
                                       placeholder="Např.: František"
                                       required>
                            </div>
                            <div class="col-md-5 col-lg-5  m-2">
                                <label for="prijmeni"><strong>Přijmení</strong></label>
                                <input class="form-control" value="<?php echo "$prijmeni" ?>" type="text"
                                       name="prijmeni" id="prijmeni"
                                       placeholder="Např.: Novák"
                                       required>
                            </div>

                        </div>
                    </div>

                    <div class="row  offset-lg-1">
                        <div class="col-md-5 col-lg-5  m-2">
                            <label for="datumnar"><strong>Datum narození</strong></label>
                            <input class="form-control" value="<?php echo "$datumnar" ?>" type="date" name="datumnar"
                                   id="datumnar"
                                   required>
                        </div>
                        <div class="col-md-6 col-lg-5  m-2">
                            <label><strong>Pohlaví</strong></label>
                            <div class="row ">
                                <div class="col-md-4 col-lg-5 col-xl-3 m-2">
                                    <label class="container">Dívka
                                        <input style="background-colorcolor: white" type="radio" name="pohlavi" <?php if ($pohlavi == "Dívka") {
                                            echo 'checked';
                                        } ?>
                                               value="Dívka"
                                               required>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-md-1 col-lg-5 col-xl-3 m-2">
                                    <label class="container">Chlapec
                                        <input style="background-color: white" type="radio" name="pohlavi"
                                               value="Chlapec" <?php if ($pohlavi != "Dívka") {
                                            echo 'checked';
                                        } ?>
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
                                <option value="ZŠ Bílá cesta, Verdunská" <?php if ($spadovazs == "ZŠ Bílá cesta, Verdunská") {
                                    echo 'selected';
                                } ?> >ZŠ Bílá cesta, Verdunská
                                </option>
                                <option value="ZŠ Plynárenská  (Prosetice)" <?php if ($spadovazs == "ZŠ Plynárenská  (Prosetice)") {
                                    echo 'selected';
                                } ?>>ZŠ Plynárenská (Prosetice)
                                </option>
                                <option value="ZŠ U Nových lázní" <?php if ($spadovazs == "ZŠ U Nových lázní") {
                                    echo 'selected';
                                } ?>>ZŠ U Nových lázní
                                </option>
                                <option value="ZŠ Koperníkova" <?php if ($spadovazs == "ZŠ Koperníkova") {
                                    echo 'selected';
                                } ?>>ZŠ Koperníkova
                                </option>
                                <option value="ZŠ Edisonova" <?php if ($spadovazs == "ZŠ Edisonova") {
                                    echo 'selected';
                                } ?>>ZŠ Edisonova
                                </option>
                                <option value="ZŠ Maršovská" <?php if ($spadovazs == "ZŠ Maršovská") {
                                    echo 'selected';
                                } ?>>ZŠ Maršovská
                                </option>
                                <option value="ZŠ Na Stínadlech" <?php if ($spadovazs == "ZŠ Na Stínadlech") {
                                    echo 'selected';
                                } ?>>ZŠ Na Stínadlech
                                </option>
                                <option value="ZŠ Maxe Švabinského" <?php if ($spadovazs == "ZŠ Maxe Švabinského") {
                                    echo 'selected';
                                } ?>>ZŠ Maxe Švabinského
                                </option>
                                <option value="ZŠ Buzulucká" <?php if ($spadovazs == "ZŠ Buzulucká") {
                                    echo 'selected';
                                } ?>>ZŠ Buzulucká
                                </option>
                                <option value="ZŠ Metelkovo nám." <?php if ($spadovazs == "ZŠ Metelkovo nám.") {
                                    echo 'selected';
                                } ?>>ZŠ Metelkovo nám.
                                </option>
                            </select>
                            <smallclass
                            ="form-text text-muted">(Obecně závazná vyhláška Statutárního
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
                                       placeholder="Např.: Revoluční 452" value="<?php echo "$ulice" ?>"
                                       required>
                            </div>
                        </div>
                    </div>
                    <div class="row  offset-lg-1 mb-4">
                        <div class="col-md-5  col-lg-5   m-2">
                            <label for="locality"><strong>Obec</strong></label>
                            <input class="form-control" type="text" name="obec" id="locality"
                                   value="<?php echo "$obec" ?>" required
                                   placeholder="Např.: Libochovice">
                        </div>
                        <div class="col-md-4 col-lg-3  m-2">
                            <label for="postal_code"><strong>PSČ</strong></label>
                            <input class="form-control" type="text" name="psc" value="<?php echo "$psc" ?>"
                                   id="postal_code"
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
                     style=" border-bottom: 4px solid #0091EB ; background-color:#E1F5FE">
                    <div class="row ">
                        <div class="col-md-12 col-lg-12 col-xl-12 mb-2 mt-4"
                             style=" border-bottom: 4px solid #01579B; background-color:  #E1F5FE">
                            <p style="text-align: center">Pokud má dítě v rodném listě uvedeny dva (v současné době
                                žijící) zákonné zástupce a nebylo-li soudně rozhodnuto jinak, musí být uvedeni oba.</p>
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-12 col-lg-12 col-xl-12 ml-2 mt-1">
                            <div class="h5"> První zákonný zástupce je:</div>
                        </div>
                    </div>

                    <div class="row  offset-lg-1">
                        <div class="col-md-5 col-lg-4 col-xl-4 m-2">
                            <select required class="form-control" name="typz" id="typz">
                                <option disabled selected value <?php if ($typz == "") {
                                    echo 'selected';
                                } ?>>-- Vyberte --
                                </option>
                                <option value="Matka" <?php if ($typz == "Matka") {
                                    echo 'selected';
                                } ?>>Matka
                                </option>
                                <option value="Otec" <?php if ($typz == "Otec") {
                                    echo 'selected';
                                } ?>>Otec
                                </option>
                                <option value="Jiný" <?php if ($typz == "Jiný") {
                                    echo 'selected';
                                } ?>>Jiný
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-5 col-lg-5  m-2 ">
                            <label for="jmenoz"><strong>Jméno</strong></label>
                            <input class="form-control" type="text" name="jmenoz" id="jmenoz"
                                   placeholder="Např.: Františka" value="<?php echo "$jmenoz" ?>"
                                   required>
                        </div>
                        <div class="col-md-5 col-lg-5 m-2 ">

                            <label for="prijmeniz"><strong>Příjmení</strong></label>
                            <input class="form-control" type="text" name="prijmeniz" id="prijmeniz"
                                   value="<?php echo "$prijmeniz" ?>"
                                   placeholder="Např.: Nováková"
                                   required>
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-10 col-lg-8  m-2">
                            <label for="ulicez"><strong>Ulice a č.p.</strong></label>
                            <input class="form-control" type="text" name="ulicez" id="ulicez"
                                   value="<?php echo "$ulicez" ?>"
                                   placeholder="Např.: Revoluční 452"
                                   required>
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-5 col-lg-5  m-2">
                            <label for="obecz"><strong>Obec</strong></label>
                            <input class="form-control" type="text" name="obecz" id="obecz"
                                   value="<?php echo "$obecz" ?>"
                                   placeholder="Např.: Libochovice"
                                   required>
                        </div>
                        <div class="col-md-4 col-lg-3  m-2">

                            <label for="pscz"><strong>PSČ</strong></label>
                            <input class="form-control" type="text" name="pscz" id="pscz" placeholder="Např.: 41117"
                                   value="<?php echo "$pscz" ?>"
                                   required>
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-4 col-lg-5  m-2">
                            <label for="telefon"><strong>Telefon</strong></label>

                            <input class="form-control" type="text" name="telefon" id="telefon"
                                   value="<?php echo "$telefon" ?>"
                                   placeholder="Např.: +420 702 197 480"
                                   required>
                        </div>
                        <div class="col-md-6 col-lg-6 m-2">

                            <label for="email"><strong>Email</strong></label>
                            <input class="form-control" type="email" name="email" id="email" value="<?php echo"$email"?>"
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
                            <input class="form-control" type="text" name="ulicezdor" id="ulicezdor" value="<?php echo"$ulicezdor"?>"
                                   placeholder="Např.: Revoluční 452">
                        </div>
                    </div>
                    <div class="row  offset-lg-1 mb-4">
                        <div class="col-md-5 col-lg-5  m-2">
                            <label for="obeczdor"><strong>Obec</strong></label>
                            <input class="form-control" type="text" name="obeczdor" id="obeczdor" value="<?php echo"$obeczdor"?>"
                                   placeholder="Např.: Libochovice">
                        </div>
                        <div class="col-md-4 col-lg-3  m-2">
                            <label for="psczdor"><strong>PSČ</strong></label>
                            <input class="form-control" type="text" name="psczdor" id="psczdor" value="<?php echo"$psczdor"?>"
                                   placeholder="Např.: 41117">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-8 col-sm-12 col-lg-8  offset-md-2 offset-lg-2"
                     style=" border-bottom: 4px solid #01579B; background-color: #E1F5FE">
                    <div class="row  offset-lg-1">
                        <div class="col-md-12 col-lg-12 col-xl-12 ml-2 mt-2" >
                            <div class="h5"> Druhý zákonný zástupce je:</div>
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-5 col-lg-4  col-xl-4 m-2">
                            <select class="form-control" name="typz2" id="typz2">
                                <option  selected value <?php if ($typz2 == "") {
                                    echo 'selected';
                                } ?>>-- Vyberte --
                                </option>
                                <option value="Matka" <?php if ($typz2 == "Matka") {
                                    echo 'selected';
                                } ?>>Matka
                                </option>
                                <option value="Otec" <?php if ($typz2 == "Otec") {
                                    echo 'selected';
                                } ?>>Otec
                                </option>
                                <option value="Jiný" <?php if ($typz2 == "Jiný") {
                                    echo 'selected';
                                } ?>>Jiný
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-5 col-lg-5  m-2 ">
                            <label for="jmenoz2"><strong>Jméno</strong> </label>
                            <input class="form-control" type="text" name="jmenoz2" id="jmenoz2" value="<?php echo"$jmenoz2"?>"
                                   placeholder="Např.: František">
                        </div>
                        <div class="col-md-5 col-lg-5  m-2 ">

                            <label for="prijmeniz2"><strong>Příjmení</strong> </label>
                            <input class="form-control" type="text" name="prijmeniz2" id="prijmeniz2" value="<?php echo"$prijmeniz2"?>"
                                   placeholder="Např.: Novák">
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-10 col-lg-8  m-2">
                            <label for="ulicez2"><strong>Ulice a č.p.</strong> </label>
                            <input class="form-control" type="text" name="ulicez2" id="ulicez2" value="<?php echo"$ulicez2"?>"
                                   placeholder="Např.: Revoluční 452">
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-5 col-lg-5 m-2">
                            <label for="obecz2"><strong>Obec</strong> </label>
                            <input class="form-control" type="text" name="obecz2" id="obecz2" value="<?php echo"$obecz2"?>"
                                   placeholder="Např.: Libochovice">
                        </div>
                        <div class="col-md-4 col-lg-3  m-2">

                            <label for="pscz2"><strong>PSČ</strong></label>
                            <input class="form-control" type="text" name="pscz2" id="pscz2" value="<?php echo"$pscz2"?>"  placeholder="Např.: 41117">
                        </div>
                    </div>
                    <div class="row  offset-lg-1">
                        <div class="col-md-5 col-lg-5  m-2">
                            <label for="telefonz2"><strong>Telefon</strong> </label>
                            <input class="form-control" type="text" name="telefonz2" id="telefonz2" value="<?php echo"$telefonz2"?>"
                                   placeholder="Např.: +420 702 197 480">
                        </div>
                        <div class="col-md-6 col-lg-6  m-2">

                            <label for="emailz2"><strong>Email</strong></label>
                            <input class="form-control" type="text" name="emailz2" id="emailz2" value="<?php echo"$emailz2"?>"
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
                            <input class="form-control" type="text" name="ulicez2dor" value="<?php echo"$ulicez2dor"?>" id="ulicez2dor"
                                   placeholder="Např.: Revoluční 452">
                        </div>
                    </div>
                    <div class="row  offset-lg-1 mb-4">
                        <div class="col-md-6 col-lg-5 col-lg-3 m-2">
                            <label for="obecz2dor"><strong>Obec</strong> </label>
                            <input class="form-control" type="text" name="obecz2dor" id="obecz2dor" value="<?php echo"$obecz2dor"?>"
                                   placeholder="Např.: Libochovice">
                        </div>
                        <div class="col-md-4 col-lg-3 m-2">

                            <label for="pscz2dor"><strong>PSČ</strong></label>
                            <input class="form-control" type="text" name="pscz2dor" id="pscz2dor" value="<?php echo"$pscz2dor"?>"
                                   placeholder="Např.: 41117">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-8 col-sm-12 col-lg-8  offset-md-2 offset-lg-2"
                     style=" border-bottom: 4px solid #01579B; background-color:  #E1F5FE">
                    <div class="row  offset-lg-1">
                        <div class="col-md-8 col-lg-8 ml-2 col-xl-6 mb-4 mt-4">
                            <h3 class="h3"><strong>Výběr termínu a času</strong></h3>
                            <label for="idCas">Vyberte termín a čas, kdy chcete přijít k zápisu</label>
                            <select id="idCas" name="idCas" required class="form-control">
                                <?php
                                    $casy = $cr->getCasy ();
                                    foreach ($casy as $key => $value) {
                                        $count = $zr->getCountOfZakyByIdCas ($value['Id']);
                                        $volno = (int)$value['Pocet'] - (int)$count['count'];
                                        $datetime = new DateTime($value['Datum']);
                                        if ($volno == 0) {
                                        
                                        } else {
                                             $idval=$value['Id'];
                                            $selected="";
                                            if($idCas==$idval)
                                            {
                                                $selected = "selected";
                                            }
                                            echo "<option  value=\"" . $value['Id'] . "\" $selected >" . $datetime->format ("d.m.Y H:i") . " volných míst: " . $volno . "</option>";
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

                        <div class="col-md-10 col-lg-8 col-xl-6 m-2">
                            <button style="background-color: #0091EAcheckbox.css" onclick="CheckTime();" name="type" id="btn1"
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
            <button onclick="topFunction()" id="myBtn" title="Go to top"><i  style="color: grey" class="fa fa-arrow-up"></i></button>

            <div class="container-fluid">
    <div class="row ">
        <div class="col-sm-12 col-md-12 col-lg-12"
             style="background-color:  #212529">
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

<script src="../js/ValidateEdit.js" type="text/javascript"></script>
            <script>
                // When the user scrolls down 20px from the top of the document, show the button
                window.onscroll = function () {
                    scrollFunction()
                };

                function scrollFunction() {
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        document.getElementById("myBtn").style.display = "block";
                    } else {
                        document.getElementById("myBtn").style.display = "none";
                    }
                }

                // When the user clicks on the button, scroll to the top of the document
                function topFunction() {
                    document.body.scrollTop = 0; // For Safari
                    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
                }
            </script>

</body>
</html>
