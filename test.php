<?php

$name="nafisa";
$number= 5;
$num2= 5;
$question=true;

define("NAME","nafoosa");

var_dump($question);
echo "<hr/>";
echo $number % $num2;
if($number === $num2)
	echo "yes";
 else
	echo "no";


echo "<hr/>";
$c="y";
switch($c){
	case 'y':
		echo "<body bgcolor='yellow'>";
	break;
	
	case 'r':
		echo "<body bgcolor='red'>";
	break;
	
	case 'g':
		echo "<body bgcolor='green'>";
	break;
	
	default:
		echo "<body bgcolor='black'>";
}

for($i=1; $i<=10; $i++){
	echo $i  . "<br/>";
}
$i=1;
while($i<=10){
	echo $i  . "<br/>";
	$i++;
}
$i=1;
do{
	echo $i  . "<br/>";
	$i++;
}while($i>10);

echo "<hr/>";

$students=array("osman","mohammed","sohiab","mustafa","omer","sara","shaza","iman");

for($i=0; $i<sizeof($students); $i++){
	echo $students[$i]. "<br/>";
}
echo "<hr/>";
$students[12]="sanhory";
//print_r($students); 	
foreach($students as $student){
	echo $student . "<br/>";
}
echo "<hr/>";
$student= array("name"=>"mohammed","age"=>"36");

foreach($student as $value){
	echo $value . "<br/>";
}
$student[]="Nafisa";
$student[2]="haja tanya";
$student[]="Braho";
$student['address']="Umdorman";
$student[]="you choose";
foreach($student as $k=>$v){
	echo $k. " " . $v ."<br/>";
}
?>