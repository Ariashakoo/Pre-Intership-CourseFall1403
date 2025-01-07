<?php

echo "hello world! \n";
// EcHo "hello world! \n";





// comments :

// this is a 1 line comment !

# this a 1 line comment too ! 

/*
this 
is 
a 
multiple line
comment !
*/




// variables :

// correct :
// $age = 12;
// $_name = "ali";
// $term2 = "salam";
// $AGE = 15;

// echo "my name is $_name\n";
// echo "age 1 : $age and age 2 : $AGE\n";
// echo '$term \n';
// echo "\nhi " . $term2 . " bye\n";



// wrong variables :
// $1name ;
// $my~name ;


// echo $age + $AGE ;

 

/* types of variables :

1_String :
$str = "salam";
$str2 = 'salam';
var_dump(str,str2);
 

2_Integers :
from -2,147,483,648 to +2,147,483,647 :
$number = 123;
var_dump($number);

3_aray :
$names = array("ali","taghi","mohammad");
$families = ["alavi" , "tagahvi" , "mohammadi"]
var_dump($names);


4_null
$khali = null;
var_dump($khali);

5_float
$num = 12.32;
echo "$num";

*/




/*
Default functions :

String :
echo strlen("hello world");
echo "\n";
echo str_word_count("hello world");
echo "\n";
echo strrev("hello world") ;
echo strpos("hello world" , "world");
echo "\n";
echo str_replace("hello","bye","hello world" )

numberic :
$x = 123;
var_dump(is_int($x));

$x=12.2;
var_dump(is_int($x));
var_dump(is_double($x));

$x = "133";
var_dump(is_numeric($x));
$x = "133" + 100;
var_dump(is_numeric($x));

type casting :
$x = 1345.2332;
$y = (int)$x;
echo "$y\n";
var_dump(is_double((double)$y));

*/


/*
arithmetic operations :

echo 6 + 2 ;
echo "\n";
echo 9/2 ;
echo "\n";
echo (34*3);
echo "\n";
echo((4/2)**10);
echo "\n";
echo (21 % 9);

Assignment operations:
$x = 10 ;
echo "$x \n";
$x += 10 ;
echo "$x \n";
$x -= 5;
echo "$x \n";
$x *=2;
echo "$x \n";

comparison operation :
var_dump(5 == "5" ); //true
var_dump(5 === "5"); //false
var_dump(10 != 10); //false
var_dump(10 !== "10"); //true
var_dump(8<>8); //false
var_dump(10>3) ; //true
var_dump(4 <= 6) ; //true

Increment / Decrement operation :
$x = 10; 
echo ++$x ; //11
echo "\n";  

echo $x++; //11
echo "\n";
echo $x ; //12
echo "\n";
echo --$x; //11
echo "\n";


Logical operators :
var_dump (100 == "100" and 2 == 2 ); //true
var_dump (1 == 1 && 2 == 4 ); //false
var_dump (1==1 or false); //true
var_dump ((3/3)==2 || (2*2)<3); //false
var_dump(!false);



String operators :
$first_str = "hello";
$second_str= "by";
echo $first_str." ".$second_str;
echo "\n";
$first_str .= " world" ;
echo $first_str;


conditional assignment operators :
$name = "mohammad";
$status = (isset($name)) ? "name is exist" : "user doesnt exist";
echo "$status\n";
echo $status = $name ?? "user doesnt exist";




array :
$countries = array("USA","IRAN","TURKEY");

echo "$countries[0]\n";
echo "$countries[1]\n";
echo "$countries[2]\n";

$age = array("peter"=>"18" , "mohammad"=>"20");
echo "peter is : $age[peter]\n";
echo "mohammad is : $age[mohammad]\n\n\n";


$people = [["mohammad","20"],["peter","18"]];
echo $people[0][0]." is ".$people[0][1]."\nand ".$people[1][0]." is ".$people[1][1]."\n\n" ;
echo count($people);





conditional Statement :

if(5>3) {
    echo "5 is bigger than 3\n\n";
}


if (4 < 1){
    echo "1 is bigger \n\n";
} else {
    echo "4 is bigger\n";
}

$x = 5;
if ( $x < 10 ){
    echo "$x is smaller than 10\n";
}else if($x<50){
    echo "$x is smaller than 50 \n";
}else{
    echo "$x is bigger than 50\n";
}


$x = 2;
switch ($x) {
    case 10 :
        echo "$x is 10\n";
        break;
    case 20 :
        echo "$x is 20\n";
        break;
    case 30:
        echo "$X is 30\n";
        break;
    default :
        echo "$x is not 10 or 20 or 30";
}



loops :


$x = 10 ;
while ( $x > 0){
    echo "$x\n";
    $x--;
}

for ($i = 10 ; $i>0 ; $i--){
    echo "$i\n";
}

$numbers = ["10","54","46","93"];
foreach ($numbers as $i){
    echo "$i\n";
}




functions :

function hello($name){
    return "hello $name";
}

function sum_two_number($num1 , $num2){
    return $num1+$num2;
}

echo hello("peter");
echo "\n";
echo sum_two_number(4,6);

*/












?>