<?php           
// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked

    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];
    // destination of the file on the server
    $destination = '../lib.so/' . $filename;
    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['so'])) {
        echo "Online";
        } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File IS LARGEST";

    } else {
    // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (name, size, downloads) VALUES ('$filename', $size, 0)";
            if (mysqli_query($conn, $sql)) {
                echo "LIB uploaded successfully";
            }
        } else {
            echo "Failed to upload LIB";
        }
    }
}
?>