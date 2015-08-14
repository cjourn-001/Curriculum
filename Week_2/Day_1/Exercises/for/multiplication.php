<!DOCTYPE html>
<html>
    <head>
	</head>
	<body>
        <p>

            <?php

                // Create the multiplication table for integers 1 thru 12
                for($i=1; $i<13; $i++){
                    for($k=1; $k<13; $k++){
                    
                
                echo "$i" . "x" . "$k" . "=" . $i*$k . "<br/>";
                    }
                }
        
            ?>

        </p>
	</body>
</html>