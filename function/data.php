<?php

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        setcookie("name", $_POST["forename"], time()+ 60 * 60 * 24 * 7 );
        setcookie("lastname", $_POST["lastname"], time()+ 60 * 60 * 24 * 7);
        setcookie("socialnumber", $_POST["socialnumber"],  time()+ 60 * 60 * 24 * 7);
    }



    $date = substr($_COOKIE["socialnumber"], -4, 4);

    

       
    