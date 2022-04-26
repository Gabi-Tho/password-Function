<?php

$password = "zone";
function validatePassword($password){
   $password= trim($password);
     if (strlen($password) < 10 ){
        echo "password is not long enough<br>";
    }
     if(strlen($password) != mb_strlen($password)){
        echo "password contains special characters<br>";
    }
    if(count(count_chars($password,1)) < 6){
        echo "password needs more characters<br>";
    }
    for ($i = 0; $i < strlen($password); $i++){
        $c = $password[$i];
        if($c >= "a" &&  $c <= "z"){
            echo "fun lowercase time"."<br>";
            $alphabetLowercase = true;
        }if($c >= "A" && $c <= "Z" ){
            echo "FUN UPPERCASE TIME"."<br>";
            $alphabetUppercase = true;
        }if($c >= "0" && $c <= "9"){
            echo "you have a number"."<br>";
            $number = true;
        }if($c == "!" || $c == "#" || $c == "$" || $c == "%" || $c == "&" || $c == "*" || $c ==  "+" || $c == "-" || $c == ":" || $c == ";" || $c == "="){  
            echo "you have a special sign"."<br>";
            $specialChar= true;  
        }
    }
}

validatePassword($password);
?>