<?php

include 'connection.php';
$db = new Database();
$con = $db->Connect();

$id = $_GET['id'];
$query = mysqli_query($con,"select * from matkul where id='$id'");
$data = mysqli_fetch_array($query);

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $mata_kuliah = $_POST['mata_kuliah'];
    $semester = $_POST['semester'];
	
    $edit = mysqli_query($con,"update matkul set id='$id', mata_kuliah='$mata_kuliah', semester='$semester' where id='$id'");
	
    if($edit)
    {
        mysqli_close($con);
        header("location:latihan9viewmatkul.php");
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<h3>Update Data Mata Kuliah</h3>

<table border="2">
    <tr>
        <td>ID Mata Kuliah</td>
        <td>Nama Mata Kuliah</td>
        <td>Semester</td>
    </tr>
    <tr>
        <form action="" method="POST">
            <td>
                <input type="text" name="id" value="<?php echo $data['id'] ?>" placeholder="Enter ID Mata Kuliah" Required>
            </td>    
            <td>
                <input type="text" name="mata_kuliah" value="<?php echo $data['mata_kuliah'] ?>" placeholder="Enter Nama Mata Kuliah" Required>
            </td>
            <td>
                <input type="text" name="semester" value="<?php echo $data['semester'] ?>" placeholder="Enter Semester" Required>
            </td>
            <td>
                <input type="submit" name="update" value="Update">
            </td>
        </form>
    </tr>
</table>