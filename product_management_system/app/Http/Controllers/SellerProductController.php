<?php

namespace App\Http\Controllers;

use App\HTTP\Controllers\Controller;
use Illuminate\HTTP\Request;
use App\Services\SellerProductService;
use App\Models\T_SellerProduct;

class SellerProductController extends Controller
{
    public function __construct(){
        $this->SellerProductService = new SellerProductService();
    }
    public function sellerProductList(){
        $seller_products = $this->SellerProductService->getAllSellerProducts();
        return view('SellerProduct.index',compact('seller_products'));
    }
    public function addSellerProductView(){
        return view('SellerProduct.add');
    }
    public function addSellerProduct(Request $request){
        $this->SellerProductService->addSeller($request);
    }
    public function editSellerProductView(T_SellerProduct $seller_product){
        $seller_product = $this->SellerService->getSpecificSellerProduct($seller_product->id);
        return view('SellerProduct.edit',compact('seller_product'));
    }
    public function editSellerProduct(Request $request){
        $this->SellerProductService->editSellerProduct($request);
    }
}
