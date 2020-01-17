<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pauls Coding Playground</title>

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/custom.min.css">
        <?php include 'functions/application.php'; ?>
    </head>
    <body>
        <?php

        include 'layout/navigation.php';

        $page_title = 'Welcome';
        $file_path = 'site/introduction.php';

        if (!empty($_GET['show'])) {

            switch ($_GET['show']) {
                case 'quick-sort':
                    $page_title = 'Algorithm Madness';
                    $file_path = 'algorithms/quick-sort.php';
                    break;

                default:
                    $page_title = 'Huh?';
                    $file_path = 'layout/not-found.php';
            }
        }
        ?>

        <div class="container">
            <div class="page-header" id="banner">

                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-6">
                        <h1><?php echo $page_title ?></h1>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-6">
                        <div class="sponsor">

                        </div>
                    </div>
                </div>
            </div>
            <?php include($file_path); ?>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>