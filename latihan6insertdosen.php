<h1>
    Input Data Mahasiswa
</h1>

<?php
    include 'connection.php';
    $db = new Database();
    $con = $db->Connect();

    if(isset($_POST['proses']))
    {
        $query=mysqli_query($con, "insert into dosen value (
        '".$_POST['id']."', 
        '".$_POST['nik_dosen']."',
        '".$_POST['nama_dosen']."'
        )");
        header('location:latihan5viewdosen.php');
    }
?>

<table border="2">
    <tr>
        <td>ID</td>
        <td>NIK Dosen</td>
        <td>Nama Dosen</td>
    </tr>
        
    <tr>
        <form action="" method="POST">
            <td><input type="text" name="id"></td>
            <td><input type="text" name="nik_dosen"></td>
            <td><input type="text" name="nama_dosen"></td>
            <td><input type="submit" name="proses" value="Simpan"></td>
        </form>
    </tr>
</table>