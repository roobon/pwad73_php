<?php

$fh = fopen('../myfile.txt', 'r');

while (!feof($fh)) {
    echo fgets($fh);
}

// Close the file
fclose($fh);
?>