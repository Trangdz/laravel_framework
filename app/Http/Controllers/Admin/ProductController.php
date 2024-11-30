<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        //Sẽ sử dụng session để check login
    }
    public function index()
    {
        //
        return "List product";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    //Lấy ra thông tin sản phẩm(GET)
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    //HIển thị form sửa sản phẩm (GET)
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    //Xử lí sửa sẩn phẩm
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    //Xóa sản phẩm
    public function destroy(string $id)
    {
        //
    }
}
