<?php

include 'connection.php';
$db = new Database();
$con = $db->Connect();

$id = $_GET['id'];
$query = mysqli_query($con,"select * from nilai where id='$id'");
$data = mysqli_fetch_array($query);

if(isset($_POST['update']))
{
    $uts= $_POST['uts'];
    $uas= $_POST['uas'];
    $quis= $_POST['quis'];
    $tugas= $_POST['tugas'];
    $kehadiran= $_POST['kehadiran'];
    $pertemuan= $_POST['pertemuan'];
	
    $edit = mysqli_query($con,"update nilai set uts='$uts', uas='$uas', quis='$quis', tugas='$tugas', kehadiran='$kehadiran', pertemuan='$pertemuan' where id='$id'");
	
    if($edit)
    {
        mysqli_close($con);
        header("location:latihan13viewnilai.php");
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<h3>Update Data Nilai</h3>

        <form action="" method="POST">
                <p> ID </p>
                <input type="text" name="id" value="<?php echo $data['id'] ?>" disabled>
                <p> NPM </p>
                <input type="text" name="npm" value="<?php echo $data['npm'] ?>" disabled>
                <p> Nama Mahasiswa </p>
                <input type="text" name="nama_mhs" value="<?php echo $data['nama_mhs'] ?>" disabled>
                <p> Kode Mata Kuliah </p>
                <input type="text" name="id_matkul" value="<?php echo $data['id_matkul'] ?>" disabled>
                <p> Nama Mata Kuliah </p>
                <input type="text" name="mata_kuliah" value="<?php echo $data['mata_kuliah'] ?>" disabled>
                <p> UTS </p>
                <input type="text" name="uts" value="<?php echo $data['uts'] ?>">
                <p> UAS </p>
                <input type="text" name="uas" value="<?php echo $data['uas'] ?>">
                <p> QUIZ </p>
                <input type="text" name="quiz" value="<?php echo $data['quiz'] ?>">
                <p> Tugas </p>
                <input type="text" name="tugas" value="<?php echo $data['tugas'] ?>">
                <p> Kehadiran </p>
                <input type="text" name="kehadiran" value="<?php echo $data['kehadiran'] ?>">
                <p> Pertemuan </p>
                <input type="pertemuan" name="uts" value="<?php echo $data['pertemuan'] ?>">
                <input type="submit" name="update" value="Update">
                <input type='button' onclick=location.href='latihan13viewnilai.php' value='Batal'>
        </form>
