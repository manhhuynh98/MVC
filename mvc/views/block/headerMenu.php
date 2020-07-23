<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./MVC/mvc/views/bootstrap-4.5.0-dist">
    <link rel="stylesheet" href="./MVC/mvc/views/block/home.css">
    <style>
        .dropdown:hover>.dropdown-menu{
            display: block;
        }
        #menu li{
    margin: 0 10px !important;
}
    </style>
</head>
<body>
    <nav id="menu" class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <a class="navbar-brand " href="#" style="width: 10%;">
            <img src="https://zjs.zadn.vn/zmp3-desktop/releases/v0.1.20/images/logo-mp-3.svg">
        </a>
        <button class="navbar-toggler navbar-toggler-icon" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        </button>
        <div class="collapse navbar-collapse form-row" id="navbarResponsive">
            <ul class="navbar-nav mr-md-auto">
            
                <li class="nav-item active">
                    <a href="Home" class="nav-link">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="bxh" href="#" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">BXH tuần</a>
                    <div class="dropdown-menu" aria-labelledby="bxh">
                        <a href="#" class="dropdown-item">Việt Nam</a>
                        <a href="#" class="dropdown-item">Âu Mỹ</a>
                        <a href="#" class="dropdown-item">Châu Á</a>
                        <a href="#" class="dropdown-item">Hòa tấu</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a id="bxh" href="#" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">BXH tháng</a>
                    <div class="dropdown-menu" aria-labelledby="bxh">
                        <a href="#" class="dropdown-item">Việt Nam</a>
                        <a href="#" class="dropdown-item">Âu Mỹ</a>
                        <a href="#" class="dropdown-item">Châu Á</a>
                        <a href="#" class="dropdown-item">Hòa tấu</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a id="bxh" href="#" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Top 100</a>
                    <div class="dropdown-menu" aria-labelledby="bxh">
                        <a href="#" class="dropdown-item">Việt Nam</a>
                        <a href="#" class="dropdown-item">Âu Mỹ</a>
                        <a href="#" class="dropdown-item">Châu Á</a>
                        <a href="#" class="dropdown-item">Hòa tấu</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="navbar-nav form-inline col-md-4">
            <div class="row">
                <input type="text" class="form-control d-block col-8 mr-2 " style="border-radius: 20px;" placeholder="Search">
                <button type="button" class="btn btn-outline-success col-3" type="submit" style="border-radius: 10px;">search</button>
            </div>
            
        </div>
    </nav>
</body>
</html>