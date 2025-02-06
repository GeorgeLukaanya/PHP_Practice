<?php
if(file_exists("newFile.txt")){
    unlink("newFile.txt");
    echo "File Deleted";
}else{
    echo "File Not Found";
}
