<!DOCTYPE html>
<html>
    <head>
	</head>
	<body>
        <p>
            <?php

                $intArray = array(0, 1, 5, M_E, -3, 2, -2, -10, 5, 4, M_PI);

                // display all numbers that are less zero
                foreach ($intArray as $Numbers) {
                    
                    if ($Numbers <0){
                        echo $Numbers;
                        echo "<br />";
                    
                }
            }
                // code goes here ...
            ?>
        </p>
	</body>
</html>