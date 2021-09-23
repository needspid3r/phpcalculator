<?php 
$student = 100; #out of 100



if($student >= 100){ $print = "A+";}

##########
elseif($student >= 100){ $print = "A+";}
elseif($student >= 80){  $print = "A+";}


elseif($student >= 70){  $print = "A-";}
elseif($student >= 69){  $print = "A-";}


elseif($student >= 59){  $print = "B";}
elseif($student >= 60){  $print = "B";}


elseif($student >= 49){  $print = "C";}
elseif($student >= 40){  $print = "C";}

elseif($student >= 39){  $print = "D";}
elseif($student >= 33){  $print = "D";}


elseif($student >= 32){  $print = "F";}
##########

else{  $print = "fail";}

echo $print;


;?>
