<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Member;
use DB;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

    public function __construct()
    {
   
     $this->middleware('auth');
    }

    public function index()
    {
        //
        $articles =DB::table('products')
                ->join('members','members.id', '=', 'products.user_id')
                ->select('products.id','members.email','products.brand_name','products.generic_name', 'products.category','products.rent_days','products.total')
                ->get();
return view('admin.products.index',['products'=>$articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $arr['member'] = Member::all();
                return view('admin.products.create')->with($arr);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $products)
    {
        if($request->image->getClientOriginalName()){
            $ext = $request->image->getClientOriginalExtension();
            $file = date('YmdHis').rand(1,9999).'.'.$ext;
        
        //
        $request->image->storeAs('public/products',$file);
    }
    else{
        $file = '';
    }
        $products->user_id = $request->user_id;
        $products->image = $file;
        $products->brand_name = $request->brand_name;
        $products->generic_name = $request->generic_name;
        $products->category = $request->category;
        $products->rent_days = $request->rent_days;
        $products->total = $request->total;
        $products->save();
        return redirect()->route('admin.products.index');
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
    public function edit(product $product)
    {
        $arr['member'] = Member::all();
        $arr['products'] = $product;
        return view('admin.products.edit')->with($arr);



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        if(isset($request->image) && $request->image->getClientOriginalName()){
            $ext = $request->image->getClientOriginalExtension();
            $file = date('YmdHis').rand(1,9999).'.'.$ext;
        
        //
        $request->image->storeAs('public/products',$file);
    }
    else{
        if (! $product->image){
            $file = '';
        }else{
            $file = $product->image;
        }
    }
        $product->user_id = $request->user_id;
        $product->image = $file;
        $product->brand_name = $request->brand_name;
        $product->generic_name = $request->generic_name;
        $product->category = $request->category;
        $product->rent_days = $request->rent_days;
        $product->total = $request->total;
        $product->save();
        return redirect()->route('admin.products.index');
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
        Product::destroy($id);
        return redirect()-> route('admin.products.index');
    }
}
