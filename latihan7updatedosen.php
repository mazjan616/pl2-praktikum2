<?php

include 'connection.php';
$db = new Database();
$con = $db->Connect();

$id = $_GET['id'];
$query = mysqli_query($con,"select * from dosen where id='$id'");
$data = mysqli_fetch_array($query);

if(isset($_POST['update']))
{
    $nik_dosen = $_POST['nik_dosen'];
    $nama_dosen = $_POST['nama_dosen'];
	
    $edit = mysqli_query($con,"update dosen set nik_dosen='$nik_dosen', nama_dosen='$nama_dosen' where id='$id'");
	
    if($edit)
    {
        mysqli_close($con);
        header("location:latihan5viewdosen.php");
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<h3>Update Data Mahasiswa</h3>

<table border="2">
    <tr>
        <td>NIK Dosen</td>
        <td>Nama Dosen</td>
    </tr>
    <tr>
        <form action="" method="POST">
            <td>
                <input type="text" name="nik_dosen" value="<?php echo $data['nik_dosen'] ?>" placeholder="Enter NIK" Required>
            </td>    
            <td>
                <input type="text" name="nama_dosen" value="<?php echo $data['nama_dosen'] ?>" placeholder="Enter Nama Dosen" Required>
            </td>
            <td>
                <input type="submit" name="update" value="Update">
            </td>
        </form>
    </tr>
</table>