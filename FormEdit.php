<?php

include("config.php");

if( !isset($_GET['id']) ){
    header('Location: Listpinjaman.php');
}

//ambil id dari query string
$id = $_GET['id'];

$sql = "SELECT * FROM data_pelanggaran WHERE id=$id";
$query = mysqli_query($db, $sql);
$pinjam = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("Maaf, data tidak ditemukan!");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Data Pelanggaran</title>
	<style>
		fieldset{
			width: 250px; 
			border-color: blueviolet; 
			box-shadow: 2px 2px 4px #333; 
		}
	</style>
</head>

<body>
    <header>
        <h2>Formulir Pendataan Pelanggaran</h2>
    </header>

    <form action="edit.php" method="POST">

        <fieldset>
        <h3>Silahkan update formulir berikut</h3>
        <input type="hidden" name="id" value="<?php echo $pinjam['ID'] ?>" />
        <p>
            <label for="Nama">Nama Pelanggar: </label><br>
            <input type="text" name="Nama" value="<?php echo $pinjam['Nama'] ?>" required />
        </p>
        <p>
            <label for="NIS">Nomor Induk Siswa: </label><br>
            <input type="text" name="NIS" value="<?php echo $pinjam['NIS'] ?>" required />
        </p>
        <p>
            <label for="Jurusan">Jurusan: </label><br>
            <?php $jurusan = $pinjam['Jurusan']; ?>
            <select name="Jurusan">
                <option <?php echo ($jurusan == 'Multimedia') ? "selected": "" ?>>Multimedia</option>
                <option <?php echo ($jurusan == 'Rekayasa Perangkat Lunak') ? "selected": "" ?>>Rekayasa Perangkat Lunak</option>
                <option <?php echo ($jurusan == 'Perfilman') ? "selected": "" ?>>Perfilman</option>
                <option <?php echo ($jurusan == 'Manajamen Data') ? "selected": "" ?>>Manajamen Data</option>
                <option <?php echo ($jurusan == 'Animasi') ? "selected": "" ?>>Animasi</option>
            </select>
        </p>
        <p>
            <label for="Kelas">Kelas: </label><br>
            <textarea name="Kelas" required><?php echo $pinjam['Kelas'] ?></textarea>
        </p>
        <p>
            <label for="Kategori">Kategori: </label><br>
            <?php $kategori = $pinjam['Kategori']; ?>
            <select name="Kategori">
                <option <?php echo ($kategori == 'Berkelahi') ? "selected": "" ?>>Berkelahi</option>
                <option <?php echo ($kategori == 'Tawuran') ? "selected": "" ?>>Tawuran</option>
                <option <?php echo ($kategori == 'Perkembangan Teknologi') ? "selected": "" ?>>Terlambat masuk</option>
                <option <?php echo ($kategori == 'Seragam Tidak Sesuai') ? "selected": "" ?>>Seragam Tidak Sesuai</option>
                <option <?php echo ($kategori == 'Cabut') ? "selected": "" ?>>Cabut</option>
                <option <?php echo ($kategori == 'Membuat Kegaduhan') ? "selected": "" ?>>Membuat Kegaduhan</option>
            </select>
        </p>
        <p>
            <label for="Deskripsi">Deskripsi Pelanggaran: </label><br>
            <textarea name="Deskripsi" required><?php echo $pinjam['Deskripsi'] ?></textarea>
        </p>
        <p>
            <label for="TanggalPelanggaran">Tanggal Pelanggaran: </label><br>
            <input type="date" name="TanggalPelanggaran" value="<?php echo $pinjam['TanggalPelanggaran'] ?>">
        </p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>

    </form>

    </body>
</html>
