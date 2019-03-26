<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\car;
use App\category;
use App\Http\Requests\createProductRequest;

class carsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cars = car::paginate(12);
        // dd($cars);
        return view('cars.index', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = category::all();
        return view('admin.createProduct', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        // $car = new car;
        // $car->name = $request->name;
        // $car->year = $request->year;
        // $car->body_style = $request->body_style;
        // $car->engine = $request->engine;
        // $car->price = $request->price;
        // $car->transmission = $request->transmission;
        // $car->color = $request->color;
        // $car->fuel_style = $request->fuel_style; 
        // $car->category_id = $request->categories;
        // //up image to database
        // $filename = $request->file('image')->getClientOriginalName();
        // $path = public_path('img');
        // $request->file('image')->move($path, $filename);
        // $car->image = $filename;
        // $car->description = $request->description;
        // $car->save();
        // return redirect()->route('cars.index');
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
        $car = car::find($id);
        return view('cars.detail', ['car' => $car]);
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

    public function home()
    {
        return view('cars.home');
    }
}
