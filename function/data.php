<?php

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        
        $array = array("name" => $_POST["forename"],
        "lastname" => $_POST["lastname"],
        "socialnumber" => $_POST["socialnumber"]);
        setcookie("horoskopify", serialize($array), time() + 7 * 24 * 60 * 60);
    }


    $date = substr($_COOKIE["socialnumber"], -4, 4);

    

       
    