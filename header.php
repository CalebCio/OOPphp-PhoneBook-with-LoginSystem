<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Book</title>

    <style>
        <?php include "style.css"?>
    </style>
</head>
<body>
    
    <header>
        <nav class="nav-header-main">
            <a class="header-logo" href="#">
                <p>CALEB ILABIJA</p>
            </a>

            <ul>
                

                <?php
                    if(isset($_SESSION["useruid"])) 
                    { 
                ?>
                        <li><a href="content.php">PROJECT</a></li>
                        <?php
                    }
                    else{
                ?>      
                        <li><a href="index.php">HOME</a></li>
                    <?php
                    }
                    ?>

                
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>

            <div class="header-right">
                <?php
                    if(isset($_SESSION["useruid"])) 
                    {
                ?>
                        <a href="#"><?php echo $_SESSION["useruid"]; ?></a>
                        <a href="includes/logout.inc.php">LOGOUT</a>
                        <?php
                    }
                    else{
                ?>      
                        <a href="#">SIGN UP</a>
                        <a href="#" name="logout-submit">LOGIN</a>
                    <?php
                    }
                    ?>
            </div>
        </nav>
    </header>