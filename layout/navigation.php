<div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
    <div class="container">
        <a href="<?php echo root_http_path(); ?>" class="navbar-brand">Pauls Coding Playground</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="" id="algorithms">Algorithms <span class="caret"></span></a>
                    <div class="dropdown-menu" aria-labelledby="algorithms">
                        <a class="dropdown-item" href="<?php echo root_http_path(); ?>/index.php?show=selection-sort">Selections Sort</a>
                        <a class="dropdown-item" href="<?php echo root_http_path(); ?>/index.php?show=quick-sort">Quick Sort</a>
                        <a class="dropdown-item" href="<?php echo root_http_path(); ?>/index.php?show=binary-search">Binary Search</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>