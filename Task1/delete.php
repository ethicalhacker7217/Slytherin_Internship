<?php
if (isset($_GET['ID'])) {
    $id = $_GET['ID'];
    echo $id;
    $con = mysqli_connect("localhost", "root", "", "webtech");
    $q = "DELETE FROM test WHERE ID= '$id' ";
    $fire = mysqli_query($con, $q);
    if ($fire) {
        header('Location: data.html');
    }
} else {
    echo "No";
}


?>