<?php

namespace App\Http\Controllers;

use App\HTTP\Controllers\Controller;
use Illuminate\HTTP\Request;
use App\Services\ProductService;
use App\Models\T_Product;

class ProductController extends Controller
{
    public function __construct(){
        $this->ProductService = new ProductService();
    }
    public function productList(){
        $products = $this->ProductService->getAllProducts();
        return view('Product.index',compact('products'));
    }
    public function addProductView(){
        return view('Product.add');
    }
    public function addProduct(Request $request){
        $this->ProductService->addProduct($request);
    }
    public function editProductView(T_Product $product){
        $product = $this->ProductService->getSpecificProduct($product->id);
        return view('Product.edit',compact('product'));
    }
    public function editProduct(Request $request){
        $this->ProductService->editProduct($request);
    }
}
