<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::with(["pictures","category"])->where("visibility",1)->limit(7)->get();

        return view('frontOffice.store')->with(["products" => $products]);
    }

    public function singleProduct($id){

        $product = Product::with(["pictures","category"])->find($id);
        if(empty($product)){
            return redirect()->route("home");
        }
        return view('frontOffice.singleProduct')->with(["product" => $product]);
    }
}
