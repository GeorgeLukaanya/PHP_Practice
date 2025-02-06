<?php
//Using fread
    $file = fopen("newFile.txt", "r");
    $content = fread($file, filesize("newFile.txt"));
    fclose($file);
    //The content is displayed with line breaks
    echo nl2br($content);
    ?>