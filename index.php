<?php
 
    if (isset($_COOKIE["horoskopify"]) == true){
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
    <input name = "socialnumber" type = "number" placeholder = "YYYYMMDD"/></br></br>
    <button type = "submit">Skicka</button>

</form>


<?php
    


?>


<?php
    include 'include/footer.php';
?>