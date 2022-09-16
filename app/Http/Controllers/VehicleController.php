<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helper\UploadController;
use App\Models\Newsletter;
use App\Models\Vehicle;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VehicleController extends Controller
{

    public function index()
    {
        $vehicles = Vehicle::all();
        return view("backOffice.vehicles.display")->with(["vehicles" => $vehicles]);
    }

    public function create()
    {
        return view("backOffice.vehicles.add");
    }


    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            "type" => "required",
            "price"     => "required",
        ],
        [
            "type.required" => "le champ type est obligatoite",

            "price.required"     => "le champ price est obligatoite",
        ]);

        $vehicle = new Vehicle();

        $vehicle->type       = $request->input("type");
        $vehicle->price      = $request->input("price");
        $vehicle->picture    = $request->file('images') ? UploadController::vehiclePic($request) : "avatar.png";

        $vehicle->save();
        return redirect()->route("admin.vehicle.index")->with(["success" => "vous avez ajoute votre vehicule avec succes"]);
    }

    public function edit($id)
    {
        $vehicle  = Vehicle::find($id);
        return view("backOffice.vehicles.edit")->with(["vehicle" => $vehicle]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            "type" => "required",
            "price" => "required"

        ],
        [
            "type.required" => "Le type de la vehicule est obligatoire",
            "price.required" => "Le prix de la vehicule est obligatoire",
        ]);


        $package = Vehicle::find($id);
        $package->type          =     $request->type;
        $package->price   =     $request->price;

        $package->save();


        return redirect()->route("admin.vehicle.index")->with(["success" => "La vehicule a été modifié avec succés"]);
    }

    public function destroy($id)
    {
        $vehicle = Vehicle::find($id);
        $image_path = public_path("uploads/vehicles/pictures/{$vehicle->picture}");
        unlink($image_path);

        $vehicle->delete();

        return "success";
    }

}
