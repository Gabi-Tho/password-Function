<?php

$password = " 0&a24223A2 ";
function validatePassword($password){
    $length = false;
    $noAccents = false;
    $charMinimum = false;
    $specialChar = false;
    $UPPERCASE = false;
    $lowercase = false;
    $number = false;
    $input = true;
    $password == trim($password);
    if (strlen($password) >= 10 ){
        $length = true;
    }
    if(strlen($password) == mb_strlen($password)){
        $noAccents = true;
    }
    if(count(array_unique(str_split($password))) >= 6){
        $charMinimum = true;
    }
    for ($i = 0; $i < strlen($password); $i++){
        $c = $password[$i];
        if($c == "!" || $c == "#" || $c == "$" || $c == "%" || $c == "&" || $c == "*" || $c ==  "+" || $c == "-" || $c == ":" || $c == ";" || $c == "=" || $c == " " ){  
            $specialChar= true;  
        }else if($c >= "A" && $c <= "Z" ){
            $UPPERCASE = true;
        }else if($c >= "a" &&  $c <= "z"){
            $lowercase = true;
        }else if($c >= "0" && $c <= "9"){
            $number = true;
        }else{
            $input = false;
        }
    }
    if ($length && $noAccents && $charMinimum && $specialChar && $UPPERCASE && $lowercase && $number && $input == true){
        $answer = " valide";
    }else{
        $answer = "invalide";
    }
    return $answer;
}

echo validatePassword($password);

?>

<!-- Chaîne du mot de passe contrôlée: " 0&a24223A2 "
-> valide
Chaîne du mot de passe contrôlée: "0 &a22223A2"
-> non valide
Chaîne du mot de passe contrôlée: "0(&a24223A2"
-> non valide
Chaîne du mot de passe contrôlée: "0ê&a22223A2"
-> non valide
Chaîne du mot de passe contrôlée: "0e&a22222A2"
-> valide
Chaîne du mot de passe contrôlée: "2e&a22222A2"
-> non valide
Chaîne du mot de passe contrôlée: "0&a22223A"
-> non valid -->
<!-- 
1. eliminate spaces 

each character must be:
1. a number
2. a special character (!#$%&*+-:;=)
3. a letter of the alphabet (upper or lower case)

each string:
1. DONE 10 characters long 
2. DONE one uppercase letter (no accents)
3. DONE one lowercase letter (no accents)
4. DONE one number 
5. one special character (!#$%&*+-:;=)
6. contain 6 different characters 
7. DONE no accents


()
THINGS I NEED TO USE 

trim($password) <- used to elimate spaces 
mb_strlen($password) <- used to check characters 
strlen($password) <- used to check characteres but doesn`t account for special characters -->

<!-- for ($i = 0; $i < strlen($password); $i++){
        $c = $password[$i];
        if($c >= "a" &&  $c <= "z"){
             echo "password contains lower case"."<br>";
             $alphabetLowercase = true;
        }if($c >= "A" && $c <= "Z" ){
             echo "PASSWORD CONTAINS UPPERCASE"."<br>";
             $alphabetUppercase = true;
        }if($c >= "0" && $c <= "9"){
             echo "password contains number"."<br>";
             $number = true;
        }
} -->