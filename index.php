<!DOCTYPE html>
<html>
<head>
    <title>Pendataan Pinjaman Buku SMKN 10 Medan</title>
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
    <fieldset>
    <header>
        <h1>Pendataan Pelanggaran Sekolah</h1>
        <h3>SMKN Sekian</h3>
    </header>

    <h4>Pilihan Menu</h4>
    <nav>
        <ul>
            <li><a href="FormPendataan.php">Formulir Pendataan Pelanggaran</a></li>
            <li><a href="ListPelanggaran.php">Data Pelanggaran</a></li>
        </ul>

        <?php if(isset($_GET['status'])): ?>
            <p>
                <?php
                    if($_GET['status'] == 'sukses'){
                        echo "Pendataan Pelanggaran Sukses!";
                    } else {
                        echo "Pendataan pelanggaran gagal!";
                    }
                ?>
            </p>
        <?php endif; ?>
    </nav>
    <form action="logout.php" method="POST">
<input type="submit" name="logout"
value="Logout"></form>

    </body>
    </fieldset>
</html>
