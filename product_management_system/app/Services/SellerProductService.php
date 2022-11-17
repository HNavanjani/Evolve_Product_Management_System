<?php
namespace App\Services;

use App\Models\T_SellerProduct;

class SellerProductService{
    
    public function __construct(){
        $this->T_SellerProduct = new T_SellerProduct;
    }
    public function getAllSellerProducts(){
        $seller_products = $this->T_SellerProduct->getAllSellerProducts();
        return $seller_products;
    }
    public function addSellerProduct($request){
        $this->T_SellerProduct->addSellerProduct($request);
    }
    public function editSellerProduct($request){
        $this->T_SellerProduct->editSellerProduct($request);
    }

}