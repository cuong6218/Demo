<?php

namespace App\Controller;

use App\Model;

class ProductController
{
    protected $productManager;

    public function __construct()
    {
        $this->productManager = new Model\ProductManager();
    }

    function viewProduct()
    {
        $listProduct = $this->productManager->getAll();
        include_once('src/View/list.php');
    }

    function addProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once('src/View/add.php');
        } else {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $desc = $_POST['desc'];
            $product = new Model\Product($id, $name, $price, $desc);
            $this->productManager->addProduct($product);
            header('location:index.php');
        }
    }

    function resetProduct()
    {
        $this->productManager->resetData();
        header('location:index.php');
    }

    public function updateProduct()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_REQUEST['id'];
            $product = $this->productManager->getProductById($id);
            include_once('src/View/update.php');
        } else {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $desc = $_POST['desc'];
//            $product = new Model\Product($id, $name, $price, $desc);
            $this->productManager->updateProduct($id, $name, $price, $desc);
            header('location:index.php');
        }
    }

    public function deleteProduct()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_REQUEST['id'];
            $this->productManager->deleteProduct($id);
            header('location:index.php');
        }
    }
}