<?php

namespace App\Http\Controllers;

use App\City;
use App\Street;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    //

    public function getListStreets()
    {

        $streets = Street::all();

        return view('address/list_streets', ['streets' => $streets]);
    }

    public function getStreetByName($name)
    {
        $street = Street::query()->where(['name' => $name])->first();

        echo  $street->city->name .' - ' . $street->type .'. ' . $street->name . '<br>';
    }

    public function getCityByName($name)
    {
        $city = City::query()->where(['name' => $name])->first();
        echo  $city->name . ' - <br>';
        $streets = $city->streets;

        foreach ($streets as $street) {
            echo '   ' . $street->type .'. ' . $street->name . '<br>';
        }
    }
}
