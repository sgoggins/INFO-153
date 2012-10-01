<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

$file = fopen('presidents.csv', 'rb');


echo '<h3>Search Results: '.$firstname . ' ' . $lastname . '</h3>';

echo '<table align=center border=1>';
$president = fgetcsv($file); // header
echo '<tr>';
for( $i=0; $i < count($president); $i++) {
   echo '<td>' . $president[$i] . '</td>';
}
echo '</tr>';
while ( !feof($file) ) {
    $president = fgetcsv($file);
    if ( $president == false ) continue;
    $n = count($president);
    $x=strpos($president[1], $firstname);
    $y=strpos($president[1], $lastname);
    if ( $x===false || $y===false) {
        continue;
    }
    echo '<tr>';
    for( $i=0; $i < $n; $i++) {
       echo '<td>' . $president[$i] . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>
