<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\car;
use App\catagory;
use App\oder;
class orderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orders = oder::all();
        return view('order.index', ['orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $car = car::find($id);
        return view('order.create' , ['car' => $car]);
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
        $orders = new oder;
        $orders->customer_name = $request->customer_name;
        $orders->email = $request->email;
        $orders->address = $request->address;
        $orders->phone = $request->phone;
        // $request->car_id->implode('-');
        // dd($request->car_id);
        $orders->car_id = $request->car_id;
        $orders->save();     
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
        $order = oder::find($id);
        return view('order.edit', ['order' => $order]);
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
        $orders = oder::find($id);
        $orders->customer_name = $request->customer_name;
        $orders->email = $request->email;
        $orders->address = $request->address;
        $orders->phone = $request->phone;
        // $request->car_id->implode('-');
        // dd($request->car_id);
        $orders->car_id = $request->car_id;
        $orders->save();
        return redirect()->route('order.index')  ;   
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
        $order = oder::find($id);
        $order->delete();
        return redirect()->route('order.index');
    }
}
