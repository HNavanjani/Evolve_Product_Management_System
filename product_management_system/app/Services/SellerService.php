<?php
namespace App\Services;

use App\Models\T_Seller;

class SellerService{

    public function __construct(){
        $this->T_Seller = new T_Seller;
    }
    public function getAllSellers(){
        $sellers = $this->T_Seller->getAllSellers();
        return $sellers;
    }
    public function addSeller($request){
        $this->T_Seller->addSeller($request);
    }
    public function editSeller($request){
        $this->T_Seller->editSeller($request);
    }

}