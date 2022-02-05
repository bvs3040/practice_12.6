<?php
    function getPartsFromFullname($str){
        $partFullname=['surname','name','patronomyc'];
        $fullnameArray=explode(' ', $str);
        $partsFromFullname=array_combine($partFullname,$fullnameArray);
        return $partsFromFullname;
    }
           
    function getFullnameFromParts($surname, $name, $patronomyc){
        $fullnameFromParts="$surname" . ' ' . "$name" . ' ' . "$patronomyc";
        return $fullnameFromParts;
    }
?>        