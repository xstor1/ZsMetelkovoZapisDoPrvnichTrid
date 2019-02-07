<?php
    require_once './restricted.php';
    session_regenerate_id ();
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
    <title>Administrace zápisu</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <style>
        /* The container */
        .container {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 22px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* Hide the browser's default checkbox */
        .container input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        /* Create a custom checkbox */
        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: #eee;
        }

        /* On mouse-over, add a grey background color */
        .container:hover input ~ .checkmark {
            background-color: #ccc;
        }

        /* When the checkbox is checked, add a blue background */
        .container input:checked ~ .checkmark {
            background-color: #2196F3;
        }

        /* Create the checkmark/indicator (hidden when not checked) */
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the checkmark when checked */
        .container input:checked ~ .checkmark:after {
            display: block;
        }

        /* Style the checkmark/indicator */
        .container .checkmark:after {
            left: 9px;
            top: 5px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 3px 3px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }
    </style>


    <link href="../css/datetimepicker.css" rel="stylesheet">
<link href="../css/jquery.datetimepicker.min.css"rel="stylesheet">


    
   
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Zápis do 1. tříd</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="view.php">Administrace zápisu <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Rezervace časů<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.php" target="_blank">Nový zápis <span class="sr-only"></span></a>
                </li>

            </ul>
            <span class="navbar-text">
      <a href="logout.php">Odhlásit se</a>
    </span>
        </div>
    </nav>
</header>
<main>
    <?php
        $casy = $casyRepository->getCasy ();
    ?>
    <div style="overflow:hidden;overflow-y: auto; overflow-x:auto; height: 400px; margin-bottom: 10px;">
        <table class=" table table-light table-striped">

            <thead>
            <th>Datum a čas</th>
            <th>Maximální počet žáků</th>
            <th>Volná místa</th>
            <th>Upravit</th>
            <th>přihláška a žádost o přijetí</th>
            <th>Smazat</th>
            </thead>
            <tbody>
            <?php
                
                
                foreach ($casy as $key => $value) {
                    $zabranamista = count ($zakRepository->getZakyByIdCas ($value['Id']));
                    $volnamista = -$zabranamista + $value['Pocet'];
                    $datetime = new DateTime($value['Datum']);
                    echo "<tr id='".htmlspecialchars ($value['Id'])."'><td>" . $datetime->format ('d.m.Y H:i') . "</td><td>" . htmlspecialchars ($value['Pocet']) . "</td><td>" . htmlspecialchars ($volnamista) . "</td><td><button id='" . htmlspecialchars ($value['Id']) . "' onclick='edit(this);' class='btn btn-sm btn-info' data-toggle=\"modal\" data-target=\"#myModalEdit\">Upravit</button></td><td><button id='" . htmlspecialchars ($value['Id']) . "' onclick='neprijat(this);' class='btn btn-sm btn-info' data-toggle=\"modal\" data-target=\"#myModalNeprijat\">přihláška a žádost o přijetí</button></td><td><button id='" . htmlspecialchars ($value['Id']) . "' onclick='smazat(this);' class='btn btn-sm btn-info' data-toggle=\"modal\" data-target=\"#myModalSmazat\">smazat</button></td></tr> ";
                }
            
            ?></tbody>
        </table>
        <button style="margin-top: 4px;" class="btn btn-primary" data-toggle="modal" data-target="#myModalNew">Přidat novou rezervaci</button>
        <button style="margin-top: 4px;" class="btn btn-danger" data-toggle="modal" data-target="#myModalDeleteAll">Smazat celou databázi</button>

        <div class="modal fade" id="myModalDeleteAll" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Opravdu chcete smazat všechny záznamy?</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body">
                        <form onsubmit="closesmazatall();" class="form-group" action="deleteallreservations.php" method="post">
                            <input type="hidden" name="delete" value="deleteall">
                            <input  type="submit" value="Smazat" class="btn btn-primary float-right">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button id="zavritsmazatall" type="button" class="btn btn-default" data-dismiss="modal">Zavřít</button>
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
                    <form onsubmit="closesmazat();" class="form-group" action="deletereservation.php" method="post">
                        <input type="hidden" id="smazathidden" name="id" value="">
                        <input type="hidden" name="delete" value="deleteone">
                        <input type="submit" value="Smazat" class="btn btn-primary float-right">
                    </form>
                </div>
                <div class="modal-footer">
                    <button id="zavritsmazatall" type="button" class="btn btn-default" data-dismiss="modal">Zavřít
                    </button>
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
                        <label for="datetime">Datum a čas</label>
                        <input required type="datetime-local" name="datetime" id="datetime" class="form-control">
                       <label for="datetime">Maximální počet žáků</label>
                       <input required min="0" type="number" name="pocet" id="pocet" class="form-control">
                       <input type="submit" value="Uložit" class="mt-1 btn btn-primary float-right">
                   </form>
               </div>
               <div class="modal-footer">
                   <button id="zavritsmazatall" type="button" class="btn btn-default" data-dismiss="modal">Zavřít
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
                        <label for="datetime">Maximální počet žáků</label>
                        <input required min="0" type="number" name="pocet" id="pocet" class="form-control">
                        <input type="submit" value="Uložit" class="mt-1 btn btn-primary float-right">
                    </form>
                </div>
                <div class="modal-footer">
                    <button id="zavritsmazatall" type="button" class="btn btn-default" data-dismiss="modal">Zavřít
                    </button>
                </div>
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