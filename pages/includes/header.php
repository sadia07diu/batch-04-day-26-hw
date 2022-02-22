<?php
//session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <style>
        .mt-custom{
            margin-top: 120px;
        }
    </style>
</head>
<body>
<?php if (isset($_SESSION["id"])) { ?>
<nav class="navbar navbar-expand-sm bg-info navbar-dark ">
    <div class="container py-3">
        <a href="action.php?pages=home" class="navbar-brand text-info btn-warning px-5" >LOGO</a>
        <ul class="navbar-nav ml-auto btn-success">
            <li class="nav-item"><a href="action.php?pages=all-products" class="nav-link">All Products</a></li>
            <?php foreach ($categories as $category) { ?>
                <li class="nav-item"><a href="action.php?pages=category-products&&category_id=<?php echo $category["id"] ?> " class="nav-link"><?php echo $category['name'] ?></a></li>
            <?php } ?>

            <li class="nav-item"><a href="action.php?pages=logout" class="nav-link">logout</a></li>
        </ul>
    </div>
</nav>
<?php } ?>