<?php 
// echo ("its working");
// $a = "kawish";
// this is comment

/*double line comment
is8 */
// define("name", "kawish",true);

// echo Name;

// if(11>10):
//   echo "false";
// elseif(3321   >   3  ):
//   echo"yes";
// else:
//   echo "no";

// endif;


// switch(2){
//   case 1:
//     echo "one";
//     break;
//   case 2:
//     echo "two";
//     break;
//   case 3:
//     echo "three";
//     break;
//   default:
//     echo "no match";
// }


// $a  = "kawis" . "h";
// echo var_dump($a);

// (5>19)? $b = "yes" : $b = "no";

// $a = 10;
// while(1<$a){
//   echo $a;
//   $a--;
// }


// $a  =1;
// do{
//   echo $a;
//   $a++;
// }while($a>10);




// for ($a = 1; $a <100;$a = $a+ 10){
//   for($b = $a;$b<$a+10;$b++)
//   {
//     echo $b ;
//   }

//   echo '<br>';
// }


// for ($a = 1; $a<100;$a++){
//   for($b = 1;$b<=10;$b++){
//     echo "$a x $b = ".$a*$b." <br>";
//   }
//   echo '<br>';
// }


// for($a   = 1;$a <10;$a++){
//   if($a == 3){
//     break;
//   }
//   echo $a;
// }


// echo "hi <br>";
// echo "hi <br>";
// echo "hi <br>";
// echo "hi <br>";
// goto abs;
// echo "hi <br>";
// echo "hi <br>";
// echo "hi <br>";
// echo "hi <br>";


// abs:
// echo "goto  <br>";

// function name(&$a){
//   $a  =  "kawish";
//   return $a;
// }
// $namee = "jaeaf";
// echo  "hi this is name  return " .name($namee) . "<br>";

// echo $namee

// $func = "wow";
// function wow(){
// echo "this is wow func";
// $func();
// // echo "this is simple func";
// }


//  echo  $func("kawish");


// $func  = function($n){
// return $n;
// };

// echo $func("kawish");


// function display($n){
// if($n == 0){
//   print("this is print");
//   return 1;

// } else{
//   return $n * display($n-1);
// } 
// };


// echo "the factorial is " .display(6);


function wow(){
  echo "this is wow func";
  global $func; // Access the global variable
  $func();
}

$func = "wow";
$func();



?>
