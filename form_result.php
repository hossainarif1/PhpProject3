<?php

$a= $_POST['txt1'];
$b= $_POST['txt2'];
echo "Name is $a <br/>Password is $b";
$connection = mysqli_connect("localhost", "root", "","formInformation");
$query = mysqli_query($connection, "insert into form_data (name,pwd) values('$a','$b')") or die("Error" .mysqli_error($connection));

if($query){
    echo "<script>alert('Reconrd Inserted');</script>";
}
?>