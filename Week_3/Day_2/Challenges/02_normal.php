<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php
            /*
             * Write a PHP script to calculate and display average temperature, 
             five lowest and highest temperatures.
            
            Expected Output :
            Average Temperature is : 70.6 
            List of five lowest temperatures : 60, 62, 63, 63, 64, 
            List of five highest temperatures : 76, 78, 79, 81, 85,
            */

            $temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
            
            sort($temperatures);
            
            $sum;
            $length = count($temperatures);
            foreach($temperatures as $temp){
                $sum += $temp;
            }
            echo "Average Temp: " . $sum/$length;
            echo "<br />";
            sort($temperatures);
            
            echo "Lowest Temps:";
            echo "<br />";
            for ($i=0; $i<=4; $i++){
                echo $temperatures[$i];
                echo "<br />";
            }
            echo "<br />";
            
            rsort($temperatures);
            
            echo "Highest Temps:";
            echo "<br />";
            for ($i=0; $i<=4; $i++){
                echo $temperatures[$i];
                echo "<br />";
            }
            
        
        ?>

    </p>

    </body>
</html>