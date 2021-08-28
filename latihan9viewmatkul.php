<center>
<title>Universitas Binaniaga Indonesia</title>
<h1><font size = "10" > Universitas Binaniaga Indonesia</font></h1>
    <div>
    <font size="4"><a href="latihan1view.php" class="btn btn-success pull-right">Daftar Mahasiswa</a> |
    <font size="4"><a href="latihan5viewdosen.php" class="btn btn-success pull-right">Daftar Dosen</a> |
    <font size="4"><a href="latihan9viewmatkul.php" class="btn btn-success pull-right">Daftar Mata Kuliah</a> |
    <font size="4"><a href="latihan13viewnilai.php" class="btn btn-success pull-right">Nilai</a>
    </div>

<h2>
    Daftar Mata Kuliah
</h2>

<table border="2">
    <tr>
        <td>Kode Mata Kuliah</td>
        <td>Nama Mata Kuliah</td>
        <td>Semester</td>
        <td>Edit Data</td>
        <td>Delete Data</td>
    </tr>
        <?php
            include 'connection.php';
            $db = new Database();
            $con = $db->Connect();

            $query=mysqli_query($con,"select * from matkul");
            while($data=mysqli_fetch_array($query))
            {
        ?>
    <tr>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['mata_kuliah']; ?></td>
        <td><?php echo $data['semester']; ?></td>
        <td><a href="latihan11updatematkul.php?id=<?php echo $data['id']; ?>">Edit</a></td>
        <td><a href="latihan12deletematkul.php?id=<?php echo $data['id']; ?>">Delete</a></td>
    </tr>
        <?php
            }
        ?>
</table>

<h3>
    Insert Data Mata Kuliah
</h3>

<a href="latihan10insertmatkul.php?id=<?php echo $data['id']; ?>">Insert Data Mata Kuliah</a>
</center>