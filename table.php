<?php

require "header.php";
include "./classes/dbhphone.classes.php";
include "./classes/content.classes.php";

$class = new Content();
$table=$class->getTable();


if (isset($_POST['deleteUser'])) {
    $idUser=$_POST['idUser'];
    
    $results = $class->deleteSingle($idUser);

    if($results) {
        echo '
        <script>
        alert("Delete Successful");
        window.location.href="./table.php";
        </script>';
    } else {
        echo '<script>alert("An error occured")</scritp>';
    }

}

?>

<section>
    <div class="table">
        <div class="table-heads">
            <h2>Phone Book</h2>
            <a href="content.php"> Add New </a>
        </div>

        <div class="table-content">
            <table>
                <tr>
                    <th>Id</th>
                    <th>Full Name</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>

                <?php
                if (!empty($table)) {
                    $counter=1;
                    foreach($table as $list) {
                        ?>
                        <tr>
                            <td><?php echo $counter++; ?> </td>
                            <td><?php echo $list['fullname']; ?> </td>
                            <td><?php echo $list['userPhone']; ?> </td>
                            <td><?php echo $list['userAddress']; ?> </td>
                            <td>
                                <a href="edit.php?idUsers=<?php echo $list['idUsers'];?>">
                                    <button>Edit</button>
                                </a> 
                                <form action="" method="post">
                                    <input type="hidden" name="idUser" value=<?php echo $list['idUsers']?>>
                                    <input type="submit" name="deleteUser" onclick="confirm('Are you sure you want to delete user 
                                    <?php echo $list['fullname']?>')" value='Delete'>
                                </form> 
                            </td>

                            <tr>
                                <?php
                            }
                        } 
                        else { 
                            ?>
                            <tr>
                                <td colspan="8">No data found</td>
                            </tr>

                        <?php } ?>
                    </table>
                </div>

            </div>
        </section>