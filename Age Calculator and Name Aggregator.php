<?php
$myfile = fopen("names.txt", "w");

  $txt = "Jeremias\n";
   fwrite($myfile, $txt);
  $txt = "Erika\n";
   fwrite($myfile, $txt);

 fclose($myfile);

$read = file('names.txt');
$count = count($read);
  $i = 1;
foreach ($read as $line) {
  echo $line;
   if($i < $count) {
      echo ', ';
      }
     $i++;
   }
   
//date formatted in mm/dd/yyyy format
$birthDate = "09/19/1991"; 
//explode the birthdate to get month, day and year 
$birthDate = explode("/", $birthDate); 
//get the age from date or birthdate 
$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md") 
 ? ((date("Y") - $birthDate[2]) - 1) 
 : (date("Y") - $birthDate[2])); 
echo "Your age is: " . $age; 

?>