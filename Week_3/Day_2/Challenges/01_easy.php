<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php
            /*
             * Write a program that loops through numbers array and outputs
             * each number.
             *
             * But for multiples of three print “Fizz” instead of the number
             * and for the multiples of five print “Buzz”. For numbers which
             * are multiples of both three and five print “FizzBuzz”
             *
             */

             $inputs = array( array('numbers' => range(0, 100))
             );
             
             //loop through all values to 100
             foreach ($inputs as $ArrayNum){
                 
                 foreach ($ArrayNum as $NumbersArray){
                     
                     foreach ($NumbersArray as $num) {
                         
                         
                        if($num%3 == 0 && $num%5 == 0){
                        
                             echo "$num = FizzBuzz!";
                             echo "<br />";
                        }
                         elseif($num%3 == 0){
                             echo "$num = Fizz!";
                             echo "<br />";
                         }
                         elseif($num%5 == 0){
                             echo "$num = Buzz!";
                             echo "<br />";
                         }
                         
                     }
                     
                }
                
            }
             //if statement sorting if % by 3
             
             //condition for also sorting if % by 5
             
             // condition for sorting if %by BOTH 3,5

        ?>

    </p>

    </body>
</html>
