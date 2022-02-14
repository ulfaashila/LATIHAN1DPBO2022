<?php

class Mahasiswa{

	private $NIM = 0;
	private $Nama = "";
	private $gender = "";
	private $prodi = "";
	private $semester = 0;

	public function __construct($NIM = 0, $Nama = "", $gender = "", $prodi = "", $semester = 0){
		$this->NIM = $NIM;
		$this->Nama = $Nama;
		$this->gender = $gender;
		$this->prodi = $prodi;
		$this->semester = $semester;
	}

	public function setNim($NIM){
		$this->NIM = $NIM;
	}

	public function getNim(){
		return $this->NIM;
	}

	public function setNama($Nama){
		$this->Nama = $Nama;
	}

	public function getNama(){
		return $this->Nama;
	}

	public function setGender($gender){
		$this->gender = $gender;
	}

	public function getGender(){
		return $this->gender;
	}

	public function setProdi($prodi){
		$this->prodi = $prodi;
	}

	public function getProdi(){
		return $this->prodi;
	}

	public function setSemester($semester){
		$this->semester = $semester;
	}

	public function getSemester(){
		return $this->semester;
	}
}