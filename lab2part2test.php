<?php
$connect = mysql_connect('localhost', 'root', '');
mysql_select_db('lab2');

$query = "SELECT * FROM `population` LIMIT 10";
$result = mysql_query($query) or die(mysql_error());
  
$doc = new DOMDocument(); 
$doc->formatOutput = true; 

$r = $doc->createElement("populations"); 
$doc->appendChild($r); 

while($population = mysql_fetch_assoc($result)) {
	$b = $doc->createElement("population"); 

	$name = $doc->createElement("year"); 
	$name->appendChild( 
		$doc->createTextNode($population['year'])
	); 
	
	$b->appendChild($name); 

	$age = $doc->createElement("age"); 
	$age->appendChild( 
		$doc->createTextNode($population['age']) 
	); 
	$b->appendChild($age); 
	
	$sex = $doc->createElement("sex"); 
	$sex->appendChild( 
		$doc->createTextNode($population['sex']) 
	); 
	$b->appendChild($sex); 
	
	$people = $doc->createElement("people"); 
	$people->appendChild( 
		$doc->createTextNode($population['people']) 
	); 
	$b->appendChild($people); 
	
	$r->appendChild($b); 
}

//echo $doc->saveXML(); 
$doc->save("testing.xml");
?>