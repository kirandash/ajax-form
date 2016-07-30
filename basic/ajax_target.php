<?php
	echo 'This is the data to be retrieved.';
	echo '<br>';
	echo '<br>';
	print 'this is dummy<br>';
	
	$array[] ="kiran";
	$array[] ="kiran1";	
	$array[] ="kiran2";
	$array[] ="kiran3";
	$array[] ="kiran4";
	$array[] ="kiran5";
	$array[] ="kiran6";
	$array[] ="kiran7";
	
	foreach ($array as $arr){
		echo $arr.'<br><br>';
	}
	
	// Check condition to see if variables are declared
	isset($_REQUEST['name'])&&!empty($_REQUEST['name']) ? $first_name = $_REQUEST['name'] : $first_name = 'unknown or empty';
	isset($_REQUEST['surname'])&&!empty($_REQUEST['surname']) ? $surname = $_REQUEST['surname'] : $surname = 'unknown or empty';
		
	echo 'The url has a name of '.$first_name.' and surname of '.$surname;
	// Value can be retrieved via $_GET or $_REQUEST
?>