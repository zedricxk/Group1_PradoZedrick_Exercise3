<?php

$filename = 'HinahanapNaFile.txt'; // -- File path kung ano yung gusto mong hanaping file


if (file_exists($filename)) { // -- Check if file exists
    $content = file_get_contents($filename); // -- Read file content using file_get_contents
    echo "File Content (file_get_contents): <br>";
    echo nl2br($content); 
} else {
    // -- if file don't exist, mag gagawa siya ng file para mag exist
    $newContent = "File put contents, succesfully used"; // -- Write to the file using file_put_contents
    file_put_contents($filename, $newContent);
    echo "File Stated Created.";
}

// Read file content as an array using file() Siya naman ang mag babasa ng content ng bagong gawang file
echo "<br><br>File Content (file):<br>";
$lines = file($filename);
foreach ($lines as $line) {
    echo htmlspecialchars($line) . "<br>";
}
?>