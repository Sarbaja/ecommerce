<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/


//Home
Route::get('/', 'IndexController@index');

//favourite 
//Route::match(['get', 'post'], '/favourite', 'ProductsController@favourite');

//All Products Page - customers will shop here
Route::get('/products', 'ShopController@shop');

//Category Page with products
Route::get('/products/{url}', 'ShopController@productsListing');

//Product details page
Route::get('/product/{id}', 'ShopController@product');

//get product attribute price through ajax
Route::get('/get-product-price', 'ShopController@getProductPrice');

//Add to Cart 
Route::match(['get', 'post'], '/add-cart', 'ProductsController@addtocart');

//Cart page
Route::match(['get', 'post'], '/cart', 'ProductsController@cart');

//Deleting cart products
Route::get('/cart/delete-product/{id}' , 'ProductsController@deleteCartProduct');

//updating product quantity preventing duplicate items in cart
Route::get('/cart/update-quantity/{id}/{quantity}', 'ProductsController@updateCartQuantity');

//Apply Coupon Code
Route::post('/cart/apply-coupon', 'ProductsController@applyCoupon');

//Default login process
Auth::routes();

//User Login Routes - Login and Register
Route::get('/login-register', 'UsersController@userloginRegister');

//user register form submission
Route::post('/user-register', 'UsersController@register');

//Confirm account 
Route::get('confirm/{code}', 'UsersController@confirmAccount');

//user login form submisison
Route::post('/user-login', 'UsersController@login');

//forgot password
Route::match(['GET', 'POST'], '/forgot-password', 'UsersController@forgotPassword');

//Check if user already exist or not
Route::match(['GET', 'POST'], '/check-email', 'UsersController@checkEmail');

//user logout route
Route::get('/user-logout' ,'UsersController@logout');

//Search Product
Route::post('/search-products', 'ProductsController@searchProducts');

//Sort Product by ascending
Route::get('/sort-products', 'ProductsController@sortProducts');

//Sort Product by descending
Route::get('/sortdesc-products', 'ProductsController@sortDescProducts');

//check pincode
Route::post('/check-pincode', 'ProductsController@checkPincode');

//User route group middleware only logged in user can access this after login 
Route::group(['middleware' => ['frontlogin']], function(){

    //Myaccount page
    Route::match(['GET', 'POST'], '/my-account', 'UsersController@myAccount');

    //Update password page
    Route::match(['GET', 'POST'], '/update-password', 'UsersController@updatePassword');

    //Check user current password through ajax
    Route::post('/check-user-pwd', 'UsersController@chkUserPassword');
    
    //Checkout page
    Route::match(['GET', 'POST'], '/checkout', 'ProductsController@checkout');
   
    //Order review page 
    Route::match(['GET', 'POST'], '/order-review', 'ProductsController@orderReview');

    //Order placing page
    Route::match(['GET', 'POST'], '/place-order', 'ProductsController@placeOrder');

    //Thanks Page
    Route::get('/thanks', 'ProductsController@thanks');

    //Paypal Page
    Route::get('/paypal', 'ProductsController@paypal');

    //User Orders
    Route::get('/orders', 'ProductsController@userOrders');

    //user ordered products page
    Route::get('/orders/{id}', 'ProductsController@userOrderDetails');

    //View order invoice
    Route::get('/invoice/{id}', 'ProductsController@viewOrderInvoice');

    //paypal thanks page
    Route::get('/paypal/thanks', 'ProductsController@thanksPaypal');
    
    //paypal cancel page
    Route::get('/paypal/cancel', 'ProductsController@cancelPaypal');
});




//Admin Login route
Route::match(['get', 'post'], '/admin', 'AdminController@login');

//Admin logout route
Route::get('/logout', 'AdminController@logout');

//Admin routes : middleware
Route::group(['middleware' => ['adminlogin']], function(){
    Route::get('/admin/dashboard', 'AdminController@dashboard');
    Route::get('/admin/settings', 'AdminController@settings');
    Route::get('/admin/check-pwd', 'AdminController@chkPassword');
    Route::match(['get', 'post'], '/admin/update-password', 'AdminController@updatePassword');

    //Categories in admin
    Route::get('/admin/category', 'CategoryController@viewCategory');
    Route::match(['get', 'post'], '/admin/create-category', 'CategoryController@createCategory');
    Route::match(['get', 'post'], '/admin/edit-category/{id}', 'CategoryController@editCategory');
    Route::match(['get', 'post'], '/admin/delete-category/{id}', 'CategoryController@deleteCategory');

    //Products in admin
    Route::get('/admin/product', 'ProductsController@viewProduct');
    Route::match(['get', 'post'], '/admin/create-product', 'ProductsController@createProduct');
    Route::match(['get', 'post'], '/admin/edit-product/{id}', 'ProductsController@editProduct');
    Route::get('/admin/delete-productimg/{id}', 'ProductsController@deleteProductImg');
    Route::match(['get', 'post'], '/admin/delete-product/{id}', 'ProductsController@deleteProduct');


    //Product Features - stocks and attributes and images alternate 
    Route::match(['get', 'post'], '/admin/add-features/{id}', 'ProductsController@addFeatures');
    Route::match(['get', 'post'], '/admin/edit-attributes/{id}', 'ProductsController@editAttributes');
    Route::match(['get', 'post'], '/admin/add-images/{id}', 'ProductsController@addImages');
    Route::get('/admin/delete-attribute/{id}', 'ProductsController@deleteAttribute');
    Route::get('/admin/delete-alt-image/{id}', 'ProductsController@deleteAltImage');

    //Coupon Routes
    Route::match(['get', 'post'], '/admin/add-coupon', 'CouponsController@addCoupon');
    Route::get('/admin/view-coupon', 'CouponsController@viewCoupons');
    Route::match(['get', 'post'], '/admin/edit-coupon/{id}', 'CouponsController@editCoupon');
    Route::match(['get', 'post'], '/admin/delete-coupon/{id}', 'CouponsController@deleteCoupons');

    //Admin orders Routes 
    Route::get('/admin/view-orders', 'ProductsController@viewOrders');

    //Admin Order Detail Route
    Route::get('/admin/view-order/{id}', 'ProductsController@viewOrderDetail');

    //View order invoice
    Route::get('/admin/view-order-invoice/{id}', 'ProductsController@viewOrderInvoice');

    //update product status
    Route::post('/admin/update-order-status', 'ProductsController@updateOrderStatus');


    //Admin Users Route
    Route::get('/admin/view-users', 'UsersController@viewUsers');

    //Add CMS Page - Content Management System 
    Route::match(['get', 'post'], '/admin/add-cms-page', 'CmsController@addCmsPage');

    //view cms page route
    Route::get('/admin/view-cms-page', 'CmsController@viewCmsPages');

    //edit cms route
    Route::match(['get', 'post'], '/admin/edit-cms-page/{id}', 'CmsController@editCmsPage');

    //Delete CMS Page
    Route::get('/admin/delete-cms-page/{id}', 'CmsController@deleteCmsPage');
});

//display CMS Page
Route::match(['get', 'post'], '/page/{url}', 'CmsController@cmsPage');

//Contact Page
Route::match(['get', 'post'], '/contact', 'CmsController@contact');

Route::get('/home', 'HomeController@index')->name('home');
