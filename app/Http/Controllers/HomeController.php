<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;


class HomeController extends Controller

{
    function register(Request $req)
    {
    		$client=new Client;
            $client->name=$req->input('name');
            $client->email=$req->input('email');
            $client->save();
            return redirect('list');


    }

    function list()

    {

    	    $data=Client::all();
            return view('list',["data"=>$data]);


    }
    function static list2()
    {
    	$e= client::get()->count();
    	echo "$e";

    		//$data = Client::update('update clients set amt = 14  where id = ?', ['1']);
    	
    		/*$obj=Client::where('id','=',1)->first();
			if($e > 14){
   			$obj->column_name=value;
   			$obj->save();*/

   			//$data=Client::where(['id'=>1])->update(['amt'=>'14','pool'=>'2']);


    	   // $data=Client::where(['id'=>1])->update(['amt'=>'14','pool'=>'2']);

   			    	    $data=Client::update('update clients set amt = 14  where id = ?', ['1']);

             return view('list2',["data"=>$data]);
           


    }
    function list3()
    {
    	$e= client::get()->count();
    	echo "$e";
    	
    	    $data=Client::all();
            return view('list3',["data"=>$data]);


    }

























}
