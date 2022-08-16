<?php  
    # Comments in php [SINGLE LINE COMMENT]
    // Comments in php [SINGLE LINE COMMENT]

    /* 
        MULTI-LINE COMMENT
    */

    // Case Insensitive
    EcHo "<h2>This is a php output function</h2>";


    // Outputing Functions

    // echo
    // print
    // print_r
    // var_dump

    // print
    print("<h2>this another output function</h2>");

    // print_r
    print_r("<h2>this another output [print_r] function</h2>");

    // Var dump
    var_dump("This is a string");
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Intro</title>
    </head>

    <body>
        <h1>
            <?php 
            echo "Hello World"; 
            ?>
        </h1>
    </body>
</html>