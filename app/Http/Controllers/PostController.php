<?php

namespace App\Http\Controllers;

use App\Models\cars;
use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('choose');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cars=new Cars();
        $cars->brand=$request->post('brand');
        $cars->price=$request->post('price');
        $cars->description=$request->post('description');
        $cars->mileage=$request->post('mileage');
        $cars->seats=$request->post('seats');
        if($request->hasFile('image'))
       {
           $file=$request->file('image');
           $extension=$file->getClientOriginalExtension();
           $filename=time() .'.'. $extension;
           $file->move('images/',$filename);
           $cars->image=$filename;
       }
       else{
           return $request;
           $cars->image='';
       }
         $cars->save();

        $cars=cars::all();
        return view('details',['cars'=>$cars]);

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function show(cars $cars)
    {
       
        return view('admin');
    }
    public function showlist(cars $cars)
    {
        // $cars=new Cars();
        // $cars->brand=$cars->get('brand');
        // $cars->price=$cars->get('price');
        // $cars->description=$cars->get('description');
        // $cars->mileage=$cars->get('mileage');
        // $cars->seats=$cars->get('seats');
        $cars=cars::all();
        return view('dashboard',['cars'=>$cars]);
        }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function edit(cars $cars)
    {
        //
    }

    public function bigImage($id)
    {
        $big=DB::table("cars_info")->where('id',$id)->first();
        return view('bigimage',compact('big'));
    }

    public function rating (Request $request) {
        return view('rating');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cars $cars)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function destroy(cars $cars)
    {
        //
    }
}
