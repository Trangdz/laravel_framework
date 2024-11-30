<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
class HomeController extends Controller
{
    //Action index
    public function index(){
        $title="Study programming language at unicode";
        // C1: $dataview=[
        //     'title'=>$title
        // ];
        // return view('home',$dataview);
        // C2: return view('home',compact('title'));
        // return view('home')->with(['title'=>$title]);
        //return View::make('home')->with(['title'=>$title, 'content'=>$content]);
       
    }

    //Action getNews()
    public function getNew(){
        return 'Danh sách tin tức';
    }

    public function getCategories(){
        return 'Chuyên mục';
    }
    public function getProductDetail($id) {
        return view('clients/products/detail',compact('id'));
    }
}
