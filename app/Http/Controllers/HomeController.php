<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Serie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // get series
        $series = Serie::inRandomOrder()->limit(8)->get();

        // get products from 5 diferent series
        $series_selected = [
            "Quis dolores laudantium aperiam vel dolores aut.",
            "Perferendis ratione neque quod sunt.",
            "Perferendis ratione neque quod sunt.",
            "Perferendis ratione neque quod sunt.",
            "Aut repellendus aspernatur deleniti sint nam."
        ];

        $group_products = array();

        for ($i = 0; $i < count($series_selected); $i++) {
            $group_products[$i] = array();
            $group_products[$i]["serie"] = $series_selected[$i];
            $products =   Product::join("levels", "products.level_id", "=", "levels.id")
                ->join("series", "levels.serie_id", "=", "series.id")
                ->where("series.name", $series_selected[$i])
                ->get();

            $group_products[$i]["products"] = $products;
        }

        return view("home", ["series" => $series, "group_products" => $group_products]);
    }
}
