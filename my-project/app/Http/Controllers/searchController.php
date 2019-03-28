<?php
use Illuminate\Support\Facades\DB;
namespace App\Http\Controllers;
use App\car;
use Illuminate\Http\Request;
use http\Env\Response;
class searchController extends Controller
{
    //


    public function searchByName(Request $request)
    {
     
        if($request->has('search')){
            $cars = car::search($request->get('search'))->get();	
            //$cars = car::paginate(12);
    	}else{
    		$cars = car::get();
    	}

    	return view('search.index', compact('cars'));
        
    }

      
    
}
