<?php
    $conn = mysqli_connect("localhost", "root", "", "shoutbox");
    if($conn){
        echo "" . mysqli_connect_error();
    }
?>