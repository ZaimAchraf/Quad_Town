<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use App\Models\Order;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
            "email" => "required",
            "phone" => "required",
            "date" => "required",
            "time" => "required",
            "nbr_adults" => "required",
            "nbr_children" => "required",
        ]);

        $order = new Order();

        $order->firstname   =     $request->firstname;
        $order->lastname   =     $request->lastname;
        $order->email   =     $request->email;
        $order->note   =     $request->note;
        $order->phone   =     $request->phone;
        $order->date   =     $request->date;
        $order->nbr_children   =     $request->nbr_children;
        $order->nbr_adults   =     $request->nbr_adults;
        $order->time   =     $request->time;

        $order->save();

        Mail::to("achraf.zaime@gmail.com")->send(new \App\Mail\order($order));

        return redirect()->back()->with(["success" => "La commande a été ajouté avec succés"]);

    }

}
