<?php
    if (isset($_COOKIE["socialnumber"]) == 0){
        header("location: index.php ");
    }


    include 'include/header.php';
    include 'function/class.php';
    include 'function/data.php';
?>


<div id = "container">
    <div class = "horoscope">

<?php
  
    $person = new Person($_COOKIE["name"], $_COOKIE["lastname"], substr($_COOKIE["socialnumber"], -4, 4));

    

    
    
?>

    <table>
        <tr>
            <th>Namn:</th>
            <th>Efternamn:</th>
            <th>Horoskop:</th>
        </tr>
        <tr>
            <td><?php echo $person->printName();?></td>
            <td><?php echo $person->printLastname();?></td>
            <td><?php echo $person->printSign();?></td>
        </tr>


    </table>

    </div>





</div>

<?php
    include 'include/footer.php';
?>