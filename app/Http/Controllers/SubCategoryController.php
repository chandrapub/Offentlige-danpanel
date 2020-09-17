<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('created_at', 'desc')->get();
        return view('admin.Category.sub-category', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestedProductData = $request->all();

        if ($request->hasFile('icon')) {
            $image = $request->file('icon');
            $image = $this->uploadImage($image);
            $requestedProductData['icon'] = $image;
        }

        SubCategory::create($requestedProductData);

        return redirect()->route('sub-category.index')->withSuccess('Sub Category Created.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\SubCategory $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\SubCategory $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory)
    {
        $categories = Category::orderBy('created_at', 'desc')->get();
        return view('admin.Category.sub-category', compact('categories', 'subCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\SubCategory $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        $requestedProductData = $request->all();


        if ($request->hasFile('icon')) {
            $image = $request->file('icon');
            $image = $this->uploadImage($image);
            $requestedProductData['icon'] = $image;
        } else {
            $requestedProductData['icon'] = $subCategory->icon;
        }
        $subCategory->update($requestedProductData);

        return redirect()->route('sub-category.index')->withSuccess('Sub Category Update.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\SubCategory $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();
        return redirect()->route('sub-category.index')->withSuccess('Sub Category Deleted.');
    }


    public function uploadImage($image)
    {
        $name = Uuid::generate()->string . '.' . $image->getClientOriginalExtension();;
        // uploading images to folder
        $image->move('product/icons', $name);
        return $name;
    }

}
