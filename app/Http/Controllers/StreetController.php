<?php

namespace App\Http\Controllers;

use App\Building;
use App\Street;
use Illuminate\Http\Request;

class StreetController extends Controller
{
    //

    public function getBuildingByIdAction($id)
    {
        $street = Street::query()->where(['id' => $id])->first();

        $name = $street->type. '. ' . $street->name;

        $buildings = $street->buildings;


        return view('street/list_by_id', ['nameStreet' => $name, 'buildings' => $buildings]);



    }
}
