<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pauls Algo Fun</title>

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/custom.min.css">


    </head>
    <body>
        <?php include('layout/navigation.html'); ?>

        <div class="container">
            <div class="page-header" id="banner">
                <br />
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-6">
                        <h1>Algorithm Madness</h1>
                        <p class="lead">A place to test and showcase my work learning algorithms</p>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-6">
                        <div class="sponsor">
s
                        </div>
                    </div>
                </div>
            </div>
            <?php
                include('functions/application.php');

                if (isset($_GET['show']) && !empty($_GET['show'])) {
                    $show = $_GET['show'];

                    switch ($show) {
                        case 'quick-sort':
                            include('algorithms/quick-sort.php');
                            cave_man_debugger('including file');
                        break;

                    }
                }
            ?>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>