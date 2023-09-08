<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo $name = $_FILES['file']['name'] ."<br>";
        echo $type = $_FILES['file']['type'] ."<br>";
        echo $temp_loc = $_FILES['file']['tmp_name']."<br>";
        echo $error = $_FILES['file']['error']."<br>";
    ?>

    <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file">
            <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>