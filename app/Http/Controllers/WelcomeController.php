<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class WelcomeController extends Controller
{
    //
    public function home()
    {
        return view("pages.home");

    }

    public function about()
    {
        return view("pages.about");
    }


    public function service()
    {
        $products=Product::get();

        return view("pages.service")->with('products',$products);
    }

    public function services()
    {
        $products=Product::orderBY('product_name','asc')->paginate(1);
        // $products=Product::inRandomOrder()->paginate(1);

        return view("pages.services")->with('products',$products);
    }

    public function details($id)
    {
        $products=DB::table('products')
        ->where('id',$id)
        ->get();

       
        return view("pages.details")->with('products',$products);
    }


    // public function service($name=null)
    // {
    //     return '<h1>welcome '.$name.'</h1>' ;
    // }

}
