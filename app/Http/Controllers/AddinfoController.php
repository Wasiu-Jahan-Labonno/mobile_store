<?php

namespace App\Http\Controllers;
use Image;
use App\Models\addinfo;
use Illuminate\Http\Request;
use Validated;
use Auth;
use users;
use Carbon\Carbon;

class AddinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     *
     */

    public function product()
    {

      $products = addinfo::all();
     /*  return view('product',compact('products')); */
     return view('frontend.product',compact('products'));
    }

    public function productinsert(Request $request)
    {


/*    $products= addinfo::insert([

          'brand_name'=>$request->brand_name,
          'modle_name'=>$request->modle_name,
          'descrtiption'=>$request->descrtiption,
          'product_photo'=>$request->product_photo,
          'created_at'=>Carbon::now(),
        ]);
 */




$products = addinfo::create($request->except('_token',)+ [
         'product_id' => auth()->id(),
         'product_photo'=>"ok"

]);

$request->validate([
    'product_photo' => 'required|image',

]);


 if($request->hasFile('product_photo')){


     $new_name = $products->id.Carbon::now()->format('Y-m-d') . "." . $request->file('product_photo')->getClientOriginalExtension();
    $img = Image::make($request->file('product_photo'))->resize(300, 200);
    $img->save(base_path('public\uploads\product_photo/' . $new_name), 80);



Addinfo::find($products->id)->update([
    'product_photo' => $new_name,

]);



 }







       return back()->with('success_massage','Add product successfully!');
    }

     public function productedit($id)
    {
       return view('frontend.productedit',[
            'product'=>addinfo::find($id)

       ]);

    }
    public function producteditpost(Request $request,$id)
    {
       addinfo::find($id)->update([
        'brand_name'=>$request->brand_name,
         'modle_name'=>$request->modle_name,
          'descrtiption'=>$request->descrtiption,
          'created_at'=>Carbon::now(),

       ]);
       return redirect('/product');


       }

      public function productdelet($id)
    {

         addinfo::find($id)->delete();
         return back();

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\addinfo  $addinfo
     * @return \Illuminate\Http\Response
     */
    public function show(addinfo $addinfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\addinfo  $addinfo
     * @return \Illuminate\Http\Response
     */
    public function edit(addinfo $addinfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\addinfo  $addinfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, addinfo $addinfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\addinfo  $addinfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(addinfo $addinfo)
    {
        //
    }
}
