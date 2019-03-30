<?php

namespace App\Http\Controllers;
use App\category;
use Illuminate\Http\Request;
use App\car;
use App\Http\Requests\createProductRequest;
use Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\images_product;



class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cars = car::paginate(20);
        return view('admin.list-product', ['cars'=> $cars]);
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
        
        //store
        $car = new car;
        $car->name = $request->name;
        $car->year = $request->year;
        $car->body_style = $request->body_style;
        $car->engine = $request->engine;
        $car->price = $request->price;
        $car->transmission = $request->transmission;
        $car->color = $request->color;
        $car->fuel_style = $request->fuel_style; 
        $car->category_id = $request->categories;
        //upload image to database
        $filename = $request->file('image')->getClientOriginalName();
        $path = public_path('img');
        $request->file('image')->move($path, $filename);
        $car->image = $filename;
        $car->description = $request->description;
        $car->save();
        //upload images to images_product table
        
        if($request->hasfile('images_list'))
        {
            foreach($request->file('images_list') as $file)
            {
                $name = $file->getClientOriginalName();
                $path = public_path('img');
                $file->move($path, $name);
                $images[] = $name;
            }
        }
        $images_product = new images_product;
        $images_product->photo = json_encode($images);
        $images_product->car_id = $car->id;
        $images_product->save();

        return redirect()->route('admin.index');
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
        $car =car::find($id);
        return view('admin.show', ['car' =>$car]);
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
        $car = car::find($id);
        return view('admin.edit', ['car' => $car]);
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
        
        $car = car::find($id);
        $car->name = $request->name;
        $car->year = $request->year;
        $car->body_style = $request->body_style;
        $car->engine = $request->engine;
        $car->price = $request->price;
        $car->transmission = $request->transmission;
        $car->color = $request->color;
        $car->fuel_style = $request->fuel_style; 
        $car->category_id = $request->categories;
        //upload image to database
        $filename = $request->file('image')->getClientOriginalName();
        $path = public_path('img');
        $request->file('image')->move($path, $filename);
        $car->image = $filename;
        $car->description = $request->description;
        $car->best_sale = $request->best_sale;
        $car->deal_of_week = $request->deal_of_week;
        $car->save();
        return redirect()->route('admin.index');
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
        $car = car::find($id);
        $car->delete();
        return redirect()->route('admin.index');
    }

    public function home()
    {
        return view('admin.home');
    }

   
}
