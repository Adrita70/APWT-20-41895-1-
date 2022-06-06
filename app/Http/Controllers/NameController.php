<?php

namespace App\Http\Controllers;
use  App\Models\Service;
use Illuminate\Http\Request;

class NameController extends Controller
{
    function home()
    {
        $services = Service::all();
        $services = Service::select('name','price')->get();
        
        return view('index')
               ->with('services',$services);
    }

    function make(){
        return view('make');
    }

    function index()
    {
        $services = Service::all();
        
        return view('index')
               ->with('service',$services);
    }

    function submit(Request $req){

        $this->validate($req,
             [
                "name"=>"required|max:10",
                "price"=>"required",
             ],[]
            );

            $s1 = new Service();
            $s1->name = $req->name;
            $s1->price = $req->price;
            $s1->save(); 
            return "Submitted with valid value";
    }
}