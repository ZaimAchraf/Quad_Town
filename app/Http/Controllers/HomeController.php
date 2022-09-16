<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\RedirectResponse;
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
//        $packages = Package::all();
        return view('home');
    }

    public function about()
    {
//        $servers = Product::with(["pictures","category"])->where("visibility",1)->limit(7)->get();

        return view('frontOffice.about');
    }

    public function vehicles()
    {
//        $servers = Product::with(["pictures","category"])->where("visibility",1)->limit(7)->get();

        return view('frontOffice.vehicles');
    }

    public function contact()
    {
//        $servers = Product::with(["pictures","category"])->where("visibility",1)->limit(7)->get();

        return view('frontOffice.contact');
    }

    public function booking()
    {
        return view('frontOffice.booking');
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
