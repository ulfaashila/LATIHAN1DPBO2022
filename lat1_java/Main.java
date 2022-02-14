import java.util.*;

public class Main{
	public static void main(String[] args){
		int n = 0;
		
		System.out.print("Masukan Data :");
		
		Scanner sc = new Scanner(System.in);
		try{
			n = sc.nextInt();
		}catch(Exception e){}

		Soccer[] arr = new Soccer[n];

		int i = 0;

		String club = null, country = null, year = null, player = null, stadium = null;
		for(i=0; i<n; i++){
			System.out.print("Data club :");
			try{
				club = sc.next();
			}catch(Exception e){}
			System.out.print("Data country :");
			try{
				country = sc.next();
			}catch(Exception e){}
			System.out.print("Data year :");
			try{
				year = sc.next();
			}catch(Exception e){}
			System.out.print("Data player :");
			try{
				player = sc.next();
			}catch(Exception e){}
			System.out.print("Data stadium :");
			try{
				stadium = sc.next();
			}catch(Exception e){}
			System.out.println(" ");
			arr[i] = new Soccer(club,country,year,player,stadium);
		}
		
		for(i=0; i<n; i++){
			System.out.println("Club : " + arr[i].getClub());
			System.out.println("Country : " + arr[i].getCountry());
			System.out.println("Year : " + arr[i].getYear());
			System.out.println("Player : " + arr[i].getPlayer());
			System.out.println("stadium : " + arr[i].getStadium());
		}
	}
}
