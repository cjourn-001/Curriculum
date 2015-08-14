<!--
    Using everything you have learned and some googling

    Randomly pick a number between 1 and 7 and display it.
    Once that number is 7, stop :)

 -->

<!DOCTYPE html>
<html>
  <head></head>
	<body>
        <p>
            <?php

                $n=0;
          	    while($n!==7){
          	      $n=rand(1,7);
          	      echo $n;
          	    }

            ?>
        </p>
	</body>
</html>