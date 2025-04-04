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


// function wow(){
//   echo "this is wow func";
//   global $func; // Access the global variable
//   $func();
// }

// $func = "wow";
// $func();

// $c = 10;


// function m(){
//   global $c;
//   // $c = 20;
//   echo "this is global func $c";
// }
// m();
// // echo $c;
 $marks = [
  "kawish"=>[101,"kawish"],
  "jawad"=>[102,"jawad"],
  "j"=>[102,"jawad"],
];
// foreach($x as $val){
// foreach($val as $b){
//   echo $b . "<br>";
// }
// }

// for ($i = 0 ; $i<2;$i++){
//   for($j = 0;$j<3;$j++){
//     echo $x[$i][$j] . "<br>";
//   }

// foreach($x as $key=> $mul){
//   // print_r($key);
//   print_r($mul);
//    echo " <br>";

//    foreach($mul as $m){
//      echo $m . "<br>";
//    }

// foreach($x as list($id,$jawad)){
//   echo $id . $jawad . "<br>";
// }


// echo count($x,1);

// print_r(array_count_values($x,1));
$my_array = array(1, 2, 2, 3, 1, 4, 2,3,6,8);
$counts = array_count_values($my_array);

// print_r($counts); 
// echo in_array([101,"kawish"],$marks,0);
// echo in_array("2",$my_array,0);
// echo in_array("2",$my_array,0);

// echo array_search([101,"kawish"],$marks);

// $a1=array("a"=>"red","b"=>"green");
// $a2=array("a"=>"orange","burgundy");
// $a1=array("a"=>array("red"),"b"=>array("green","blue"),);
// $a2=array("a"=>array("yellow"),"b"=>array("black"));

// $newarr = array_replace_recursive($a1,$a2);

// $videos = [
//   ["title" => "PHP While Loop", "duration" => "11:00"],
//   ["title" => "PHP For Loop", "duration" => "6:39"],
//   ["title" => "PHP Functions", "duration" => "7:48"],
//   ["title" => "PHP Associative Array", "duration" => "9:47"],
//   ["title" => "PHP Switch Statement", "duration" => "12:28"]
// ];

// foreach($videos as $v){
//   // echo "loop";
//   // print_r($v) ;
//   // echo "<br>";
//   foreach($v as $key=> $i){
//     // print_r($i);
//     // echo "<br>";
//     // echo $key  ."<br>";
//     $loop = "<h3>Loop-</h3>";
//     // echo $i;
//     // echo "<h2>Loop</h2> <br>";
//     if(strpos($i , "Loop") and $key){
//       echo $loop;
//       echo $i ."<br>";
//     }
//   }
// }



// $students = [
//   ["name" => "Ali", "subject" => "Math", "marks" => 85],
//   ["name" => "Sara", "subject" => "English", "marks" => 78],
//   ["name" => "John", "subject" => "Science", "marks" => 92],
//   ["name" => "Aisha", "subject" => "History", "marks" => 74]
// ];

// $newarr = [];

// foreach($students as $std){
  // print_r($std);
  // echo "<br>";
// array_push($newarr,array_values($std));
// list("name"=>$name,"subject"=>$subject,"marks"=>$marks)= $std;
// echo $name;
// print_r($newarr);

// };
// print_r($newarr);


// foreach($newarr as list($name,$sub,$marks)){
//   echo "Student:$name|Subject:|$sub|Marks:$marks <br>";
// };


// print_r($newarr);




// $students = ["Ali", "Sara", "John", "Aisha", "Bilal", "Hina"];

// $input = "john";
// $input2  = "sfad";


// if(in_array($input,$students)){
// $indx = array_search($input,$students);
// echo "$input at index $indx";
// }else{
//   echo "$input isnot";
// }



// $defaultInventory = [
//   "product" => "Laptop",
//   "price" => 50000,
//   "stock" => [
//       "warehouse" => 20,
//       "store" => 10
//   ]
// ];
// $updatedInventory = [
//   "price" => 45000, 
//   "stock" => [
//       "store" => 5
//   ]
// ];
// echo "<pre>";
// print_r(array_replace_recursive($defaultInventory,$updatedInventory));
// echo "</pre>";


// $students = ["Ali", "Sara", "John", "Aisha"];
// $marks = [85, 78, 92, 74];

// print_r(array_merge($students,$marks));


// print_r(array_combine($students,$marks));


// $students1 = [
//   "names" => ["Ali", "Sara"],
//   "subjects" => ["Math", "English"],
//   "marks" => [85, 78]
// ];

// $students2 = [
//   "names" => ["John", "Aisha"],
//   "subjects" => ["Science", "History"],
//   "marks" => [92, 74]
// ];

// $arr1 = ["a"=>"u","b"=>"sdf"];
// $arr2 = ["b"=>"asd","d"=>"sdf"];

// echo "<pre>";
// print_r(array_merge_recursive($arr1,$arr2));
// echo "</pre>";
// $narr =  $arr2 + $arr1 ;
// print_r($narr);
// print_r(array_merge_recursive($students1,$students2));


// $arr = [1,2,3 ,4,5,6,7,];
// // print_r(array_slice($arr,0,4));
// print_r(array_splice($arr,0,2,["a","b"]));

// print_r($arr);

$arr = [1,34,32,4,3243,34];
// $arr2 =[1,23,21,3,213,213]
// print_r(array_key_exists(8,$arr));




$sectionA = [
  "Ali" => 85,
  "Sara" => 78,
  "John" => 2,
  "Aisha" => 74,
  "Sara"=>34
];

$sectionB = [
  "John" => 92,
  "Bilal" => 88,
  "Aisha" => 74,
  "Sara" => 90
];


$multi =[
  [
    "Ali" => 85,
    "Sara" => 78,
    "John" => 2,
    "Aisha" => 74,
    "Sara"=>34
  ],
  
   [
    "John" => 92,
    "Bilal" => 88,
    "Aisha" => 74,
    "Sara" => 90
  ],

];

// print_r(array_column($multi,"John","John"));
// echo "<pre>";
// print_r(array_chunk($multi[0],2,true));
// echo "<pre>";




// print_r(array_intersect($sectionA,$sectionB));
// print_r(array_intersect_assoc($sectionA,$sectionB));
// print_r(array_intersect_key($sectionA,$sectionB));
// print_r(array_intersect_uassoc($sectionA,$sectionB,"mfunction"));
// print_r(array_diff($sectionA,$sectionB));


// print_r(array_unique($sectionA));



// phpinfo();
// $varr  = 'Tomorrow I \'ll learn PHP global variables. his is a bad command : del c:\\*.*';
// print_r(array_flip($sectionA));
// print_r(array_change_key_case($sectionA,CASE_UPPER));

// print_r(array_sum($arr));
// echo "<br>";
// print_r(array_product($arr));



// array_walk_recursive($multi,"myfunc","dsfsf");
// function myfunc($v,$k,$p){
// echo $k ,$v,$p   . "<br>"; 
// }

// $arr = [12,1,21,2,1,2];

// print_r(array_fill_keys($arr,"sdff"));

// shuffle($arr);
// print_r($arr);
// include_once('./header.php');
// include_once('./hkjeader.php');
// echo "this is practise file";


// unlink('file.txt');


// session_start();
// $_SESSION['name'] = "kawish";

// echo "<pre>";
// print_r($_SESSION);
// echo "<pre>";


// $int = 21.4;
// $email = "kawihszia2826@gmailcom";
// var_dump(filter_var($email,FILTER_VALIDATE_EMAIL));


// print_r(filter_list());



// $arr = [
//   "name"=>"kawish",
//   "email"=>"kawisdfsd.com"
// ];
// $validate = [
//   "name"=>FILTER_SANITIZE_SPECIAL_CHARS,
//   "email"=>FILTER_VALIDATE_EMAIL
// ];

// if(filter_var_array($arr,$validate)){
// echo "yes";
// };
// $email = "dsfdsF@gmail.com";



// echo filter_input(INPUT_GET,$email);

// $myfile = fopen('text.txt','r');
// // echo fread($myfile,filesize('text.txt'));
// // echo fgets($myfile);

// // echo !feof($myfile);

// while(!feof($myfile)){
//   echo fgets($myfile) ."<br>";
// }
// fclose($myfile);


// $myfile = fopen("testfile.txt", "r") ; 
// $txt = "Mickey Mouse\n";
// fwrite($myfile, $txt);
// $txt = "Minnie Mouse\n";
// fwrite($myfile, $txt);


// fread($myfile,filesize('testfile.php'));
// fclose($myfile);

// echo file_put_contents('text.php',"thiesfs");
// echo file_get_contents('text.php');
// echo file_put_contents("testfile.txt","Hello World. Testing!");



// if(is_file('texsdft.php')){
// echo "yes";
// }

// print_r(glob('*.txt'));


// echo getcwd();
// chdir("m");
// echo getcwd();

// print_r(scandir('.'));
// mail("kawishzia2826@gmail.com","this is subject","this is messaeg");
// echo "mail sent";

// $i  =0;
$file = fopen('text.txt','a');
// while(!feof($file)){
// echo fgets($file);
// echo $i = $i+1;
// }
// echo $i;

// echo count(file('text.txt'));
// fwrite($file,"sdfsdfsdf");
fclose($file);
// rename('test.txt',"abc.txt");
// echo copy('abc.txt','asd.txt');

// echo unlink('asd.txt');
// echo filesize('add.txt') /1024*1024 ."MB";
// if(is_writable('add.php')){
// echo "yes";
// }else{
//   echo "no";
// }

// echo basename($_SERVER['PHP_SELF']);
// $text = 'PHP Tutorial';

// Use a regular expression to replace the first letter of each word with a span element with red color
// $text = preg_replace('/(\b[a-z])/i', '\1', $text);

// Display the modified text with styled first letters
// echo $text;


// echo fread($file,filesize(getcwd()));
// $inp = "text.txt";
// if(is_file($inp)){
// echo "yes";
// }

// header("Location: https://example.com/myOtherPage.php");
// echo !isset($_SERVER['HTTPS']);
// $eml = "kawsish@gmail.com";
// echo filter_var($eml,FILTER_VALIDATE_EMAIL);


// echo "<table border='2 px col'>
// <tr>
// <td>thi si table</td>
// </tr>

// </table>
// "

// $all_lines = file('https://www.w3resource.com/');

// // Iterate through each line in the array
// foreach ($all_lines as $line_num => $line)
// {
//     // Display the line number and the HTML-escaped content of the line
//     echo "Line No.-{$line_num}: " . htmlspecialchars($line) . "\n";
// }
// sleep(5);
// echo getlastmod()*60;

// print_r(error_get_last());


// echo(20>10 or 20>10)?  "yes": "not";

// echo 'Current script owner: ' . get_current_user() . "\n";
$inp = "zero;three;five;six;eight;one";
$nval = [trim($inp,';');



foreach($nval as $v){
  switch($v){
    case 0:
      echo "zero";
      break;
    default:
    echo "dfsds";
    
    }
}
?>
