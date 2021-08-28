<h1>
    Input Data Mahasiswa
</h1>

<?php
    include 'connection.php';
    $db = new Database();
    $con = $db->Connect();

    if(isset($_POST['proses']))
    {
        $query=mysqli_query($con, "insert into mahasiswa value (
        '".$_POST['id']."', 
        '".$_POST['npm']."',
        '".$_POST['nama_mhs']."',
        '".$_POST['prodi']."'
        )");
        header('location:latihan1view.php');
    }
?>

<table border="2">
    <tr>
        <td>ID</td>
        <td>NPM</td>
        <td>Nama</td>
        <td>Prodi</td>
    </tr>
        
    <tr>
        <form action="" method="POST">
            <td><input type="text" name="id"></td>
            <td><input type="text" name="npm"></td>
            <td><input type="text" name="nama_mhs"></td>
            <td><input type="text" name="prodi"></td>
            <td><input type="submit" name="proses" value="Simpan"></td>
        </form>
    </tr>
</table>