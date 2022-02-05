<?php

// функиция разделения ФИО

    function getPartsFromFullname($fullname){
        $partFullname=['surname','name','patronomyc'];
        $fullnameArray=explode(' ', $fullname);
        $partsFromFullname=array_combine($partFullname,$fullnameArray);
        return $partsFromFullname;
    }

// функция склеивания ФИО
           
    function getFullnameFromParts($surname, $name, $patronomyc){
        $fullnameFromParts="$surname" . ' ' . "$name" . ' ' . "$patronomyc";
        return $fullnameFromParts;
    }

// функция Сокращение ФИО

    function getShortName($fullname){
        $arr=getPartsFromFullname($fullname);
        $name = $arr['name'];
        $surname= $arr['surname'];
        $shortSurname=mb_substr($surname, 0, 1);
        $shortName="$name" . ' ' . "$shortSurname.";
        return $shortName;
    }

    









?>        