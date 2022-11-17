<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class T_Seller extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 't_sellers';

    public function getAllSellers(){
        $sellers = T_Seller::orderby('id','asc')->select('*')->get();
        return $sellers;
    }
    public function addSeller($request){
        $seller = new T_Seller();
        $seller->name = $request->name;
        $seller->email = $request->email;
        $seller->status = $request->status;
        $seller->save();
    }
    public function getSpecificSeller($id){
        $seller = T_Seller::where('id',$id)->select('*')->first();
        return $seller;
    }
    public function editSeller($request){
        $id = $request->id;
        $name = $request->name;
        $email = $request->email;
        $status = $request->status;
        DB::beginTransaction();
        T_Seller::where('id',$id)->update([
            'name' => $name,
            'email' => $email,
            'status' => $status
        ]);
        DB::commit();
    }
    
}
