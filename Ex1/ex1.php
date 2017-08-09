<!DOCTYPE html>
<html>
    <head>
        <title>Exercise 1</title>
        
    </head>
    <body>
        
        <h3>factorial function tested with 5</h3>
        <?php 
        $sum=1;
        function factorial($num){
            if ($num == 1){
                return 1;
            } else {
                return ($num * factorial($num-1));
            }
        }
        echo factorial(5);
        ?>
        <h3>mostFrequent function testing with ("hi","hello","h","hello","hi","hi")</h3>
        
        <h3>uppercaseFirst tested with "hello how are you"</h3>
        
        <h3>splitSort tested with "Let it sort this array"</h3>
        
        <h3>dayAfterTomorow function</h3>
        
        <h3>findUnique tested with (1,2,4,5,5,8,1)</h3>
        
        <h3>formatHash tables with yearly salaray</h3>
        
    </body>
</html>
        
