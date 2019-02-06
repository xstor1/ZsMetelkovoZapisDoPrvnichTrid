<?php
require_once './restricted.php';
session_regenerate_id();
require_once '../Database/Database.php';
require_once '../Database/ZakRepository.php';
$db = new Database();
$zr = new ZakRepository($db);
if (isset($_GET['rodne'])) {

    $selected = true;
    $zaci = $zr->getZakbyRodne($_GET['rodne']);
    if (!empty($zaci)) {
        
    } else {
        $selected = false;
        $zaci = $zr->getZaky();
    }
} else {
    $selected = false;
    $zaci = $zr->getZaky();
}
?>

<!DOCTYPE html>
<html>
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


    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Zápis do 1. tříd</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Administrace zápisu <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reservation.php">Rezervace časů<span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" target="_blank" href="../index.php">Nový zápis <span class="sr-only"></span></a>
                </li>

            </ul>
            <span class="navbar-text">
      <a href="logout.php">Odhlásit se</a>
    </span>
        </div>
    </nav>
        <form style="margin-top:10px; margin-bottom: 10px;" class="form-group"><input class="form-control" type="text" name="rodne"placeholder="Zadejte přijmení které chcete vyhledat..." ><input class="form-control btn btn-primary" type="submit" value="Vyhledat"></form>
        <?php
        if ($selected == TRUE) {
            echo" <form class='form-group'><button onclick='redirect()' class='btn btn-primary form-control'>Zobrazit vše</button></form>";
        }
        ?>
    <div style="overflow:hidden;overflow-y: auto; overflow-x:auto; height: 400px; margin-bottom: 10px;">
        <table class=" table table-light table-striped">

            <thead><th>Pořadí</th><th>Jméno</th><th>Příjmení</th><th>Upravit</th><th>Žádost o přijetí</th><th>Přihláška</th><th>Smazat</th></thead>
        <tbody>
            <?php
$i=count($zaci)+1;
$count=$i-1;
               
                foreach ($zaci as $key => $value) {
                    $i--;
                    if($value["completed"]==0) {
                        echo "<tr ondblclick=\"setGreen(this);\" id='".htmlspecialchars($value['id'])."'  ><td>$i</td><td>" . htmlspecialchars($value['jmeno']) . "</td><td>" . htmlspecialchars($value['prijmeni']) . "</td><td><a href='edit.php?id=" . htmlspecialchars($value['id']) . "'>Upravit</a></td><td><button onclick=\"location.href = 'request.php?id=".htmlspecialchars($value['id'])."';\" class='btn btn-sm btn-info' id='" . htmlspecialchars($value['id']) . "' >Žádost o přijetí</button></td><td><button id='" . htmlspecialchars($value['id']) . "'onclick=\"location.href = 'application.php?id=".htmlspecialchars($value['id'])."';\" class='btn btn-sm btn-info' >Příhláška</button></td><td><button id='" . htmlspecialchars($value['id']) . "' onclick='smazat(this);' class='btn btn-sm btn-info' data-toggle=\"modal\" data-target=\"#myModalSmazat\">Smazat</button></td></tr> ";
                    }
                    else
                    {
                        echo "<tr ondblclick=\"unsetGreen(this);\" id='".htmlspecialchars($value['id'])."' style='background-color: lightgreen;'  ><td>$i</td><td>" . htmlspecialchars($value['jmeno']) . "</td><td>" . htmlspecialchars($value['prijmeni']) . "</td><td><a href='edit.php?id=" . htmlspecialchars($value['id']) . "'>Upravit</a></td><td><button onclick=\"location.href = 'request.php?id=".htmlspecialchars($value['id'])."';\" class='btn btn-sm btn-info' id='" . htmlspecialchars($value['id']) . "' >Žádost o přijetí</button></td><td><button id='" . htmlspecialchars($value['id']) . "'onclick=\"location.href = 'application.php?id=".htmlspecialchars($value['id'])."';\" class='btn btn-sm btn-info' >Příhláška</button></td><td><button id='" . htmlspecialchars($value['id']) . "' onclick='smazat(this);' class='btn btn-sm btn-info' data-toggle=\"modal\" data-target=\"#myModalSmazat\">Smazat</button></td></tr> ";
                    }
                }

            ?></tbody>
    </table>
    
    </div>
    <p>Počet: <?php echo  $count; ?></p>
    
    <button style="margin-top: 4px;" class="btn btn-danger" data-toggle="modal" data-target="#myModalDeleteAll">Smazat celou databázi</button>
    <button style="margin-top: 4px;" onclick="location.href='export.php'" class="btn btn-primary float-right" ">Exportovat do csv</button>
    <div class="modal fade" id="myModalDeleteAll" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Opravdu chcete smazat všechny záznamy?</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <form onsubmit="closesmazatall();" class="form-group" action="deleteall.php" method="post">
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
    <div class="modal fade" id="myModalSmazat" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Opravdu chcete smazat záznam?</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <form onsubmit="closesmazat();" class="form-group" action="delete.php" method="post">
                        <input type="hidden" id="smazathidden" name="id" value="">
                        <input type="hidden" name="delete" value="deleteone">
                        <input  type="submit" value="Smazat" class="btn btn-primary float-right">
                    </form>
                </div>
                <div class="modal-footer">
                    <button id="zavritsmazatall" type="button" class="btn btn-default" data-dismiss="modal">Zavřít</button>
                </div>
            </div>

        </div>
    </div>

   
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        function setGreen(e) {
            $.get("complete.php", { id:e.id});
            console.log("1");
e.style.backgroundColor ="lightgreen";
            e.setAttribute("ondblclick","unsetGreen(this);")
        }
        function unsetGreen(e) {
            $.get("uncomplete.php", { id:e.id});
            console.log("2");
            e.removeAttribute("style");
            e.setAttribute("ondblclick","setGreen(this);")

        }

    </script>

    <script src="../js/bootstrap.js" type="text/javascript"></script>
    <script src="../js/materialize.min.js" type="text/javascript"></script>
    <script src="../js/view.js" type="text/javascript"></script>
    <script src="../js/select.js" type="text/javascript"></script>


</body>
</html>
