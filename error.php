<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
    <title>Administrace zápisu</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <style>
        body{
            background-color: #E65100;
        }
    </style>
</head>
<body>
<div class="p-5">
<div class="card" >
    <div class="card-body offset-xl-4 offset-lg-3 offset-md-1" style="text-align: center;" >
        <div class="row">
            <div class="col-xl-6 col-md-10 col-lg-8 col-sm-6">
                <h2 class="mb-4">Přihláška k zápisu do první třídy<br></h2>
                    <p class="mb-4">
                        Datum a čas, který jste si vybrali už bohužel není dostupný. Vraťte se prosím zpět na formulář a upravte datum a čas.
                    </p>
            </div>
        </div>
        <div class="row offset-xl-1" >
        <div  class="col-xl-4 col-md-10 col-lg-8 col-sm-6 ml-2">
                <button class=" mb-4 btn btn-primary form-control" style="background-color: #FF6D00" onclick="goBack()">Zpět na formulář</button>
            </div>
    </div>
    </div>
</div>
</div>
<script>
    function goBack() {
        window.history.back();
    }
</script>
</body>
</html>