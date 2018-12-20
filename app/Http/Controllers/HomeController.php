<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        $products = Product::all();
        return view('welcome', compact('products'));
    }


    public function index()
    {
        return view('home');
    }

    public function addNew()
    {
        return view('addnew');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'qty' => 'required',
            'price' => 'required'
        ]);

        $products = new Product;
        $products->name = $request->name;
        $products->qty = $request->qty;
        $products->price = $request->price;
        $products->save();

        return redirect()->route('index');
    }

    public function edit($id)
    {
        $edit = Product::find($id);
        return view('edit', compact('edit'));
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'name' => 'required',
            'qty' => 'required',
            'price' => 'required'
        ]);

        $products = Product::where('id', $id)->first();
        $products->name = $request->name;
        $products->qty = $request->qty;
        $products->price = $request->price;
        $products->save();

        return redirect()->route('index');
        
    }
}
