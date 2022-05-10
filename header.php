<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:title" content="Cindy's Lobster Rolls">
    <meta property="og:site_name" content="Cindy's Lobster Rolls">
    <meta property="og:url" content="http://www.cindyslobsterrolls.com">
    <meta property="og:description"
        content="We specialize in lobster and crabmeat rolls as well as wicked good fried Maine seafood">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://cindyslobsterrolls.com/assets/images/home-logo.png">
    <meta name="title" content="Cindy's Lobster Rolls | Freeport Maine">
    <meta name="description"
        content="We specialize in lobster and crabmeat rolls as well as wicked good fried Maine seafood">
    <meta name="keywords" content="Lobster, Crabmeat, Seafood, Clams, Maine">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="en">
    <meta name="author" content="Grey Gato Media">
    <link rel="canonical" href="https://www.cindyslobsterrolls.com" />

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/splide.min.css">
    <title>Cindy's Lobster Rolls | Freeport, ME</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="/">Home</a>
                    <a class="nav-link" href="/menu.php">Menu</a>
                    <a class="nav-link" href="/about.php">About</a>
                    <a class="nav-link" href="/gallery.php">Gallery</a>
                    <a class="nav-link" href="/contact.php">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>
    <header>
        <div class="content">
            <?php if ($_SERVER["REQUEST_URI"] == "/") {
            echo '<img src="assets/images/home-logo.png" alt="logo" style="max-width: 750px;">';
        } else {
            echo '<img src="assets/images/banner-logo.png" alt="logo">';
        } ?>
            <h1 class="visuallyhidden">Cindy's Lobster Rolls</h1>

            <div class="navigation">
                <div class="content">
                    <ul>
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="/menu.php">Menu</a>
                        </li>
                        <li>
                            <a href="/about.php">About</a>
                        </li>
                        <li>
                            <a href="/gallery.php">Gallery</a>
                        </li>
                        <li>
                            <a href="/contact.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </header>
    <main class="site-content">