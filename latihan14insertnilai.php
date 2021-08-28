<h1>
    Input Data Mata Kuliah
</h1>

<?php
    include 'connection.php';
    $db = new Database();
    $con = $db->Connect();

    if(isset($_POST['proses']))
    {
        $query=mysqli_query($con, "insert into nilai value (
        '".$_POST['id']."', 
        '".$_POST['npm']."', 
        '".$_POST['nama_mhs']."', 
        '".$_POST['id_matkul']."', 
        '".$_POST['mata_kuliah']."',
        '".$_POST['uts']."', 
        '".$_POST['uas']."',
        '".$_POST['quiz']."', 
        '".$_POST['tugas']."', 
        '".$_POST['kehadiran']."', 
        '".$_POST['pertemuan']."' 
        )");
        header('location:latihan13viewnilai.php');
    }
?>

<table border="2">
    <tr>
        <td>ID</td>
        <td>NPM</td>
        <td>Nama Mahasiswa</td>
        <td>Kode Matkul</td>
        <td>Nama Mata Kuliah</td>
        <td>UTS</td>
        <td>UAS</td>
        <td>Quiz</td>
        <td>Tugas</td>
        <td>Kehadiran</td>
        <td>Pertemuan</td>
    </tr>
        
    <tr>
        <form action="" method="POST">
            <td><input type="text" name="id"></td>
            <td><input type="text" name="npm"></td>
            <td><input type="text" name="nama_mhs"></td>
            <td><input type="text" name="id_matkul"></td>
            <td><input type="text" name="mata_kuliah"></td>
            <td><input type="text" name="uts"></td>
            <td><input type="text" name="uas"></td>
            <td><input type="text" name="quiz"></td>
            <td><input type="text" name="tugas"></td>
            <td><input type="text" name="kehadiran"></td>
            <td><input type="text" name="pertemuan"></td>
            <td><input type="submit" name="proses" value="Simpan"></td>
        </form>
    </tr>
</table>