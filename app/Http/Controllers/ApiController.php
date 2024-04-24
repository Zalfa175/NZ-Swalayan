<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stuff;

class ApiController extends Controller
{
    function stuff(Request $req)
    {
        $data = Stuff::all();

        return response()->json([
            'value' => $data,
            'isError' => false
        ]);
    }

    function stuffAdd(Request $req)
    {
        $data = Stuff::create($req->all());

        return response()->json([
            'value' => $data,
            'isError' => false
        ]);
    }

    function stuffUpdate(Request $req, Stuff $stuff)
    {
        $stuff->fill($req->all());
        $data = $stuff->save();

        return response()->json([
            'value' => $data,
            'isError' => false
        ]);
    }

    function stuffDelete(Request $req, Stuff $stuff)
    {
        $data = $stuff->delete();

        return response()->json([
            'value' => $data,
            'isError' => false
        ]);
    }
}
