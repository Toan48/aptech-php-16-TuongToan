<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\category;
use App\car;
use Image;
use App\Http\Requests\CreateCarsRequest;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;

class cars_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('cars.indexcars');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //$categories = category::get();
        return view('cars.createcar1');//, ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCarsRequest $request)
    {
        //
        $car = New car;
        $car->name = $request->name;
        $car->year = $request->year;
        $car->price = $request->price;
        $car->bodystyle = $request->bodystyle;
        $car->engine = $request->engine;
        $car->transmission = $request->transmission;
        $car->fuel_style = $request->fuel_style;
        $car->color = $request->color;
        $car->category_id = $request->category;
        $car->description =$request->description;
        $filename = $request->file('image')->getClientOriginalName();
        $path = public_path('img');
        $request->file('image')->move($path, $filename);
        $car->image = $filename;
        $car->save();
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
        $cars = car::find($id);
        return view('cars.carsdetail', ['car'=>$cars]);
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
        //
    }
}
