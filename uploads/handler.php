<?php 

// JS - Vanilla
// NODE-JS - Common JS

// byte
// 1kb - 1024 bytes
// 1mb = 1024 kb

// 2 * 1024 * 1024 = 2mb

if(isset($_POST['upload'])) {
    $file = $_FILES['image'];
    print_r($file);

    // TODO: CHECK IF THERE'S AN ERROR UPLOADING THE FILE
    // null, 0, "", '', false => falsy values

    if($file['error']) {
        die("Error uploading File"); // Terminates the script and return a message if there's any
    }

    // TODO: LIMIT THE TYPE OF FILE TO BE UPLOADED
    $allowedTypes = ["image/jpg", "image/png", "image/jpeg"];

    // if(!in_array($file['type'], $allowedTypes)) {
    //     die("File type is not supported");
    // }

    // TODO: LIMIT THE FILE SIZE
    $MAX_FILE_SIZE = 2 * 1024 * 1024;

    if($file['size'] > $MAX_FILE_SIZE) {
        die("File size is too large");
    }

    // TODO: RENAME THE FILE - MAKE IT UNIQUE
    $time = time();
    $filenameArray = explode(".", $file['name']); // [example, ext]
    $filename = $filenameArray[0]; // example
    // echo $ext = $filenameArray[ count($filenameArray) - 1 ];
    $ext = end($filenameArray);

    // print_r($filenameArray);
    $newFilename = "$filename-$time.$ext";
    // echo $filename;

    // TODO: UPLOAD THE FILE
    $tmpLocation = $file["tmp_name"];
    $destination = "./files/$newFilename";

    $uploaded = move_uploaded_file($tmpLocation, $destination);
    
    if($uploaded) {
        echo "<p>File uploaded successfully.</p>";
    }
    else{
        echo "<p>File failed to upload.</p>";
    }
}