<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(){
        return view('back-end.category.create');
    }
    public function store(Request $request)
    {
        $cat = new Category(); /*cat will be changed of category*/
        $cat->name = $request->name;
        $cat->description = $request->description;
        if($request->file('logo')!=null)
        {
            //for image upload
            $logoImg = $request->file('logo');
            $logoExt = $logoImg->getClientOriginalExtension();
            $time = time();
            $logoUrl = $time.'_'.$request->name.'.'.$logoExt;
            $directory = 'admin/category/';
            $cat->logo = $directory.$logoUrl;
            $logoImg->move($directory,$logoUrl);
        }
        $cat->save();
        return back()->with('message','Category Created Successfully');
    }
    public function show()
    {
        $categories = Category::all();
        return view('back-end.category.show',['categories'=>$categories]);
    }

    public function edit($id)
    {
        $cat = Category::find($id);
        return view('back-end.category.edit',['cat'=>$cat]);
    }
    public function update(Request $request)
    {
        $cat = Category::find($request->id);
        $cat->name = $request->name;
        $cat->description = $request->description;
        if($request->file('logo')!=null)
        {
            //for image upload
            $logoImg = $request->file('logo');
            $logoExt = $logoImg->getClientOriginalExtension();
            $time = time();
            $logoUrl = $time.'_'.$request->name.'.'.$logoExt;
            $directory = 'admin/category/';
            $cat->logo = $directory.$logoUrl;
            $logoImg->move($directory,$logoUrl);
        }
        $cat->status = $request->status;
        $cat->update();
        return redirect('/category/show')->with('message','Category updated successfully!');
    }

    public function delete($id)
    {
        $cat = Category::find($id);
        $cat->delete();
        return back()->with('message','Category Deleted Successfully!');
    }

               /*test */
    public function createOne(){
        return view('back-end.category-one.create-and-show');
    }

    public function storeOne(Request $request)
    {
        $cat = new Category(); /*cat will be changed of category*/
        $cat->name = $request->name;
        $cat->description = $request->description;
        if($request->file('logo')!=null)
        {
            //for image upload
            $logoImg = $request->file('logo');
            $logoExt = $logoImg->getClientOriginalExtension();
            $time = time();
            $logoUrl = $time.'_'.$request->name.'.'.$logoExt;
            $directory = 'admin/category/';
            $cat->logo = $directory.$logoUrl;
            $logoImg->move($directory,$logoUrl);
        }
        $cat->save();
        return back()->with('message','Category Created Successfully');
    }
    public function showOne()
    {
        $categories = Category::all();
        return view('back-end.category-one.create-and-show',['categories'=>$categories]);
    }
    public function editOne($id)
    {
        $cat = Category::find($id);
        return view('back-end.category-one.edit-one',['cat'=>$cat]);
    }
    public function updateOne(Request $request)
    {
        $cat = Category::find($request->id);
        $cat->name = $request->name;
        $cat->description = $request->description;
        if($request->file('logo')!=null)
        {
            //for image upload
            $logoImg = $request->file('logo');
            $logoExt = $logoImg->getClientOriginalExtension();
            $time = time();
            $logoUrl = $time.'_'.$request->name.'.'.$logoExt;
            $directory = 'admin/category/';
            $cat->logo = $directory.$logoUrl;
            $logoImg->move($directory,$logoUrl);
        }
        $cat->status = $request->status;
        $cat->update();
        return redirect('/category-one/show-one')->with('message','Category updated successfully!');
    }
    public function deleteOne($id)
    {
        $cat = Category::find($id);
        $cat->delete();
        return back()->with('message','Category Deleted Successfully!');
    }
}
