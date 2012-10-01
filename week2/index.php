<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

echo '<h1>Current Working Directory: ' . getcwd() . '</h1>';
$filenames=scandir(getcwd());
$n = count($filenames);
echo '<table border = "1">';
for($i=0; $i<$n; $i++){

	echo'<td><dr>' . $filenames[$i] . '</td><tr>';
}

echo '</table>';

?>
