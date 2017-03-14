<?php
$json_data=file_get_contents("mahasiswa.json");
$obj = json_decode($json_data);
echo "NAMA : "; echo $obj->nama;
echo "<br>";
echo "Nim : "; echo $obj->nim;
echo "<br>";
echo "Alamat : "; echo $obj->alamat;
echo "<br>";
echo "No. Hp : "; echo $obj->no_hp;
echo "<br>";
echo "Mata Kuliah Hari Senin : ";echo $obj->mata_kuliah[0];
echo "<br>";
echo "Mata Kuliah Hari Selasa : ";echo $obj->mata_kuliah[1];
echo "<br>";
echo "Mata Kuliah Hari Rabu : ";echo $obj->mata_kuliah[2];
echo "<br>";
echo "Mata Kuliah Hari Kamis : ";echo $obj->mata_kuliah[3];
echo "<br>";
echo "Mata Kuliah Hari Jumat : ";echo $obj->mata_kuliah[4];
echo "<br>";
?>