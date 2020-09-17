<?php

namespace App\Http\Controllers;

use App\Category;
use App\DefaultCheckoutFromLabel;
use App\Product;
use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::whereStatus(1)->orderBy('created_at', 'asc')->get();
        return view('admin.product.index', compact('products'));
    }

    public function archiveProducts()
    {
        $products = Product::whereStatus(0)->orderBy('created_at', 'asc')->get();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('created_at', 'desc')->get();
        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'image' => 'required',
        ]);


        $requestedProductData = $request->product;
        //checking if that request has any image or not
        // if has then upload in to public/product/images folder
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image = $this->uploadImage($image);
        }

        $requestedProductData['image'] = $image ?? '';

        // passing as object to create a new product
        //return $requestedProductData;
        $product = Product::create($requestedProductData);

        DefaultCheckoutFromLabel::create([
            'product_id' => $product->id
        ]);

        // redirect back with success message
        return redirect()->back()->withSuccess("Product Created Successfully.");
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::orderBy('created_at', 'desc')->get();
        return view('admin.product.edit', compact('categories', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $requestedProductData = $request->product;
        //checking if that request has any image or not
        // if has then upload in to public/product/images folder
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image = $this->uploadImage($image);
            $requestedProductData['image'] = $image;
        } else {
            $requestedProductData['image'] = $product->image;
        }

        $product->update($requestedProductData);


        $checkoutFromLabels = $request->checkoutFrom;


        $product->checkoutLabel->update($checkoutFromLabels);
        //return DefaultCheckoutFromLabel::whereProductId($product->id)->first();

        return redirect()->back()->withSuccess("Product Updated Successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back()->withSuccess("Product Deleted Successfully.");
    }

    public function uploadImage($image)
    {
        $name = Uuid::generate()->string . '.' . $image->getClientOriginalExtension();;
        // uploading images to folder
        $image->move('product/images', $name);
        return $name;
    }

    public function toggleProductActiveStatus(Product $product)
    {
        if ($product->status == 1)
            $product->status = 0;
        else
            $product->status = 1;

        $product->save();


        return redirect()->back()->withSuccess('Product Status has been changed.');
    }

}
