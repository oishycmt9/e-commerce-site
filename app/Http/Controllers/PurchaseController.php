<?php

namespace App\Http\Controllers;
use App\Purchase;
use App\Product;
use App\Supplier;
use Illuminate\Http\Request;
use DB;

class PurchaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        $products = Product::where('status',1)->get();
        $suppliers = Supplier::where('status',1)->get();
        return view('back-end.purchase.create',['products'=>$products,'suppliers'=>$suppliers]);
    }

    public function store(Request $request)
    {
        $result = Purchase::create($request->all());
        if($result)
            return back()->with('message','Purchase Created Successfully.');
        else
            return back()->with('message','Purchase Created Failed.');
    }
    public function show()
    {
        $purchases = DB::table('purchases')
            ->join('products','purchases.product_id','=','products.id')
            ->join('suppliers','purchases.supplier_id','=','suppliers.id')
            ->select('purchases.*','products.name as product','suppliers.name as supplier')
            ->get();
        return view('back-end.purchase.show',['purchases'=>$purchases]);
    }
    public function edit($id)
    {
        $purchase = Purchase::find($id);
        $products = Product::where('status',1)->get();
        $suppliers = Supplier::where('status',1)->get();
        return view('back-end.purchase.edit',['purchase'=>$purchase,'products'=>$products,'suppliers'=>$suppliers]);
    }
    public function update(Request $request)
    {
        $purchase = Purchase::find($request->id);
        $purchase->product_id = $request->product_id;
        $purchase->supplier_id = $request->supplier_id;
        $purchase->quantity = $request->quantity;
        $purchase->purchase_price = $request->purchase_price;
        $purchase->regular_price = $request->regular_price;
        $purchase->sell_price = $request->sell_price;
        $purchase->status = $request->status;
        $purchase->update();
        return redirect('/purchase/show')->with('message','Purchase updated successfully!');
    }
    public function delete($id)
    {
        $purchase = Purchase::find($id);
        $purchase->delete();
        return back()->with('message','Purchase Deleted Successfully!');
    }
}
