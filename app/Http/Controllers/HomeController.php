<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Favory;
use App\Models\Package;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    private $cities;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        $packages = Package::all();
        return view('home')->with(["packages" => $packages]);
    }

    public function about()
    {
//        $servers = Product::with(["pictures","category"])->where("visibility",1)->limit(7)->get();

        return view('frontOffice.about');
    }

    public function channels()
    {
//        $servers = Product::with(["pictures","category"])->where("visibility",1)->limit(7)->get();

        return view('frontOffice.channels');
    }

    public function contact()
    {
//        $servers = Product::with(["pictures","category"])->where("visibility",1)->limit(7)->get();

        return view('frontOffice.contact');
    }

    public function checkout($id)
    {
        $package = Package::find($id);

        $cities = City::all();

        return view('frontOffice.checkout')->with(["package"=>$package, "cities" => $cities]);
    }

    public function settings()
    {
        return view('frontOffice.settings');
    }

    function changeLang($lang): RedirectResponse
    {

        App::setLocale($lang);
        session()->put("lang_code", $lang);
        return redirect()->back();
    }

}
