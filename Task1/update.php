<?php
$id = $_POST['id_data'];
$con = mysqli_connect("localhost", "root", "", "webtech");
$q = "SELECT * FROM test WHERE ID= '$id' ";
$fire = mysqli_query($con, $q);
$data = mysqli_fetch_array($fire);                    
$name = $data['Name'];
$class = $data['Class'];
$roll = $data['Roll'];
echo $name . " " . $class . " " . $roll;
?>