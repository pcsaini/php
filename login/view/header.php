<!DOCTYPE html>
<html>
    <head>
        <meta name="author" content="pcsaini">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $page_title; ?></title>

        <!--css files-->
        <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['base_url']; ?>view/font-awesome/css/font-awesome.css">
        <link type="text/css" rel="stylesheet" href="<?php echo $GLOBALS['base_url']; ?>view/materialize/css/materialize.min.css">


        <!--js files-->
        <script type="text/javascript" src="<?php echo $GLOBALS['base_url']; ?>view/jquery/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo $GLOBALS['base_url']; ?>view/materialize/js/materialize.min.js"></script>

    </head>

    <body>
    <nav>
        <div class="nav-wrapper container">
            <a href="#!" class="brand-logo">Logo</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li>
                <!-- Dropdown Trigger -->
                <li><a class="dropdown-button" data-activates="dropdown1">Dropdown <i class="fa fa-angle-down"></i></a>
                    <!-- Dropdown Structure -->
                    <ul id="dropdown1" class="dropdown-content">
                        <li><a href="#!">one</a></li>
                        <li><a href="#!">two</a></li>
                        <li class="divider"></li>
                        <li><a href="#!">three</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>

    <div class="container">

