<?php
    $connection = new mysqli('localhost', 'root','','dbf2Milleza');
   
    if (!$connection){
        die (mysqli_error($mysqli));
    }
       
?>