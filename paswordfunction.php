<?php

$password = "funhappyzone";
function validatePassword($password){
    $password= trim($password);
    if (strlen($password) != 10 ){
        echo "password is not long enough<br>";
    }
    if(strlen($password) != mb_strlen($password)){
        echo "password contains special characters";
    }
}

echo validatePassword($password);


$password = "!abcdABCD1234";
for ($i = 0; $i < strlen($password); $i++) {
  $c = $password[$i];
  if($c >= "a" &&  $c <= "z"){
      echo "fun lowercase time"."<br>";
      $alphabetLowercase = true;
  }
  if($c >= "A" && $c <= "Z" ){
      echo "FUN UPPERCASE TIME"."<br>";
      $alphabetUppercase = true;
  }
  if($c >= "0" && $c <= "9"){
      echo "you have a number"."<br>";
      $number = true;
  }
  if($c == "!" ) || () || ($c == "#" ) || ($c == "$" ) || ($c == "%" ) || ($c == "!" ) || ($c == "!" ) || ($c == "!" ) {
      echo "you have a special sign"."<br>";
      $specialChar= true;
  }
  if($c == "#" ){
    echo "you have a special sign"."<br>";
    $specialChar= true;
    
}
