<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendataan Pelanggaran</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <header>
        <h2>Data Pelanggaran Siswa</h2>
    </header>

    <nav>
        <li><a href="index.php">Dashboard</a></li>
        <li><a href="FormPendataan.php">Tambah Pelanggaran</a></li>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pelanggar</th>
            <th>Nomor Induk Siswa</th>
            <th>Jurusan</th>
            <th>Kelas</th>
            <th>Kategori Pelanggaran</th>
            <th>Deskripsi Pelanggaran</th>
            <th>Tanggal Pelanggaran</th>
            <th>Edit</th>
            <th>Hapus</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM data_pelanggaran";
        $query = mysqli_query($db, $sql);

        while($pendataan = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$pendataan['ID']."</td>";
            echo "<td>".$pendataan['Nama']."</td>";
            echo "<td>".$pendataan['NIS']."</td>";
            echo "<td>".$pendataan['Jurusan']."</td>";
            echo "<td>".$pendataan['Kelas']."</td>";
            echo "<td>".$pendataan['Kategori']."</td>";
            echo "<td>".$pendataan['Deskripsi']."</td>";
            echo "<td>".$pendataan['TanggalPelanggaran']."</td>";

            echo "<td>";
            echo "<a href='FormEdit.php?id=".$pendataan['ID']."'>Edit</a>";
            echo "</td>";
            echo "<td>";
            echo "<a href='hapus.php?id=".$pendataan['ID']."'>Hapus</a>";
            echo "</td>";
            
            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total Pelanggar : <?php echo mysqli_num_rows($query) ?></p>

    </body>

</html>
