<?php


namespace App\Model;


class ProductManager
{
    protected $productData;

    public function __construct()
    {
        $this->productData = new DataConnect();
    }

    function getAll()
    {
        $data = $this->productData->readFile();
        $arr = [];
        foreach ($data as $item) {
            $product = new Product($item['id'], $item['name'], $item['price'], $item['desc']);
            array_push($arr, $product);
        }
        return $arr;
    }

    function addProduct($product)
    {
        $data = $this->productData->readFile();
        $arr = [
            'id' => $product->getId(),
            'name' => $product->getName(),
            'price' => $product->getPrice(),
            'desc' => $product->getDesc()
        ];
        array_push($data, $arr);
        $this->productData->saveFile($data);
    }

    function updateProduct($id, $name, $price, $desc)
    {
        $data = $this->productData->readFile();
        $index = $this->getIndexById($id);
        $data[$index]['name'] = $name;
        $data[$index]['price'] = $price;
        $data[$index]['desc'] = $desc;
        $this->productData->saveFile($data);
    }

    function getProductById($id)
    {
        $data = $this->getAll();
        foreach ($data as $product) {
            if ($product->getId() == $id) {
                return new Product($product->getId(), $product->getName(), $product->getPrice(), $product->getDesc());
            }
        }
    }

    public function getIndexById($id)
    {
        $data = $this->getAll();
        foreach ($data as $key => $product) {
            if ($product->getId() == $id) {
                return $key;
            }
        }
    }

    public function deleteProduct($id)
    {
        $data = $this->productData->readFile();
        $index = $this->getIndexById($id);
        array_splice($data, $index, 1);
        $this->productData->saveFile($data);
    }

    function resetData()
    {
        $this->productData->resetData();
    }

}