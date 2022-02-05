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

// функция определения пола по ФИО

    function getGenderFromName($fullname){
        $arr=getPartsFromFullname($fullname);
        $name = $arr['name'];
        $surname= $arr['surname'];
        $patronomyc= $arr['patronomyc'];
        $genderSign = 0;

        if (mb_substr($patronomyc, -3)=='вна') {
            $genderSign--;
        }
        if (mb_substr($name, -1)=='а') {
            $genderSign--;
        }
        if (mb_substr($surname, -2)=='ва') {
            $genderSign--;
        }


        if (mb_substr($patronomyc, -2)=='ич') {
            $genderSign++;
        }
        if (mb_substr($name, -1)=='й'||mb_substr($name, -1)=='н') {
            $genderSign++;
        }
        if (mb_substr($surname, -1)=='в') {
            $genderSign++;
        }

        $genderFromName = $genderSign<=>0;
        return $genderFromName;
    }

    
   








?>        