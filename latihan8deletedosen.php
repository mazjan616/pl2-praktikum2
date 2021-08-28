<?php

include 'connection.php';
$db = new Database();
$con = $db->Connect();

$id = $_GET['id'];
$delete = mysqli_query($con,"delete from dosen where id  = '$id'");

if($delete)
{
    mysqli_close($con);
    header("location:latihan5viewdosen.php");
    exit;	
}
else
{
    echo "Error deleting record";
}
?>