<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Subcategories;

class AdminController extends Controller
{
    //
    public function index(){
        return view('adminpanel.index');
    }
    public function totalcategory(){
        $categories=Categories::all();
         $data=compact('categories');
        return view('adminpanel.totalcategory')->with($data);
    }
    public function totalsubcategory(){
           $subcategories=Subcategories::all();
           $data=compact('subcategories');
        return view('adminpanel.totalsubcategory')->with($data);
    }
    public function usersprofile(){
        return view('adminpanel.userprofile');
    }
    public function addsubcategory(Request $req){

        $req->validate(
            [
                'name'=>'required',
                'cat_id'=>'required',
            ]
    );
    $subcategories=new Subcategories;
    $subcategories->name=ucwords($req['name']);
    $subcategories->cat_id=$req['cat_id'];
    $response=$subcategories->save();
    if($response){
       return redirect('totalsubcategory');
    }else{
        return redirect('addsubcategory');
    }
 }
    public function savecategory(Request $req){
       $req->validate([
        'name'=>'required',
       ]);
       $categories=new Categories;
       $categories->category_name=$req['name'];
       $response=$categories->save();
        if($response){
            return redirect('totalcategory');         
        }else{
           return redirect('addcategory');     
        } 
    }
    public function delete_Category($id){
        // $categories=Categories::find($id)->delete();
          //  return redirect()->back();
        $categories=Categories::find($id);
        if(!is_null($categories)){
            $categories->delete();
        }
        return redirect('totalcategory');
    
    }
    public function subcategory(){
        $categories=Categories::all();
        $url=url('/addsubcategory');
        $title='Add Subcategory';
        $data=compact('categories','url','title');
        return view('adminpanel.addsubcategory')->with($data);
    }
    public function addcategory(){
        $url=url('/savecategory');
        $title="Add Category";
        $data=compact('url','title');
        return view('adminpanel.addcategory')->with($data);
    }
    public function editsubcat($id){
        $subcategories=Subcategories::find($id);
        if(is_null($subcategories)){
         return redirect('totalsubcategory');
        }else{
            $categories=Categories::all();
          $title="Update Subcategory";
          $url=url('update_subcat')."/".$id;
          $data=compact('subcategories','title','url','categories');
          return view('adminpanel.addsubcategory')->with($data);
        }
    }
    public function edit($id){
        $categories=Categories::find($id);
        if(is_null( $categories)){
        return redirect('totalcategory');
        }else{
           $title="Update Category";
           $url=url('update_category')."/".$id;
           $data=compact('categories','title','url');
           return view('adminpanel.addcategory')->with($data);
        }
    }
    public function update_category($id,Request $req){
        $categories=Categories::find($id);
        $categories->name=$req['name'];
        $categories->save();
        return redirect('totalcategory');
    }
    public function update_subcat($id,Request $req)
    {
          $subcategories=Subcategories::find($id);
          $subcategories->name=$req['name'];
          $subcategories->cat_id=$req['cat_id'];
          $subcategories->save();
          return redirect('totalsubcategory');
    }
    public function deletesub_cat($id){
        $subcategories=Subcategories::find($id)->delete();
        return redirect()->back();
    }
    public function category_trash(){    
        $categories=Categories::onlyTrashed()->get();
        $data=compact('categories');
        return view('adminpanel.category_trash')->with($data);
    }
    public function category_restore($id){
        // $categories=Categories::find($id)->delete();
          //  return redirect()->back();
        $categories=Categories::withTrashed()->find($id);
        if(!is_null($categories)){
            $categories->restore();
        }
        return redirect('totalcategory');
    }
    public function category_forcedelete($id){
        // $categories=Categories::find($id)->delete();
          //  return redirect()->back();
        $categories=Categories::withTrashed()->find($id);
        if(!is_null($categories)){
            $categories->forceDelete();
        }
        return redirect('totalcategory');
    }
    public function upload(){
        $url=url('/upload_image');
        $title="Upload Image";
        $data=compact('url','title');
        return view('adminpanel.upload')->with($data);
    }
    public function upload_image(Request $req)
    {
         echo $req->file('category_image')->store('uploads');
    }
}

