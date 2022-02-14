from soccer import soccer

print("Masukan Data : ",end='')

n = int(input())

arrSoccer = [soccer() for i in range(n)]
i = 0

for i in range(n):

	print("Data club : ",end='')
	club = str(input())


	print("Data country : ",end='')
	country = str(input())

	print("Data year : ",end='')
	year = str(input())

	print("Data player : ",end='')
	player  = str(input())

	print("Data stadium : ",end='')
	stadium = str(input())

	arrSoccer[i].setClub(club)
	arrSoccer[i].setCountry(country)
	arrSoccer[i].setYear(year)
	arrSoccer[i].setPlayer(player)
	arrSoccer[i].setStadium(stadium)

i = 0
for i in range(n):
	print()
	print("club : ", str(arrSoccer[i].getClub()))
	print("country : ", str(arrSoccer[i].getCountry()))
	print("year : ", str(arrSoccer[i].getYear()))
	print("player : ", str(arrSoccer[i].getPlayer()))
	print("str : ", str(arrSoccer[i].getStadium()))
	


