<?php
if(isset ($_POST['username']) && isset
($_POST['password'])) {
session_start();
$_SESSION['username']=$_POST['username'];
$_SESSION['password']=$_POST['password'];
if($_SESSION['username']=='christian'&&$_SESSION['password'
]=='siwabessy'){
header("Location: index2.php");
}
else{
echo "Username atau Password Salah, Silahkan <a href= index.php>Login</a> Kembali Dengan Username dan Password Yang Benar.";
}
}
?>
