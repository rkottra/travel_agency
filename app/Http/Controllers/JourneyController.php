<?php

namespace App\Http\Controllers;

use App\Models\journey;
use App\Models\vehicle;
use App\Http\Requests\StorejourneyRequest;
use App\Http\Requests\UpdatejourneyRequest;
use Illuminate\Http\Request;


class JourneyController extends Controller
{
    public function elso_feladat(vehicle $vehicle)
    {
        return journey::with("vehicle")->
                    where("vehicle", "=", $vehicle->id)->get();
    }


    public function masodik_feladat(Request $request)
    {
        try {
            $seged = new journey();
            if (empty($request->vehicle)) return response()->json("Hiányos adatok", 400);
            if (empty($request->country)) return response()->json("Hiányos adatok", 400);
            if (empty($request->description)) return response()->json("Hiányos adatok", 400);
            if (empty($request->departure)) return response()->json("Hiányos adatok", 400);
            if (empty($request->capacity)) return response()->json("Hiányos adatok", 400);
            if (empty($request->pictureUrl)) return response()->json("Hiányos adatok", 400);
            
            $seged->vehicle = $request->vehicle;
            $seged->country = $request->country;
            $seged->description = $request->description;
            $seged->departure = $request->departure;
            $seged->capacity = $request->capacity;
            $seged->pictureUrl = $request->pictureUrl;
            $seged->save();
            return response()->json([
                "id" => $seged->id,
            ], 201);
        } catch(Exception $e) {
            return response()->json("Hiányos adatok", 400);
        }
    }


    public function harmadik_feladat(journey $journey)
    {
        try {
            $journey->delete();
            return response()->json("", 204);
        } catch(Exception $e) {
            return response()->json("Az ajánlat nem létezik.", 404);
        }
        

    }

}
