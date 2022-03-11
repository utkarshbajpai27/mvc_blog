<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style.css">
    <script src="<?php echo URLROOT?>node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <link href="<?php echo URLROOT?>node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Blog</title>
</head>
<body>
    <?php
        require APPROOT . '/views/includes/head.php';
    ?>
    <div id="section-landing">
    <?php
       require APPROOT . '/views/includes/navigate.php';
    ?>
    </div>
    <div id="blog-landing">
        <h1>Hello User <?php echo $_SESSION['username'];?></h1>
    </div>
</body>
</html>