<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\Mail\ContactMailController;
use App\Mail\SendMailOnOrder;
use App\News;
use App\Product;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;
//  App\Http\Controllers\url_decode();

class SiteController extends Controller
{
    public function userHome()
    {
        if (Auth::user()->isAdmin()) {
            return redirect()->route('admin.home');
        } else {
            return redirect()->route('customer.home');
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function home()
    {
        $menuCategories = Category::orderby('created_at', 'desc')->get();
        return view('site.index', compact('menuCategories'));
    }

    public function about()
    {

        return view('site.about');
    }

    public function categoryProducts($request)
    {
        // fetching requested category info from database
        $productCategory = Category::whereName($request)->get();
        // if category is empty then redirect to home page
        if (empty($productCategory))
            return redirect()->route('home');
        return view('site.products', compact('productCategory'));
    }

    public function blogs()
    {
        $subCategories = SubCategory::orderBy('priority', 'asc')->get();
        return view('site.blogs', compact('subCategories'));
    }


    public function productCheckOutPage($productName)
    {
        // $results = str_replace('%20','k',$productName);
        $product = Product::whereName($productName)->first();
        // $product = str_replace('%20','k',$product1);
        // $result1 = preg_replace('%20', '-', $product);
        // $product = urldecode($product1);
        // $subCategories = Product::all();
        // $product = str_slug('%20','k',$product1);
        return view('site.checkout', compact('product'));
    }

    public function productDetailsModal(Product $product)
    {
        return view('site.product-details-modal', compact('product'));
    }

    public function discountProducts()
    {
        $subCategories = SubCategory::all();
        return view('site.discount-products', compact('subCategories'));
    }

    public function blogDetails($blog)
    {
        $blog = Blog::whereSlug($blog)->first();
        $subCategories = SubCategory::all();
        return view('site.blog-details', compact('subCategories', 'blog'));
    }


    public function newsDetails($news_slug)
    {
        $news = News::whereSlug($news_slug)->first();
        $subCategories = SubCategory::all();
        return view('site.news-details', compact('subCategories', 'news'));
    }

    // public function mailOnContactFomSubmission(Request $request)
    // {
    //     Mail::to('hej@danpanel.dk')->send(new ContactMailController($request));
    //     return Redirect::to(URL::previous() . "#referencer")->withSuccess('Mail Sent.');
        
    // }

    public function searchBlog(Request $request)
    {
        $blogs = Blog::where('title', 'LIKE', '%' . $request->input('query') . '%')->get();
        $htmlView = view('layouts.site.inc.search-blogs', compact('blogs'))->render();
        return response()->json(array('success' => true, 'html' => $htmlView));

    }
}
