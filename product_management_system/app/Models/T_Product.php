<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class T_Product extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 't_products';

    public function getAllProducts(){
        $products = T_Product::orderby('id','asc')->select('*')->get();
        return $products;
    }
    public function addProduct($request){
        $product = new T_Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->qty = $request->qty;
        $product->details = $request->details;
        $product->save();
    }
    public function getSpecificProduct($id){
        $product = T_Product::where('id',$id)->select('*')->first();
        return $product;
    }
    public function editProduct($request){
        $id = $request->id;
        $name = $request->name;
        $price = $request->price;
        $qty = $request->qty;
        $details = $request->details;
        DB::beginTransaction();
        T_Product::where('id',$id)->update([
            'name' => $name,
            'price' => $price,
            'qty' => $qty,
            'details' => $details
        ]);
        DB::commit();
    }
    
}
