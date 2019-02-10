<?php
require_once './restricted.php';
session_regenerate_id();
require_once '../Database/Database.php';
require_once '../Database/ZakRepository.php';
$db = new Database();
$zr = new ZakRepository($db);
if (isset($_GET['rodne'])) {

    $selected= "";
    $zaci = $zr->getZakbyRodne($_GET['rodne']);
    if (!empty($zaci)) {
        $selected = true;
    } else {
        $selected = false;
        $zaci = $zr->getZaky();
    }
} else {

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
                    <a style="color: wheat" class="nav-link" href="view.php">Administrace zápisu <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
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

    <h2 class="m-4">Administrace - Zápisů</h2>
</header>
<div class="row m-2">
    <div class="col-sm-5 col-md-5 col-lg-4 col-xl-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Export zápisů</h5>
                <p class="card-text">Toto tlačítko vyexportujete všechny záznamy z tabulky.</p>
                <button style="margin-top: 4px;" onclick="location.href='export.php'" class="btn btn-primary"
                ">Exportovat záznamy</button>
            </div>
        </div>
    </div>
    <div class="col-sm-5 col-md-5 col-lg-4 col-xl-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Smazání všech záznamů</h5>
                <p class="card-text">Toto tlačítko smaže veškeré záznamy z tabulky.</p>
                <button style="margin-top: 4px;" class="btn btn-danger" data-toggle="modal"
                        data-target="#myModalDeleteAll">Vymazat záznamy
                </button>
            </div>
        </div>
    </div>
</div>




<div class="col-md-12 col-lg-12 col-xl-12 mb-2 mt-4"
     style=" border-bottom: 2px solid grey;">
</div>

<div class="container-fluid">
    <form class="form-group "   method="get">
    <div class="row">
    <h2 class="m-2 ml-4 mr-4 mt-4">Záznamy rezervací času</h2>

    <div class="col-xl-3 col-sm-12 col-md-6 col-lg-4 mb-2 mt-4">
       <input class="form-control" type="text" name="rodne" placeholder="Zadejte přijmení které chcete vyhledat...">
    </div>
    <div class="col-xl-2 col-sm-12 col-md-6  col-lg-3 mb-2 mt-4">
        <input  class="form-control btn btn-primary" type="submit" value="Vyhledat">
    </div>

</div>
    </form>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <?php
            $i = count($zaci) + 1;
            $count = $i - 1;?>

            <div class="col-7 float-right "><strong>Počet záznamů: <?php echo $count; ?></strong></div>

            <div class="col-2 float-right">
                <?php
                if(isset($selected))
                {
                if ($selected == TRUE) {
                    echo " <form class='form-group'><button onclick='redirect()' class='btn btn-primary form-control'>Zobrazit vše</button></form>";
                }
                else if ($selected == FALSE){
                    echo "<div style='color: red' >Zadaná hodnota není příjmení</div>";
                }
                }
                ?>
            </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12" style="margin: 0; padding: 0">
<div style="overflow:hidden;overflow-y: auto; overflow-x:auto; height: 400px; margin-bottom: 10px;">
    <table class="table table-light table-striped table-bordered mt-4 table-fixed" style="text-align: center">

        <thead class="thead-dark">
        <th>Pořadí</th>
        <th>Jméno</th>
        <th>Příjmení</th>
        <th>Upravit</th>
        <th>Žádost o přijetí</th>
        <th>Přihláška</th>
        <th>Smazat</th>
        </thead>
        <tbody>
        <?php
        $i = count($zaci) + 1;
        $count = $i - 1;

        foreach ($zaci as $key => $value) {
            $i--;
            if ($value["completed"] == 0) {
                echo "<tr  ondblclick=\"setGreen(this);\" id='" . htmlspecialchars($value['id']) . "'  ><td style='font-weight: bold'  >$i</td>
                        <td style='font-weight: bold'>" . htmlspecialchars($value['jmeno']) . "</td>
                        <td style='font-weight: bold'>" . htmlspecialchars($value['prijmeni']) . "</td>
                        <td style='font-weight: bold'><button class='btn btn-sm btn-info' onclick=\"location.href = 'edit.php?id=" . htmlspecialchars($value['id']) . "';\"'>Upravit</button></td>
                        <td style='font-weight: bold'><button onclick=\"location.href = 'request.php?id=" . htmlspecialchars($value['id']) . "';\" class='btn btn-sm btn-success' id='" . htmlspecialchars($value['id']) . "' >Žádost o přijetí</button></td>
                        <td><button id='" . htmlspecialchars($value['id']) . "'onclick=\"location.href = 'application.php?id=" . htmlspecialchars($value['id']) . "';\" class='btn btn-sm btn-success' >Příhláška</button></td>
                        <td><button id='" . htmlspecialchars($value['id']) . "' onclick='smazat(this);' class='btn btn-sm btn-danger' data-toggle=\"modal\" data-target=\"#myModalSmazat\">Smazat</button></td>
                        </tr> ";
            } else {
                  echo "<tr ondblclick=\"unsetGreen(this);\" id='" . htmlspecialchars($value['id']) . "' style='background-color: lightgreen;'  ><td style='font-weight: bold'  >$i</td>
                        <td style='font-weight: bold'>" . htmlspecialchars($value['jmeno']) . "</td>
                        <td style='font-weight: bold'>" . htmlspecialchars($value['prijmeni']) . "</td>
                        <td style='font-weight: bold'><button class='btn btn-sm btn-info' onclick=\"location.href = 'edit.php?id=" . htmlspecialchars($value['id']) . "';\"'>Upravit</button></td>
                        <td style='font-weight: bold'><button onclick=\"location.href = 'request.php?id=" . htmlspecialchars($value['id']) . "';\" class='btn btn-sm btn-success' id='" . htmlspecialchars($value['id']) . "' >Žádost o přijetí</button></td>
                        <td><button id='" . htmlspecialchars($value['id']) . "'onclick=\"location.href = 'application.php?id=" . htmlspecialchars($value['id']) . "';\" class='btn btn-sm btn-success' >Příhláška</button></td>
                        <td><button id='" . htmlspecialchars($value['id']) . "' onclick='smazat(this);' class='btn btn-sm btn-danger' data-toggle=\"modal\" data-target=\"#myModalSmazat\">Smazat</button></td>
                        </tr> ";
            }
        }

        ?></tbody>
    </table>
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
                <h5 class="modal-title">Tato operace je nevratná!</h5>
            </div>

            <div class="modal-footer">
                <div class="row">
                <div class="col-6">
                    <form onsubmit="closesmazatall();" class="form-group" action="deleteall.php" method="post">
                        <input type="hidden" name="delete" value="deleteall">
                        <input type="submit" value="Smazat" class="btn btn-danger">
                    </form>
                </div>
                <div class="col-6">
                    <button id="zavritsmazatall" type="button" class="btn btn-default" data-dismiss="modal">Zrušit</button>
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
                <h5 class="modal-title">Tato operace je nevratná!</h5>

            </div>
            <div class="modal-footer">
                <div class="row float-left">
                    <div class="col-6">
                        <form onsubmit="closesmazat();" class="form-group" action="delete.php" method="post">
                            <input type="hidden" id="smazathidden" name="id" value="">
                            <input type="hidden" name="delete" value="deleteone">
                            <input type="submit" value="Smazat" class="btn btn-danger">
                        </form>
                    </div>
                    <div class="col-6">
                        <button id="zavritsmazatall" type="button" class="btn btn-default" data-dismiss="modal">Zrušit</button>
                    </div>
                    </div>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    function setGreen(e) {
        $.get("complete.php", {id: e.id});
        console.log("1");
        e.style.backgroundColor = "lightgreen";
        e.setAttribute("ondblclick", "unsetGreen(this);")
    }

    function unsetGreen(e) {
        $.get("uncomplete.php", {id: e.id});
        console.log("2");
        e.removeAttribute("style");
        e.setAttribute("ondblclick", "setGreen(this);")

    }

</script>

<script src="../js/bootstrap.js" type="text/javascript"></script>
<script src="../js/materialize.min.js" type="text/javascript"></script>
<script src="../js/view.js" type="text/javascript"></script>
<script src="../js/select.js" type="text/javascript"></script>


</body>
</html>
