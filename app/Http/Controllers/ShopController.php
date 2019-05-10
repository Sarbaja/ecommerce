<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\ProductsFeature;
use App\ProductsImage;

class ShopController extends Controller
{
    
    public function shop(){
        //$products= Product::get();
        $products = Product::inRandomOrder()->where('status', 1)->get();
        
        //This is advanced approach with the relations
        $categories = Category::with('categories')->where(['parent_id'=> 0])->get();
        return view('frontend.shop')->with('products', $products)->with('categories', $categories);

        /*$categories = json_decode(json_encode($categories));
        echo "<pre>"; print_r($categories); die;*/

        //This one is basic approach without the relation 
        //$categories = Category::where(['parent_id'=> 0])->get();

        // This is basic approach without relationship in table 
        /*$categories_menu = "";
        foreach($categories as $cat){
            //echo $cat->name;
            $categories_menu .= "<div class='panel-heading'>
                <h4 class='panel-title'>
                    <a data-toggle='collapse' href='#".$cat->name."'>" .$cat->name. "</a>
                </h4>
            </div>

            <div id='".$cat->name."' class='panel-collapse collapse'>
                <ul>";
                    $sub_categories = Category::where(['parent_id' => $cat->id])->get();
                    foreach($sub_categories as $subcat){
                        $categories_menu .= "<li style='margin:0px;'><a href='#'>".$subcat->name."</a></li>";
                    }
                $categories_menu .= "</ul>
            </div>";
        }

     return view('frontend.shop')->with('products', $products)->with('categories_menu', $categories_menu);*/

    }

    public function productsListing($url = null){

        $countCategory = Category::where(['url'=> $url, 'status'=> 1])->count();
        if($countCategory == 0){
            abort(404);
        }

        $categories = Category::with('categories')->where(['parent_id'=> 0])->get();
        $categoryDetails = Category::where(['url' => $url])->first();
        
        if($categoryDetails->parent_id == 0){
            $subCategories = Category::where(['parent_id' => $categoryDetails->id])->get();
            //$cat_ids = "";
            foreach($subCategories as $key => $subcat){
                $cat_ids[] = $subcat->id;
            }
            //echo $cat_ids; die;
            //print_r($cat_ids); die;
            $productAll = Product::whereIn('category_id', $cat_ids)->where('status', 1)->get();
            $productAll = json_decode(json_encode($productAll));
            //echo "<pre>"; print_r($productAll); die;
        }
        else{
            $productAll = Product::where(['category_id' => $categoryDetails->id])->where('status', 1)->get();
        }
        return view('frontend.listing')->with('categoryDetails', $categoryDetails)->with('productAll', $productAll)->with('categories', $categories);
    }

    public function product($id = null){

        //404 page for disabled products
        $countProduct = Product::where(['id'=> $id, 'status'=> 1])->count();
        if($countProduct == 0){
            abort(404);
        }

        //get all product details
        $productDetails = Product::with('attributes')->where('id', $id)->first();
        $productDetails =json_decode(json_encode($productDetails));
        //echo "<pre>"; print_r($productDetails); die;

        //related products
        $relatedProducts = Product::where('id', '!=', $id)->where(['category_id' => $productDetails->category_id])->get();
        $relatedProducts =json_decode(json_encode($relatedProducts));
        //echo "<pre>"; print_r($relatedProducts); die;

        $productAltImages = ProductsImage::where('product_id', $id)->get();
        //$productAltImages = json_decode(json_encode($productAltImages));
        //echo "<pre>"; print_r($productAltImages); die;

        $total_stock = ProductsFeature::where('product_id', $id)->sum('stock');

        return view('frontend.product_details')->with('productAltImages', $productAltImages)->with('productDetails', $productDetails)->with('total_stock', $total_stock)->with('relatedProducts', $relatedProducts);

    }

    public function getProductPrice(Request $request){
        $data = $request->all();
        //echo "<pre>"; print_r($data); die;
        $proArr = explode("-", $data['idSize']);
        //echo $proArr[0]; echo $proArr[1]; die;
        $proAttr = ProductsFeature::where(['product_id' => $proArr[0], 'size' => $proArr[1]])->first();
        echo $proAttr->price;
        echo "#";
        echo $proAttr->stock;
    }

}