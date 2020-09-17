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

use App\Mail\SendMailOnOrder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

//Auth::routes();
Auth::routes(['verify' => true]);
// for social login and registration
//Route::get('/login/{social}', 'Auth\LoginController@socialLogin')
//    ->where('social', 'facebook|google|github');
Route::get('login/{social}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{social}/callback', 'Auth\LoginController@handleProviderCallback');
//Route::get('/login/{social}/callback', 'Auth\LoginController@handleProviderCallback')
//    ->where('social', 'facebook|google|github');
Route::get('/', 'SiteController@home')->name('home');
Route::get('/om', 'SiteController@about')->name('site.about');


Route::get('/products/{category}', 'SiteController@categoryProducts')->name('site.category.products');



Route::get('/discount/products', 'SiteController@discountProducts')->name('site.discount.products');
Route::get('/modal/product/{product}/details', 'SiteController@productDetailsModal');
Route::get('/blogs', 'SiteController@blogs')->name('site.blogs');
// Route::get('/news', 'SiteController@news')->name('site.news');
Route::get('/blog/{blog}', 'SiteController@blogDetails')->name('site.blog.details');
Route::get('/news/{news}', 'SiteController@newsDetails')->name('site.news.details');
//routes for search
Route::get('/search/blog', 'SiteController@searchBlog')->name('site.search.blog');
Route::get('/register', 'SiteController@register')->name('register');
Route::post('/register/customer', 'RegisterController@registerNewCustomer')->name('register.customer');
Route::post('/login/customer', 'CustomerLoginController@login')->name('login.customer');
Route::get('/checkout/{product}', 'SiteController@productCheckOutPage')->name('site.product.checkout.page');
// Route::post('/contact/mail/send', 'SiteController@mailOnContactFomSubmission')->name('site.submit.contact.form');
Route::post('/contact/mail/send', 'MailController@mailOnContactFomSubmission')->name('site.submit.contact.form');
// send users to home
Route::get('/home', 'SiteController@userHome');
Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    return 'cache cleared';
});
//routes for customers
Route::group(['middleware' => ['ajax-session-expired', 'role:customer', 'verified']], function () {
    Route::get('/customer/dashboard', 'CustomerController@home')->name('customer.home');
    Route::get('/customer/profile', 'CustomerController@profile')->name('customer.profile');
    Route::get('/customer/complete/profile', 'CustomerController@completeProfile')->name('customer.complete.profile');
    Route::post('/customer/{user}/profile/update', 'CustomerController@updateProfile')->name('customer.profile.update');
    Route::get('/customer/orders', 'CustomerController@orders')->name('customer.orders');
    Route::get('/customer/complete/orders', 'CustomerController@completeOrders')->name('customer.complete.orders');
    Route::get('/customer/canceled/orders', 'CustomerController@canceledOrders')->name('customer.canceled.orders');
    Route::get('/customer/order/{order}/details', 'CustomerController@orderDetails')->name('customer.order.details');
    //customer accept order offer
    Route::get('/customer/order/offer/{order}/accept', 'OrderController@customerAcceptOrder')->name('customer.order.offer.accept');
    Route::get('/customer/order/offer/{order}/reject', 'OrderController@customerRejectOrder')->name('customer.order.offer.reject');
    //  Route::get('/customer/order/{order}/cancel', 'CustomerController@cancelOrder')->name('customer.order.cancel');
    Route::post('/customer/{order}/upload/file', 'OrderController@uploadOrderFile')->name('customer.upload.order.file');
    Route::post('/checkout/{product}/order/', 'OrderController@store')->name('order.store');
    //routes for customer chat
    Route::get('/customer/chat', 'CustomerController@customerChat')->name('customer.chat');
    Route::post('/customer/{user}/send/message', 'ChatController@sendMessageToAdmin')->name('customer.send.message.to.admin');
    //one-time order payment controller
    Route::get('/create-payment/{order}', 'PaymentController@createPayment')->name('create.payment');
    Route::get('/checkout', 'PaymentController@checkout');
    //subscription order payment controller
    Route::post('/subscription/{order}/bank/info', 'PaymentController@subscribeOnOrderWithBankInfo')->name('subscribe.with.bank.info');
});
// routes for admin
Route::group(['middleware' => ['ajax-session-expired', 'role:admin']], function () {
    Route::get('/admin', 'AdminController@dashboard')->name('admin.home');
    Route::get('/admin/customers', 'AdminController@allCustomers')->name('admin.customers.index');
    Route::resource('/admin/category', 'CategoryController');
    Route::resource('/admin/sub-category', 'SubCategoryController');
    Route::resource('/admin/product', 'ProductController');
    //routes for news
    Route::resource('/admin/news', 'NewsController');
    Route::get('/admin/news/{news}/status/toggle', 'NewsController@toggleBlogActiveStatus')->name('admin.news.status.toggle');
    Route::get('/admin/archive/news', 'NewsController@archiveNews')->name('admin.archive.news');
    // routes for blog
    Route::resource('/admin/blog', 'BlogController');
    Route::get('/admin/blog/{blog}/status/toggle', 'BlogController@toggleBlogActiveStatus')->name('admin.blog.status.toggle');
    Route::get('/admin/archive/blogs', 'BlogController@archiveBlogs')->name('admin.archive.blogs');
    Route::get('/admin/archive/products', 'ProductController@archiveProducts')->name('admin.archive.products');
    Route::get('/admin/product/{product}/status/toggle', 'ProductController@toggleProductActiveStatus')->name('admin.product.status.toggle');
    Route::get('/admin/Orders', 'AdminController@allOrders')->name('admin.all.orders');
    Route::get('/admin/active/Orders', 'AdminController@allActiveOrders')->name('admin.active.orders');
    Route::get('/admin/archive/Orders', 'AdminController@allArchiveOrders')->name('admin.archived.orders');
    Route::get('/admin/canceled/Orders', 'AdminController@allCanceledOrders')->name('admin.canceled.orders');
    Route::get('/admin/order/{order}/details', 'AdminController@orderDetails')->name('admin.order.details');
    //routes for change steps of an order
    Route::get('/admin/order/{order}/step/next', 'AdminController@orderNextStepChange')->name('admin.order.step.change.next');
    Route::get('/admin/order/{order}/step/previous', 'AdminController@orderBackToStepChange')->name('admin.order.step.change.previous');
    Route::get('/admin/order/{order}/fileUploadToggle', 'AdminController@orderFileUploadToggle')->name('admin.order.file.upload.toggle');
    Route::get('/admin/order/{order}/cancel', 'AdminController@orderCencel')->name('admin.order.cancel');
    Route::post('/admin/{order}/upload/file', 'OrderController@uploadOrderFile')->name('admin.upload.order.file');
    // routes for chatting
    Route::get('/admin/{user}/chat', 'AdminController@adminWithCustomerChat')->name('admin.chat');
    Route::post('/admin/{user}/send/message', 'ChatController@sendMessageToCustomer')->name('admin.send.message.to.customer');
    //update order price
    Route::post('/admin/order/price/{order}/update', 'OrderController@updateOrderPirce')->name('admin.order.price.update');
});
Route::get('/test-order-mail', function () {
    $sendToMails = ['rawscripterx@gmail.com'];
    $order = \App\Order::first();
    Mail::to($sendToMails)->send(new SendMailOnOrder($order));
});

