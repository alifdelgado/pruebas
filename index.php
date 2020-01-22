<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>phpspreadsheet</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center">phpoffice/phpspreadsheet</h1>
        <form action="data.php" method="POST" enctype="multipart/form-data">
            <div class="form-group col-md-6 mx-auto">
                <label for="file">Archivo</label>
                <input id="file" class="form-control" type="file" name="file">
            </div>
            <div class="col-md-6 mx-auto">
                <button type="submit" class="btn btn-primary btn-block">Guardar</button>
            </div>
        </form>
    </div>
</body>
</html>