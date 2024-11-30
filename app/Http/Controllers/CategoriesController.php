<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function __construct()
    {
        
    }
    //Phương thức GET
    public function index(Request $request){
        return view('clients/categories/list');
    }
    //Lấy ra 1 chuyên mục
    public function getCategory($id){
        return view('/clients/categories/edit');
    }
    //Cập nhật 1 chuyên mục(POST)
    public function updateCategory($id){
        return "Update : ".$id;
    }

    //Thêm dữ liệu vào chuyên mục, show form (Phương thức POST)
    public function addCategory(){
        return view('/clients/categories/add');
    }

    //Xử lý dữ liệu vào chuyên mục (Phương thức POST)
    public function handleAddCategory() {
        return redirect('categories.add');
        // return "Submit add folder";
    }

    //Xóa dữ liệu(POST)
    public function deleteCategory()  {
        
    }

    
}
