<?php

namespace App\Http\Controllers;

use App\Models\Tikect;
use Illuminate\Http\Request;

class TikectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          return response()->json(Tikect::get()); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newTicker = Tikect::create($request->json()->all());
        return response()->json($newTicker, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(Tikect::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tikect = Tikect::find($id);
        $tikect->update($request->json()->all());
        return response()->json($tikect);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tikect = Tikect::find($id);
        $tikect->delete();
        return response()->json(["response" => "El registro se ha eliminado exitosamente"]);
    }

    public function assing(Request $request)
    {
        $user_id = $request->user_id;
        $tikect_id = $request->tikect_id;
        Tikect::find($tikect_id)->users()->attach($user_id);

        return response()->json(["response" => "El tikect se asigno correctamente"]);

    }
}
