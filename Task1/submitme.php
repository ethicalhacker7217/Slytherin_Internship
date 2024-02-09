<?php 
$name=$_POST['name_data'];
$class=$_POST['class_data'];
$roll=$_POST['roll_data'];

$con=mysqli_connect("localhost","root","","webtech");
$q="INSERT INTO test (Name, Class, Roll) VALUES ('$name','$class','$roll')";
$fire = mysqli_query($con,$q);
if($fire){

    echo"Success";
}
else{
    echo"Failed";
}

?>