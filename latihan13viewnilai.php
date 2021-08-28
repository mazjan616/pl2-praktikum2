<center>
<title>Universitas Binaniaga Indonesia</title>
<h1><font size = "10" > Universitas Binaniaga Indonesia</font></h1>
    <div>
    <font size="4"><a href="latihan1view.php" class="btn btn-success pull-right">Daftar Mahasiswa</a> |
    <font size="4"><a href="latihan5viewdosen.php" class="btn btn-success pull-right">Daftar Dosen</a> |
    <font size="4"><a href="latihan9viewmatkul.php" class="btn btn-success pull-right">Daftar Mata Kuliah</a> |
    <font size="4"><a href="latihan13viewnilai.php" class="btn btn-success pull-right">Nilai</a>
    </div>

<h2>Daftar Nilai Mahasiswa</h2>
<table border="2">
<tr>
<th> No </th>
<th> NPM </th>
<th> Nama Mahasiswa </th>
<th> Kode Matkul </th>
<th> Nama Mata Kuliah </th>
<th> UTS </th>
<th> UAS </th>
<th> Quiz  </th>
<th> Tugas </th>
<th> Absensi </th>
<th> Nilai </th>
<th> Grade </th>
<th> Edit Data </th>
<th> Delete Data </th>
</tr>

<?php

// Koneksi ke Database
include 'connection.php';
$db = new Database();
$con=$db->Connect();


// Menentukan Grade berdasarkan Nilai Akhir
function grades($nilai)

{
 if($nilai <= 100 ) { $grade = "A"; }
 if($nilai <  80 )  { $grade = "B"; }
 if($nilai <  70 )  { $grade = "C"; }
 if($nilai <  60 )  { $grade = "D"; }
 if($nilai <  50 )  { $grade = "E"; }

 return $grade;
}

// Mengambil data dari Database
$query=mysqli_query($con,"select * from nilai");
while($data=mysqli_fetch_array($query)){

// Menampilkan data dari Database	

$kehadiran = $data['kehadiran'];
$pertemuan = $data['pertemuan'];


// Menghitung Nilai Absensi
$absensi= ($kehadiran/$pertemuan)*100;

// Menghitung Nilai Akhir
$nilai  = ($data['uts']*0.3)+ ($data['uas']*0.4)+ ($data['quiz']*0.1)+ ($data['tugas']*0.1)+ ($absensi*0.1);

// Menentukan Grade dari Nilai
$grade  = grades($nilai);
$npm = $data['npm'];
$id_matkul = $data['id_matkul'];

?>
<tr>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['npm']; ?></td>
        <td><?php echo $data['nama_mhs']; ?></td>
        <td><?php echo $data['id_matkul']; ?></td>
        <td><?php echo $data['mata_kuliah']; ?></td>
        <td><?php echo $data['uts']; ?></td>
        <td><?php echo $data['uas']; ?></td>
        <td><?php echo $data['quiz']; ?></td>
        <td><?php echo $data['tugas']; ?></td>
        <td><?php echo $absensi; ?></td>
        <td><?php echo $nilai; ?></td>
        <td><?php echo $grade; ?></td>
        <td><a href="latihan15updatenilai.php?id=<?php echo $data['id']; ?>">Edit</a></td>
        <td><a href="latihan16deletenilai.php?id=<?php echo $data['id']; ?>">Delete</a></td>
</tr>
    <?php
        }
    ?>

</table>
<br>
<h3>
    Insert Data Nilai
</h3>

<a href="latihan14insertnilai.php?id=<?php echo $data['id']; ?>">Insert Data Nilai</a>
</center>