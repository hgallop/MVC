<!doctype HTML>
<html lang="eng">
    <head>
        <title>PHP Create MVC</title>
        <link rel="stylesheet" href="<?php echo URL;?>public/css/default.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body>
        <header>
            <h1 class="headline">Header</h1>
            <nav>
                <a class="nav-link" href="<?php echo URL;?>index">Home</a>
                <a class="nav-link" href="<?php echo URL;?>help">Help</a>
                <?php if (Session::get('loggedIn') == true): ?>
                    <a class="nav-link" href="<?php echo URL;?>dashboard/logout">Logout</a>
                <?php else: ?>
                    <a class="nav-link" href="<?php echo URL;?>login">Login</a>
                <?php endif; ?>
            </nav>
        </header>
        <main>