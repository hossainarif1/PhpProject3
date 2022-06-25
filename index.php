<?php


$connection = mysqli_connect("localhost", "root", "","formInformation");
$query = mysqli_query($connection, "insert into form_data (name,pwd) values('hosain','xsadf')") or die("Error " . mysqli_error($connection));

