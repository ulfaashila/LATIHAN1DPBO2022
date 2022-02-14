#include <iostream>
#include <string>

using namespace std;

class soccer{
private:
	string club;
	string country;
	string year;
	string player;
	string stadium;

public:
	soccer(){
		this->club = "";
		this->country = "";
		this->year = "";
		this->player = "";
		this->stadium = "";
	}

	soccer(string club, string country, string year, string player, string stadium){
		this->club = club;
		this->country = country;
		this->year = year;
		this->player = player;
		this->stadium = stadium;
	}

	void setClub(string club){
		this->club = club;
	}

	void setCountry(string country){
		this->country = country;
	}

	void setYear(string year){
		this->year = year;
	}

	void setPlayer(string player){
		this->player = player;
	}

	void setStadium(string stadium){
		this->stadium = stadium;
	}

	string getClub(){
		return club;
	}

	string getCountry(){
		return country;
	}

	string getYear(){
		return year;
	}

	string getPlayer(){
		return player;
	}

	string getStadium(){
		return stadium;
	}

	~soccer(){}
};
