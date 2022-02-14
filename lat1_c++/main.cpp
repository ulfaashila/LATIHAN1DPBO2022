#include<iostream>
#include<string>
#include "soccer.cpp"

using namespace std;

int main(){
	int n=0;
	cout << "Masukan Data : ";
	cin >> n;

	soccer arr[n];
	int i=0;
	string club,country,year,player,stadium;
	for(i=0; i<n; i++){
		cout << "Data club :";
		cin >> club;
		cout << "Data country :";
		cin >> country;
		cout << "Data year :";
		cin >> year;
		cout << "Data player :";
		cin >> player;
		cout << "Data stadium :";
		cin >> stadium;

		arr[i].setClub(club);
		arr[i].setCountry(country);
		arr[i].setYear(year);
		arr[i].setPlayer(player);
		arr[i].setStadium(stadium);
	}

	for(i=0; i<n; i++){
		cout << endl;
		cout << "club :";
		cout << arr[i].getClub() << endl;
		cout << "country :";
		cout << arr[i].getCountry() << endl;
		cout << "year :";
		cout << arr[i].getYear() << endl;
		cout << "player :";
		cout << arr[i].getPlayer() << endl;
		cout << "stadium :";
		cout << arr[i].getStadium() << endl;
	}
}
