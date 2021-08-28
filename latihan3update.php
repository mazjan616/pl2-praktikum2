<?php

include 'connection.php';
$db = new Database();
$con = $db->Connect();

$id = $_GET['id'];
$query = mysqli_query($con,"select * from mahasiswa where id='$id'");
$data = mysqli_fetch_array($query);

if(isset($_POST['update']))
{
    $npm = $_POST['npm'];
    $nama = $_POST['nama_mhs'];
    $prodi = $_POST['prodi'];
	
    $edit = mysqli_query($con,"update mahasiswa set npm='$npm', nama_mhs='$nama', prodi='$prodi' where id='$id'");
	
    if($edit)
    {
        mysqli_close($con);
        header("location:latihan1view.php");
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
        <td>NPM</td>
        <td>Nama</td>
        <td>Prodi</td>
    </tr>
    <tr>
        <form action="" method="POST">
            <td>
                <input type="text" name="npm" value="<?php echo $data['npm'] ?>" placeholder="Enter npm" Required>
            </td>    
            <td>
                <input type="text" name="nama_mhs" value="<?php echo $data['nama_mhs'] ?>" placeholder="Enter Nama Mahasiswa" Required>
            </td>
            <td>
                <input type="text" name="prodi" value="<?php echo $data['prodi'] ?>" placeholder="Enter prodi" Required>
            </td>
            <td>
                <input type="submit" name="update" value="Update">
            </td>
        </form>
    </tr>
</table>