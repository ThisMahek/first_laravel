<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function add_product(){
        $title='Add Product';
        $url='saveproduct';
        $data=compact('url','title');
        return view('adminpanel.addproduct',$data);
    }
    public function saveproduct(Request $req){
      $validation=  $req->validate([
            'product_name'=>'required',
            'qty'=>'required',
            'stock'=>'required',
            'mrp'=>'required',
            'price'=>'required',
            'image'=>'required',
        ]);
        

    }
}
