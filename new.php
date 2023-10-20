<?php
    if(isset($_GET['index']))
    {
        $folderFotos = ["img/1.JPG", "img/2.JPG", "img/3.JPG", "img/4.JPG", "img/5.JPG"];
        $index = $_GET['index'];
        $photo = $folderFotos[$index];
    }
    else
    {
        $index = 0;
        $total = 0;
        $folder = "nenhuma pasta";
        $photo = "img/1.JPG";
    }

    list($width, $height) = getimagesize($photo);
    $orientation = GetOrientation($width, $height);
    
    $text = "1/45";
    $rotation = 0;
    

    function GetOrientation($width, $height)
    {
        if($width > $height) return "myImageWide";
        else return "myImageNarrow";
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
</head>
    <title>Document</title>
</head>
<body>
    
    <div class="myBody">
        <div class="myImageContainer">
            <img id="mainImage" class="myImage rotate" src="<?php echo $photo ?>"><br>
        </div>
        <div class="myTexts">
            <h2><?php echo $text ?></h2>
        </div>
        <div class="myButtons">
            <button type="button" class="btn btn-light myButton" onclick="MoveIt(0)"><i class="bi bi-arrow-left"></i></button>
            <button type="button" class="btn btn-light myButton" onclick="Folder()"><i class="bi bi-folder"></i></i></button>
            <button type="button" class="btn btn-light myButton" onclick="Delete()"><i class="bi bi-trash3"></i></button>
            <button type="button" class="btn btn-light myButton" onclick="Rotate(1)"><i class="bi bi-arrow-clockwise"></i></button>
            
            <a href="<?php echo $photo ?>">
                <button type="button" class="btn btn-light myButton" onclick="Rotate(0)"><i class="bi bi-arrow-counterclockwise"></i></button>
            </a>

            <a href="<?php echo $photo ?>" download>
                <button type="button" class="btn btn-light myButton"><i class="bi bi-download"></i></button>
            </a>
            
            <button type="button" class="btn btn-light myButton" onclick="MoveIt(1)"><i class="bi bi-arrow-right"></i></button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        let rotation = 0;
        function MoveIt()
        {
            alert("im moving");
        }

        function Folder()
        {
            alert("Folder");
        }

        function Delete()
        {
            alert("Delete");
        }

    </script>
</body>
</html>
