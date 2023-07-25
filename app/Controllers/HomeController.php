<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;

class HomeController extends Controller
{
    public function index()
    {
        $id = isset($_GET['category']) ?  $_GET['category'] : null;
        if($id){
            $products = ProductModel::getProductByCategory($id);
        }else{
            $products = ProductModel::all();    
            $categories =  CategoryModel::all();
            return $this->view('site/home', ['products' => $products,'categories' => $categories]);
        }
    }
    public function listProduct()
    {
        $id = isset($_GET['category']) ?  $_GET['category'] : null;
        if($id){
            $products = ProductModel::getProductByCategory($id);

        }else{
            $products = ProductModel::all();    
        }
        $categories =  CategoryModel::all();
     
       return $this->view('site/products', ['products' => $products,'categories' => $categories]);
    }

    public function getCate(){
        $categories = CategoryModel::all();
        return $this->view('admin/products/cate',['categories' => $categories]);
    }
  
}
