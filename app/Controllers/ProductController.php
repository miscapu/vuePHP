<?php
/**
 * Product Model MySQL Data
 * @author MiSCapu
 * @package App\Models;
 * @since MiSCapu 1.0
 */
namespace App\Controllers;

require __DIR__."/../../vendor/autoload.php";
use App\Models\Product;

/**
 * Class Product
 * @package App\Controllers
 */
class ProductController
{
    public function getProducts()
    {
        $productModel   =   new Product();
        $products       =   $productModel->select( 'products' );

        header( 'Content-Type:application/json' );
        echo json_encode( $products, JSON_PRETTY_PRINT );
    }
}

$productControllerInstance  =   new ProductController();
$productControllerInstance->getProducts();