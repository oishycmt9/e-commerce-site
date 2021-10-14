<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        return view('back-end.supplier.create');
    }
    public function store(Request $request)
    {
        $sup = new Supplier();
        $sup->name = $request->name;
        $sup->description = $request->description;
        if($request->file('profile_picture')!=null)
        {
            //for image upload
            $prfImg = $request->file('profile_picture');
            $prfExt = $prfImg->getClientOriginalExtension();
            $time = time();
            $prfUrl = $time.'_'.$request->name.'.'.$prfExt;
            $directory = 'admin/supplier/';
            $sup->profile_picture = $directory.$prfUrl;
            $prfImg->move($directory,$prfUrl);
        }
        $sup->contact = $request->contact;
        $sup->email = $request->email;
        $sup->website = $request->website;
        $sup->address = $request->address;
        $sup->postal_code = $request->postal_code;
        $sup->city = $request->city;
        $sup->country = $request->country;
        $sup->save();
        return back()->with('message','Supplier Created Successfully');
    }
    public function show()
    {
        $suppliers = Supplier::all();
        return view('back-end.supplier.show',['suppliers'=>$suppliers]);
    }
    public function edit($id)
    {
        $sup = Supplier::find($id);
        return view('back-end.supplier.edit',['sup'=>$sup]);
    }
    public function update(Request $request)
    {
        $sup = Supplier::find($request->id);
        $sup->name = $request->name;
        $sup->description = $request->description;
        if($request->file('profile_picture')!=null)
        {
            //for image upload
            $prfImg = $request->file('profile_picture');
            $prfExt = $prfImg->getClientOriginalExtension();
            $time = time();
            $prfUrl = $time.'_'.$request->name.'.'.$prfExt;
            $directory = 'admin/supplier/';
            $sup->profile_picture = $directory.$prfUrl;
            $prfImg->move($directory,$prfUrl);
        }
        $sup->contact = $request->contact;
        $sup->email = $request->email;
        $sup->website = $request->website;
        $sup->address = $request->address;
        $sup->postal_code = $request->postal_code;
        $sup->city = $request->city;
        $sup->country = $request->country;
        $sup->status = $request->status;
        $sup->update();
        return redirect('/supplier/show')->with('message','Supplier updated successfully!');
    }
    public function details($id)
    {
        $sup = Supplier::find($id);
        return view('back-end.supplier.details',['sup'=>$sup]);
    }
    public function delete($id)
    {
        $supplier = Supplier::find($id);
        $supplier->delete();
        return back()->with('message','Supplier Deleted Successfully!');
    }
}
