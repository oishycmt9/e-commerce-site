<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use App\Supplier;
use App\Brand;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        $categories = Category::where('status',1)->get();
        $brands = Brand::where('status',1)->get();
        $suppliers = Supplier::where('status',1)->get();
        return view('back-end.product.create',['categories'=>$categories,'brands'=>$brands,'suppliers'=>$suppliers]);
    }
    public function store(Request $request)
    {
        $prd = new Product(); /*prd to product should be correction it*/
        $prd->name = $request->name;
        $prd->description = $request->description;
        if($request->file('image')!=null)
        {
            //for image upload
            $prdImg = $request->file('image');
            $prdExt = $prdImg->getClientOriginalExtension();
            $time = time();
            $prdUrl = $time.'_'.$request->name.'.'.$prdExt;
            $directory = 'admin/product/';
            $prd->image = $directory.$prdUrl;
            $prdImg->move($directory,$prdUrl);
        }
        $prd->category_id = $request->category_id;
        $prd->brand_id = $request->brand_id;
        $prd->supplier_id = $request->supplier_id;
        $prd->unit = $request->unit;
        $prd->regular_price = $request->regular_price;
        $prd->sell_price = $request->sell_price;
        $prd->save();
        return back()->with('message','Product Created Successfully');
    }
    public function show()
    {
        $products = DB::table('products')
            ->join('brands','products.brand_id','=','brands.id')
            ->join('categories','products.category_id','=','categories.id')
            ->join('suppliers','products.supplier_id','=','suppliers.id')
            ->select('products.*','brands.name as brand','categories.name as category','suppliers.name as supplier')
            ->get();
        return view('back-end.product.show',['products'=>$products]);
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::where('status',1)->get();
        $brands = Brand::where('status',1)->get();
        $suppliers = Supplier::where('status',1)->get();
        return view('back-end.product.edit',['product'=>$product,'categories'=>$categories,'brands'=>$brands,'suppliers'=>$suppliers]);
    }
    public function update(Request $request)
    {
        $product = Product::find($request->id);
        $product->name = $request->name;
        $product->description = $request->description;
        if($request->file('image')!=null)
        {
            //for image upload
            $productImg = $request->file('image');
            $productExt = $productImg->getClientOriginalExtension();
            $time = time();
            $productUrl = $time.'_'.$request->name.'.'.$productExt;
            $directory = 'admin/product/';
            $product->image = $directory.$productUrl;
            $productImg->move($directory,$productUrl);
        }
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->supplier_id = $request->supplier_id;
        $product->unit = $request->unit;
        $product->regular_price = $request->regular_price;
        $product->sell_price = $request->sell_price;
        $product->status = $request->status;
        $product->update();

        return redirect('/product/show')->with('message','Product updated successfully!');
    }
    public function details($id)
    {
        //$question = Question::find($id);
        $product = DB::table('products')
            ->join('brands','products.brand_id','=','brands.id')
            ->join('categories','products.category_id','=','categories.id')
            ->join('suppliers','products.supplier_id','=','suppliers.id')
            ->select('products.*','brands.name as brand','categories.name as category','suppliers.name as supplier')
            ->where('products.id','=',$id)
            ->get();
        return view('back-end.product.details',['product'=>$product]);
    }
    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return back()->with('message','Product Deleted Successfully!');
    }


}
