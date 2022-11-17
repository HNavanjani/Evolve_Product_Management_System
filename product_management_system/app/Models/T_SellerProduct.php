<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class T_SellerProduct extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 't_seller_products';

    public function getAllSellerProducts(){
        $seller_products = T_SellerProduct::orderby('id','asc')->select('*')->get();
        return $seller_products;
    }
    public function addSellerProduct($request){
        $seller_product = new T_SellerProduct();
        $seller_product->t_seller_id = $request->t_seller_id;
        $seller_product->t_product_id = $request->t_product_id;
        $seller_product->save();
    }
    public function getSpecificSellerProduct($id){
        $seller_product = T_SellerProduct::where('id',$id)->select('*')->first();
        return $seller_product;
    }
    public function editSellerProduct($request){
        $id = $request->id;
        $t_seller_id = $request->t_seller_id;
        $t_product_id = $request->t_product_id;
        DB::beginTransaction();
        T_Product::where('id',$id)->update([
            't_seller_id' => $t_seller_id,
            't_product_id' => $t_product_id,
        ]);
        DB::commit();
    }
    
}
