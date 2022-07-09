<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container" >
        <div class="row">
            <nav class="col-sm-12 col-md-12 col-lg-12">
                <?php 
                    include_once('pages/menu.php');
                    include_once('functions.php');    
                ?>
            </nav>
        </div>
        <div class="row">
            <section class="col-sm-12 col-md-12 col-lg-12">
                <?php
                if (isset($_GET['page']))
                {
                    $page = $_GET['page'];
                    if($page == 1)include_once('pages/home.php');
                    if($page == 2)include_once('pages/upload.php');
                    if($page == 3)include_once('pages/gallery.php');
                    if($page == 4)include_once('pages/registration.php');
                }


                ?>

            </section>

        </div>





    </div>





    <script src="js/bootstrap.min.js"></script>
</body>
</html>