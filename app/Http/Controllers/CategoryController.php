<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function getCategory() {
        $categories = Category::all();
        return $categories;
    }
}
