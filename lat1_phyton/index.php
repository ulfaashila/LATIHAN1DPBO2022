<?php
include "mahasiswa.php"

$data = new Mahasiswa();
$data->setNim(2007571);
$data->setNama("Ulfa Ashila");
$data->setGender("perempuan");
$data->setProdi("Ilmu Komputer");
$data->setSemester(4);

echo "Data mahasiswa"."<br>";
echo "NIM 		: ". $data->getNim() ."<br>";
echo "Nama 		: ". $data->getNama() ."<br>";
echo "Gender 	: ". $data->getGender() ."<br>";
echo "Prodi 	: ". $data->getProdi() ."<br>";
echo "Semester 	: ". $data->getSemester() ."<br>";

?>