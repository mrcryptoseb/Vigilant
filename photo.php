$photo = $_FILES['photo'];

// Check if the file was uploaded successfully
if ($photo['error'] === UPLOAD_ERR_OK) {

    // Get the file name
    $filename = $photo['name'];

    // Move the file to a new location
    move_uploaded_file($photo['tmp_name'], '/path/to/new/location/' . $filename);

    // Do something with the file
} else {

    // Handle the error
}
