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
        $images_product = car::find($id)->images_product;
        $category = category::find($id);
        //dd($images_product);
        $car = car::find($id);
        return view('cars.detail', ['car' => $car, 'images_product' => $images_product, 'category' => $category]);
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
        $dealCars = car::where('deal_of_week', 1)->get();
        $bestsale = car::where('best_sale', 1)->get();
        return view('cars.home', ['dealCars' => $dealCars], ['bestsale' => $bestsale]);
    }
    
    
    public function dealOfWeek()
    {
        // $dealCars = car::where('deal_of_week', 1)->get();
        // return view('cars.home', ['dealCars' => $dealCars]);

    }

    public function bestSale()
    {
        // $bestsale = car::where('best_sale', 1)->get();
        // dd($bestsale);
        // return view('cars.home', ['bestsale' => $bestsale]);
    }
}
