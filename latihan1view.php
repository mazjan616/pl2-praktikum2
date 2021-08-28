

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
    Daftar Mahasiswa
</h2>

<table border="2">
    <tr>
        <td>ID</td>
        <td>NPM</td>
        <td>Nama</td>
        <td>Prodi</td>
        <td>Edit Data</td>
        <td>Delete Data</td>
    </tr>
        <?php
            include 'connection.php';
            $db = new Database();
            $con = $db->Connect();

            $query=mysqli_query($con,"select * from mahasiswa");
            while($data=mysqli_fetch_array($query))
            {
        ?>
    <tr>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['npm']; ?></td>
        <td><?php echo $data['nama_mhs']; ?></td>
        <td><?php echo $data['prodi']; ?></td>
        <td><a href="latihan3update.php?id=<?php echo $data['id']; ?>">Edit</a></td>
        <td><a href="latihan4delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
    </tr>
        <?php
            }
        ?>
</table>

<h3>
    Insert Data Mahasiswa
</h3>

<a href="latihan2insert.php?id=<?php echo $data['id']; ?>">Insert Data Mahasiswa</a>
</center>