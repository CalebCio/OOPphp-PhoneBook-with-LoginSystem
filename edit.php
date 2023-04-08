<?php

if(!isset($_GET['idUsers'])) {
    header("location: ./table.php");
}
//include our db class
include "./classes/dbhphone.classes.php";
include "./classes/content.classes.php";

$class = new Content();

$idUser = intval($_GET['idUsers']);

$user=$class->getSingle($idUser);

//var_dump($user);
if (empty($user)) {
    header("location: ./table.php");
}


if (isset($_POST['editUser'])) {
    $fullname=$_POST['uid'];
    $userPhone=$_POST['number'];
    $userAddress=$_POST['address'];


    $results = $class->updateSingle($idUser,$fullname,$userPhone,$userAddress);

    if($results) {
        echo '
        <script>
        alert("Update Successful");
        window.location.href="./table.php";
        </script>';
    } else {
        echo '<script>alert("An error occured")</scritp>';
    }

}
require "header.php";

?>

<section>

    <div class="Phone">
        <div class="phonebook-content">
            <h2>Phone Book</h2>

            <div class="phonebook-panel">
                <a href="#"> Edit </a>
                <a href="table.php"> View All </a>
            </div>

            <div class="phonebook-form">
                <div class="form-header">
                    <h3>
                        Edit User <?php echo $user['fullname']?>
                    </h3>
                </div>

                <form action="" method="post">
                    <h4>Full Name: <input type="text" name="uid" value="<?php echo $user['fullname']?>" placeholder="First Name and Surname"> </h4>
                    <h4>Phone Num: <input type="number" name="number" value="<?php echo $user['userPhone']?>" placeholder="e.g, +(234) 00 000 000 00"></h4>
                    <h4>Address : <input type="text" name="address" value="<?php echo $user['userAddress']?>" placeholder="City"></h4>
                    <br>
                    <button type="submit" name="editUser">Save</button>
                </form>
            </div>
        </div>
    </div>

</section>