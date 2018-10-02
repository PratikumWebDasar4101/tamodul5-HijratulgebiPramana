<?php

$nim = $_POST["nim"];
$nama = $_POST["nama"];
$email = $_POST["email"];
$loginlagi = "<br><a href='masuk.php'>login lagi</a>";
$br = "<br>";

if (strlen($nama) > 25) {
	echo "inpuan nama tidak boleh lebih dari 25 charakter";
	echo $loginlagi;
	echo $br;
}

if (!is_numeric($nim) || strlen((string)$nim) > 10) {
	echo "Nim harus berbentuk angka dan kurang dari 10 karakter";
	echo $loginlagi;
	echo $br;
}

if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $email)) {
echo "format email kamu salah";
echo $loginlagi;
echo $br;
}else{
	header("location: komentar.php");
}

?>