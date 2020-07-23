<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <title>Document</title>  
    <style>
        html,body{
            width: 100%;
            height: 100%;
            font-size: 16px;
        }
    </style>
</head>
<body>
<div class="container">
    <?php require_once "./mvc/views/block/headerMenu.php" ?>
    <?php require_once "./mvc/views/block/slide.php" ?>
</div>
<div class="container">
    
    <div class="row">
        <div class="col-sm-3">
            <?php require_once "./mvc/views/block/left.php" ?>
        </div>
        <div class="col-sm-9">
            <div class="row">
                <div class="col-lg-12">
                    <div>
                    <?php require_once "./mvc/views/pages/".$data["page"].".php";?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="MVC/public/js/checkUesename.js"></script>
</body>
</html>