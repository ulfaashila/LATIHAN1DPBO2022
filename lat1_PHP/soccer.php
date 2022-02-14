<?php

class Soccer{

	private $club = "";
	private $country = "";
	private $year = "";
	private $player = "";
	private $stadium = "";

	public function __construct($club = "", $country = "", $year = "", $player = "", $stadium = ""){
		$this->club = $club;
		$this->country = $country;
		$this->year = $year;
		$this->player = $player;
		$this->stadium = $stadium;
	}

	public function setClub($club){
		$this->club = $club;
	}

	public function getClub(){
		return $this->club;
	}

	public function setCountry($country){
		$this->country = $country;
	}

	public function getCountry(){
		return $this->country;
	}

	public function setYear($year){
		$this->year = $year;
	}

	public function getYear(){
		return $this->year;
	}

	public function setPlayer($player){
		$this->player = $player;
	}

	public function getPlayer(){
		return $this->player;
	}

	public function setStadium($stadium){
		$this->stadium = $stadium;
	}

	public function getStadium(){
		return $this->stadium;
	}
}