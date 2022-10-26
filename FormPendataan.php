<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pendataan Pelanggaran</title>
	<style>
		fieldset{
			width: 250px; 
			border-color: blueviolet; 
			box-shadow: 2px 2px 4px #333; 
		}
	</style>
    <link rel="stylesheet" href="style.css" />
</head>

<body>  
    
    <header>
        <h2>Formulir Pendataan Pelanggaran</h2>
    </header>

    <nav>
        <li><a href="index.php">Dashboard</a></li>
        <br>
    </nav>

    <form action="simpan.php" method="POST" onSubmit="cekDate()">

        <fieldset>
        <h3>Silahkan isi formulir berikut</h3>
        <p>
            <label for="Nama">Nama Pelanggar: </label><br>
            <input type="text" name="Nama" required/>
        </p>
        <p>
            <label for="NIS">Nomor Induk Siswa: </label><br>
            <input type="text" name="NIS" required/>
        </p>
        <p>
            <label for="Jurusan">Jurusan: </label><br>
            <select name="Jurusan">
                <option>Multimedia</option>
                <option>Rekayasa Perangkat Lunak</option>
                <option>Perfilman</option>
                <option>Manajamen Data</option>
                <option>Animasi</option>
            </select>
        </p>
        <p>
            <label for="Kelas">Kelas: </label><br>
            <input type="text" name="Kelas" required/>
        </p>
        <p>
            <label for="Kategori">Kategori Pelanggaran: </label><br>
            <select name="Kategori">
                <option>Berkelahi</option>
                <option>Tawuran</option>
                <option>Terlambat masuk</option>
                <option>Seragam Tidak Sesuai</option>
                <option>Cabut</option>
                <option>Membuat Kegaduhan</option>
            </select>
        </p>
        <p>
            <label for="Deskripsi">Deskripsi Pelanggaran: </label><br>
            <textarea name="Deskripsi" required></textarea>
        </p>
        <p>
            <label for="TanggalPelanggaran">Tanggal Pelanggaran: </label><br>
            <input type="date" name="TanggalPelanggaran" id="TanggalPelanggaran">
        </p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>

    </form>
    </body>
    <script type="text/javascript">
	function cekDate() {
		var tglpinjam = document.getElementById("TanggalPelanggaran").value;
		if (tglpinjam != "") {
			return true;
		}else{
			alert('Mohon masukan data anda dengan lengkap !');
		}
	}
</script>
</html>
