<?php
    if (isset($_COOKIE["socialnumber"]) == 1){
        header("location: myhoroscope.php ");
    }

    include 'function/data.php';
    include 'include/header.php';
    
?>

<form  method ="post">
    <h3>Förnamn</h3>
    <input name = "forename" type = "text"/>
    <h3>Efternamn</h3>
    <input name = "lastname" type = "text"/>
    <h3>Person Nr</h3>
    <input name = "socialnumber" type = "number" placeholder = "19XX-XX-XX"/></br></br>
    <button type = "submit">Skicka</button>

</form>


<?php
    print_r($_COOKIE);


?>


<?php
    include 'include/footer.php';
?>