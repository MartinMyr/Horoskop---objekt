<?php
    include 'include/header.php';
    include 'function/class.php';
    include 'function/data.php';
?>




<?php
   // print_r(substr($_COOKIE["socialnumber"], -4, 4));
    $person = new Person($_COOKIE["name"], $_COOKIE["lastname"], substr($_COOKIE["socialnumber"], -4, 4));
    
    $person-> printSign();
   var_dump($date);
?>










<?php
    include 'include/footer.php';
?>