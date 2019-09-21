<?php 
header('Content-Type: application/json; charset=utf-8'); 

$str = file_get_contents('C:\xampp\htdocs\txtr\ques.txt');

$allarray = preg_split("/\\r\\n|\\r|\\n/",$str);
$new_array=array_filter($allarray);
$line_number=count($new_array);

$final=array();
for($i=0; $i< $line_number; $i=$i+6){
$newArray = array_slice($new_array, $i, 6, true);
$implode=implode('|', $newArray); 
$explode=explode("|", $implode);
array_push($final, $explode);

$n=list($question,$option1,$option2,$option3,$option4,$correct_answer)=$explode;

}

$json=json_encode($final,JSON_UNESCAPED_UNICODE);

//Array object format
echo '<pre>';
print_r($final);
echo '</pre>';

//Json format
 echo $json;


?>
