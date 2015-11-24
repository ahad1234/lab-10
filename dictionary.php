<?php
/*
$str = file_get_contents('dictionary.json');
$json = json_decode($str, true); // decode the JSON into an associative array
//print_r($json);
*/

$key = $_GET["key"];

$var=strtoupper($key);

$str = file_get_contents('dictionary.json');
$json = json_decode($str, true);  
if (array_key_exists($var,$json))

  {
    
  echo "<h2>Meaning of $key: </h2><br/> " . $json[$var];
  echo "<br/>"; 

  }
else
  {
  echo "Searched word does not exist in current Dictionary";
  }
  
$arrayKeys=array_keys($json);
  foreach($arrayKeys as $item ){

	  if(strpos($item,$var)!=0){

		echo "<h2>Meaning of $item: </h2><br/> " . $json[$item];
		echo "<br/>";
		
	  }

}

?>

<head>
  <title> User Dictionary </title>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
