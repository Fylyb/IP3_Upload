<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<?php
$file = $_FILES["soubor"];
if($file['size'] > (8388608)){
    echo "Soubor je větší jak 8MB";
    exit();
}
$filename = $file['name'];
$target_file = __DIR__ . "/Upload/$filename";

$type = $file["type"];

if($type == 'image/jpg' || $type == 'image/jpeg' || $type == 'image/gif' || $type == 'image/png'){
    move_uploaded_file($file["tmp_name"], $target_file);
    echo "<img src='/Upload/$filename' class='rounded mx-auto d-block' alt='obrazek'>";
}

if ($type == 'video/mp4' || $type == 'video/webm' || $type == 'video/ogg') 
{
    move_uploaded_file($file["tmp_name"], $target_file);
    echo "<div class='text-center'>";
    echo "<video width=800' height='600' class='mx-auto' controls><source src='/Upload/$filename' type='$type'>Your browser does not support the video tag.</video>";
    echo"</div>";
}

if ($type == 'audio/mpeg' || $type == 'audio/ogg' || $type == 'audio/wav') 
{
    move_uploaded_file($file["tmp_name"], $target_file);
    echo "<div class='text-center'>";
    echo "<audio class='mx-auto' controls><source src='/Upload/$filename' type='$type'>Your browser does not support the audio element.</audio>";
    echo"</div>";
}

?>
<body>
    
</body>
</html>