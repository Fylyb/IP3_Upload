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

<body>
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4 text-center" >
                <form action="/result.php" method="post" enctype="multipart/form-data">
                <label for="formFileLg" class="form-label">Nahraj video, audio nebo obrázek</label>
                <div class="input-group mb-6">
                    <input accept="image/*, video/*, audio/*" name="soubor" class="form-control form-control-lg" id="formFileLg" type="file">
                </div>    
                <button type="submit" class="btn btn-primary">Nahrát zvolený soubor</button>
                </form>
            </div>
        </div> 
    </div>  
</body>

</html>