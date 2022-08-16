<?php 

// OPENING A FILE IN PHP

$filename = "text.txt";

// fopen (filename, mode)
// r -> reading
// r+ -> reading && writing
// w -> writing: truncates the file if it exists, places the pointer at the beginning
// w+ -> reading && writing: truncates the file if it exists, places the pointer at the beginning
// a -> writing: truncates the file if it exists, places the pointer at the end
// a+ -> reading && writing: truncates the file if it exists, places the pointer at the end

$handler = fopen($filename, "w+");

// if($handler) {
//     // echo "File opened ";
// }
// else {
//     echo "File not opened";
// }

// WRITING TO A FILE

// fwrite(handler, data)
// fwrite($handler, "This is a test dummy data");

// file_put_contents()
// file_put_contents("text.txt", "this is a new content");


// READING FROM A FILE 

// fread() - read content from a file
$file = "text.txt";

// if(file_exists($file)) {
//     $handle = fopen($file, "r");
//     $size = filesize($file);
//     $content = fread($handle, $size);

//     echo "$content";
// }
// else {
//     echo "Error: Could not open file - File does not exist";
// }

// readfile()
if(file_exists($file)) {
    readfile($file);
    // echo "<p>Content: $content </p>";
}
else {
    echo "Error: Could not open file - File does not exist";
}

// file_get_contents()
if(file_exists($file)) {
    $texts = file_get_contents($file);
    echo "<p>Content: $texts </p>";
}
else {
    echo "Error: Could not open file - File does not exist";
}


// RENAMING A FILE 

// rename()
if(file_exists($file)) {
    if(rename($file, "newtext.txt")) {
        echo "<p>File renamed</p>";
    }
    else {
        echo "<p>Error: Could not rename</p>";
    }
}
else {
    echo "Error: Could not open file - File does not exist";
}
