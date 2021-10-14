<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(){
        return view('back-end.brand.create');
    }
    public function store(Request $request)
    {
        $brand = new Brand();
        $brand->name = $request->name;
        $brand->description = $request->description;
        if($request->file('logo')!=null)
        {
            //for image upload
            $logoImg = $request->file('logo');
            $logoExt = $logoImg->getClientOriginalExtension();
            $time = time();
            $logoUrl = $time.'_'.$request->name.'.'.$logoExt;
            $directory = 'admin/brand/';
            $brand->logo = $directory.$logoUrl;
            $logoImg->move($directory,$logoUrl);
        }
        $brand->save();

        return back()->with('message','Brand Created Successfully');
    }
    public function show()
    {
        $brands = Brand::all();
        return view('back-end.brand.show',['brands'=>$brands]);
    }
    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('back-end.brand.edit',['brand'=>$brand]);
    }
    public function update(Request $request)
    {
        $brand = Brand::find($request->id);
        $brand->name = $request->name;
        $brand->description = $request->description;
        if($request->file('logo')!=null)
        {
            //for image upload
            $logoImg = $request->file('logo');
            $logoExt = $logoImg->getClientOriginalExtension();
            $time = time();
            $logoUrl = $time.'_'.$request->name.'.'.$logoExt;
            $directory = 'admin/brand/';
            $brand->logo = $directory.$logoUrl;
            $logoImg->move($directory,$logoUrl);
        }
        $brand->status = $request->status;
        $brand->update();
        return redirect('/brand/show')->with('message','Brand updated successfully!');
    }
    public function delete($id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        return back()->with('message','Brand Deleted Successfully!');
    }
}
