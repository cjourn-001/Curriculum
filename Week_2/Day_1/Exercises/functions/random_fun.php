<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php

            /*
             * Take the following sentence and "encrypt" it.
             * The "algorithm" is the following:
             *
             *
             */
            // Create an array with 100 random letters
            //
            //
            $alphabet="abcdefghijklmnopqrstuvwxyz";
            $finalarray=array();
            for ($i=1; $$i<=100; $i++){
                $rand=rand(0,25); //random nubmer
                array_push($finalarray, $alphabet[$rand]);//turn number into character
                                             //add to array
            }
            var_dump($finalarray);


        ?>

    </p>

    </body>
</html>