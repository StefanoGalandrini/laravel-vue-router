<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Drink;
use Illuminate\Http\Request;

class DrinkController extends Controller
{

    public function index(Request $request)
    {
        $drinks = Drink::all();

        return response()->json([
            'success'   => true,
            'results'   => $drinks,
        ]);
    }


    public function show($id)
    {
        $drink = Drink::where('id', $id)->firstOrFail();
        return response()->json([
            'success'   => true,
            'results'   => $drink,
        ]);
    }
}
