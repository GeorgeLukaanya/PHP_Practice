//fgets is used for large files to avoid memory issues
<?php
    $file = fopen("newFile.txt", "r");
    while (!feof($file)) { // Loop until end of file
        echo fgets($file); // Read and print each line
        echo "<br>";
    }
    fclose($file);
?>
