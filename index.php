<?php 


$str = file_get_contents('C:\xampp\htdocs\txtr\ques.txt');

$allarray = preg_split("/\\r\\n|\\r|\\n/",$str);
$new_array=array_filter($allarray);
$line_number=count($new_array);
echo $line_number;

for($i=0; $i<= $line_number; $i=$i+6){

echo '<pre>';
$newArray = array_slice($new_array, $i, 6, true);
print_r($newArray);
echo '</pre>';
}


?>
