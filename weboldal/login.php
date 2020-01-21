<?php
    require "../vendor/autoload.php";
    use Kreait\Firebase\Factory;
    try
    {
        $factory = (new Factory) ->withServiceAccount("../serviceaccount.json");
        $login = $factory ->createAuth();
        $logged = $login ->verifyPassword($_GET["email"],$_GET["password"]);
        echo "Sikeres bejelentkezés";
        //header("Location: main.php");
        //window.location.href = "main.php";
        $getid=$logged->uid;
    }
    catch(Exception $e){
        echo $e ->getMessage();
    }
?>