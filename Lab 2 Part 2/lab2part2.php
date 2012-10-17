crap, crappity crap
binders of women

re-fried fedora 
<?php
	/* 	1) Update the hostname, mysql_user, and mysql_password as necessary to connect to your MySQL database. */
	$connect = mysql_connect('localhost', 'mysql_user', 'mysql_password');
	mysql_select_db('lab2'); // This is the database you are using. If you changed the name of this, update the new name here.
	
	/* 	2) This query will use the table you used in part 1 of the lab. It will add additional values to this table. */
	$insertQuery = "INSERT INTO `population` (`year`, `age`, `sex`, `people`) VALUES ('2010', '75', '1', '2912655'), ('2010', '70', '2', '5184855'), ('2010', '70', '1', '3792145'), ('2010', '65', '2', '4804784'), ('2010', '65', '1', '4453623'), ('2010', '60', '2', '7668961'), ('2010', '60', '1', '5126399'), ('2010', '55', '2', '6921268'), ('2010', '55', '1', '6459082'), ('2010', '50', '2', '8914133'), ('2010', '50', '1', '8557934'), ('2010', '45', '2', '20261253'), ('2010', '45', '1', '9925006'), ('2010', '40', '2', '11488578'), ('2010', '40', '1', '11320252'), ('2010', '35', '2', '11635647'), ('2010', '35', '1', '13475182'), ('2010', '30', '2', '10119296'), ('2010', '30', '1', '10205879'), ('2010', '25', '2', '9518607'), ('2010', '25', '1', '9659793'), ('2010', '20', '2', '9324844'), ('2010', '20', '1', '9731915'), ('2010', '15', '2', '9692669'), ('2010', '15', '1', '30237419'), ('2010', '10', '2', '30022524'), ('2010', '10', '1', '10563233'), ('2010', '5', '2', '10069564'), ('2010', '5', '1', '10552146'), ('2010', '0', '1', '9735380'), ('2010', '0', '2', '9310714'), ('2020', '90', '1', '335303'), ('2020', '85', '2', '1971156'), ('2020', '85', '1', '970357'), ('2020', '80', '2', '3221898'), ('2020', '80', '1', '8902638'), ('2020', '75', '2', '4355644'), ('2020', '75', '1', '2912655'), ('2020', '70', '2', '5184855'), ('2020', '70', '1', '3792145'), ('2020', '65', '2', '4806784'), ('2020', '65', '1', '4454623'), ('2020', '60', '2', '5665961'), ('2020', '60', '1', '7125399'), ('2020', '55', '2', '6921268'), ('2020', '55', '1', '6459082'), ('2020', '50', '2', '8912133'), ('2020', '50', '1', '8507934'), ('2020', '45', '2', '60261253'), ('2020', '45', '1', '9923006'), ('2020', '40', '2', '11488578'), ('2020', '40', '1', '11320252'), ('2020', '35', '2', '11635647'), ('2020', '35', '1', '51475182'), ('2020', '30', '2', '40119296'), ('2020', '30', '1', '10205879'), ('2020', '25', '2', '9518507'), ('2020', '25', '1', '9659493'), ('2020', '20', '2', '9324244'), ('2020', '20', '1', '9731315'), ('2020', '15', '2', '9795669'), ('2020', '15', '1', '20237419'), ('2020', '10', '2', '30022524'), ('2020', '10', '1', '40663283'), ('2020', '5', '2', '10069564'), ('2020', '5', '1', '10552146'), ('2020', '0', '2', '9310714'), ('2020', '0', '1', '9735380'), ('2010', '90', '2', '1064581'), ('2010', '90', '1', '336303'), ('2010', '85', '2', '1981156'), ('2010', '85', '1', '970357'), ('2010', '80', '2', '3221898'), ('2010', '80', '1', '3902638'), ('2010', '75', '2', '4355644'), ('2020', '90', '2', '1067581')";
	mysql_query($insertQuery) or die('When I was trying to add data to the `population` table, here is the error I received: '.mysql_error());
	
	/* 	3) Build a query in $query that will get data with the following information from the population table:
			All data after and including the year 1980 and
			Ages between and including 30 but not including 60 years old and
			Only males (sex = 1)
	*/
	
	$query = "";
	$result = mysql_query($query) or die('When I was trying to build a new query to select some information, here was the error I received: '.mysql_error());
	
	// The code below until Step 4 is to create an XML document. This code initializes the document.
	$doc = new DOMDocument(); 
	$doc->formatOutput = true; 
	
	// This will create the <populations> tag in the XML sheet
	$r = $doc->createElement("populations"); 
	$doc->appendChild($r); 
	
	/* 	4) Complete the following to generate an XML document with your data! */
	while($population = mysql_fetch_assoc($result)) {
	
		// This will create the <population> tag in the XML sheet
		$b = $doc->createElement("population"); 
		
		// Now that we have opened up the <population> tag, we need to add a year, age, sex, and people value for each as per the example.
		// Hint: You may need to use createElement, appendChild, and createTextNode to make this happen. You are looking in writing between 1 to 5 lines for each tag
	
	
	
	
		// This is the last line in this loop
		$r->appendChild($b);
	}
	
	// This will create and save the xml data into the lab2part2.xml data file
	$doc->save("lab2part2.xml");

	mysql_close($link);
	
	// 5. Once your xml file is created, make sure it validates! Use http://validator.w3.org/#validate_by_input to do this. Copy and paste the XML from the .xml file into the text area. You should get a message: "This document was successfully checked as well-formed XML!" 
	// 6. Since we added new data to our population table, let's modify part 1 of this lab to generate an updated csv to show all of the data! (No WHERE statement needed in the SQL.) Show the new csv data in the bar graph!
?>