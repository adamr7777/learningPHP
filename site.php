<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Learning PHP</title>
        <link rel='stylesheet' href='styles.css'/>
    </head>
    <body>
       <form action='site.php' method='get'>
            number 1: <input type='number' name='number1'/>
            number 2: <input type='number' name='number2'/>
            <button type='submit'>Add</button>
       </form>
       <br/>

       Result:
       <?php 
            $number1 = $_GET["number1"];
            $number2 = $_GET["number2"];

            echo $number1 + $number2;
       ?>
    </body>
</html>
