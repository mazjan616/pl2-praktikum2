<h1>
    Input Data Mata Kuliah
</h1>

<?php
    include 'connection.php';
    $db = new Database();
    $con = $db->Connect();

    if(isset($_POST['proses']))
    {
        $query=mysqli_query($con, "insert into matkul value (
        '".$_POST['id']."', 
        '".$_POST['mata_kuliah']."',
        '".$_POST['semester']."'
        )");
        header('location:latihan9viewmatkul.php');
    }
?>

<table border="2">
    <tr>
        <td>ID Mata Kuliah</td>
        <td>Nama Mata Kuliah</td>
        <td>Semeter</td>
    </tr>
        
    <tr>
        <form action="" method="POST">
            <td><input type="text" name="id"></td>
            <td><input type="text" name="mata_kuliah"></td>
            <td><input type="text" name="semester"></td>
            <td><input type="submit" name="proses" value="Simpan"></td>
        </form>
    </tr>
</table>