<?php
// read the csv file from the current directory
// display the content as a table in HTML
$file = fopen('presidents.csv', 'rb');
echo '<table align=center border=1>';
while ( !feof($file) ) {
    $president = fgetcsv($file);
    if ( $president == false ) continue;
    echo '<tr>';
    $n = count($president);
    for( $i=0; $i < $n; $i++) {
        echo '<td>' . $president[$i] . '</td>';
    }
    echo '</tr>';
    
}
echo '</table>';

?>
