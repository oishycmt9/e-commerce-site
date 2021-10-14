<?php

namespace App\Http\Controllers;

//use App\Brand;
use App\Product;
use DB;
use Illuminate\Http\Request;

class SiteController extends Controller
{
//    public function home(){
//        $products = Product::all();
//        return view('front-end.home.home',['products'=>$products]);
//    }

    public function home($id=null, $type=null)
    {
//        $brands = Brand::all();
        if($id==null && $type==null)
            $products = Product::all();
        elseif ($type=='category')
            $products = Product::where('category_id',$id)->get();
        elseif($type=='brand')
            $products = Product::where('brand_id',$id)->get();
        else
            $products = Product::all();

        return view('front-end.home.home',['products'=>$products]);
    }
    public function price($type=null,$min=null,$max=null)
    {
//        $brands = Brand::all();
        //return $type."|".$min."|".$max;
        $products=array();
        if($min!=null && $max!=null)
            $products = DB::table('products')->whereBetween('sell_price',[$min,$max])->get();
        else
            $products =Product::all();
//        return $products;
        return view('front-end.home.home',['products'=>$products]);
    }
    public function category($type=null,$id=null)
    {
//        $brands = Brand::all();
        if($id==null && $type==null)
            $products = Product::all();
        elseif ($type=='laptop')
            $products = Product::where('category_id',$id)->get();
        else
            $products = Product::all();
        return view('front-end.home.home',['products'=>$products]);

    }
    public function single()
    {
        return view('front-end.single.single');
    }
    public function product()
    {
        return view('front-end.product.product');
    }
    public function productDetails($id)
    {
        $product = Product::find($id);
        return view('front-end.product.details',['product'=>$product]);
    }

    public function SearchautoComplete(Request $request)
    {
        $query = $request->get('term','');
        $products = Product::where('name','LIKE','%'.$query.'%')->where('status','0')->get();

        $data = [];
        foreach ($products as $items) {
            $data[] = [
                'value'=>$items->name,
                'id'=>$items->id
            ];
        }
        if(count($data))
        {
            return $data;
        }
        else
        {
            return ['value'=>'No Result Found','id'=>''];
        }
    }
    public function result(Request $request)
    {
        $searchingdata = $request->input('search_product');
        $products = Product::where('name','LIKE','%'.$searchingdata.'%')->where('status','0')->first();
        if($products)
        {
            if(isset($_POST['searchbtn']))
            {
                return redirect('collection/'.$products->subcategory->category->group->url.'/'.
                    $products->subcategory->category->url.'/'.$products->subcategory->url);
            }
            else
            {
                return redirect('collection/'.$products->subcategory->category->group->url.'/'.
                $products->subcategory->category->url.'/'.$products->subcategory->url.'/'.$products->url);
            }
        }
        else
        {
            return redirect('/')->with('status','Product Not Available');
        }
    }

    public function about()
    {
        return view('front-end.about.about');
    }
    public function contact()
    {
        return view('front-end.contact.contact');
    }
    public function checkout()
    {
        return view('front-end.checkout.checkout');
    }
    public function payment()
    {
        return view('front-end.payment.payment');
    }
}
