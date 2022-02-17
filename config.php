<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "login_register_git_shop";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connexion échoué')</script>");
}

?>