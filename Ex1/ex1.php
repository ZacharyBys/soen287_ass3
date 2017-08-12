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
        <?php
        function mostFrequent($array){
            $mostFrequent=null;
            $highestQuantity=0;
            $quantity=0;
            $array = array_map('strtolower', $array);
            
            foreach ($array as $arrayval){
                foreach($array as $arrayval1){
                    if ($arrayval1 == $arrayval){
                        $quantity += 1;
                    }
                }
                if ($highestQuantity<$quantity){
                    $highestQuantity = $quantity;
                    $mostFrequent = $arrayval;
                }
                $quantity=0;
            }
            return $mostFrequent;
        }
        echo mostFrequent(array("hi","hello","h","hello","hi","hi"));
        ?>
        
        
        <h3>uppercaseFirst tested with "hello how are you"</h3>
        <?php
        function uppercaseFirst($array){
            $arr1 = explode(' ', $array);
            $i=0;
            foreach($arr1 as $value){
                $arr1[$i]= ucfirst($value);
                $i++;
            }
            return implode(" ", $arr1); 
        }
        echo uppercaseFirst("hello how are you");
        ?>
        
        <h3>splitSort tested with "let it sort this array"</h3>
        <?php
        function splitSort($array){
            $arr1 = explode(' ', $array);
            sort($arr1);
            return implode(" ", $arr1);
        }
        echo splitSort("let it sort this array");
        ?>
        
        <h3>dayAfterTomorow function</h3>
        <?php
        date_default_timezone_set("America/New_York");
        function dayAfterTomorrow(){
            $date = array(date('d')+2,date('m'),date('Y'));
            return implode("/", $date);
        }
        echo dayAfterTomorrow();
        ?>
        
        <h3>findUnique tested with (1,2,4,5,5,8,1)</h3>
        <?php
        function findUnique($array){
            $arr1 = array();
            $duplicate=false;
            $i = 0;
            foreach($array as $value){
                foreach($arr1 as $val1){
                    if ($value == $val1){
                        $duplicate=true;
                    }
                }
                if(!$duplicate){
                    $arr1[$i] = $value;
                    $i++;
                }
                $duplicate=false;
            }
            return implode(",",$arr1);
        }
        $arr = array(1,2,4,5,5,8,1);
        echo findUnique($arr);
        ?>
        
        <h3>formatHash tables with yearly salary tested with ("Peter Solesbury"=>35000, "Ben Billington"=>750000, "Joe Lukilo"=>72000)</h3>
        <?php
        function formatHash($array){
            asort($array,1);
            foreach($array as $key => $value){
                echo $key; 
                echo " | "; 
                echo $value;
                echo nl2br("\n____________________\n");

            }
        }
        $array1 = array("Peter Solesbury"=>35000, "Ben Billington"=>750000, "Joe Lukilo"=>72000);
        formatHash($array1);
        ?>
    </body>
</html>
        
