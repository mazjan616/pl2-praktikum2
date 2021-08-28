<?php

include 'connection.php';
$db = new Database();
$con = $db->Connect();

$id = $_GET['id'];
$delete = mysqli_query($con,"delete from nilai where id  = '$id'");

if($delete)
{
    mysqli_close($con);
    header("location:latihan13viewnilai.php");
    exit;	
}
else
{
    echo "Error deleting record";
}
?>