<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>File Upload</title>
    </head>

    <body>
        <form action="./handler.php" method="post" enctype="multipart/form-data">
            <input type="file" name="image" id="">
            <button type="submit" name="upload">Upload File</button>
        </form>
    </body>

</html>