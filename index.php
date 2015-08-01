<?php
    $brain = "EXPLODE";
    $year_present = 2015;
    $year_born = 1967;
    $age = $year_present - $year_born;
    $weight = true;
    $soda = array('Pip Extra', 'Dr Pepper', 'Barqs Root Beer', 'Cream Soda', 'Sierra Mist')
?>
<!DOCTYPE html>
<html>
    <head>
        <title>My first PHP page</title>
    </head>    
    <body>
        <h1>Hello Everyone!</h1>
        <p>My brain feels like it is going to <?php echo $brain ?> this quarter.</p> 
        
        <p>I will be <?php echo $age ?> this year.</p>
        
        <?php if($weight) { ?>
        <p>I have lost close to 30 pounds since starting school.</p>
        <?php } ?>
        
        <p>My favorite sodas are: <br />
        <?php 
            forEach($soda as $drink => $pop){
                echo "<p>" . $pop . "</p> \n";
            }
        ?>
        </p>
    </body>
</html>