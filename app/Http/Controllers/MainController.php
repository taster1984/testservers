<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Server;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $perPage = 25;

        $servers = Server::latest()->paginate($perPage);

        return view('servers.index2', compact('servers'));
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function admin(Request $request)
    {
        return view('admin');
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function import(Request $request)
    {
        $result = "ok";
        $content = json_decode(\Storage::disk('local')->get('servers.json'), true);
        $items = [];
        foreach ($content["data"] as $item) {
            $server = \App\Server::whereRaw('provider=? AND brand=?', [$item["provider"], $item["brand_label"]])
                ->first();
            if (!$server) {
                $server = new Server();
            }
            $server->provider = $item["provider"];
            $server->brand = $item["brand_label"];
            $server->location = $item["location"];
            $server->cpu = $item["cpu"];
            $server->drive = $item["drive_label"];
            $server->price = $item["price"];
            $server->save();
            $items[$item["provider"] . $item["brand_label"]] = true;
        }
        $servers = \App\Server::all();
        foreach ($servers as $server) {
            if (!isset($items[$server->provider . $server->brand])) {
                $server->destroy($server->id);
            }
        }
        return view('import', compact('result'));
    }

}
