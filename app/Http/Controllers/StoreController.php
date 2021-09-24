<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use DataTables;
use DB;

class StoreController extends Controller
{
    //
    public function index(Request $request){
    	
    	return view('store');
    }

    public function getStoreData(Request $request){
    	if($request->ajax())
     	{
      		$data = DB::table('store')->select('id','name','type','city','address','latitude','longitude','district','channelName','channelTypeName','investmentType','storeTypeName','openingDate','tax_id','staff','region')->paginate(100);
      		return view('pagination_data', compact('data'))->render();
     	}
    	$records = Store::paginate(100,['*'], 'page', 3);
    	return $records;
    }

    public function pagination()
    {
     	$data = Store::paginate(100);
     	return view('pagination', compact('data'));
     	
 /*   	$shops = DB::table('store')
    ->whereRaw('id = (SELECT MIN(id) from store)')
    ->orWhereRaw('id = (Select MAX(id) from store)')
    ->get();
    DB::table(function ($query) {
            $query->selectRaw('*')
                ->from('store')
                ->orderBy('id','desc')
                ->take(500);
        })->paginate(100);;
    dd($shops);
*/
/*    	$count = DB::select('SELECT COUNT(*) FROM store');*/
    }

    public function fetch_data(Request $request)
    {
     	if($request->ajax())
     	{
      		$data = Store::paginate(100);
      		return view('pagination_data', compact('data'))->render();
     	}
    }
}
