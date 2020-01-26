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
        $page_description = "This site is for fun. This is where I am currently posting the things that interest me most. Don't judge me";
        $file_path = 'site/introduction.php';

        if (!empty($_GET['show'])) {

            switch ($_GET['show']) {
                case 'selection-sort':

                    $page_title = 'Selection Sort';
                    $page_description = 'Starting from the left position, determine the value for each position by iterating over each item in the array';
                    $file_path = 'algorithms/selection-sort.php';
                    break;

                case 'insert-sort':

                    $page_title = 'Insert Sort';
                    $page_description = 'Sort by iterating over each item and comparing it to the values to the left of it, swapping until in correct ascending order position';
                    $file_path = 'algorithms/insert-sort.php';
                    break;

                case 'quick-sort':
                    $page_title = 'Quick Sorting';
                    $page_description = "A divide and conquer sorting technique using a pivot to position values";
                    $file_path = 'algorithms/quick-sort.php';
                    break;

                case 'binary-search':
                    $page_title = 'Binary Search';
                    $page_description = "A way to search a sorted list by halving the reasonable guesses";
                    $file_path = 'algorithms/binary-search.php';
                    break;


                default:
                    $page_title = 'Huh?';
                    $page_description = "oooopppsss";
                    $file_path = 'layout/not-found.php';
            }
        }
        ?>

        <div class="container">
            <div class="page-header" id="banner">

                <div class="row">
                    <div class="col-lg-9 col-md-8 col-sm-7">
                        <h1><?php echo $page_title ?></h1>
                        <p><?php echo $page_description; ?></p>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-5">
                        <div class="sponsor">
                            <a href="https://github.com/paramireze/algos"><img src="images/Octocat.jpg"></a>
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