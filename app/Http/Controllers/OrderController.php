<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use App\Models\Order;
use App\Models\Package;
use App\Models\Server;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::all();
        return view("backOffice.orders")->with(["orders" => $orders]);
    }

    public function store(Request $request)
    {

        $request->validate([
            "firstname" => "required",
            "lastname" => "required",
            "package_id" => "required",
            "email" => "required",
            "address" => "required",
            "address2" => "required",
            "postal" => "required",
            "country" => "required",
            "city" => "required",
            "phone" => "required",
            "total" => "required",
        ]);

//        return ($request->server_id);

        $order = new Order();

        $order->package_id   =   $request->package_id;
        $order->firstname   =     $request->firstname;
        $order->lastname   =     $request->lastname;
        $order->email   =     $request->email;
        $order->address   =     $request->address . $request->address2;
        $order->postal   =     $request->postal;
        $order->country   =     $request->country;
        $order->city   =     $request->city;
        $order->note   =     $request->note;
        $order->phone   =     $request->phone;
        $order->total   =     $request->total;

        $order->save();

//        return redirect()->back()->with(["success" => "La commande a été ajouté avec succés"]);

    }

}
