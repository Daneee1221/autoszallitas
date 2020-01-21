<?php
    require "../vendor/autoload.php";
    require "saveuser.php";
    use Kreait\Firebase\Factory;
    try
    {
        $factory = (new Factory) ->withServiceAccount("../serviceaccount.json");
        $register = $factory ->createAuth();
        $newuser = $register ->createUserWithEmailAndPassword($_GET["email"],$_GET["password"]);
        newuser($newuser->uid,$_GET["nev"]);
        echo "Sikeres regisztráció"; 
    }
    catch(Exception $e){
        echo $e ->getMessage();
    }

?>