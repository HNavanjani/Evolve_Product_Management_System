<?php
namespace App\Services;

use App\Models\T_Product;

class ProductService{
    
    public function __construct(){
        $this->T_Product = new T_Product;
    }
    public function getAllProducts(){
        $products = $this->T_Product->getAllProducts();
        return $products;
    }
    public function addProduct($request){
        $this->T_Product->addProduct($request);
    }
    public function editProduct($request){
        $this->T_Product->editProduct($request);
    }

}