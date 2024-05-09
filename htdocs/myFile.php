<?php
echo $file = $_POST['fileName'].":- ";
$fileName = $_FILES['file']['name']; //$_FILES['name_from_form']['name- predefined]
echo $fileName = $_FILES['file']['name'];
echo "<br>";
echo $fileType = $_FILES['file']['type'];
echo "<br>";
echo  $fileSizeInBytes = $_FILES['file']['size'];
echo "<br>";
echo  $filePath = $_FILES['file']['tmp_name'];
$dst = "d:/";
echo "<br>";
echo $basename = basename($fileName); // basename(filename,extension_to_change(optional parameter))
echo "<br>";
echo $dst = $dst.$basename;
echo "<br>";
if($fileSizeInBytes <= 1048576 && $fileType == 'application/pdf')
{
    if(move_uploaded_file($filePath,$dst)){
        echo "File Uploaded";
    }
    else{
        echo "Uploading Failed";
    }
}
else{
    echo "Invalid Files";
}
?>
