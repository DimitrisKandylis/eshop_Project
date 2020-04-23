<?php

namespace App\Http\Controllers;

use App\Planet;
use Illuminate\Http\Request;

class PlanetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $planets = Planet::all();

      return view('planets')->with('planets', $planets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $planets = Planet::all();

      return view('planet_create')->with('planets', $planets);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'name' => 'required|max:50',
        'dim_x' => 'required',
        'dim_y' => 'required'
      ]);
      //dd($request->all());
      $planet_new = new Planet;
      $planet_new->name = $request->name;
      $planet_new->dim_x = $request->dim_x;
      $planet_new->dim_y = $request->dim_y;
      $planet_new->save();
      return redirect()->route('planets.index');
    }

    public function store_edit(Request $request)
    {
      $this->validate($request, [
        'name' => 'required|max:50',
        'dim_x' => 'required',
        'dim_y' => 'required'
      ]);
      //dd($request->all());
      $planet_edited = Planet::find($request->planet_id);
      $planet_edited->name = $request->name;
      $planet_edited->dim_x = $request->dim_x;
      $planet_edited->dim_y = $request->dim_y;
      $planet_edited->save();
      return redirect()->route('planets.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $planet = Planet::find($id);
        return view('planet_edit')->with('planet', $planet);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $planet = Planet::find($id);
      $planet->delete();
      return redirect()->back();
    }
}
