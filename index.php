<?php
    define('ROOTPATH', __DIR__);
    $imagesFolder = ROOTPATH . "\img";
    
    $folders = scandir($imagesFolder);
    var_dump($folders);

    function EchoFolders($folders)
    {
        for($i = 0; $i < count($folders); $i++)
        {
            
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="css/colors.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/folders.css" rel="stylesheet">
</head>
<body>
    <button type="button" class="btn btn-light myButton" onclick="Folder()"><i class="bi bi-folder"></i></i></button>
</body>
</html>