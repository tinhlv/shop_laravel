<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Products;
class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('admin.pages.list', compact('products'));
    }
}
