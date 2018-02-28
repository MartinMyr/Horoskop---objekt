<?php

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        setcookie("name", $_POST["forename"]);
        setcookie("lastname", $_POST["lastname"]);
        setcookie("socialnumber", $_POST["socialnumber"]);

    }
    

       
    