<?php
require_once './restricted.php';
session_regenerate_id();
require_once '../Database/Database.php';
require_once '../Database/CasyRepository.php';
require_once '../Database/ZakRepository.php';
$db = new Database();
$casyRepository = new CasyRepository($db);
$zakRepository = new ZakRepository($db);

?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
    <title>Rezervace času</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="../css/datetimepicker.css" rel="stylesheet">
    <link href="../css/jquery.datetimepicker.min.css" rel="stylesheet">


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
                    <a style="color: white" class="nav-link" href="view.php">Administrace zápisu<span
                                class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a style="color: wheat" class="nav-link" href="#">Rezervace časů</a>
                </li>
                <li class="nav-item">
                    <a style="color: white" class="nav-link" href="../index.php" target="_blank">Nový zápis <span
                                class="sr-only"></span></a>
                </li>

            </ul>
            <span class="navbar-text">
      <a href="logout.php">Odhlásit se</a>
    </span>
        </div>
    </nav>

    <h2 class="m-4">Administrace - Rezervace časů</h2>
</header>
<main>
    <?php
    $casy = $casyRepository->getCasy();
    ?>
    <div class="row m-2">
        <div class="col-sm-5 col-md-5 col-lg-4 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Přidání nové rezervace</h5>
                    <p class="card-text">Tímto tlačítkem přidáte nový záznam do tabulky.</p>
                    <button style="margin-top: 4px;" class="btn btn-primary" data-toggle="modal"
                            data-target="#myModalNew">Přidat rezervaci
                    </button>
                </div>
            </div>
        </div>
        <div class="col-sm-5 col-md-5 col-lg-4 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Smazání všech rezervací</h5>
                    <p class="card-text">Toto tlačítko smaže veškeré rezervace času, z tabulky.</p>
                    <button style="margin-top: 4px;" class="btn btn-danger" data-toggle="modal"
                            data-target="#myModalDeleteAll">Vymazat rezervace
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-12 col-xl-12 mb-2 mt-4"
         style=" border-bottom: 2px solid grey;">
    </div>
    <h2 class="m-2 ml-4 mt-4">Záznamy rezervací času</h2>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12" style="margin: 0; padding: 0">

                <div style="overflow:hidden;overflow-y: auto; overflow-x:auto; height: 500px; margin-bottom: 10px; text-align: center;">
                    <table class=" table table-light table-striped table-bordered mt-4 table-fixed">

                        <thead class="thead-dark">
                        <th>Datum a Čas</th>
                        <th>Maximální počet žáků</th>
                        <th>Volná místa</th>
                        <th>Upravit rezervaci</th>
                        <th>Smazat rezervaci</th>
                        </thead>
                        <tbody>
                        <?php


                        foreach ($casy as $key => $value) {
                            $zabranamista = count($zakRepository->getZakyByIdCas($value['Id']));
                            $volnamista = -$zabranamista + $value['Pocet'];
                            $datetime = new DateTime($value['Datum']);
                            echo "<tr id='" . htmlspecialchars($value['Id']) . "'><td style='text-align: center; font-weight: bold' >" . $datetime->format('d.m.Y H:i') . "</td>
                                    <td style='text-align: center; font-weight: bold'>" . htmlspecialchars($value['Pocet']) . "</td><td style='text-align: center; font-weight: bold'>" . htmlspecialchars($volnamista) . "</td>
                                    <td style='text-align: center;'><button id='" . htmlspecialchars($value['Id']) . "' onclick='edit(this);' class='btn btn-sm btn-info' data-toggle=\"modal\" data-target=\"#myModalEdit\">Upravit</button></td>
                                    <td style='text-align: center'><button id='" . htmlspecialchars($value['Id']) . "' onclick='smazat(this);' class='btn btn-sm btn-danger' data-toggle=\"modal\" data-target=\"#myModalSmazat\">Smazat</button></td></tr> ";
                        }

                        ?></tbody>
                    </
                </div>

            </div>
            </table>
        </div>
    </div>
    </div>
    <div class="modal fade" id="myModalDeleteAll" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Opravdu chcete smazat všechny záznamy?</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <h5>Tato operace je nevratná!</h5>
                </div>
                <div class="modal-footer">
                    <div class="row float-left">
                        <div class="col-6">
                    <form onsubmit="closesmazatall();" class="form-group" action="deleteallreservations.php"
                          method="post">
                        <input type="hidden" name="delete" value="deleteall">
                        <input type="submit" value="Smazat" class="btn btn-danger float-right">
                    </form>
                        </div>
                    <div class="col-6">
                    <button id="zavritsmazatall" type="button" class="btn btn-default" data-dismiss="modal">
                        Zrušit
                    </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>

    </div>
    <div class="modal fade" id="myModalSmazat" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Opravdu chcete smazat záznam?</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
            <h5>Tato operace je nevratná!</h5>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-6">
                            <form onsubmit="closesmazat();" class="form-group" action="deletereservation.php" method="post">
                                <input type="hidden" id="smazathidden" name="id" value="">
                                <input type="hidden" name="delete" value="deleteone">
                                <input type="submit" value="Smazat" class="btn btn-danger float-right">
                            </form>
                        </div>
                    <div class="col-6">

                        <button id="zavritsmazatall" type="button" class="btn btn-default" data-dismiss="modal">Zrušit
                        </button>
                    </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="modal fade" id="myModalEdit" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Upravte a potvrďte formulář pro úpravu rezervace.</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <form onsubmit="" class="form-group" action="editreservation.php" method="post">
                        <input type="hidden" id="edithidden" name="id" value="">
                        <label class="m-2" for="datetime">Datum a čas</label>
                        <input required type="datetime-local" name="datetime" id="datetime" class="form-control">
                        <label class="m-2 mt-4" for="datetime">Maximální počet žáků</label>
                        <input required min="0" type="number" name="pocet" id="pocet" class="form-control">
                        <input type="submit" value="Uložit" class="mt-4 ml-4 mr-4 btn btn-primary float-right">
                    </form>
                    <button id="zavritsmazatall" type="button" class="btn btn-default mt-2 float-right " data-dismiss="modal">Zrušit
                    </button>
                </div>

            </div>

        </div>
    </div>

    <div class="modal fade" id="myModalNew" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Vyplňte a potvrďte formulář pro založení rezervace.</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <form onsubmit="" class="form-group" action="addreservation.php" method="post">
                        <label for="datetime">Datum a čas</label>
                        <input required type="datetime-local" name="datetime" id="datetime" class="form-control">
                        <label class="mt-2" for="datetime">Maximální počet žáků</label>
                        <input required min="0" type="number" name="pocet" id="pocet" class="form-control">
                        <input type="submit" value="Uložit" class="mt-4 ml-4 mr-4 btn btn-primary float-right">
                    </form>
                    <button id="zavritsmazatall" type="button" class="btn btn-default mt-2 float-right" data-dismiss="modal">Zrušit
                    </button>
                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid">

        <div class="row fixed-bottom">
            <div class="col-sm-10 col-md-12 col-lg-12"
                 style="border-top: 4px solid #212529; border-bottom: 4px solid #212529; background-color:  #212529">
                <div style="color: white; text-align: center">Powered by <a style="color: wheat;"
                                                                            href="https://www.larvasystems.cz/">LarvaSystems</a>
                </div>
                <small style="color:white; text-align: center" class="form-text  mb-2">
                    Všechna práva vyhrazena © 2019
                </small>
            </div>
        </div>
    </div>
</main>
<script src="../js/moment.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../js/bootstrap.js" type="text/javascript"></script>
<script src="../js/materialize.min.js" type="text/javascript"></script>
<script src="../js/view.js" type="text/javascript"></script>
<script src="../js/select.js" type="text/javascript"></script>
<script src="../js/jquery.datetimepicker.full.js.js"></script>


</body>
</html>