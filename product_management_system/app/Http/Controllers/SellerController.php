<?php

namespace App\Http\Controllers;

use App\HTTP\Controllers\Controller;
use Illuminate\HTTP\Request;
use App\Services\SellerService;
use App\Models\T_Seller;

class SellerController extends Controller
{
    public function __construct(){
        $this->SellerService = new SellerService();
    }
    public function sellerList(){
        $sellers = $this->SellerService->getAllSellers();
        return view('Seller.index',compact('sellers'));
    }
    public function addSellerView(){
        return view('Seller.add');
    }
    public function addSeller(Request $request){
        $this->SellerService->addSeller($request);
    }
    public function editSellerView(T_Seller $seller){
        $seller = $this->SellerService->getSpecificSeller($seller->id);
        return view('Seller.edit',compact('seller'));
    }
    public function editSeller(Request $request){
        $this->SellerService->editSeller($request);
    }
}
