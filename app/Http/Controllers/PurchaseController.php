<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function proccess_purchase()
    {
        // do something

        return redirect()->route('home.index');
    }

    public function finish_purchase_succed()
    {
        return view("finished_purchase_succed");
    }

    public function finish_purchase_error()
    {
        // en este caso enviar tambien el order id
        return view("finished_purchase_error");
    }
}
