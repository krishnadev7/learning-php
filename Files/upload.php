<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    $name = $_FILES['file']['name']; // find the name
    $tmp_name = $_FILES['file']['tmp_name']; // find the location of file
    $size = $_FILES['file']['size']; // find the size of the file
    $error = $_FILES['file']['error']; // find any erros

    // separating name from punctuation mark.
    $tempExtension = explode('.', $name);
    // conveting extension name to lower case
    $fileExtension = strtolower(end($tempExtension));

    //Allowed Extensions
    $isAllowed = array('pnp', 'jpg', 'jpeg', 'pdf');

    if (in_array($fileExtension, $isAllowed)) {
        if ($error === 0) {
            if ($size < 30000) {
                $newFilename = uniqid('', true) . "." . $fileExtension;
                $fileDestination = "uploads/" . $newFilename;
                move_uploaded_file($temp_name, $fileDestination);
                header("Location:files.php?uploadedSuccess");
            } else {
                echo "sorry you're file size is too big!";
            }
        } else {
            echo "sorry there was an error check again!";
        }
    } else {
        echo "Sorry, Your file type is not allowed";
    }
}
?>