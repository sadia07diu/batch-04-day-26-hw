<?php

require_once 'vendor/autoload.php';
use App\classes\Auth;
use App\Classes\Category;
use App\classes\Products;
use App\classes\Register;

if (isset($_GET['pages'])) {

    if ($_GET['pages'] == 'all-products') {

        $category= new Category();
        $categories =$category->category();
        $product= new Products();
        $products = $product->index();

        include "pages/allProducts.php";
    }
    elseif ($_GET["pages"] == "category-products")
    {
        $category= new Category();
        $categories =$category->category();
        $product= new Products();
        $products = $product->shortProducts($_GET ["category_id"]);
        include "pages/allProducts.php";

    }
    elseif ($_GET["pages"] == "product-details")
    {
        $category= new Category();
        $categories =$category->category();
        $product= new Products();
        $productDetails = $product->getProductDetails($_GET["product_id"]);

        include "pages/productDetails.php";

    }
    elseif ($_GET['pages']== 'logIn')
    {
        include "pages/logIn.php";
    }
    elseif ($_GET['pages']== 'logout')
    {
//       session_start();
//       unset($_SESSION["id"]);
//       header("Location: action.php?pages=login");
        $auth= new Auth();
        $auth->logOut();

    }



}

elseif (isset($_POST["loginbtn"]))
{
    $auth = new Auth($_POST);
    $message=$auth->logIn();
    include  "pages/logIn.php";


}


