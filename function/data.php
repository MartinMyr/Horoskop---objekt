<?php

    if($_SERVER['REQUEST_METHOD'] == "GET"){
        setcookie("name", $_GET["forename"]);
        setcookie("lastname", $_GET["lastname"]);
        setcookie("personalNr", $_GET["personalNr"]);

    }
    
 
       
    