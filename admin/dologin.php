<?php
?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
if (!isset($_POST['username'], $_POST['password'])) {
    header('Location: login.php');
    die();
}
else
{

$username = $_POST['username'];
$password = $_POST['password'];
 require_once '../Database/Database.php';
 require_once '../Database/UserRepository.php';
    $db = new Database();
    $ur = new UserRepository($db);
    $student =$ur->getUser($username);    
if($username==$student['username'] && $password==$student['password'])
{
 unset($student['password']);
$_SESSION['user'] = $student;
}else
{ 
    header('Location: login.php?reason=bad_credentials');
    die();
}
header('Location: view.php');
die();
}?>
