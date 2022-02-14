public class Soccer {
	private String club;
	private String country;
	private String year;
	private String player;
	private String stadium;

	public Soccer(String club, String country, String year, String player, String stadium){
		this.club = club;
		this.country = country;
		this.year = year;
		this.player = player;
		this.stadium = stadium;
	}

	//setter
	public void setClub(String club){
		this.club = club;
	}

	public void setCountry(String country){
		this.country = country;
	}

	public void setYear(String year){
		this.year = year; 
	}

	public void setPlayer(String player){
		this.player = player;
	}

	public void setStadium(String stadium){
		this.stadium = stadium;
	}

	//getter
	public String getClub(){
		return club;
	}

	public String getCountry(){
		return country;
	}

	public String getYear(){
		return year;
	}

	public String getPlayer(){
		return player;
	}

	public String getStadium(){
		return stadium;
	}	

}