<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Category;
class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $arr['categories'] = Category::all();
        return view('admins.categories.index')->with($arr);
    }
}
