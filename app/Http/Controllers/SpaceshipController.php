<?php

namespace App\Http\Controllers;

use App\Spaceship;
use Illuminate\Http\Request;

class SpaceshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $ships = Spaceship::all();

      return view('spaceships')->with('ships', $ships);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $ships = Spaceship::all();

      return view('spaceships_create')->with('ships', $ships);
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
        'speed' => 'required',
        'armor' => 'required'
      ]);
      //dd($request->all());
      $spaceship_new = new Spaceship;
      $spaceship_new->name = $request->name;
      $spaceship_new->speed = $request->speed;
      $spaceship_new->armor = $request->armor;
      $spaceship_new->save();
      return redirect()->route('spaceships.index');
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
        //
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
      $ship = Spaceship::find($id);
      $ship->delete();
      return redirect()->back();
    }
}
