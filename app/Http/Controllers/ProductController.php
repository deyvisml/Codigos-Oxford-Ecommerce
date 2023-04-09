<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Level;
use App\Models\Product;
use App\Models\Serie;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Product $product)
    {
        $category = $product->category;
        $serie = $product->serie;
        $level = $product->level;

        //return redirect()->route("home.index"); //view("product", ["category" => $category, "serie" => $serie, "product" => $product]);
        return redirect()->route("products.show", ["category" => $category, "serie" => $serie, "product" => $product]); //view("product", ["category" => $category, "serie" => $serie, "product" => $product]);
    }

    public function show(Category $category, Serie $serie, Product $product)
    {
        dd("it's working");
    }
}
