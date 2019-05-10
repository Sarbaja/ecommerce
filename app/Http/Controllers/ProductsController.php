<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Session;
use App\Category;
use App\Product;
use App\ProductsFeature;
use App\DeliveryAddress;
use App\ProductsImage;
use App\Coupon;
use DB;
use App\User;
use App\Country;
use App\Order;
use App\OrdersProduct;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;

class ProductsController extends Controller
{
    public function viewProduct(){
        //$products = Product::get();
        $products= Product::orderBy('id', 'desc')->get();
        $products =json_decode(json_encode($products));
        foreach($products as $key => $val){
            $category_name = Category::where(['id' => $val->category_id])->first();
            $products[$key]->category_name = $category_name->name;
        }
        //echo "<pre>"; print_r($products); die;
        return view ('admin.products.view_product')->with('products', $products);
    }

    public function createProduct(Request $request){

        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            if(empty($data['category_id'])){
                return redirect()->back()->with('message_error', 'Category is missing');
            }
            $product = new Product;
            $product->category_id = $data['category_id'];
            $product->name = $data['product_name'];
            $product->code = $data['product_code'];
            $product->color = $data['product_color'];
            $product->description = $data['product_description'];
            $product->care= $data['care'];
            $product->price = $data['product_price'];

            //echo "sarbaja"; die;

            $this->validate($request, [
                'product_image' => 'image|nullable|max:1999'
            ]);
            
            //Upload Image
            if($request->hasFile('product_image')){

                //echo "sarbaja"; die;
                //echo "<pre>"; print_r($data); die;

               $image_tmp = Input::file('product_image');
               if($image_tmp->isValid()){
                    
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999). '.' .$extension;
                    $large_image_path = 'images/backend-img/products/large/' .$filename;
                    $medium_image_path = 'images/backend-img/products/medium/' .$filename;
                    $small_image_path = 'images/backend-img/products/small/' .$filename;

                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);

                    $product->image = $filename;
               }

            }

            if(empty($data['status'])){
                $status = 0;
            }else{
                $status = 1;
            }

            if(empty($data['feature_item'])){
                $feature_item = 0;
            }else{
                $feature_item = 1;
            }

            $product->feature_item = $feature_item;
            $product->status = $status;
            $product->save();
            return redirect('/admin/product')->with('message_success', 'Product has been added successfully');

        }

        $categories = Category::where(['parent_id' => 0])->get();
        $categories_dropdown= "<option value='' selected disabled>Select</option>";
        foreach($categories as $category){
            $categories_dropdown .= "<option value='" .$category->id. "'>" .$category->name. "</option>";
            $sub_categories= Category::where(['parent_id' => $category->id])->get();
            foreach($sub_categories as $sub_category){
                $categories_dropdown .= "<option value = '" .$sub_category->id. "'>&nbsp;--&nbsp;" .$sub_category->name ."</option>";
            }
        }
        return view('admin.products.create_product')->with('categories_dropdown', $categories_dropdown);

    }

    public function editProduct(Request $request, $id=null){

        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;

            //Upload Image
            if($request->hasFile('product_image')){

                //echo "sarbaja"; die;
                //echo "<pre>"; print_r($data); die;

               $image_tmp = Input::file('product_image');
               if($image_tmp->isValid()){
                    
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999). '.' .$extension;
                    $large_image_path = 'images/backend-img/products/large/' .$filename;
                    $medium_image_path = 'images/backend-img/products/medium/' .$filename;
                    $small_image_path = 'images/backend-img/products/small/' .$filename;

                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);
               }
            }
            else{
                $filename = $data['current_image'];
            }

            if(empty($data['status'])){
                $status = 0;
            }else{
                $status = 1;
            }

            if(empty($data['feature_item'])){
                $feature_item = 0;
            }else{
                $feature_item = 1;
            }


            Product::where(['id' => $id])->update(['category_id'=> $data['category_id'], 'name'=> $data['product_name'], 'code'=> $data['product_code'], 'color'=> $data['product_color'], 'description'=> $data['product_description'], 'care' => $data['care'], 'price'=> $data['product_price'], 'image'=> $filename, 'feature_item' => $feature_item,'status' => $status]);
            return redirect()->back()->with('message_success', 'Product has been updated successfully');
        }

        //get product details by id when clicked on it
        $productDetails = Product::where(['id' => $id])->first();

        $categories = Category::where(['parent_id' => 0])->get();
        $categories_dropdown= "<option value='' selected disabled>Select</option>";
        foreach($categories as $category){
            if($category->id == $productDetails->category_id){
                $selected = "selected";
            }
            else{
                $selected ="";
            }
            $categories_dropdown .= "<option value='" .$category->id. "' ".$selected. ">" .$category->name. "</option>";
            $sub_categories= Category::where(['parent_id' => $category->id])->get();
            foreach($sub_categories as $sub_category){
                if($sub_category->id == $productDetails->category_id){
                    $selected = "selected";
                }
                else{
                    $selected ="";
                }
                $categories_dropdown .= "<option value = '" .$sub_category->id. "' ".$selected. ">&nbsp;--&nbsp;" .$sub_category->name ."</option>";
            }
        }
        return view('admin.products.edit_product')->with('productDetails', $productDetails)->with('categories_dropdown', $categories_dropdown);
    }

    public function deleteProductImg($id = null){

        //get product image
        $productImage = Product::where(['id' => $id])->first();
        //echo $productImage->image; die;

        //get image path
        $large_image_path = 'images/backend-img/products/large/';
        $medium_image_path = 'images/backend-img/products/medium/';
        $small_image_path = 'images/backend-img/products/small/';

        //delete images from folders
        if(file_exists($large_image_path.$productImage->image)){
            unlink($large_image_path.$productImage->image);
        }

        if(file_exists($medium_image_path.$productImage->image)){
            unlink($medium_image_path.$productImage->image);
        }

        if(file_exists($small_image_path.$productImage->image)){
            unlink($small_image_path.$productImage->image);
        }

        //delete image from product table
        Product::where(['id' => $id])->update(['image' => '']);
        return redirect()->back()->with('message_success', 'Product Image deleted');
    }

    //delete product ra update quantity ma session forget garya cha hai 
    public function deleteProduct($id = null){
        Product::where(['id' => $id])->delete();
        return redirect()->back()->with('success_message', 'Product has been deleted');
    } 

    //Attributes create and edit, delete section
    public function addFeatures(Request $request, $id = null){
        $productDetails= Product::with('attributes')->where(['id' => $id])->first();
        //$productDetails = json_decode(json_encode($productDetails));
        //echo "<pre>"; print_r($productDetails); die;

        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;

            foreach($data['sku'] as $key => $val){
                if(!empty($val)){

                    //prevent duplicate sku check
                    $attrCountSKU = ProductsFeature::where('sku', $val)->count();
                    if($attrCountSKU > 0){
                        return redirect('admin/add-features/' .$id)->with('message_error', 'SKU already exists, Please add another one!');
                    }

                    //prevent duplicate size check
                    $attrCountSize = ProductsFeature::where(['product_id' => $id, 'size'=> $data['size'][$key]])->count();
                    if($attrCountSize > 0){
                        return redirect('admin/add-features/' .$id)->with('message_error', ''.$data['size'][$key].'Size already exists,Please add another one!');
                    }

                    $attribute = new ProductsFeature;
                    $attribute->product_id = $id;
                    $attribute->sku = $val;
                    $attribute->size = $data['size'][$key];
                    $attribute->price = $data['price'][$key];
                    $attribute->stock = $data['stock'][$key];
                    $attribute->save();

                }
            }

            return redirect('/admin/add-features/' .$id)->with('message_success', 'Product Attribute added successfully');
        }
        return view('admin.products.add_features')->with('productDetails', $productDetails);
    }  

    public function editAttributes(Request $request, $id = null){
        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            foreach($data['idAttr'] as $key => $attr){
                ProductsFeature::where(['id' => $data['idAttr'][$key]])->update(['price' => $data['price'][$key], 'stock' => $data['stock'][$key]]);
            }
            return redirect()->back()->with('message_success', 'Products Attributes updated successfully');
        }
    }

    public function deleteAttribute($id = null){
        ProductsFeature::where(['id' => $id])->delete();
        return redirect()->back()->with('message_success', 'Attribute deleted successfully');
    }


    public function addImages(Request $request, $id = null){
        $productDetails= Product::with('attributes')->where(['id' => $id])->first();
    
        if($request->isMethod('post')){
            // add images
            $data = $request->all();
            if($request->hasFile('image')){
                $files= $request->file('image');
                foreach($files as $file){
                    //resizing and uploading image
                    $image = new ProductsImage;
                    $extension = $file->getClientOriginalExtension();
                    $fileName = rand(111,99999). '.'. $extension;
                    $large_image_path = 'images/backend-img/products/large/' .$fileName;
                    $medium_image_path = 'images/backend-img/products/medium/' .$fileName;
                    $small_image_path = 'images/backend-img/products/small/' .$fileName;
                    Image::make($file)->save($large_image_path);
                    Image::make($file)->resize(600,600)->save($medium_image_path);
                    Image::make($file)->resize(300,300)->save($small_image_path);
                    $image->image = $fileName;
                    $image->product_id = $data['product_id'];
                    $image->save();

                }
            }
            return redirect('admin/add-images/'. $id)->with('message_success', 'Product images added successfully');

        }

        $productImages = ProductsImage::where(['product_id' => $id])->get();
        return view('admin.products.add_images')->with('productDetails', $productDetails)->with('productImages', $productImages);
    }

    public function deleteAltImage($id = null){

        //get product image
        $productImage = ProductsImage::where(['id' => $id])->first();
        //echo $productImage->image; die;

        //get image path
        $large_image_path = 'images/backend-img/products/large/';
        $medium_image_path = 'images/backend-img/products/medium/';
        $small_image_path = 'images/backend-img/products/small/';

        //delete images from folders
        if(file_exists($large_image_path.$productImage->image)){
            unlink($large_image_path.$productImage->image);
        }

        if(file_exists($medium_image_path.$productImage->image)){
            unlink($medium_image_path.$productImage->image);
        }

        if(file_exists($small_image_path.$productImage->image)){
            unlink($small_image_path.$productImage->image);
        }

        //delete image from product table
        ProductsImage::where(['id' => $id])->delete();
        return redirect()->back()->with('message_success', 'Product Alternate Image(s) deleted');
    }

    //Frontend area
    //Add to cart function 
    /*public function addtocart(Request $request){

        Session::forget('CouponAmount');
        Session::forget('CouponCode');

        //if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;

            if(empty($data['user_email'])){
                $data['user_email'] = '';
            }

            $session_id = Session::get('session_id');

            if(empty($session_id)){
                $session_id = str_random(40);
                Session::put('session_id', $session_id);
            }
            $sizeArr = explode("-", $data['size']);

            $countProducts = DB::table('cart')->where(['product_id' => $data['product_id'], 'product_color' => $data['product_color'], 'size' => $sizeArr[1], 'session_id' =>  $session_id])->count();
            //echo $countProducts; die;

            if($countProducts > 0){
                return redirect()->back()->with('message_error', 'Product already exists in cart');
            }else{

                $getSKU = ProductsFeature::select('sku')->where(['product_id' => $data['product_id'], 'size' => $sizeArr[1]])->first();
                DB::table('cart')->insert(['product_id' => $data['product_id'], 'product_name' => $data['product_name'], 'product_code' => $getSKU->sku, 'product_color' => $data['product_color'], 'size' => $sizeArr[1], 'price' => $data['price'], 'quantity' => $data['quantity'], 'user_email' =>  $data['user_email'], 'session_id' =>  $session_id]);

            }
        //}

        return redirect('/cart')->with('message_success', 'Product has been added in cart');
    }*/

    public function addtocart(Request $request){

        Session::forget('CouponAmount');
        Session::forget('CouponCode');

        //if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;

            //Check product stock is available or not
            $product_size = explode("-", $data['size']);
            //echo $product_size[1]; die;
            $getProductStock = ProductsFeature::where(['product_id' => $data['product_id'], 'size' => $product_size[1]])->first();
            //echo $getProductStock->stock; die;

            if($getProductStock->stock < $data['quantity']){
                return redirect()->back()->with('message_error', 'Required Quantity is not available!');

            }

            if(Auth::check()){
                $session_id = Session::get('session_id');
                $user_email = Auth::user()->email;
                DB::table('cart')->where(['session_id' => $session_id])->update(['user_email' => $user_email]);
            }else{
                $user_email  = '';
            }
            
        
            $session_id = Session::get('session_id');

            if(empty($session_id)){
                $session_id = str_random(40);
                Session::put('session_id', $session_id);
            }
            $sizeArr = explode("-", $data['size']);

            if(empty(Auth::check())){
                $countProducts = DB::table('cart')->where(['product_id' => $data['product_id'], 'product_color' => $data['product_color'], 'size' => $sizeArr[1], 'session_id' =>  $session_id])->count();
        
                if($countProducts > 0){
                    return redirect()->back()->with('message_error', 'Product already exists in cart');
                }
            }else{
                $countProducts = DB::table('cart')->where(['product_id' => $data['product_id'], 'product_color' => $data['product_color'], 'size' => $sizeArr[1], 'user_email' =>  Auth::User()->email])->count();
        
                if($countProducts > 0){
                    return redirect()->back()->with('message_error', 'Product already exists in cart');
                }
            }
           
                $getSKU = ProductsFeature::select('sku')->where(['product_id' => $data['product_id'], 'size' => $sizeArr[1]])->first();
                DB::table('cart')->insert(['product_id' => $data['product_id'], 'product_name' => $data['product_name'], 'product_code' => $getSKU->sku, 'product_color' => $data['product_color'], 'size' => $sizeArr[1], 'price' => $data['price'], 'quantity' => $data['quantity'], 'user_email' =>  $user_email, 'session_id' =>  $session_id]);
        //}

        return redirect('/cart')->with('message_success', 'Product has been added in cart');
    }

    /*public function cart(){

        $session_id = Session::get('session_id');
        //$user_email = Auth::user()->email;
        //$userCart = DB::table('cart')->where(['user_email' => $user_email])->get();
        $userCart = DB::table('cart')->where(['session_id' => $session_id])->get();
        foreach($userCart as $key => $product){
            //echo $product->product_id;
            $productDetails = Product::where('id', $product->product_id)->first();
            $userCart[$key]->image = $productDetails->image;
        }
        //echo "<pre>"; print_r($userCart); die;
        return view('frontend.cart')->with('userCart', $userCart);
    }*/

    public function cart(){

        if(Auth::check()){
            $user_email = Auth::user()->email;
            $userCart = DB::table('cart')->where(['user_email' => $user_email])->get();
        }else{
            $session_id = Session::get('session_id');
            $userCart = DB::table('cart')->where(['session_id' => $session_id])->get();

        }
        
        foreach($userCart as $key => $product){
            //echo $product->product_id;
            $productDetails = Product::where('id', $product->product_id)->first();
            $userCart[$key]->image = $productDetails->image;
        }
        //echo "<pre>"; print_r($userCart); die;
        return view('frontend.cart')->with('userCart', $userCart);
    }

    public function deleteCartProduct($id=null){
        //echo $id; die;
        Session::forget('CouponAmount');
        Session::forget('CouponCode');

        DB::table('cart')->where('id', $id)->delete();
        return redirect('/cart')->with('message_success', 'Product has been removed from cart');
    }

    public function updateCartQuantity($id=null, $quantity=null){
        
        Session::forget('CouponAmount');
        Session::forget('CouponCode');

        $getCartDetails = DB::table('cart')->where('id', $id)->first();
        $getAttributeStock = ProductsFeature::where('sku', $getCartDetails->product_code)->first();
        //echo $getAttributeStock->stock; echo "---";
        $updated_quantity = $getCartDetails->quantity+$quantity;

        if($getAttributeStock->stock >= $updated_quantity){

            DB::table('cart')->where('id', $id)->increment('quantity', $quantity);
        return redirect('/cart')->with('message_success', 'Product quantity updated successfully');
        }
        return redirect('/cart')->with('message_error', 'Product stock is not available');
    }

    //Coupon Code Application 
    public function applyCoupon(Request $request){

        Session::forget('CouponAmount');
        Session::forget('CouponCode');

        $data = $request->all();
        //echo "<pre>"; print_r($data); die;
        $couponCount = Coupon::where('coupon_code', $data['coupon_code'])->count();
        if($couponCount == 0){
            return redirect()->back()->with('message_error', 'This coupon does not exist');
        }else{

            //get coupon details
            $couponDetails = Coupon::where('coupon_code', $data['coupon_code'])->first();

            //if coupon is inactive
            if($couponDetails->status == 0){
                return redirect()->back()->with('message_error', 'This coupon is not activated!');
            }

            //If coupon is expired then
            $expiry_date = $couponDetails->expiry_date;
            $current_date = date('Y-m-d');
            if($expiry_date < $current_date){
                return redirect()->back()->with('message_error', 'This coupon has expired!');
            }

            //Valid coupon

            //get cart total amount 
            $session_id = Session::get('session_id');

            $userCart = DB::table('cart')->where(['session_id' => $session_id])->get();
            $total_amount = 0;
            foreach($userCart as $item){
                $total_amount = $total_amount + ($item->price * $item->quantity);
            }


            //check if amount type is fixed or not
            if($couponDetails->amount_type == "Fixed"){
                $couponAmount = $couponDetails->amount;
            }
            else{
                $couponAmount = $total_amount * ($couponDetails->amount/100);
            }

            //Add coupon code and amount in session
            Session::put('CouponAmount', $couponAmount);
            Session::put('CouponCode', $data['coupon_code']);

            return redirect()->back()->with('message_success', 'Coupon code successfully applied, You are getting discount');

            

        }
    }

    //checkout page
    public function checkout(Request $request){

        $user_id = Auth::user()->id;
        $userDetails = User::find($user_id);
        $user_email = Auth::user()->email;
        $countries = Country::get();

        //check if shipping address exists
        $shippingCount = DeliveryAddress::where('user_id', $user_id)->count();
        $shippingDetails = array();
        if($shippingCount > 0){
            $shippingDetails = DeliveryAddress::where('user_id', $user_id)->first();
        }

    
        //update cart table with user email
        $session_id = Session::get('session_id');
        DB::table('cart')->where(['session_id' => $session_id])->update(['user_email' => $user_email]);

        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            
            //return to checkout page if any of the field is empty
            if(empty($data['billing_name']) || empty($data['billing_address']) || empty($data['billing_city']) || empty($data['billing_state']) || empty($data['billing_country']) || empty($data['billing_pincode']) || empty($data['billing_mobile']) || empty($data['shipping_name']) || empty($data['shipping_address']) || empty($data['shipping_city']) || empty($data['shipping_state']) || empty($data['shipping_country']) || empty($data['shipping_pincode']) || empty($data['shipping_mobile']) ){
                return redirect()->back()->with('message_error', 'Please fill all fields to checkout!');
            }

            //update user details
            User::where('id', $user_id)->update(['name' => $data['billing_name'], 'address' => $data['billing_address'], 'city' => $data['billing_city'], 'state' => $data['billing_state'], 'pincode' => $data['billing_pincode'], 'country' => $data['billing_country'], 'mobile' => $data['billing_mobile']]);
            
            if($shippingCount > 0){

                //update shipping address
                DeliveryAddress::where('user_id', $user_id)->update(['name' => $data['shipping_name'], 'address' => $data['shipping_address'], 'city' => $data['shipping_city'], 'state' => $data['shipping_state'], 'pincode' => $data['shipping_pincode'], 'country' => $data['shipping_country'], 'mobile' => $data['shipping_mobile']]);

            }else{

                //Add new shipping address
                $shipping = new DeliveryAddress;
                $shipping->user_id = $user_id;
                $shipping->user_email = $user_email;
                $shipping->name= $data['shipping_name'];
                $shipping->address= $data['shipping_address'];
                $shipping->city= $data['shipping_city'];
                $shipping->state= $data['shipping_state'];
                $shipping->country= $data['shipping_country'];
                $shipping->pincode= $data['shipping_pincode'];
                $shipping->mobile= $data['shipping_mobile'];
                $shipping->save();
                
            }
            return redirect()->action('ProductsController@orderReview');

        }

        return view('frontend.checkout')->with('shippingDetails', $shippingDetails)->with('countries', $countries)->with('userDetails', $userDetails);
    }

    //Order review page
    public function orderReview(){

        $user_id = Auth::user()->id;
        $user_email = Auth::user()->email;
        $userDetails = User::where('id', $user_id)->first();
        $shippingDetails = DeliveryAddress::where('user_id', $user_id)->first();

        $shippingDetails = json_decode(json_encode($shippingDetails));
        
        $session_id = Session::get('session_id');
        //$userCart = DB::table('cart')->where(['session_id' => $session_id])->get();

        $userCart = DB::table('cart')->where(['user_email' => $user_email])->get();
        foreach($userCart as $key => $product){
            //echo $product->product_id;
            $productDetails = Product::where('id', $product->product_id)->first();
            $userCart[$key]->image = $productDetails->image;
        }
        //echo "<pre>"; print_r($userCart); die;
        return view('frontend.order_review')->with('userCart', $userCart)->with('userDetails', $userDetails)->with('shippingDetails', $shippingDetails);
    }

    //Place order
    public function placeOrder(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $user_id = Auth::user()->id;
            $user_email = Auth::user()->email;

            //Get Shipping Address Of user
            $shippingDetails = DeliveryAddress::where(['user_email' => $user_email])->first();
            //$shippingDetails = json_decode(json_encode($shippingDetails));
            //echo "<pre>"; print_r($shippingDetails); die;
            //echo "<pre>"; print_r($data); die;

            if(empty(Session::get('CouponCode'))){
                $coupon_code = '';
            }else{
                $coupon_code = Session::get('CouponCode');
            }

            if(empty(Session::get('CouponAmount'))){
                $coupon_amount = '';
            }else{
                $coupon_amount = Session::get('CouponAmount');
            }

            $order = new Order;
            $order->user_id = $user_id;
            $order->user_email = $user_email;
            $order->name = $shippingDetails->name;
            $order->address = $shippingDetails->address;
            $order->city = $shippingDetails->city;
            $order->state = $shippingDetails->state;
            $order->pincode = $shippingDetails->pincode;
            $order->country = $shippingDetails->country;
            $order->mobile = $shippingDetails->mobile;
            $order->coupon_code = $coupon_code;
            $order->coupon_amount = $coupon_amount;
            $order->order_status = "New";
            $order->payment_method = $data['payment_method'];
            $order->grand_total = $data['grand_total'];
            $order->save();

            $order_id = DB::getPdo()->lastInsertId();
            $cartProducts = DB::table('cart')->where(['user_email' => $user_email])->get();
            foreach($cartProducts as $pro){
                $cartPro = new OrdersProduct;
                $cartPro->order_id = $order_id;
                $cartPro->user_id = $user_id;
                $cartPro->product_id = $pro->product_id;
                $cartPro->product_code = $pro->product_code;
                $cartPro->product_name = $pro->product_name;
                $cartPro->product_size = $pro->size;
                $cartPro->product_color = $pro->product_color;
                $cartPro->product_price = $pro->price;
                $cartPro->product_qty = $pro->quantity;
                $cartPro->save();
            }

            Session::put('order_id', $order_id);
            Session::put('grand_total', $data['grand_total']);
            
            if($data['payment_method'] == 'COD'){

                $productDetails = Order::with('orders')->where('id', $order_id)->first();
                $productDetails= json_decode(json_encode($productDetails), true);

                $userDetails = User::where('id', $user_id)->first();
                $userDetails= json_decode(json_encode($userDetails), true);

                //Code for order email start
                $email = $user_email;
                $messageData = [
                    'email' => $email,
                    'name' => $shippingDetails->name,
                    'order_id' => $order_id,
                    'productDetails' => $productDetails,
                    'userDetails' => $userDetails
                ];

                Mail::send('emails.order', $messageData, function($message) use($email){
                    $message->to($email)->subject('Order Placed - E-com Website');
                });

                //redirect to COD thanks page
                return redirect('/thanks');
            }else{
                
                return redirect('/paypal');
            }
            
        }
    }

    public function thanks(Request $request){

        $user_email = Auth::user()->email;
        DB::table('cart')->where('user_email', $user_email)->delete();
        return view('frontend.thanks');
    }

    public function paypal(Request $request){
        $user_email = Auth::user()->email;
        DB::table('cart')->where('user_email', $user_email)->delete();
        return view('frontend.paypal');
    }

    public function thanksPaypal(){
        return view('frontend.thanks_paypal');
    }

    public function cancelPaypal(){
        return view('frontend.cancel_paypal');
    }

    public function userOrders(){

        $user_id = Auth::user()->id;
        $orders = Order::with('orders')->where('user_id', $user_id)->orderBy('id', 'desc')->get();
        /*$orders = json_decode(json_encode($orders));
        echo "<pre>"; print_r($orders); die;*/

        return view('frontend.users_orders')->with('orders', $orders);
    }

    public function userOrderDetails($order_id){
        $user_id = Auth::user()->id;
        $orderDetails = Order::with('orders')->where('id', $order_id)->first();
        $orderDetails = json_decode(json_encode($orderDetails));
        //echo "<pre>"; print_r($orderDetails); die;

        return view('frontend.user_order_details')->with('orderDetails', $orderDetails);
    }

    public function viewOrders(){
        $orders = Order::with('orders')->orderBy('id', 'desc')->get();
        $orders = json_decode(json_encode($orders));
        return view('admin.orders.view_orders')->with('orders', $orders);
    }

    public function viewOrderDetail($order_id){
        $orderDetails = Order::with('orders')->where('id', $order_id)->first();
        $orderDetails = json_decode(json_encode($orderDetails));
        $user_id = $orderDetails->user_id;
        $userDetails = User::where('id', $user_id)->first();
        return view('admin.orders.order_details')->with('orderDetails', $orderDetails)->with('userDetails', $userDetails);
    }

    public function updateOrderStatus(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
           // echo "<pre>"; print_r($data); die;
           Order::where('id', $data['order_id'])->update(['order_status' => $data['order_status']]);
           return redirect()->back()->with('message_success', 'Order status has been updated');
        }
    }

    public function searchProducts(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;

            $categories = Category::with('categories')->where(['parent_id' => 0])->get();

            $search_product = $data['product'];

            //$productAll = Product::where('name', 'like', '%'.$search_product. '%')->orwhere('code', 'like', '%'.$search_product. '%')->where('status', 1)->get();

            $productAll = Product::where(function($query) use($search_product){
                $query->where('name', 'like', '%'.$search_product. '%')->orwhere('code', 'like', '%'.$search_product. '%')->orwhere('description', 'like', '%'.$search_product. '%')->orwhere('color', 'like', '%'.$search_product. '%');
            })->where('status', 1)->get();

            return view('frontend.listing')->with('categories', $categories)->with('search_product', $search_product)->with('productAll', $productAll);
        }
    }

    //Ascending Product 
    public function sortProducts(){
        
            $products = Product::orderBy('price', 'asc')->get();  
            //This is advanced approach with the relations
            $categories = Category::with('categories')->where(['parent_id'=> 0])->get();
            return view('frontend.shop')->with('products', $products)->with('categories', $categories);
    }

    //Descending Product
    public function sortDescProducts(){
        
        $products = Product::orderBy('price', 'desc')->get();  
        //This is advanced approach with the relations
        $categories = Category::with('categories')->where(['parent_id'=> 0])->get();
        return view('frontend.shop')->with('products', $products)->with('categories', $categories);
    }

    public function viewOrderInvoice($order_id){
        $orderDetails = Order::with('orders')->where('id', $order_id)->first();
        $orderDetails = json_decode(json_encode($orderDetails));
        $user_id = $orderDetails->user_id;
        $userDetails = User::where('id', $user_id)->first();
        return view('admin.orders.order_invoice')->with('orderDetails', $orderDetails)->with('userDetails', $userDetails);
    }

    public function checkPincode(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            $pincodeCount = DB::table('pincodes')->where('pincode', $data['pincode'])->count();
            if($pincodeCount > 0){
                echo "This pincode is available for delivery";
            }else{
                echo "This pincode is not available for delivery";
            }
        }
    }

    /*public function favourite(Request $request){

            if($request->isMethod('post')){
                $data = $request->all();
                $session_id = Session::get('session_id');

                if(empty($session_id)){
                    $session_id = str_random(40);
                    Session::put('session_id', $session_id);
                }

                DB::table('favourites')->insert(['id' => $data['product_id'], 'name' => $data['product_name']]);
        }




    }*/


}
