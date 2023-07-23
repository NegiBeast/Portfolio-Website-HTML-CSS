<?php

$con=mysqli_connect('localhost', 'id21058491_contact_info', 'Aashishnegi@24', 'id21058491_contactinginfo');

$Email=$_POST['txtEmail'];
$Message=$_POST['txtMessage'];

$sql="INSERT INTO `Portfolio-Contact-Credentials`(`fldEmail`, `fldMessage`) VALUES('$Email', '$Message')";

$rs=mysqli_query($con,$sql);

if($rs){
    echo "Information Recorded Successfully";
}

mysqli_close($con);

?>