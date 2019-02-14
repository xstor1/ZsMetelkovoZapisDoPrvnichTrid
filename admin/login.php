<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
        <title>Administrace</title>
        <link href="../css/login.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="wrapper">
    <form class="form-signin" method="post" action="dologin.php">       
      <h2 class="form-signin-heading" style="text-align: center">Administrace</h2>
        <h4 class="form-signin-heading" style="text-align: center">Zápis do prvních tříd</h4>
      <input type="text" class="form-control" name="username" placeholder="Přihlašovací jméno" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Heslo" required=""/>      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Přihlásit se</button>   
    </form>
  </div>
    </body>
</html>
