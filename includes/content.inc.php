<?php

if(isset($_POST['submit'])) {


    //Grabbing the data
    $uid = $_POST['uid'];
    $number = $_POST['number'];
    $address = $_POST['address'];

    //Instantiate Content Class
    include "../classes/dbhphone.classes.php";
    include "../classes/content.classes.php";
    include "../classes/content-contr.classes.php";

    $content = new ContentContr($uid, $number, $address);

    //Running error handlers 
    $content->contentUser();

    //Going to next page
    header("location: ../table.php?error=none");

}