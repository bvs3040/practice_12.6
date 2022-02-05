<?php

// функиция разделения ФИО

    function getPartsFromFullname($fullname){
        $partFullname = ['surname','name','patronomyc'];
        $fullnameArray = explode(' ', $fullname);
        $partsFromFullname = array_combine($partFullname,$fullnameArray);
        return $partsFromFullname;
    }

// функция склеивания ФИО
           
    function getFullnameFromParts($surname, $name, $patronomyc){
        $fullnameFromParts = "$surname" . ' ' . "$name" . ' ' . "$patronomyc";
        return $fullnameFromParts;
    }

// функция Сокращение ФИО

    function getShortName($fullname){
        $arr = getPartsFromFullname($fullname);
        $name = $arr['name'];
        $surname = $arr['surname'];
        $shortSurname = mb_substr($surname, 0, 1);
        $shortName = "$name" . ' ' . "$shortSurname.";
        return $shortName;
    }

// функция определения пола по ФИО

    function getGenderFromName($fullname){
        $arr = getPartsFromFullname($fullname);
        $name = $arr['name'];
        $surname = $arr['surname'];
        $patronomyc = $arr['patronomyc'];
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

        $genderFromName = $genderSign <=> 0;
        return $genderFromName;
    }

// функция Определение возрастно-полового состава
    include 'array.inc.php';

    function getGenderDescription($arr){
        $count=count($arr);
        $male=$female=$unknown = 0;

        foreach ($arr as $value) {
            $fullname = $value['fullname'];
            $gender = getGenderFromName($fullname);
            $gender == 1 ? $male++ : ($gender == -1 ? $female++ : $unknown++);
        }    
        
        $percentMale = round($male/$count*100, $precision = 1);
        $percentFemale = round($female/$count*100, $precision = 1);
        $percentUnknown = round($unknown/$count*100, $precision = 1);
        $genderDescription = <<<GENDER
        Гендерный состав аудитории:<br>
        ---------------------------<br>
        Мужчины - $percentMale%<br>
        Женщины - $percentFemale%<br>
        Не удалось определить - $percentUnknown%<br>
        GENDER;          
        return $genderDescription;
    }









?>        