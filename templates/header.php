<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>An amazing Page</title>
    <script src=></script>
    <script src="http://localhost/project_1/assets/js/app.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <header class="navbar bg-light" data-content="header.html">
        <div class="container-fluid align-items-center">
            <div class="navbar-brand"><span style="font-family: 'Zen Dots', cursive;">JS IM</span></div>
            <div class="nav">
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><img src="http://localhost/project_1/assets/media/Menu_icon_2_icon-icons.com_71856.png" width="100%" alt=""></span>
            </button>
            <div class="m-1">
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <a class="navbar-toggler-icon" href="user/close"><img src="http://localhost/project_1/assets/media/off.png" width="90%" alt=""></a>
            </button>
            </div>
            
            </div> 
            
 
        </div>

    </header>
    <div class="container text-right" style="font-family: 'Zen Dots', cursive;">
            <?php
                echo isset($_SESSION['name_user'])?"Hola !! ".$_SESSION['name_user']:"";
            ?>
    </div>



    <!-- <div class="m-3"></div> -->