<?php
    $file = fopen("newFile.txt", "a");
    fwrite($file,"Mary had a little lamb.\n");
    fclose($file);
    echo "Data has successfully written to newFile.txt.\n";
    ?>
