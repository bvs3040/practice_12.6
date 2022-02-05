<?php
    include 'array.inc.php';
    
    function getFullnameFromParts($arr){
        $partFullname=['name','surname','patronomyc'];
        foreach ($arr as $value ) {
            $fullnameStr=$value ['fullname'];
            $fullnameArray=explode(' ', $fullnameStr);
            $fullnameFromParts=array_combine($partFullname,$fullnameArray);
            print_r($fullnameFromParts);
            echo "<br>";
        }
        unset($value);
    }

    getFullnameFromParts($example_persons_array);





?>        