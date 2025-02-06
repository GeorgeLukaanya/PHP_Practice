<?php
    $file = fopen("newFile.txt", "w"); //Using overwrite mode
    fwrite($file, "My name is George\n");
    fwrite($file, "I am a Software Engineer\n");
    fclose($file);
    echo "File written to newFile.txt";
?>