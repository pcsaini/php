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
            <a href="<?php echo $GLOBALS['base_url'];?>home" class="brand-logo"><?php echo $GLOBALS['website_name']; ?></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#">Sass</a></li>
                <?php
                    if (isset($_SESSION['session_id'])){ ?>
                        <li><a class="dropdown-button" data-activates="dropdown1">User <i class="fa fa-angle-down"></i></a>
                            <!-- Dropdown Structure -->
                            <ul id="dropdown1" class="dropdown-content">
                                <li><a href="<?php echo $GLOBALS['base_url']; ?>login/changePassword">Change Password</a></li>
                                <li><a href="#!">Setting</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo $GLOBALS['base_url']; ?>logout">logout</a></li>
                            </ul>
                        </li>
                    <?php }
                    else{ ?>
                        <li><a href="<?php echo $GLOBALS['base_url']; ?>">Login</a></li>
                    <?php }
                ?>
            </ul>
        </div>
    </nav>

    <div class="container">

