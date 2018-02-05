<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Datatables;
use DB;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('items.index');
        // return view('items.index')->with('products',$products);
    }

    public function getItems(){
        
        $data = DB::table('products')->select('*');
        return Datatables::of($data)
            ->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
                'description' => 'required',
                'quantityInStock' => 'required',
                'wholeSalePrice' => 'required',
                'retailPrice' => 'required'
        ]);
        return "hahaha";
        // $item = new Product;
        // $item->description = $request->input('description');
        // $item->quantityInStock = $request->input('quantityInStock');
        // $item->wholeSalePrice = $request->input('wholeSalePrice');
        // $item->retailPrice = $request->input('retailPrice');
        // $item->save();
        // return "success";
       // return redirect('/items')->with('success','Success adding item');
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
}
