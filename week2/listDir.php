<?php

function list_dir($path) {
    
    $filenames= scandir($path); 
    echo "<h1>Contents of $path</h1>"; 
    $n = count($filenames);
    echo '<table border="3">';
    for($i=0; $i<$n; $i++) {
        $file_path= $path . DIRECTORY_SEPARATOR . $filenames[$i];
        if (is_dir($file_path)) {
            $type = "Directory";
        } else {	
            $type = "File";
        }
        echo '<tr><td>' . $filenames[$i] . '</td><td>' . $type . '</td></tr>';
    }
    echo '</table>';
}

?>

