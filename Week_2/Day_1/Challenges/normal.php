<!-- 
	Using everything you have learned and some googling 

	without using an array with the month names, find all the months that begin with "J"

	- Display the Month Number, Month Name, and how many characters are in that Month Name

	Results should be:
		1 - January - 7
		6 - June - 4
		7 - July - 4



 -->

<!DOCTYPE html>
<html>
<head></head>
<body>
<p>
	<?php

		$months=range(1,12);
		foreach ($months as $month){
			$name = date ('F', strtotime("2015-$month-01"));
			
		}


	?>
</p>
</body>
</html>