<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    $name = $_FILES['file']['name'];
    $temp_name = $_FILES['file']['tmp_name'];
    $size = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];

    $temp_extension = explode('.', $name);
    $file_extension = strtolower(end($temp_extension));

    $isAllowed = array('jpg', 'jpeg', 'png', 'pdf');
 
    if (in_array($file_extension, $isAllowed)) {
        if ($error === 0) {
            if ($size < 30000) {
                $newFileName = uniqid('', true) . "." . $file_extension;
                $fileDestination = "uploads/" . $newFileName;
                move_uploaded_file($temp_name, $fileDestination);
                header("Location: files.php?uploadedsuccess");
            } else {
                echo "Sorry your file size is too big";
            }
        } else {
            echo "Sorry there was an error try it again..!";
        }
    } else {
        echo "Sorry, your file type is not accepted...!";
    }
}
