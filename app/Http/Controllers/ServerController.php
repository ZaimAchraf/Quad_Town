<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use App\Models\Server;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ServerController extends Controller
{

    public function index()
    {
        $servers = Server::all();
        return view("backOffice.servers.allServers")->with(["servers" => $servers]);
    }

    public function create()
    {
        return view("backOffice.servers.newServer");
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            "name" => "required",
            "description" => "required",

        ],
            [
                "name.required" => "Le nom du serveur est obligatoire",
                "description.required" => "La description du serveur est obligatoire"
            ]);

        $server = new Server();
        $server->Server_name   =     $request->name;
        $server->description   =     $request->description;

        $server->save();

        return redirect()->route("admin.server.index")->with(["success" => "Le serveur a été ajouté avec succés"]);

    }

    public function edit($id)
    {
        $server  = Server::find($id);
        return view("backOffice.servers.editServer")->with(["server" => $server]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            "name" => "required",
            "description" => "required",
        ],
            [
                "name.required" => "Le nom du serveur est obligatoire",
                "description.required" => "La description du serveur est obligatoire",
            ]);


        $server = Server::find($id);
        $server->Server_name          =     $request->name;
        $server->description   =     $request->description;

        $server->save();


        return redirect()->route("admin.server.index")->with(["success" => "Le serveur a été modifié avec succés"]);
    }

    public function destroy($id)
    {
        $server    = Server::find($id);
        if($server->delete()){
            echo "success";
        }else{
            echo "error";
        };
    }

}
