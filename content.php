<?php

require "header.php";

?>

<section>

    <div class="Phone">
        <div class="phonebook-content">
            <h2>Phone Book</h2>

            <div class="phonebook-panel">
                <a href="#"> Add New </a>
                <a href="table.php"> View All </a>
            </div>

            <div class="phonebook-form">
                <div class="form-header">
                    <h3>
                        Add User
                    </h3>
                </div>

                <form action="includes/content.inc.php" method="post">
                    <h4>Full Name: <input type="text" name="uid" placeholder="First Name and Surname"> </h4>
                    <h4>Phone Num: <input type="number" name="number" placeholder="e.g, +(234) 00 000 000 00"></h4>
                    <h4>Address : <input type="text" name="address" placeholder="City"></h4>
                    <br>
                    <button type="submit" name="submit">ADD</button>
                </form>
            </div>
        </div>
    </div>

</section>