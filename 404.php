<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $pageTitle = '404 | Page Not Found';
    $pageDescription = 'The page you are looking for was not found.';
    $pagePath = '404.php';
    include("includes/compatibility.php");
    include("includes/seo.php");
    ?>
    <?php include("includes/style.php"); ?>
    <style>
        .not-found {
            min-height: 75vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 120px 20px;
        }
        .not-found h1 { color: #f5ea14; font-size: 72px; margin-bottom: 10px; }
        .not-found p { color: #fff; }
    </style>
</head>
<body>
<?php include("includes/header.php"); ?>
<section class="not-found">
    <div>
        <h1>404</h1>
        <p>Page not found. Let&apos;s get you back to the portfolio.</p>
        <p><a class="cv-btn" href="index.php">Go Home</a></p>
    </div>
</section>
<?php include("includes/footer.php"); ?>
<?php include("includes/scripts.php"); ?>
</body>
</html>
