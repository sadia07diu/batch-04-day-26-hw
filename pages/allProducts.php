
<?php
session_start();

if (!isset($_SESSION["id"]))
{

    header("Location: action.php?pages=logIn");
}

?>
<?php include 'pages/includes/header.php'; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-md-4 mt-3">
                    <div class="card">
                        <img src="<?php echo $product["image"] ?>" class="card-img-top" alt="" style="height: 350px">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $product["name"] ?></h3>
                            <p class=""><?php echo $product["price"] ?></p>
                            <p class="text-justify"><?php echo $product["description"] ?></p>
                            <a href="action.php?pages=product-details&&product_id=<?php echo $product['id']; ?>" class="btn btn-outline-success float-right">View</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</section>
<?php include 'pages/includes/footer.php'; ?>
