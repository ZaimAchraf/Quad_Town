<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use App\Models\Package;
use App\Models\Server;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PackageController extends Controller
{

    public function index()
    {
        $packages = Package::all();
        return view("backOffice.packages.allPackages")->with(["packages" => $packages]);
    }

    public function create()
    {
        $servers = Server::all();
        return view("backOffice.packages.newPackage")->with(["servers" => $servers]);
    }

    public function store(Request $request)
    {

        $request->validate([
            "name" => "required",
            "server_id" => "required",
            "price" => "required",
            "period" => "required",

        ],
        [
            "name.required" => "Le nom du serveur est obligatoire",
            "server.required" => "La precision du serveur est obligatoire",
            "price.required" => "Le prix est obligatoire",
            "period.required" => "La precision du période est obligatoire",
        ]);

//        return ($request->server_id);

        $package = new Package();
        $package->server_id   =   $request->server_id;
        $package->name   =     $request->name;
        $package->period   =     $request->period;
        $package->price   =     $request->price;

        $package->save();

        return redirect()->route("admin.package.index")->with(["success" => "Le packet a été ajouté avec succés"]);

    }

    public function edit($id)
    {
        $package  = Package::find($id);
        return view("backOffice.packages.editPackage")->with(["package" => $package]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            "name" => "required",
            "price" => "required"

        ],
        [
            "name.required" => "Le nom du serveur est obligatoire",
            "price.required" => "Le prix est obligatoire",
        ]);


        $package = Package::find($id);
        $package->name          =     $request->name;
        $package->price   =     $request->price;

        $package->save();


        return redirect()->route("admin.package.index")->with(["success" => "Le paquet a été modifié avec succés"]);
    }

    public function destroy($id)
    {
        $package    = Package::find($id);
        if($package->delete()){
            echo "success";
        }else{
            echo "error";
        };
    }

}
