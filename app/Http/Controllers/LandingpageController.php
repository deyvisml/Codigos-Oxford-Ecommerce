<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Serie;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function index()
    {
        // get products from 5 diferent series
        $categories = ["category 1", "category 2", "category 3", "category 4", "category 5"];

        $group_products = [];

        foreach ($categories as $category) {
            $group_products[] = Product::join("levels", "products.id", "=", "levels.id")
                ->join("series", "levels.id", "=", "series.id")
                ->where("series.name", $category)
                ->get();
        }

        return view("index", ["group_products" => $group_products]);
    }
}
