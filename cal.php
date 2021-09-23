<html>
<title>PHP Basic Calculator</title>
	
<form method="GET"> 
	<input type="number" name="first" placeholder="+ box"> 
	<input type="number" name="secound" placeholder ="- box">
	
	<select name="main_trick"> 
		<option value="adder"> Adder</option>
	    <option value="minor"> Minor</option>
	    <option value="divided"> divided</option>
	    <option value="multipule"> multipule</option>
	    
	</select>
	
	<input type="submit" name="submit" value="submit">
	
	</form>

	<html>
		
<?php
//print_r($_GET);

$add = $_GET['first'];
$minor = $_GET['secound'];

$y = $_GET['main_trick'];

if($y === 'adder')
{ echo $add + $minor;}

elseif($y === 'minor')
{ echo $add - $minor;}


elseif($y === 'divided')
{ echo $add / $minor;}



elseif($y === 'multipule')
{ echo $add * $minor;}


else{}

;?>
